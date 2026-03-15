<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use App\Models\PostCategory;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationGroup = 'Blog';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, Forms\Set $set, $record) {

                        $slug = Str::slug($state);
                        $originalSlug = $slug;
                        $count = 1;

                        while (
                            Post::where('slug', $slug)
                            ->when($record, fn($query) => $query->where('id', '!=', $record->id))
                            ->exists()
                        ) {
                            $slug = $originalSlug . '-' . $count++;
                        }

                        $set('slug', $slug);
                    }),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(table: 'posts', column: 'slug', ignoreRecord: true),

                Select::make('post_categories_id')
                    ->label('Category')
                    ->options(PostCategory::all()->pluck('title', 'id'))
                    ->searchable()
                    ->columnSpanFull()
                    ->required(),

                Toggle::make('use_image_url')
                    ->label('Gunakan URL Gambar')
                    ->reactive()
                    ->dehydrated(false),

                FileUpload::make('featured_image')
                    ->image()
                    ->disk('public')
                    ->directory('featured-images-posts')
                    ->visibility('public')
                    ->imageEditor()
                    ->maxSize(2048)
                    ->columnSpanFull()
                    ->hidden(fn($get) => $get('use_image_url')),

                TextInput::make('featured_image_url')
                    ->label('URL Gambar')
                    ->url()
                    ->columnSpanFull()
                    ->hidden(fn($get) => ! $get('use_image_url'))
                    ->dehydrated(false),

                RichEditor::make('content')
                    ->columnSpanFull()
                    ->disableAllToolbarButtons(false),

                Select::make('tags')
                    ->relationship('tags', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->columnSpanFull()
                    ->createOptionForm([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function ($state, Forms\Set $set) {
                                $set('slug', Str::slug($state));
                            }),
                        Hidden::make('slug')
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->limit(30)
                    ->searchable()
                    ->label('Post Title')
                    ->description(fn(Post $record) => Str::limit(strip_tags($record->content), 50)),
                ImageColumn::make('featured_image')
                    ->label('Featured Image')
                    ->disk('public'),
                TextColumn::make('created_at')
                    ->since()
                    ->dateTimeTooltip()
                    ->label('Created')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
                RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostCategoryResource\Pages;
use App\Models\PostCategory;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostCategoryResource extends Resource
{
    protected static ?string $model = PostCategory::class;

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
                            PostCategory::where('slug', $slug)
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
                    ->unique(table: 'post_categories', column: 'slug', ignoreRecord: true),

                FileUpload::make('featured_image')
                    ->image()
                    ->disk('public')
                    ->directory('featured-images-post-categories')
                    ->visibility('public')
                    ->imageEditor()
                    ->columnSpanFull()
                    ->maxSize(2048),

                RichEditor::make('description')
                    ->columnSpanFull()
                    ->disableAllToolbarButtons(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->limit(30)
                    ->searchable()
                    ->label('Category Title')
                    ->description(fn(PostCategory $record) => Str::limit(strip_tags($record->description), 50)),
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
            'index' => Pages\ListPostCategories::route('/'),
            'create' => Pages\CreatePostCategory::route('/create'),
            'edit' => Pages\EditPostCategory::route('/{record}/edit'),
        ];
    }
}

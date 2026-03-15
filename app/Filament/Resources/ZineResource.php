<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ZineResource\Pages;
use App\Filament\Resources\ZineResource\RelationManagers;
use App\Models\Zine;
use App\Models\ZineCategory;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ZineResource extends Resource
{
    protected static ?string $model = Zine::class;

    protected static ?string $navigationGroup = 'Zines';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($state, Forms\Set $set, $record) {

                        $slug = Str::slug($state);
                        $originalSlug = $slug;
                        $count = 1;

                        while (
                            Zine::where('slug', $slug)
                            ->when($record, fn($query) => $query->where('id', '!=', $record->id))
                            ->exists()
                        ) {
                            $slug = $originalSlug . '-' . $count++;
                        }

                        $set('slug', $slug);
                    }),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(table: 'zines', column: 'slug', ignoreRecord: true),
                RichEditor::make('description')
                    ->columnSpanFull()
                    ->disableAllToolbarButtons(false),
                Select::make('zine_category_id')
                    ->required()
                    ->label('Kategori Zine')
                    ->options(ZineCategory::all()->pluck('zine_category', 'id'))
                    ->searchable(),
                Forms\Components\TextInput::make('author')
                    ->required(),
                Forms\Components\TextInput::make('link_pdf')
                    ->required(),
                Forms\Components\FileUpload::make('featured_image')
                    ->image(),
                Select::make('tags')
                    ->relationship('tags', 'zine_tag')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->columnSpanFull()
                    ->createOptionForm([
                        TextInput::make('zine_tag')
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
                Tables\Columns\TextColumn::make('zine_category_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('author')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link_pdf')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\ImageColumn::make('featured_image'),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListZines::route('/'),
            'create' => Pages\CreateZine::route('/create'),
            'view' => Pages\ViewZine::route('/{record}'),
            'edit' => Pages\EditZine::route('/{record}/edit'),
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

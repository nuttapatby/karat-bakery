<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\RelationManagers\CategoriesRelationManager;
use App\Filament\Resources\InventoryResource\RelationManagers\InventoriesRelationManager;
use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Livewire\TemporaryUploadedFile;
use Mockery\Matcher\Closure;
use function Livewire\str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-lightning-bolt';

    protected static ?string $navigationGroup = 'Shop';


    public static function form(Form $form): Form
    {
        return $form

            ->schema([
                Forms\Components\Grid::make(3)
                    ->schema([
                        Forms\Components\Grid::make()->columnSpan(2)
                            ->schema([
                                Forms\Components\Card::make()
                                    ->schema([
                                        Forms\Components\Grid::make()->columnSpan(1)
                                            ->schema([
                                                Forms\Components\TextInput::make('name')
                                                    ->reactive()
                                                    ->afterStateUpdated(function (\Closure $set, $state){
                                                        $set('slug',Str::slug($state,'-','th'));
                                                    })
                                                    ->columns(1)
                                                    ->required()
                                                    ->autofocus()
                                                    ->maxLength(255),
                                                Forms\Components\TextInput::make('slug')
                                                    ->disabled()
                                                    ->required()
                                                    ->columns(1)
                                                    ->maxLength(255),
                                            ]),
                                        Forms\Components\TextInput::make('detail')
                                            ->required()
                                            ->maxLength(255),
                                        Forms\Components\MarkdownEditor::make('description')
                                            ->columnSpan('full')
                                            ->required()
                                            ->maxLength(65535),
                                    ]),

                                Forms\Components\Card::make()
                                    ->schema([
                                        FileUpload::make('image')
                                            ->nullable()
                                            ->getUploadedFileNameForStorageUsing( function (TemporaryUploadedFile $file): string {
                                                 $fileName = $file->hashName();
                                                 $name = explode('.', $fileName);
                                                 return (string) str($name[0].'.png');
                                            })
                                            ->label('Main_image')
                                            ->imagePreviewHeight('400')
                                            ->panelAspectRatio('3:1')
                                            ->panelLayout('integrated')
                                            ->image()
                                            ->disk('public')
                                            ->directory('images'),

                                    ]),

                            ]),

                        Forms\Components\Grid::make()->columnSpan(1)
                            ->schema([
                                Forms\Components\Fieldset::make('')
                                    ->schema([
                                        Forms\Components\TextInput::make('price')
                                            ->required(),
                                        Select::make('category_id')
                                            ->relationship('categories', 'name'),
                                        Fieldset::make('inventory_id')
                                            ->label('Quantity')
                                            ->relationship('inventories')
                                            ->schema([
                                                TextInput::make('quantity')->required()->label('Unit'),
                                            ]),
                                    ]),

                                Forms\Components\Card::make()
                                    ->schema([
                                        FileUpload::make('alt_image')
                                            ->nullable()
                                            ->getUploadedFileNameForStorageUsing( function (TemporaryUploadedFile $file): string {
                                                $fileName = $file->hashName();
                                                $name = explode('.', $fileName);
                                                return (string) str($name[0].'.png');
                                            })
                                            ->label('Alternate_image')
                                            ->image()
                                            ->multiple()
                                            ->disk('public')
                                            ->directory('images'),

                                    ]),
                            ])
                    ]),


            ]);
    }

    /**
     * @throws \Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->size(35)
                    ->toggleable(),
//                Tables\Columns\ImageColumn::make('alternative_image')
//                    ->size(35)
//                    ->toggleable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('detail')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('price')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('categories.name')
                    ->sortable()
                    ->label('Category')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('inventories.quantity')
                    ->sortable()
                    ->label('Qty')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->toggleable()
                    ->dateTime('d-M-Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->toggleable()
                    ->dateTime('d-M-Y')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    
    public static function getRelations(): array
    {
        return [
            CategoriesRelationManager::class,
            InventoriesRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }




}

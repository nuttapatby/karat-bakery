<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderitemsRelationManager extends RelationManager
{
    protected static string $relationship = 'orderitems';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('products.image')->size(70)->label('รูปสินค้า'),
                Tables\Columns\TextColumn::make('products.name')->label('ชื่อสินค้า'),
                Tables\Columns\TextColumn::make('quantity')->label('จำนวน'),
                Tables\Columns\TextColumn::make('price')->label('ราคา/ชิ้น'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
//                Tables\Actions\CreateAction::make(),
            ])
//            ->actions([
//                Tables\Actions\EditAction::make(),
////                Tables\Actions\DeleteAction::make(),
//            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }    
}

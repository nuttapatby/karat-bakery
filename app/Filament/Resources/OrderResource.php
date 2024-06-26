<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\OrderDetail;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Support\Facades\DB;

class OrderResource extends Resource
{
    protected static ?string $model = OrderDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    protected static ?string $navigationLabel = 'Orders';

    protected static ?string $navigationGroup = 'Order';

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
                                                Forms\Components\TextInput::make('order_no')
                                                    ->label('หมายเลขคำสั่งซื้อ')
                                                    ->disabled()
                                                    ->required()
                                                    ->columns(1)
                                                    ->maxLength(255),
                                                Forms\Components\DatePicker::make('created_at')->displayFormat('H:m   d/m/Y   ')
                                                    ->disabled()
                                                    ->label('เวลาสั่งซื้อ'),
                                                Forms\Components\TextInput::make('firstname')
                                                    ->label('ชื่อ')
                                                    ->disabled()
                                                    ->columns(1)
                                                    ->maxLength(255),
                                                Forms\Components\TextInput::make('lastname')
                                                    ->label('นามสกุล')
                                                    ->disabled()
                                                    ->columns(1)
                                                    ->maxLength(255),
                                            ]),
                                        Forms\Components\TextInput::make('address')
                                            ->label('ที่อยู่')
                                            ->disabled()
                                            ->columnSpan('full')
                                            ->maxLength(255),
                                        Forms\Components\Grid::make()->columnSpan(1)
                                            ->schema([
                                                Forms\Components\TextInput::make('province')
                                                    ->label('จังหวัด')
                                                    ->disabled()
                                                    ->columns(1)
                                                    ->maxLength(255),
                                                Forms\Components\TextInput::make('postal_code')
                                                    ->label('รหัสไปรษณีย์')
                                                    ->disabled()
                                                    ->columns(1)
                                                    ->maxLength(255),
                                                Forms\Components\TextInput::make('phone')
                                                    ->label('เบอร์โทร')
                                                    ->disabled()
                                                    ->columnSpan('full')
                                                    ->columns(1)
                                                    ->maxLength(255),
                                            ]),
                                    ]),
                            ]),

                        Forms\Components\Grid::make()->columnSpan(1)
                            ->schema([
                                Forms\Components\Fieldset::make('Shipping')
                                    ->schema([
                                        Select::make('message')
                                            ->label('ชื่อขนส่ง')
                                            ->required()
                                            ->options([
                                                'flash' => 'Flash',
                                                'kerry' => 'Kerry',
                                                'ems' => 'EMS',
                                            ]),
                                        Forms\Components\TextInput::make('tracking_no')
                                            ->label('หมายเลขพัสดุ')
                                            ->required(),
                                        Forms\Components\Toggle::make('status'),
                                            ]),
                                Forms\Components\Fieldset::make('ราคารวม')
                                    ->schema([
                                        Forms\Components\TextInput::make('total')
                                            ->label('')
                                            ->disabled(),
                                    ]),
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order_no',)
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('firstname')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('lastname')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('total'),
                Tables\Columns\BooleanColumn::make('status')
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')

                    ->toggleable()
                    ->dateTime('d-M-Y')
                    ->sortable(),
            ])
            ->defaultSort('created_at','desc')
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
            RelationManagers\OrderitemsRelationManager::class
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }

    protected static function getNavigationBadge(): ?string
    {
        $status = DB::table('order_details')->where('status','=','0')->get();
        return count($status);
    }
}

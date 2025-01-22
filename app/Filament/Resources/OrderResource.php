<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Order;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Destination;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\OrderResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OrderResource\RelationManagers;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('trx_id')->label('TRX ID')->disabled(true)->columnSpan(2),
                Select::make('user_id')->label('customer')->relationship(
                    name:'user',
                    titleAttribute: 'email'
                )->columnSpan(2)->searchable(),
                TextInput::make('amount')->label('Quantity'),
                TextInput::make('total'),
                Select::make('destination_id')
                ->label('Destination')
                ->relationship(
                    name: 'destination',
                    titleAttribute: 'name',
                    modifyQueryUsing: fn (Builder $query) => $query->where('is_available',true)
                ),
                Select::make('payment_id')
                ->label('Payment Method')
                ->relationship(
                    name: 'payment',
                    titleAttribute: 'channel',
                    modifyQueryUsing: fn (Builder $query) => $query->active()
                ),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('trx_id')->label('Transaction Id')->searchable(),
                TextColumn::make('destination.name')->label('Tour')->searchable(),
                TextColumn::make('user.email')->label('Email')->searchable(),
                TextColumn::make('payment.channel')->label('Payment Method')->searchable(),
                TextColumn::make('amount')->label('Quantity'),
                TextColumn::make('total')->label('Total')->money('IDR', locale: 'id'),
                IconColumn::make('status')->icon(fn (string $state): string => match ($state) {
                    'paid' => 'heroicon-o-check-circle',
                    'unpaid' => 'heroicon-o-clock',
                    'canceled' => 'heroicon-o-x-circle',
                })
                ->color(fn (string $state): string => match ($state) {
                    'paid' => 'success',
                    'unpaid' => 'warning',
                    'canceled' => 'danger',
                }),
            ])
            ->filters([
                SelectFilter::make('destination.name')
                ->multiple()
                ->relationship('destination', 'name'),
                SelectFilter::make('status')
                ->multiple()
                ->options([
                    'paid' => 'Paid',
                    'unpaid' => 'Unpaid',
                    'canceled' => 'Canceled',
                ]),
                SelectFilter::make('payment.channel')
                ->multiple()
                ->relationship('payment', 'channel'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->button()
                ->outlined(),
                Tables\Actions\Action::make('Paid')
                ->button()
                ->outlined()
                ->action(function (Order $record): void {
                   $record->status = 'paid';
                   $record->save();
                })
                ->icon('heroicon-o-check-circle')
                ->requiresConfirmation()
                ->color('success')
                ->visible(function (Order $order){
                    return $order->status === 'unpaid';
                }),
                Tables\Actions\Action::make('Canceled')
                ->button()
                ->outlined()
                ->action(function (Order $record): void {
                   $record->status = 'canceled';
                   $record->save();
                })
                ->icon('heroicon-o-x-circle')
                ->requiresConfirmation()
                ->color('danger')
                ->visible(function (Order $order){
                    return $order->status === 'unpaid';
                })
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}

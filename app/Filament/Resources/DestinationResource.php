<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Destination;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DestinationResource\Pages;
use App\Filament\Resources\DestinationResource\RelationManagers;
use Filament\Forms\Components\FileUpload;

class DestinationResource extends Resource
{
    protected static ?string $model = Destination::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->columnSpan('full'),
                TextInput::make('duration')->required()->numeric(),
                Select::make('duration_type')->options([
                    'minute' => 'Menit',
                    'hour' => 'Jam',
                    'day' =>'Hari',
                    'week' => 'Minggu',
                    'month' => 'Bulan',
                    'year' => 'Tahun'
                ])->default('day'),
                TextInput::make('destination'),
                TextInput::make('price')->required()->numeric(),
                FileUpload::make('images')->columnSpan('full')->disk('public')
                ->directory('images'),
                RichEditor::make('description')->columnSpan('full'),
                Checkbox::make('is_available')->default(true)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('duration')->formatStateUsing(function ($state, Destination $destination) {
                    return $destination->duration . ' ' . $destination->duration_type;
                }),
                TextColumn::make('price')->money('IDR', locale: 'id'),
                IconColumn::make('is_available')
                ->boolean()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListDestinations::route('/'),
            'create' => Pages\CreateDestination::route('/create'),
            'edit' => Pages\EditDestination::route('/{record}/edit'),
        ];
    }
}

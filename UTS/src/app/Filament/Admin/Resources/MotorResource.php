<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\MotorResource\Pages;
use App\Filament\Admin\Resources\MotorResource\RelationManagers;
use App\Models\Motor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MotorResource extends Resource
{
    protected static ?string $model = Motor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tahun')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('warna')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mesin')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('transmisi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kapasitas_mesin')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tipe_bahan_bakar')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('fitur_keamanan')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('deskripsi')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('warna')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mesin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('transmisi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kapasitas_mesin')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tipe_bahan_bakar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListMotors::route('/'),
            'create' => Pages\CreateMotor::route('/create'),
            'edit' => Pages\EditMotor::route('/{record}/edit'),
        ];
    }
}

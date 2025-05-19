<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\MobilResource\Pages;
use App\Filament\Admin\Resources\MobilResource\RelationManagers;
use App\Models\Mobil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MobilResource extends Resource
{
    protected static ?string $model = Mobil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tahun')
                    ->required(),
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
                Forms\Components\TextInput::make('kapasitas_penumpang')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('fitur_keamanan')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun'),
                Tables\Columns\TextColumn::make('harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('warna')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mesin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('transmisi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kapasitas_penumpang')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListMobils::route('/'),
            'create' => Pages\CreateMobil::route('/create'),
            'edit' => Pages\EditMobil::route('/{record}/edit'),
        ];
    }
}

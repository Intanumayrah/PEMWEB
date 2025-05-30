<?php

namespace App\Filament\Admin\Resources\MotorResource\Pages;

use App\Filament\Admin\Resources\MotorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMotors extends ListRecords
{
    protected static string $resource = MotorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

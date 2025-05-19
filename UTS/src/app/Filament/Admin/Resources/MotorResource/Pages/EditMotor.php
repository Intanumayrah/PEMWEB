<?php

namespace App\Filament\Admin\Resources\MotorResource\Pages;

use App\Filament\Admin\Resources\MotorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMotor extends EditRecord
{
    protected static string $resource = MotorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

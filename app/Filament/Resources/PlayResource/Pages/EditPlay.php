<?php

namespace App\Filament\Resources\PlayResource\Pages;

use App\Filament\Resources\PlayResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlay extends EditRecord
{
    protected static string $resource = PlayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

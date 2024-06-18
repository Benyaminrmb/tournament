<?php

namespace App\Filament\Resources\PlayResource\Pages;

use App\Filament\Resources\PlayResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlays extends ListRecords
{
    protected static string $resource = PlayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

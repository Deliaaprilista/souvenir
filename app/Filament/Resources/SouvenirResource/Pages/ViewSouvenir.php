<?php

namespace App\Filament\Resources\SouvenirResource\Pages;

use App\Filament\Resources\SouvenirResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSouvenir extends ViewRecord
{
    protected static string $resource = SouvenirResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

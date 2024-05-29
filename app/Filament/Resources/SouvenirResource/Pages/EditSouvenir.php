<?php

namespace App\Filament\Resources\SouvenirResource\Pages;

use App\Filament\Resources\SouvenirResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSouvenir extends EditRecord
{
    protected static string $resource = SouvenirResource::class;

    protected function getActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

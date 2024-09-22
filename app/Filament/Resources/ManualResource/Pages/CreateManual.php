<?php

namespace App\Filament\Resources\ManualResource\Pages;

use App\Filament\Resources\ManualResource;
use Filament\Resources\Pages\CreateRecord;

class CreateManual extends CreateRecord
{
    protected static string $resource = ManualResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}

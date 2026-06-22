<?php

namespace App\Filament\Resources\Histories\Pages;

use App\Filament\Resources\Histories\HistoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHistory extends CreateRecord
{
    protected static string $resource = HistoryResource::class;

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

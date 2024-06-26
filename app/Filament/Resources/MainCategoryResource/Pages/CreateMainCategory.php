<?php

namespace App\Filament\Resources\MainCategoryResource\Pages;

use App\Filament\Resources\MainCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMainCategory extends CreateRecord
{
    protected static string $resource = MainCategoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

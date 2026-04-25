<?php

namespace App\Filament\Admin\Resources\ParentResource\Pages;

use App\Filament\Admin\Resources\ParentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParent extends EditRecord
{
    protected static string $resource = ParentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

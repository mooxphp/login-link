<?php

namespace Moox\LoginLink\Resources\LoginLinkResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Moox\Core\Traits\Tabs\TabsInListPage;
use Moox\LoginLink\Models\LoginLink;
use Moox\LoginLink\Resources\LoginLinkResource;
use Moox\LoginLink\Resources\LoginLinkResource\Widgets\LoginLinkWidgets;

class ListPage extends ListRecords
{
    use TabsInListPage;

    public static string $resource = LoginLinkResource::class;

    public function getActions(): array
    {
        return [];
    }

    public function getHeaderWidgets(): array
    {
        return [
            LoginLinkWidgets::class,
        ];
    }

    public function getTitle(): string
    {
        return __('login-link::translations.title');
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->using(function (array $data, string $model): LoginLink {
                    return $model::create($data);
                }),
        ];
    }

    public function getTabs(): array
    {
        return $this->getDynamicTabs('login-link.resources.login-link.tabs', LoginLink::class);
    }
}

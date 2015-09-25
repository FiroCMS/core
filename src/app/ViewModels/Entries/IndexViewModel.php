<?php

namespace FiroCMS\Firo\App\ViewModels\Entries;

use FiroCMS\Firo\App\ViewModels\BaseViewModel;

class IndexViewModel extends BaseViewModel
{
    public function title()
    {
        return 'Entry taxonomies';
    }

    public function activeView()
    {
        return 'Entries';
    }

    public function taxonomies()
    {
//        return [];
        return [
            0 => (object) [
               'title' => 'Article',
               'entries_count' => 0,
            ],
            1 => (object) [
               'title' => 'Comment',
               'entries_count' => 0,
            ],
            2 => (object) [
               'title' => 'Project',
               'entries_count' => 0,
            ],
        ];
    }
}

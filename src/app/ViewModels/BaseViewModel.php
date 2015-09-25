<?php

namespace FiroCMS\Firo\App\ViewModels;

class BaseViewModel extends ViewModel
{
    public function title()
    {
        return null;
    }

    public function activeView()
    {
        return $this->title();
    }
}

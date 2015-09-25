<?php

namespace FiroCMS\Firo\App\Http\Controllers;

use FiroCMS\Firo\App\ViewModels\Entries\IndexViewModel;

class EntriesController extends Controller
{
    public function index()
    {
        return view('firo::entries.index', new IndexViewModel);
    }
}

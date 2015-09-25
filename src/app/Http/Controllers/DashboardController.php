<?php

namespace FiroCMS\Firo\App\Http\Controllers;

use FiroCMS\Firo\App\ViewModels\Dashboard\IndexViewModel;

class DashboardController extends Controller
{
    public function index()
    {
        return view('firo::dashboard.index', new IndexViewModel);
    }
}

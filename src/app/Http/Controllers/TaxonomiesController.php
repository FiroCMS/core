<?php

namespace FiroCMS\Firo\App\Http\Controllers;

use FiroCMS\Firo\App\ViewModels\Taxonomies\IndexViewModel;

class TaxonomiesController extends Controller
{
    public function index()
    {
        return view('firo::taxonomies.index', new IndexViewModel);
    }
}

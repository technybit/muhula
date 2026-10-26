<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Products extends BaseController
{
    public function index()
    {
        return view('dashboard/products');
    }
}
<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Orders extends BaseController
{
    public function index()
    {
        return view('dashboard/orders');
    }
}
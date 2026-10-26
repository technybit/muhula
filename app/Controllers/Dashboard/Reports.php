<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;

class Reports extends BaseController
{
    public function index()
    {
        return view('dashboard/reports');
    }
}
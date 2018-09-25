<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\BController;

class SiteController extends BController
{
    public function __construct()
    {
        $this->middleware(['web', 'setTheme:FRONT']);
    }
}

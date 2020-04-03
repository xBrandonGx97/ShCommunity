<?php

namespace App\Controllers;

use Framework\Core\CoreController as Controller;
use Classes\Utils as Utils;

class Home extends Controller
{
    public function index()
    {
        $this->view('pages/cms/home/index');
    }
}

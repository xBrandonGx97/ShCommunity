<?php

namespace App\Controllers;

use Framework\Core\CoreController as Controller;
use Classes\Utils as Utils;

class Home extends Controller
{
    public function __construct(Utils\User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $widget = new Utils\Widget();
        $widget = $widget->display();

        $data = [
            'user' => $this->user,
            'widget' => $widget
        ];

        $this->view('pages/cms/home/index', $data);
    }
}

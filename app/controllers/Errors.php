<?php

namespace App\Controllers;

use Framework\Core\CoreController as Controller;
use Classes\Utils as Utils;

class Errors extends Controller
{
    public function __construct()
    {
        $this->select = new Utils\Select;
    }

    public function error301()
    {
        $data = [
            'select' => $this->select
        ];
        $this->view('errors/301', $data);
    }

    public function error307()
    {
        $data = [
            'select' => $this->select
        ];
        $this->view('errors/307', $data);
    }

    public function error400()
    {
        $data = [
            'select' => $this->select
        ];
        $this->view('errors/400', $data);
    }

    public function error401()
    {
        $data = [
            'select' => $this->select
        ];
        $this->view('errors/401', $data);
    }

    public function error403()
    {

        $data = [
            'select' => $this->select
        ];
        $this->view('errors/403', $data);
    }

    public function error404()
    {
        $data = [
            'select' => $this->select
        ];
        $this->view('errors/404', $data);
    }

    public function error405()
    {
        $data = [
            'select' => $this->select
        ];
        $this->view('errors/405', $data);
    }

    public function error408()
    {
        $data = [
            'select' => $this->select
        ];
        $this->view('errors/408', $data);
    }

    public function error500()
    {
        $data = [
            'select' => $this->select
        ];
        $this->view('errors/500', $data);
    }

    public function error502()
    {
        $data = [
            'select' => $this->select
        ];
        $this->view('errors/502', $data);
    }
}

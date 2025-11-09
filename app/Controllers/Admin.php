<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function dashboard(): String
    {
        return view('TampleteAdmin/index');
    }
    public function profile(): String
    {
        return view('TampleteAdmin/admin');
    }
    public function listGenre(): String
    {
        return view('TampleteAdmin/listeGenre');
    }
}

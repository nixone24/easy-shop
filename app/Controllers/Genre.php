<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Genre extends BaseController
{
    public function index()
    {
       return view('auth/genre');
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Begginer extends BaseController
{
    public function index()
    {
        
        echo view('layout/main');
    }
}

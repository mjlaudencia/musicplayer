<?php

namespace App\Controllers;
use App\Models\SystemModel;
use App\Controllers\BaseController;

class MainController extends BaseController
{
    public function index()
    {
        $main=new SystemModel();
        $data['ee`']=$main->findAll();
        return view ('main', $data);
    }
}

<?php
namespace app\Controllers\Admin;

use app\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard() {
        $this->render('admin/dashboard');
    }
}
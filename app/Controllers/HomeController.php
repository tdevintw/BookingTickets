<?php
namespace app\Controllers;


class HomeController extends Controller
{
    public function index() {
        $this->render('home');
    }

    public function notFound(){
        $this->render('404');
    }

    public function dashboard() {
        $this->render('admin/dashboard');
    }
}
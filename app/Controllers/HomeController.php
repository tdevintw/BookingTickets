<?php
namespace app\Controllers;
use app\Models\Matche;


class HomeController extends Controller
{
    public function home() {
        $this->render('home');
    }
    

    public function notFound(){
        $this->render('404');
    }

    public function about(){
        $this->render("about");
    }
}
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

    public function matchs(){
        $this->render("match/match");
    }

    public function form(){
        $this->render("form");
    }
    public function about(){
        $this->render("about");
    }
}
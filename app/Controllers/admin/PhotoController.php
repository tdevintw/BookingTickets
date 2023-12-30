<?php

namespace app\Controllers\Admin;

use app\Models\Photo;
use app\Controllers\Controller;

class PhotoController extends Controller
{
    public function index()
    {
        $Photos = Photo::select();
        // Get Photo photo by Photo['id'];
        $this->render('admin/Photo/index', ['Photos' => $Photos]);
    }

    public function create()
    {
        $this->render('admin/Photo/create');
    }

    public function delete(int $id)
    {
        if (Photo::delete($id)) {
            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    }

    public function store($data)
    {
        echo "Photo Data to store : <br><pre>";
        var_dump($data);
        echo "</pre>";exit;
    }
}

<?php

namespace app\Controllers;

use app\Models\Team;
use app\Controllers\Controller;
use core\Validator;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::select();
        $this->render('admin/team/index', ['teams' => $teams]);
    }

    public function create()
    {
        $this->render('admin/team/create');
    }

    public function store()
    {
        if (isset($_POST) && $_FILES) {
            $name = $_POST['name'];
            $coach = $_POST['coach'];
            $flag = $_FILES['flag'];
            $photo = $_FILES['photo'];

            // Validation
            $data = [
                'name' => $name,
                'coach' => $coach,
                'flag' => $flag,
                'photo' => $photo,
            ];

            $validator = new Validator($data);

            $rules = [
                'name' => 'required|name',
                'coach' => 'required|name',
                'flag' => 'required|file',
                'photo' => 'required|file',
            ];

            $validator->validate($rules);

            if ($validator->fails()) {
                $errors = $validator->errors();
                session_start();
                $_SESSION['errors'] = $errors;
                header('location:' . $_SERVER['HTTP_REFERER']);
                return;
            }
            // store photo
            $photoName = $photo['name'];
            $photoTmpName = $photo['tmp_name'];
            $photoType = strtolower(pathinfo($photoName, PATHINFO_EXTENSION));

            $newPhotoName = $name . 'Team.'  . $photoType;

            $photoUploadFolder = "public/images/teams/";

            $photoDestination = $photoUploadFolder . $newPhotoName;
            move_uploaded_file($photoTmpName,  $photoDestination);

            // store photo
            $flagName = $flag['name'];
            $flagTmpName = $flag['tmp_name'];
            $flagType = strtolower(pathinfo($flagName, PATHINFO_EXTENSION));

            $newFlagName = $name . 'Flag.'  . $flagType;

            $flagUploadFolder = "public/images/flags/";

            $flagDestination = $flagUploadFolder . $newFlagName;
            move_uploaded_file($flagTmpName,  $flagDestination);

            $team = new Team($name, $coach, '/'.$flagDestination, '/'.$photoDestination);
            if ($team->save()) {
                session_start();
                $_SESSION['success']  = "Team created successfully.";
                header('location:' . $_SERVER['HTTP_REFERER']);
                return;
            }

            session_start();
            $_SESSION['errors'] = "Error within created the team !!";
            header('location:' . $_SERVER['HTTP_REFERER']);
            return;
        }
    }

    public function delete(int $id)
    {
        if (Team::delete($id)) {
            header("Location:" . $_SERVER['HTTP_REFERER']);
        }
    }
}

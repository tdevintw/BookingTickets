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

            $team = new Team($name, $coach, '/' . $flagDestination, '/' . $photoDestination);
            if ($team->save()) {
                session_start();
                $_SESSION['success']  = "Team created successfully.";
                header('location:' . $_SERVER['HTTP_REFERER']);
                return;
            }

            session_start();
            $_SESSION['errors'] = "Error withing creating the team !!";
            header('location:' . $_SERVER['HTTP_REFERER']);
            return;
        }
    }

    public function edit()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $team = Team::select($id);
            $this->render("admin/team/edit", ['team' => $team]);
        }
    }

    public function update()
    {
        if (isset($_POST)) {
            $id = $_POST['id'];
            $flag_src = $_POST['flag_src'];
            $photo_src = $_POST['photo_src'];
            $name = $_POST['name'];
            $coach = $_POST['coach'];
            $flag = null;
            $photo = null;


            // Validation
            $data = [
                'name' => $name,
                'coach' => $coach
            ];

            $rules = [
                'name' => 'required|name',
                'coach' => 'required|name'
            ];

            if (isset($_FILES['flag']) && $_FILES['flag']['error'] !== UPLOAD_ERR_NO_FILE) {
                $flag = $_FILES['flag'];
                $data['flag'] = $flag;
                $rules['flag'] = 'required|file';
            }

            if (isset($_FILES['photo']) && $_FILES['photo']['error'] !== UPLOAD_ERR_NO_FILE) {
                $photo = $_FILES['photo'];
                $data['photo'] = $photo;
                $rules['photo'] = 'required|file';
            }

            $validator = new Validator($data);


            $validator->validate($rules);

            if ($validator->fails()) {
                $errors = $validator->errors();
                session_start();
                $_SESSION['errors'] = $errors;
                header('location:' . $_SERVER['HTTP_REFERER']);
                return;
            }

            // store photo
            $newData = [
                'name' => $name,
                'coach' => $coach
            ];

            if ($photo) {
                unlink('.' . $photo_src);
                $photoName = $photo['name'];
                $photoTmpName = $photo['tmp_name'];
                $photoType = strtolower(pathinfo($photoName, PATHINFO_EXTENSION));

                $newPhotoName = $name . 'Team.'  . $photoType;

                $photoUploadFolder = "public/images/teams/";

                $photoDestination = $photoUploadFolder . $newPhotoName;
                move_uploaded_file($photoTmpName,  $photoDestination);
                $newData['photo_src'] = "/" . $photoDestination;
            }

            // store flag
            if ($flag) {
                unlink('.' . $flag_src);
                $flagName = $flag['name'];
                $flagTmpName = $flag['tmp_name'];
                $flagType = strtolower(pathinfo($flagName, PATHINFO_EXTENSION));

                $newFlagName = $name . 'Flag.'  . $flagType;

                $flagUploadFolder = "public/images/flags/";

                $flagDestination = $flagUploadFolder . $newFlagName;
                move_uploaded_file($flagTmpName,  $flagDestination);
                $newData['flag_src'] = "/" . $flagDestination;
            }

            if (Team::update($newData, $id)) {
                session_start();
                $_SESSION['success_update']  = "Team updated successfully.";
                header('location:' . $_ENV["APP_URL"] . "/admin/team");
                return;
            }
            session_start();
            $_SESSION['errors'] = "Error withing updating the team !!";
            header('location:' . $_ENV["APP_URL"] . "/admin/team");
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

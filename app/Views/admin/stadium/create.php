<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= $_ENV['APP_URL'] . "/public/assets/dist/output.css" ?>>
    <title>Dashboard</title>
    <script src="https://cdn.tiny.cloud/1/qwokz1nmmty2escna2o9lclbv8en7rr1g4j0a0kz0h74kjso/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <style>
        .teams {
            background-color: rgb(229 231 235 / var(--tw-bg-opacity));
        }
    </style>
</head>

<body class="h-screen">

    <?php
    require "app/Views/includes/admin/navbar.php";
    ?>

    <div class="w-full flex flex-row">

        <?php
        require "app/Views/includes/admin/aside.php";
        ?>

        <div class="relative w-5/6 mx-auto bg-white rounded-md shadow-md">
            <div class="absolute top-2 left-0">
                <a href="<?= $_ENV['APP_URL'] . "/admin/team" ?>" class="bg-gray-300 cursor-pointer rounded-md m-2 p-1 text-md text-gray-600">
                    < Back </a>
            </div>
            <div class="w-full flex flex-col items-center">
                <h1 class="text-2xl font-semibold mb-6">Create Team</h1>
                <?php
                if (isset($_SESSION['success'])) {
                ?>
                    <p class="text-green-600 p-1"><?= $_SESSION['success'] ?></p>
                <?php
                unset($_SESSION['success']);
                }
                ?>

                <form class="w-2/3 p-1" action="<?= $_ENV['APP_URL'] . "/admin/team/store" ?>" method="post" enctype="multipart/form-data">
                    
                <!-- Team Name -->
                    <div class="">
                        <label for="name" class="block text-gray-600 text-sm font-medium mb-2">Team Name</label>
                        <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-slate-400 rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>
                    <?php
                    if (isset($_SESSION['errors']["name"])) {
                        foreach ($_SESSION['errors']["name"] as $error) {
                    ?>
                            <p class="text-red-600 text-sm m-0"><?= $error ?></p>
                    <?php
                        }
                    }
                    ?>

                    <!-- Coach name -->
                    <div class="mt-4">
                        <label for="coach" class="block text-gray-600 text-sm font-medium mb-2">Coach</label>
                        <input type="text" id="coach" name="coach" class="w-full px-3 py-2 border border-slate-400 rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>
                    <?php
                    if (isset($_SESSION['errors']["coach"])) {
                        foreach ($_SESSION['errors']["coach"] as $error) {
                    ?>
                            <p class="text-red-600 text-sm m-0"><?= $error ?></p>
                    <?php
                        }
                    }
                    ?>

                    <!-- Country flag -->
                    <div class="mt-4">
                        <label for="flag" class="block text-gray-600 text-sm font-medium mb-2">Country flag</label>
                        <input type="file" id="flag" name="flag" class="w-full px-3 py-2 border border-slate-400 rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>
                    <?php
                    if (isset($_SESSION['errors']["flag"])) {
                        foreach ($_SESSION['errors']["flag"] as $error) {
                    ?>
                            <p class="text-red-600 text-sm m-0"><?= $error ?></p>
                    <?php
                        }
                    }
                    ?>

                    <!-- Team photo -->
                    <div class="mt-4">
                        <label for="photo" class="block text-gray-600 text-sm font-medium mb-2">Team photo</label>
                        <input type="file" id="photo" name="photo" class="w-full px-3 py-2 border border-slate-400 rounded-md focus:outline-none focus:border-blue-500" required>
                    </div>
                    <?php
                    if (isset($_SESSION['errors']["photo"])) {
                        foreach ($_SESSION['errors']["photo"] as $error) {
                    ?>
                            <p class="text-red-600 text-sm m-0"><?= $error ?></p>
                    <?php
                        }
                    }
                    unset($_SESSION['errors'])
                    ?>

                    <!-- Submit Button -->
                    <div class="flex flex-row justify-center">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 mt-4 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                            Create Team
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>

</html>
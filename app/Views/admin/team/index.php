<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= $_ENV['APP_URL'] . "/public/assets/dist/output.css" ?>>
    <title>Dashboard</title>
    <style>
        .teams {
            background-color: rgb(229 231 235 / var(--tw-bg-opacity));
        }
    </style>
</head>

<body class="h-full">

    <?php
    require "app/Views/includes/navbar.php";
    ?>

    <div class="w-full flex flex-row">

        <?php
        require "app/Views/includes/admin/aside.php";
        ?>

        <div class="w-5/6">
            <div class="flex flex-row items-center py-1 w-full px-2">
                <h3 class="mr-auto text-2xl font-bold text-cyan-800">List of Teams</h3>
                <a class="cursor-pointer text-white font-bold bg-blue-600 rounded-xl p-2 h-10 hover:bg-blue-600"
                    href="<?= $_ENV['APP_URL'] . '/admin/team/create' ?>">
                    + Add Team  
                </a>
            </div>

            <div class="flex flex-col w-full overflow-scroll max-h-[80vh]">

                <!-- Alert request message  -->

                <!-- Table -->
                <table class="table-auto w-full text-sm whitespace-no-wrap border-spacing-2 px-2">
                    <thead>
                        <tr class="bg-gray-400">
                            <th class="p-1 border-r border-gray-400">View</th>
                            <th class="p-1 border-r border-gray-400">ID</th>
                            <th class="p-1 border-r border-gray-400">Name</th>
                            <th class="p-1 border-r border-gray-400">Coach</th>
                            <th class="p-1 border-r border-gray-400">Captain</th>
                            <th class="p-1" colspan="2">
                                Manage
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($teams as $team) :
                        ?>
                            <tr class="odd:bg-gray-200 even:bg-gray-300">
                                <td class="p-1 text-center border-r border-white">
                                    <a href="#" class="p-1  rounded-full border border-sky-500 text-sky-500 text-xl">
                                        +
                                    </a>
                                </td>

                                <td class="p-1 text-center border-r border-white">
                                    <p>
                                    <?= $team['id'] ?>
                                    </p>
                                </td>

                                <td class="p-1 border-r border-white">
                                    <p>
                                        <?= $team['name'] ?>
                                    </p>
                                </td>

                                <td class="p-1 border-r border-white">
                                    <p>
                                        <?= $team['coach'] ?>
                                    </p>
                                </td>

                                <td class="p-1 border-r border-white">
                                    <p>
                                        <?= $team['captain'] ?>
                                    </p>
                                </td>

                                <td class="text-right border-r border-white">
                                    <form class="text-center" action="<?= $_ENV['APP_URL'] . "/admin/team/delete/" . $team['id'] ?>" method="POST">
                                        
                                        <button class="hover:bg-red-500 hover:text-white text-red-500 border border-red-500 rounded-md p-2" onclick="return confirmDelete()">
                                            Delete
                                        </button>
                                    </form>
                                </td>

                                <td class="text-left border-r border-white">
                                    <form class="text-center" action="./editForm.php" method="post">
                                        <input type="hidden" name="id" id="id" value="">
                                        <button type="submit" class="hover:bg-green-500 hover:text-white text-green-500 border border-green-500 rounded-md p-2">
                                            Update
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <script>
        function confirmDelete() {
            var confirmation = confirm(`Are you sure you want to delete it!`);
            return confirmation;
        }
    </script>
</body>

</html>
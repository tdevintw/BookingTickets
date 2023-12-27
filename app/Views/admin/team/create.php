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

<body class="h-full">

    <?php
    require "app/Views/includes/admin/navbar.php";
    ?>

    <div class="w-full flex flex-row">

        <?php
        require "app/Views/includes/admin/aside.php";
        ?>

        <div class="w-5/6 mx-auto bg-white rounded-md shadow-md flex flex-col items-center">
            <h1 class="text-2xl font-semibold mb-6">Create Team</h1>

            <form class="w-2/3 p-1" action="/process-team" method="post">
                <!-- Team Name -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 text-sm font-medium mb-2">Team Name</label>
                    <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-slate-400 rounded-md focus:outline-none focus:border-blue-500" required>
                </div>

                <!-- Coach -->
                <div class="mb-4">
                    <label for="coach" class="block text-gray-600 text-sm font-medium mb-2">Coach</label>
                    <input type="text" id="coach" name="coach" class="w-full px-3 py-2 border border-slate-400 rounded-md focus:outline-none focus:border-blue-500" required>
                </div>

                <!-- Captain -->
                <div class="mb-4">
                    <label for="captain" class="block text-gray-600 text-sm font-medium mb-2">Captain</label>
                    <input type="text" id="captain" name="captain" class="w-full px-3 py-2 border border-slate-400 rounded-md focus:outline-none focus:border-blue-500" required>
                </div>

                <!-- FIFA Ranking -->
                <div class="mb-4">
                    <label for="fifa-ranking" class="block text-gray-600 text-sm font-medium mb-2">FIFA Ranking</label>
                    <input type="number" id="fifa-ranking" name="fifa_ranking" class="w-full px-3 py-2 border border-slate-400 rounded-md focus:outline-none focus:border-blue-500" required>
                </div>

                <!-- Description -->
                <script>
                    tinymce.init({
                        selector: 'textarea',
                        plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
                        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                        tinycomments_mode: 'embedded',
                        tinycomments_author: 'Author name',
                        mergetags_list: [{
                                value: 'First.Name',
                                title: 'First Name'
                            },
                            {
                                value: 'Email',
                                title: 'Email'
                            },
                        ],
                        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
                    });
                </script>
                
                <div class="mb-4">
                    <label for="description" class="block text-gray-600 text-sm font-medium mb-2">Description</label>
                    <textarea id="description" name="description" rows="4" class="w-full px-3 py-2 border border-slate-400 rounded-md focus:outline-none focus:border-blue-500" required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex flex-row justify-center">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                        Create Team
                    </button>
                </div>
            </form>
        </div>

    </div>

</body>

</html>
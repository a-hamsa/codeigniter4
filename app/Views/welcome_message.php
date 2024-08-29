<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <nav class="bg-gray-800 text-white p-4 mb-8">
        <div class="container mx-auto flex justify-between">
            <a href="/" class="text-lg font-bold">Dashboard</a>
            <ul class="flex items-center space-x-4">
                <li><a href="/posts" class="hover:text-gray-300">Posts</a></li>
                <li><a href="/users" class="hover:text-gray-300">Users</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto my-8 p-4">
        <!-- Header -->
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800">Welcome to the Admin Dashboard</h1>
        </header>

        <!-- Posts Section -->
        <section class="mb-12">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-2xl font-semibold text-gray-800">Posts</h2>
            </div>

            <div class="grid grid-cols-1 gap-4">
                <?php foreach ($posts as $post): ?>
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <h3 class="text-lg font-bold text-gray-800"><?= esc($post['title']); ?></h3>
                        <p class="text-gray-600"><?= esc($post['body']); ?></p>
                        <p class="text-gray-600">By <?= esc($post['user_name']); ?></p>
                        <a href="/posts/edit/<?= esc($post['id']); ?>" class="text-blue-600 hover:text-blue-900">Edit</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Users Section -->
        <section class="mb-12">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-2xl font-semibold text-gray-800">Users</h2>
            </div>

            <div class="grid grid-cols-1 gap-4">
                <?php foreach ($users as $user): ?>
                    <div class="bg-white rounded-lg shadow-md p-4">
                        <h3 class="text-lg font-bold text-gray-800"><?= esc($user['name']); ?></h3>
                        <p class="text-gray-600"><?= esc($user['email']); ?></p>
                        <a href="/users/edit/<?= esc($user['id']); ?>" class="text-blue-600 hover:text-blue-900">Edit</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>

</body>

</html>
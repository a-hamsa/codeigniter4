<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
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
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Posts</h1>
        <a href="<?= site_url('posts/create') ?>"
            class="inline-block bg-blue-600 text-white font-semibold px-4 py-2 rounded hover:bg-blue-700">
            Create New Post
        </a>

        <div class="mt-6 overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Title</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Body</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">User Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php foreach ($posts as $post): ?>
                        <tr class="hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= esc($post['id']) ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= esc($post['title']) ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= esc($post['body']) ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= esc($post['user_name']) ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="<?= site_url('posts/edit/' . $post['id']) ?>"
                                    class="text-blue-600 hover:text-blue-900">Edit</a>
                                <a href="<?= site_url('posts/delete/' . $post['id']) ?>"
                                    onclick="return confirm('Are you sure?')"
                                    class="ml-4 text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
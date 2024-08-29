<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="container mx-auto my-8 p-4 max-w-lg">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Create Post</h1>
        
        <form action="<?= site_url('posts/store') ?>" method="post" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="user_id" class="block text-sm font-medium text-gray-700 mb-2">User:</label>
                <select name="user_id" id="user_id" 
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <?php foreach ($users as $user): ?>
                        <option value="<?= esc($user['id']) ?>"><?= esc($user['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title:</label>
                <input type="text" name="title" id="title" required
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="body" class="block text-sm font-medium text-gray-700 mb-2">Body:</label>
                <textarea name="body" id="body" required
                          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                          rows="5"></textarea>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-600 text-white font-semibold px-4 py-2 rounded hover:bg-blue-700">
                    Save
                </button>
                <a href="<?= site_url('posts') ?>" 
                   class="text-gray-600 hover:text-gray-900">Back to List</a>
            </div>
        </form>
    </div>

</body>
</html>

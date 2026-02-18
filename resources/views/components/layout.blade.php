<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 h-full">

    <div class="flex">

        <!-- Sidebar (Fixed) -->
        <div class="fixed top-0 left-0 w-64 h-full bg-black text-white p-6 space-y-6">
            <h2 class="text-2xl font-bold text-center mb-8">
                Admin Panel
            </h2>

            <a href="{{ route('admin.dashboard') }}"
               class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition">
                Dashboard
            </a>

            <a href="{{ route('admin.users.index') }}"
               class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition">
                Users
            </a>

            <a href="{{ route('admin.products.index') }}"
               class="block px-4 py-2 rounded-lg hover:bg-gray-700 transition">
                Products
            </a>
        </div>

        <!-- Main Content (Scrollable) -->
        <div class="flex-1 ml-64 p-10 bg-gray-100 min-h-screen">
            {{$slot}}
        </div>

    </div>

</body>
</html>

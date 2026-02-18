<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
        @vite('resources/css/app.css')

</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="flex items-center justify-center w-full h-full">
        <div class="p-8 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 rounded-2xl shadow-xl shadow-black hover:shadow-2xl hover:shadow-black transition-all duration-300 transform hover:-translate-y-1">
            <h1 class="text-3xl font-bold mb-6 text-center">Welcome to Our Platform</h1>
            <a href="{{ route('login') }}"
               class="block text-center px-6 py-3 font-semibold text-white bg-black rounded-lg shadow-md hover:bg-gray-200 hover:border hover:border-black hover:shadow-lg hover:text-black hover:shadow-black transition-all duration-300">
               Log In
            </a>
        </div>
    </div>
    
</body>
</html>

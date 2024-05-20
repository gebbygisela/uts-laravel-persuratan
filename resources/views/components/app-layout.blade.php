<!DOCTYPE html>
<html lang="en" class="bg-gray-200">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/a1e8cc07f2.js" crossorigin="anonymous"></script>
    <title>Persuratan | Gebby Gisella</title>
</head>

<body class="max-w-7xl mx-auto min-h-screen bg-white py-4 px-4 mt-10 shadow-md">
    <nav class="flex justify-evenly items-center py-3">
        <div class="text-2xl font-bold">
            <a href="/" >Mail <span class="text-red-500"> Sender 🔥🔥</span></a>
        </div>
        <div class="flex gap-5 px-3 py-2 rounded-lg items-center">
            <x-nav-link href="/headmail" :active="request()->is('headmail','headmail/*')">
                <i class="fa-regular fa-paper-plane"></i> Mail Headers
            </x-nav-link>
            <x-nav-link href="/signature" :active="request()->is('signature', 'signature/*')">
                <i class="fa-solid fa-signature"></i> Signatures
            </x-nav-link>
            <x-nav-link href="/users" :active="request()->is('users','users/*')">
                <i class="fa-solid fa-people-group"></i> Users
            </x-nav-link>
        </div>
      
    </nav>
    <hr>
    <main class="py-3 px-3">{{ $slot }}</main>
</body>

</html>

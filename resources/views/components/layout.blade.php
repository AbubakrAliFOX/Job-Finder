<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Finder</title>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-dark-bg text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="flex justify-between py-4 border-b border-red/10">
            <div>
                <a href="'"><img height="92" width="92" src="{{ Vite::asset('resources/images/logo.svg') }}"
                        alt="Logo">
                    logo
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            @auth
                <div><a href="/jobs/create">Post A Job</a></div>
            @endauth
            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="login">Log In</a>
                </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">{{ $slot }}</main>
    </div>
</body>

</html>

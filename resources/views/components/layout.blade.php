<!DOCTYPE html>
<html lang="en_JM">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-black text-white">
    <div class="px-10">
        <nav class="flex justify-between items-center py-8 border-b border-white/10">
            <div>
                <a href="">
                    <img src="{{ Vite::asset('resources/images/pp-logo.svg') }}" alt="">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth
                <div class="space-x-6 font-bold flex item-center">
                    <a class="bg-white/10 hover:bg-white/20 duration-300 transition-colors py-2 px-4 rounded-lg" href="/jobs/create">Post a job</a>

                    <form class="flex items-center" method="POST" action="/logout">
                        @csrf
                        @method('DELETE')

                        <button class="cursor-pointer">Log out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>
            @endguest
        </nav>

        <main class="mt-10 mb-20 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>

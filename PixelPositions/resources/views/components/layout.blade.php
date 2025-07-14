<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, user-scalable-no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;&display=swap" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-black text-white">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/25 ">
            <div>
                <a href="">
                    <img src="{{ asset('images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href='#'>Jobs</a>
                <a href='#'>Carrers</a>
                <a href='#'>Salaries</a>
                <a href='#'>Comapnies</a>
            </div>
            <div>
                <a href='#'>Post a job</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 06 - PHP Database</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="mx-auto max-w-4xl px-6 py-12">
        <h1 class="text-3xl font-bold">Tutorial 06 - PHP Database</h1>
        <p class="mt-4">Aplikasi Laravel sederhana untuk menerapkan authentication, session, database, dan model relationship.</p>

        <div class="mt-8 rounded-lg border bg-white p-6 shadow-sm">
            <h2 class="text-xl font-semibold">Identitas Mahasiswa</h2>
            <p class="mt-3">Nama: Ammar Annajih Pasifiky</p>
            <p>NIM: 103042310020</p>
        </div>

        <div class="mt-8 rounded-lg border bg-white p-6 shadow-sm">
            <h2 class="text-xl font-semibold">Fitur yang Digunakan</h2>
            <ul class="mt-3 list-disc pl-5">
                <li>Authentication dan session login</li>
                <li>Protected route untuk dashboard</li>
                <li>Database products dan variants</li>
                <li>Relationship one-to-many antara product dan variant</li>
            </ul>
        </div>

        <div class="mt-8 rounded-lg border bg-white p-6 shadow-sm">
            <h2 class="text-xl font-semibold">Akun Demo</h2>
            <p class="mt-3">Email: ammar@example.com</p>
            <p>Password: password</p>
        </div>

        <div class="mt-8 flex gap-3">
            @auth
                <a href="{{ route('dashboard') }}" class="rounded bg-slate-900 px-4 py-2 text-white">Masuk ke Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="rounded bg-slate-900 px-4 py-2 text-white">Login</a>
                <a href="{{ route('register') }}" class="rounded border border-slate-900 px-4 py-2">Register</a>
            @endauth
        </div>
    </div>
</body>
</html>

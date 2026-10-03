<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Poliklinik</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- DaisyUI & Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] dark:text-[#EDEDEC] min-h-screen flex flex-col items-center justify-center p-6 antialiased">
    <div class="w-full max-w-4xl mx-auto">
        <!-- Header / Navigation -->
        <header class="flex items-center justify-between py-6 border-b border-[#e3e3e0] dark:border-[#27272a] mb-8">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-hospital-user text-primary text-2xl"></i>
                <span class="font-bold text-xl tracking-tight">Poliklinik</span>
            </div>
            <nav class="flex gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-sm btn-ghost">Dashboard</a>
                @else
                    <a href="/login" class="btn btn-sm btn-ghost">Log in</a>
                    <a href="/register" class="btn btn-sm btn-primary">Daftar Pasien</a>
                @endauth
            </nav>
        </header>

        <!-- Main Content -->
        <main class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- Left Column: Hero Text -->
            <div class="space-y-4">
                <h1 class="text-4xl font-bold tracking-tight sm:text-5xl">
                    Sistem Layanan Poliklinik
                </h1>
                <p class="text-base text-[#706f6c] dark:text-[#A1A09A]">
                    Layanan pendaftaran antrean berobat secara online, jadwal dokter terpadu, dan riwayat pemeriksaan pasien.
                </p>
                <div class="pt-2 flex flex-wrap gap-3">
                    <a href="/login" class="btn btn-primary">
                        Masuk / Daftar Antrean
                        <i class="fa-solid fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Right Column: Illustration Icon -->
            <div class="flex justify-center items-center p-8 text-primary">
                <i class="fa-solid fa-user-doctor text-9xl"></i>
            </div>
        </main>

        <!-- Footer -->
        <footer class="mt-16 pt-6 border-t border-[#e3e3e0] dark:border-[#27272a] text-center text-xs text-[#706f6c] dark:text-[#A1A09A]">
            &copy; {{ date('Y') }} Sistem Informasi Poliklinik. All rights reserved.
        </footer>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Poliklinik') - Sistem Informasi Poliklinik</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body class="bg-base-200 min-h-screen flex flex-col">
    <!-- Navbar Top -->
    <div class="navbar bg-base-100 shadow-sm border-b px-6">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl font-bold gap-2">
                <i class="fa-solid fa-hospital-user text-primary"></i> Poliklinik
            </a>
        </div>
        <div class="flex-none gap-4">
            <span class="text-sm font-semibold">
                {{ Auth::user()->nama }} <span class="badge badge-primary badge-outline capitalize ml-1">{{ Auth::user()->role }}</span>
            </span>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sm btn-error btn-outline">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </button>
            </form>
        </div>
    </div>

    <div class="flex flex-1">
        <!-- Sidebar Navigation -->
        <aside class="w-64 bg-base-100 border-r p-4 hidden md:block">
            <ul class="menu w-full rounded-box gap-1">
                @if(Auth::user()->role === 'admin')
                    <li><a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-chart-line w-5"></i> Dashboard</a></li>
                    <li><a href="{{ route('admin.obat.index') }}"><i class="fa-solid fa-pills w-5"></i> Kelola Obat</a></li>
                    <li><a href="{{ route('admin.dokter.index') }}"><i class="fa-solid fa-user-doctor w-5"></i> Kelola Dokter</a></li>
                    <li><a href="#"><i class="fa-solid fa-hospital w-5"></i> Kelola Poli</a></li>
                @elseif(Auth::user()->role === 'dokter')
                    <li><a href="{{ route('dokter.dashboard') }}"><i class="fa-solid fa-chart-line w-5"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fa-solid fa-calendar-days w-5"></i> Jadwal Periksa</a></li>
                    <li><a href="#"><i class="fa-solid fa-stethoscope w-5"></i> Periksa Pasien</a></li>
                    <li><a href="#"><i class="fa-solid fa-clock-rotate-left w-5"></i> Riwayat Pasien</a></li>
                @elseif(Auth::user()->role === 'pasien')
                    <li><a href="{{ route('pasien.dashboard') }}"><i class="fa-solid fa-chart-line w-5"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fa-solid fa-notes-medical w-5"></i> Daftar Poli</a></li>
                @endif
            </ul>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 p-6">
            @if(session('success'))
                <div class="alert alert-success mb-6 shadow-sm">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
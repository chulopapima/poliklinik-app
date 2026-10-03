<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Poliklinik</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-base-200 min-h-screen flex items-center justify-center p-4">
    <div class="card w-full max-w-md bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title text-2xl font-bold justify-center mb-4">Login Poliklinik</h2>

            @if(session('success'))
                <div class="alert alert-success mb-4 text-sm">
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-error mb-4 text-sm">
                    <span>{{ $errors->first() }}</span>
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                <div class="form-control">
                    <label class="label"><span class="label-text">Email</span></label>
                    <input type="email" name="email" class="input input-bordered w-full" required placeholder="masukkan email" />
                </div>

                <div class="form-control">
                    <label class="label"><span class="label-text">Password</span></label>
                    <input type="password" name="password" class="input input-bordered w-full" required placeholder="******" />
                </div>

                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-primary w-full">Masuk</button>
                </div>
            </form>

            <div class="divider">Atau</div>
            <p class="text-center text-sm">Belum punya akun pasien? <a href="{{ route('register') }}" class="link link-primary">Daftar Pasien</a></p>
        </div>
    </div>
</body>
</html>
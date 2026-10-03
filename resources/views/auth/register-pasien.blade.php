<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Pasien - Poliklinik</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-base-200 min-h-screen flex items-center justify-center p-4">
    <div class="card w-full max-w-lg bg-base-100 shadow-xl my-8">
        <div class="card-body">
            <h2 class="card-title text-2xl font-bold justify-center mb-4">Pendaftaran Pasien Baru</h2>

            @if($errors->any())
                <div class="alert alert-error mb-4 text-sm">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST" class="space-y-3">
                @csrf
                <div class="form-control">
                    <label class="label"><span class="label-text">Nama Lengkap</span></label>
                    <input type="text" name="nama" class="input input-bordered w-full" required placeholder="Deni Kurniawan" />
                </div>

                <div class="form-control">
                    <label class="label"><span class="label-text">No. KTP</span></label>
                    <input type="text" name="no_ktp" class="input input-bordered w-full" required placeholder="3328xxxxxxxxxxxx" />
                </div>

                <div class="form-control">
                    <label class="label"><span class="label-text">No. HP</span></label>
                    <input type="text" name="no_hp" class="input input-bordered w-full" required placeholder="085xxxxxxxxx" />
                </div>

                <div class="form-control">
                    <label class="label"><span class="label-text">Alamat</span></label>
                    <textarea name="alamat" class="textarea textarea-bordered w-full" required placeholder="Alamat lengkap"></textarea>
                </div>

                <div class="form-control">
                    <label class="label"><span class="label-text">Email</span></label>
                    <input type="email" name="email" class="input input-bordered w-full" required placeholder="email@contoh.com" />
                </div>

                <div class="form-control">
                    <label class="label"><span class="label-text">Password</span></label>
                    <input type="password" name="password" class="input input-bordered w-full" required placeholder="Minimal 6 karakter" />
                </div>

                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-primary w-full">Daftar Sekarang</button>
                </div>
            </form>

            <p class="text-center text-sm mt-4">Sudah punya akun? <a href="{{ route('login') }}" class="link link-primary">Masuk di sini</a></p>
        </div>
    </div>
</body>
</html>
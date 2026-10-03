@extends('layouts.app')

@section('title', 'Kelola Obat')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-2xl font-bold">Kelola Data Obat</h1>
    <!-- Modal Trigger -->
    <label for="modal-tambah" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah Obat</label>
</div>

<!-- Table Obat -->
<div class="card bg-base-100 shadow-sm border">
    <div class="card-body p-0 overflow-x-auto">
        <table class="table table-zebra w-full">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Obat</th>
                    <th>Kemasan</th>
                    <th>Harga</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($obats as $index => $obat)
                <tr>
                    <th>{{ $index + 1 }}</th>
                    <td class="font-semibold">{{ $obat->nama_obat }}</td>
                    <td>{{ $obat->kemasan }}</td>
                    <td>Rp {{ number_format($obat->harga, 0, ',', '.') }}</td>
                    <td class="text-center space-x-2">
                        <label for="modal-edit-{{ $obat->id }}" class="btn btn-xs btn-warning"><i class="fa-solid fa-pen"></i> Edit</label>
                        <form action="{{ route('admin.obat.destroy', $obat->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus obat ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-xs btn-error text-white"><i class="fa-solid fa-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>

                <!-- Modal Edit -->
                <input type="checkbox" id="modal-edit-{{ $obat->id }}" class="modal-toggle" />
                <div class="modal" role="dialog">
                    <div class="modal-box">
                        <h3 class="text-lg font-bold mb-4">Edit Data Obat</h3>
                        <form action="{{ route('admin.obat.update', $obat->id) }}" method="POST" class="space-y-4">
                            @csrf
                            @method('PUT')
                            <div class="form-control">
                                <label class="label"><span class="label-text">Nama Obat</span></label>
                                <input type="text" name="nama_obat" value="{{ $obat->nama_obat }}" class="input input-bordered" required />
                            </div>
                            <div class="form-control">
                                <label class="label"><span class="label-text">Kemasan</span></label>
                                <input type="text" name="kemasan" value="{{ $obat->kemasan }}" class="input input-bordered" required />
                            </div>
                            <div class="form-control">
                                <label class="label"><span class="label-text">Harga (Rp)</span></label>
                                <input type="number" name="harga" value="{{ $obat->harga }}" class="input input-bordered" required />
                            </div>
                            <div class="modal-action">
                                <label for="modal-edit-{{ $obat->id }}" class="btn">Batal</label>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-4">Belum ada data obat.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Tambah Obat -->
<input type="checkbox" id="modal-tambah" class="modal-toggle" />
<div class="modal" role="dialog">
    <div class="modal-box">
        <h3 class="text-lg font-bold mb-4">Tambah Obat Baru</h3>
        <form action="{{ route('admin.obat.store') }}" method="POST" class="space-y-4">
            @csrf
            <div class="form-control">
                <label class="label"><span class="label-text">Nama Obat</span></label>
                <input type="text" name="nama_obat" class="input input-bordered" placeholder="Paracetamol 500mg" required />
            </div>
            <div class="form-control">
                <label class="label"><span class="label-text">Kemasan</span></label>
                <input type="text" name="kemasan" class="input input-bordered" placeholder="Strip @ 10 Tablet" required />
            </div>
            <div class="form-control">
                <label class="label"><span class="label-text">Harga (Rp)</span></label>
                <input type="number" name="harga" class="input input-bordered" placeholder="10000" required />
            </div>
            <div class="modal-action">
                <label for="modal-tambah" class="btn">Batal</label>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
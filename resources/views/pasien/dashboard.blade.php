@extends('layouts.app')

@section('title', 'Dashboard Pasien')

@section('content')
<div class="card bg-base-100 shadow-sm border p-6">
    <h1 class="text-2xl font-bold mb-2">Selamat Datang, {{ Auth::user()->nama }}!</h1>
    <p class="text-gray-600">Nomor Rekam Medis Anda: <span class="badge badge-primary font-mono">{{ Auth::user()->no_rm }}</span></p>
</div>
@endsection
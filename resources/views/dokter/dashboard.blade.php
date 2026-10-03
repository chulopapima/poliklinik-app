<h1>Dashboard Dokter</h1>
<p>Selamat Datang, dr. {{ Auth::user()->nama }}</p>
<form action="{{ route('logout') }}" method="POST">@csrf <button type="submit">Logout</button></form>
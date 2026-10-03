<h1>Dashboard Admin</h1>
<p>Selamat Datang, Admin {{ Auth::user()->nama }}</p>
<form action="{{ route('logout') }}" method="POST">@csrf <button type="submit">Logout</button></form>
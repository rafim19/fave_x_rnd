<h1>Email: {{ auth::user()->email }}</h1>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>
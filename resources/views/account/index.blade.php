<h3>Welcome {{ Auth::user()->name }}</h3>

<a href="{{ route('account.logout') }}">Logout</a>

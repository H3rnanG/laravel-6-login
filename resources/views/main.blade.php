<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<button onclick="document.getElementById('logout-form').submit();">Logout</button>

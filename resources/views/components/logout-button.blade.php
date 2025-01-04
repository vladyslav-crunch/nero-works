<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button>
        <i class="fa fa-sign-out"></i> Logout
    </button>
</form>

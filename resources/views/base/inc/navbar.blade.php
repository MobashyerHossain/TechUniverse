<div class="top-right links">
    @auth
        <a href="{{ url('/home') }}">Home</a>
    @else
        <a href="{{ route('consumer.login') }}">Login</a>

        <a href="{{ route('consumer.egister') }}">Register</a>
    @endauth
</div>

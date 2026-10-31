<div>
    <ul class="nav bigger">
        <li><a class="b imsothick rounded fat" href="{{ route('landing') }}">Home</a></li>
        @auth
        <li><a class="b imsothick rounded fat" href="{{ route('dasbrot') }}">Dashboard</a></li>
        @else
        <li><a class="b imsothick rounded fat" href="{{ route('login') }}">Log In</a></li>
        @endauth
    </ul>
</div>
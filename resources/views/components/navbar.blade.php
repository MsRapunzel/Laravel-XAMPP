<!-- resources/views/components/navbar.blade.php -->

<head>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<header>
    <nav>
        <ul>
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/contact') }}">Contact us</a></li>
            <li><a href="{{ url('/signin') }}">Sign in</a></li>
            <li><a href="{{ url('/login') }}">Log in</a></li>
            <li><a class="github-button git-hub-btn" href="https://github.com/MsRapunzel/laravel-xampp/"
                    data-color-scheme="no-preference: light; light: light; dark: dark;" data-size="large"
                    aria-label="Watch MsRapunzel/laravel-xampp on GitHub">Take a look at my repo</a></li>
        </ul>
    </nav>
</header>
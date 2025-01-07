<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <!-- Common Header -->
    <header>
        <h1>My Website Header</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/about/">About</a>
            <a href="/contact/">Contact</a>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Common Footer -->
    <footer>
        <p>&copy; 2025 My Website. All rights reserved.</p>
    </footer>
</body>
</html>

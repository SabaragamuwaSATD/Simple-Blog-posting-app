<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @auth
        <p>Welcome {{ auth()->user()->name }}</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>
    @else
        <h2>You're Not Log in</h2>
        <form action="/login" method="GET">
            @csrf
            <button>Login</button>
        </form>
    @endauth
    
</body>
</html>
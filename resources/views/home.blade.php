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
    <div style="border: 3px solid black">
        <h2>Log In</h2>
        <form action="/register" method="POST">
            @csrf
            <label for="email">Email</label>
            <input name="email" type="text" placeholder="Email">
            <label for="password">Password</label>
            <input name="password" type="password" placeholder="Password">
            <button>Login</button>
        </form>
        <form action="/register" method="GET">
            @csrf
            <button>Register</button>
    </div>
    @endauth
    
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @csrf
    <div style="border: 3px solid black">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <label for="name">User Name</label>
            <input name="name" type="text" placeholder="User Name">
            <label for="email">Email</label>
            <input name="email" type="text" placeholder="Email">
            <label for="password">Password</label>
            <input name="password" type="password" placeholder="Password">
            <label for="cpassword">Confirm Password</label>
            <input name="cpassword" type="password" placeholder="Confirm Password">
            <button>Submit</button>
        </form>
    </div>
</body>
</html>
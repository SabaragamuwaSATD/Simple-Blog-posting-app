<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="/edit-post/{{$post->id}}" method="POST" style="border: 3px solid #007BFF; padding: 20px; width: 300px; margin: 0 auto; text-align: center; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        @csrf
        <div style="margin-bottom: 15px;">
            @method('PUT')
            <input type="text" name="title" value="{{$post->title}}" type="text" name="title" placeholder="Title" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px;">
        </div>
        <div style="margin-bottom: 15px;">    
            <textarea name="body" name="body" placeholder="Body" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; height: 100px;">{{$post->body}}</textarea>
        </div>
        <button style="width: 100%; padding: 10px; background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer;">Save Changes</button><br><br>
        <button style="width: 100%; padding: 10px; background-color: #02541f; color: white; border: none; border-radius: 5px; cursor: pointer;">Cancel</button>
    </form>
</body>
</html>
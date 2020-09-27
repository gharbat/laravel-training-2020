<html>
<head>
    <title>add new post</title>
</head>
<body>
<form action="/add" method="post">
    @csrf
    <input type="text" name="title">
    <br>
    <textarea name="body" id="" cols="30" rows="10"></textarea>
    <br>
    <button type="submit">add new post</button>
</form>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Admin</h1>
<form action="/task" method="post">
    <input type="hidden" name="_method" value="POST">
    <p>Title of Post</p>
    <input type="text" name="title">
    <p>About of Post</p>
    <input type="text" name="About">
    <input type="submit" value="Add Post">
    @csrf
</form>
<div class="modal">
    <div>{{ $slot }}</div>
    <div class="close button etc"> ... </div>
</div>
<!-- в другом шаблоне -->
@component('partials.modal')
    <p>The password you have provided is not valid.
        Here are the rules for valid passwords: [ ... ]</р>
        <р><а href="#"> ... </а></p>
@endcomponent
</body>
</html>

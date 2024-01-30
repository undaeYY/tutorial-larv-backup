<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        @foreach($errors->all() as $error)
            {{$error}}</br>
        @endforeach
        @csrf
        <input type="text" name="tens" placeholder="TEN SACH"><br>
        <input type="text" name="gias" placeholder="GIA SACH"><br>
        <input type="text" name="phuk" placeholder="PHU KIEN"><br>
        <input type="submit" value="SAVE">
    </form>
</body>
</html>
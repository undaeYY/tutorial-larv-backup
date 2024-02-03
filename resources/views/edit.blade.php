<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <form method="post" action="{{url('update')}}">
        @foreach($errors->all() as $error)
            {{$error}}</br>
        @endforeach
        @csrf
        @if($data)
        <input type="text" name="tens" placeholder="TEN SACH" value="{{$data->tensach}}"><br>
        <input type="text" name="gias" placeholder="GIA SACH" value="{{$data->giasach}}"><br>
        <input type="text" name="phuk" placeholder="PHU KIEN" value="{{$data->phukien}}"><br>
        <input type="submit" value="SAVE">
        @else
            <h1>KHONG CO DU LIEU</h1>
        @endif
    </form>
</body>
</html>
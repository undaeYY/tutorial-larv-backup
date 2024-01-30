<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
<style>
table, th, td {
  border: 1px solid;
}
</style>
</head>
<body>

<h2>SHOW DATABASE</h2>

<table>
  <tr>
    <th>ten sach</th>
    <th>phu kien</th>
    <th>gia sach</th>
    <th>thao tac</th>
  </tr>
  @if(isset($data))
  @foreach($data as $row)
  <tr>
    <td>{{$row->tensach}}</td>
    <td>{{$row->phukien}}</td>
    <td>{{$row->giasach}}</td>
    <td> <a href="{{url('edit/'.$row['id'])}}">EDIT</a>
    <a href="{{url('delete/'.$row['id'])}}">DELETE</a></td>  
  </tr>
  @endforeach
  @endif
</table>
</body>
</html>
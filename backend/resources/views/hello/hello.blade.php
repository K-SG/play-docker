<!DOCTYPE html>
<html>
<head>
<title>基本</title>
</head>
    <body>
        <h1>DBから表示しているよ<h1>
            <table border="1">
                <tr><th>ID</th><th>Name</th><th>Mail</th><th>Age</th></tr>
                <br>
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item -> id}}</td>
                        <td>{{$item -> name}}</td>
                        <td>{{$item -> mail}}</td>
                        <td>{{$item -> age}}</td>
                    </tr>
                @endforeach
            </table>
    </body>
</html>
<html>
    <body>
        <h1>DBから表示しているよ<h1>
        <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
        <br>
        @foreach ($items as $item)
            <tr>
                <td>{{$item -> name}}</td>
                <td>{{$item -> mail}}</td>
                <td>{{$item -> age}}</td>
            </tr>
        @endforeach
    </body>

</html>
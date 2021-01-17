<!DOCTYPE html>
<html>
<head>
<title>基本</title>
</head>
    <body>
        <form action="/usercreate" method="post" class="user_create_form" id="id_create_form" >
            @csrf
            <input type="text" name="name" id="create_name" class="create_textbox" placeholder="表示名" maxlength="15" value={{old('name')}}><br>
            <input type="text" name="email" id="create_mail" class="create_textbox" placeholder="メールアドレス" maxlength="100" value={{old('mail')}}><br>
            <input type="password" name="password" id="create_password1" class="create_textbox" placeholder="パスワード" maxlength="20" value={{old('password')}}><br>
            <input type="submit" value="送信">
        </form>

        <form action="/usershow" method="post" class="user_create_form" id="id_create_form" >
            @csrf
            <p>検索検索</p>
            <p>名前検索</p>
            <input type="text" name="name" id="create_name" class="create_textbox" placeholder="表示名" maxlength="15" value={{old('name')}}><br>
            <input type="submit" value="送信">
        </form>
        <h1>DBから表示しているよ<h1>


            <table border="1">
                <tr><th>ID</th><th>Name</th><th>Mail</th><th>作成時間</th><th>更新時間</th></tr>
                <br>
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item -> id}}</td>
                        <td>{{$item -> name}}</td>
                        <td>{{$item -> email}}</td>
                        <td>{{$item -> created_at}}</td>
                        <td>{{$item -> updated_at}}</td>
                    </tr>
                @endforeach
            </table>
    </body>
</html>
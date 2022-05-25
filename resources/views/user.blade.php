<html>
    <head>

    </head>
    <body>
    logged in as {{ session()->get('user')->email }}
    | <a href="/logout">Log Out</a>
    | <a href="/editmyuser?rid={{ session()->get('user')->id }}">Edit</a>
    | <a href="/userlist">User List</a>
    </body>
</html>

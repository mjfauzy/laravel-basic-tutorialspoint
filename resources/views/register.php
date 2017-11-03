<html>
<head>
    <title>Form Registration</title>
</head>
<body>
    <form action="/user/register" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>" />
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="name" />
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" />
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" />
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Register" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
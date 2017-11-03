<html>
<head><title>Login Form</title></head>
<body>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <?php
        echo Form::open(array('url' => '/validation'));
    ?>
    <table>
        <tr>
            <th colspan="3" align="center">LOGIN</th>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?php echo Form::text('username'); ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><?php echo Form::password('password'); ?></td>
        </tr>
        <tr>
            <td colspan="3" align="right"><?php echo Form::submit('Login'); ?></td>
        </tr>
    </table>
    <?php
        echo Form::close();
    ?>
</body>
</html>
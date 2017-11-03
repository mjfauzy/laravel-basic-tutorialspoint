<html>
<head><title>Form Using Laravel</title></head>
<body>
    <?php
        echo Form::open(array('url','foo/bar'));
            echo Form::label('Username');
            echo Form::text('username');
            echo '<br />';
            echo Form::label('Email');
            echo Form::text('email','example@gmail.com');
            echo '<br />';
            echo Form::label('Password');
            echo Form::password('password');
            echo '<br />';
            echo Form::label('Checkbox');
            echo Form::checkbox('name','value');
            echo '<br />';
            echo Form::label('Radio Button');
            echo Form::radio('name','value');
            echo '<br />';
            echo Form::label('File');
            echo Form::file('image');
            echo '<br />';
            echo Form::label('Combobox');
            echo Form::select('size',array('L' => 'Large', 'S' => 'Small'));
            echo '<br />';
            echo Form::submit('Click me!');
        echo Form::close();
    ?>
</body>
</html>
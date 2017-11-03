<html>
<head><title>Upload File Using Laravel</title></head>
<body>
    <?php
        echo Form::open(array('url' => '/uploads', 'files' => 'true'));
            echo 'Select the file to upload.';
            echo Form::file('image');
            echo Form::submit('Upload file');
        echo Form::close();
    ?>
</body>
</html>
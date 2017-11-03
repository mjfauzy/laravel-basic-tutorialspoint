<html>
<head>
    <title>Update Student</title>
</head>
<body>
    <form action="/edit/<?php echo $users[0]->id; ?>" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="stud_name" value="<?php echo $users[0]->name; ?>" /></td>
            </tr>
            <tr>
                <td>Age</td>
                <td>:</td>
                <td>
                    <select name="stud_age">
                        <?php for($i=17; $i<=30; $i++): ?>
                        <option value="<?php echo $i; ?>" <?php if($i == $users[0]->age) echo "selected"; ?>><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Update" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
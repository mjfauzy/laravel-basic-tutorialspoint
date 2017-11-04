<html>
<head>
    <title>Student Management | Add</title>
</head>
<body>
    <form action="/addstudent" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />

        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input type="text" name="stud_name" /></td>
            </tr>
            <tr>
                <td>Age</td>
                <td>:</td>
                <td>
                    <select name="stud_age">
                        <?php for($i=17; $i<=30; $i++): ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Add" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
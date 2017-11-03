<html>
<head>
    <title>View Student Records</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->age}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br />
    <a href="insert">Add Student</a>
</body>
</html>
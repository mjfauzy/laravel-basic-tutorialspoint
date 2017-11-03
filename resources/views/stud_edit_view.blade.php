<html>
<head>
    <title>View student records</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->age}}</td>
                <td><a href='edit/{{$user->id}}'>Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
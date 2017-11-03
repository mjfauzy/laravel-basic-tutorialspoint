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
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->age}}</td>
                <td><a href="delete/{{$user->id}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
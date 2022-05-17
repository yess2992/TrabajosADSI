<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        h1 {
            text-align: center;
            color: rgb(16, 102, 111);
        }
        body {
            font-family: 'Nunito', sans-serif;
            color: #666;
        }
        th {
            background: rgb(16, 102, 111);
            color: black;
        }

        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 80%;

        }
        table tr:nth-child(even){
            background-color: #eee;
        }
        table th,
        table td {
            border: 1px solid #999;
            padding: 10px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>List All Users</h1>
<hr>
<table class="flex justify-center flex">
    <thead>
        <tr>
            <th>ID</th>
            <th>fullname</th>
            <th>Email</th>
            <th>Age</th>
            <th>Create</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id}}</td>
            <td>{{ $user->fullname}}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->birthdate}}</td>
            <td>{{ $user->create_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relationship</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>User Name</th>
                <th>Company Name</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->company->name }}</td>
                    <td>
                        @if($user->image)
                            <img src="{{ asset('storage/' . $user->image) }}" alt="User Image">
                        @else
                            No image available
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
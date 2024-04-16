<!DOCTYPE html>
<html>
<head>
    <title>Styled Table</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
            </tr>
            @foreach ($data as $id => $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->address}}</td>
            </tr>

            @endforeach
        </thead>
    </table>
    <style>
        .styled-table {
            width: 50%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        .styled-table th,
        .styled-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .styled-table th {
            background-color: #f2f2f2;
            color: #333;
        }

        .styled-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

    </style>
</body>

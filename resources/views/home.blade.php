@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        /* table */
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h1>Laravel Coding Test</h1>
    <p> @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    {{ __('You are logged in!') }}</p>
    <div>
        @hasanyrole('Super Admin')
        <button><a href="{{ route('user.show')}}">Manage Users</a></button>
        @endhasanyrole
        @hasanyrole('User')
        <button><a href="{{ route('project.index')}}">Add Project</a></button>
        <button><a href="{{ route('task.index')}}">Add Task</a></button>
        @endhasanyrole
    </div>
    <br />
    <!-- <div>
        <table>
            <thead>
                <tr>
                    <th>List of Project</th>
                    <th>List of Task</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
        </table>
    </div> -->

</body>

</html>

@endsection
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

        {{-- Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            body
            {
                font-family: 'Ubuntu', sans-serif;
            }
            header, footer
            {
                padding: 20px;
                background-color: green;
                color: white;
                text-align: center;
            }
            table, th, td
            {
                 border: 1px solid green;
                 text-align: center;
                 color: green;
            }
            footer{
                margin-top: 30px;
                position:absolute;
                bottom:0;
                width:100%;
            }
        </style>
    </head>
    <body>
        {{-- Header Section --}}
        <header>
            <h3>To Do List</h3>
        </header>
        {{-- Main Section --}}
        <main class="container">
            <div style="text-align: right; margin: 15px">
                <a href="/" class="btn btn-success">Back</a>
            </div>

            <form action="save" style="text-align: center">
                <label for="name">Add New Task</label>
                <input type="text" name="name" placeholde="Add New Task" class="form-control">
                <input style="margin: 15px" type="submit" value="Save" class="btn btn-success">
            </form>
        </main>
        <footer>
            <p>Created by Monaya</p>
        </footer>
    </body>
</html>

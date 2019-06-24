<?php

?>

<html>
    <head>
        <title>Students</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            #main{
                margin-top: 40px;
            }
        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
    </head>
    <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- navbar navbar-expand-sm bg-dark navbar-dark -->
        <a class="navbar-brand" href="/home">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/student">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/fee">Payments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/newstudent"><button class="btn btn-outline-success btn-sm" type="submit">New Student</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/newfee"><button class="btn btn-outline-success btn-sm" type="submit">New Payment</button></a>
                </li>
            </ul>
        </div>
        </nav>
    <div id ="main" class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
    <table class="table table-dark table-striped table-bordered table-success">
   <thead>
   <tr>
       <th scope="col">Student ID</th>
       <th scope="col">Name</th>
   </tr>
   </thead>

   <tr>
       @foreach ($students as $student)
   </tr>
           <td>{{$student->id}}</td>
           <td>{{$student->name}}</td>
       @endforeach
   </table>
    </div>
    </div>


    </body>
</html>

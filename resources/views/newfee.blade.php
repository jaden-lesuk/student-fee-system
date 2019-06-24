<?php
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>New Payment</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
        #entry{
            margin-top: 20px;
            padding-left: 20px;
        }
        .useful{
            color: white;
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
        <div  id ="entry" class="col-md-4">
            <div class= "card card-body bg-dark">
            <h2 class="useful">Enter payment details:</h2>
            <form action="/register_fee" method="post">
                @csrf
                <div class="form-group">
                    <label for="student_id" class="useful">Student ID:</label>
                    <input type="textarea" class="form-control" id="student_id" name="student_id" placeholder="1">
                </div>

                <div class="form-group">
                    <label for="amount" class="useful">Amount:</label>
                    <input type="textarea" class="form-control" id="amount" name="amount" placeholder="100">
                </div>

                <label for="registered_on" class="useful">Registered on:</label>
            <input type="date" class="form-control" id="registered_on" name="registered_on" placeholder="dd/mm/yyyy">
            <br>
                <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-success btn-block">
                </div>
            </form>
            </div>
        </div>
    </body>
</html>



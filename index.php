<?php
include "connections.php";
include "functions.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <link href="searchpage.css" rel="stylesheet">
</head>
<body>
<div class="search">
    <form method="get" action="index.php">
        <div class="form-group bars">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <select class="form-control" id="type" name="select">
                            <option disabled selected>Options</option>
                            <option name="name">Name</option>
                            <option>Phone</option>
                            <option>Email</option>
                            <option>Address</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name ="text" class="form-control" id="text" placeholder="Enter Details">
                    </div>
                    <div class="col-md-3 col-sm-12 submit">
                        <button type="submit" id="search" name="search" class="btn btn-success">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
if(isset($_GET['search'])){
    printAll();
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</html>
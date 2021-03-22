<?php


        //connect to the database
        $servername = "localhost";
        $username = "root";
       
        $password = "";
        $database = "SPARKSdb";

        //create a connection
        $conn = mysqli_connect($servername,$username,$password,$database);

        //Die if the connection is not formed
        if(!$conn){
            die("Sorry we failed  to connect ".mysqli_connect_error());
        }
        ?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>TRANSACTION</title>
</head>
<body>
    <div class="container">

        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <img src="b.svg " alt="" height="30px" width="22px">
                <a class="navbar-brand" href="#"> ORIENTAL BANK</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view.php">View Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="transaction.php">Transaction History</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
   


        <table class="content-table table table-hover">
            <thead>
            <tr>
            <th>Transaction ID</th>
            <th>Sender </th>
            <th>Receiver </th>
            <th>Amount</th>
            <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <?php
         $sql = "SELECT * FROM `Transactions`";
         $result = mysqli_query($conn,$sql);
         while($row = mysqli_fetch_assoc($result)){
             echo  "<tr>
             <th scope='row'>". $row['Sno'] ."</th>
             <td>". $row['Sender'] ."</td>
             <td>" .$row['Receiver'] ."</td>
             <td>".$row['Amount']."</td>
             <td>".$row['Date']."</td>
         </tr>";

        
         echo "<br>";
         }

        ?>
            </tbody>
        </table>
        </div>
         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
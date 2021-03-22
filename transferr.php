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

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          // $title = $_POST[''];
          $sender = $_POST['from'];
          $receiver =  $_POST['to'];
          $amount = $_POST['amount'];


          switch($sender){
            case 1:$sender = "Ritik jain";
            break;
            case 2:$sender = 	"Dristi Pathak";
            break;
            case 3:$sender = 	"Dinesh Taneja";
            break;
            case 4:$sender = 	"riya jain";
            break;
            case 5:$sender = "satyam sharma";
            break;
            case 6:$sender = "shoaib qureshi";
            break;
            case 7:$sender = 	"hardik pandya";
            break;
            case 8:$sender = "shreya sinha";
            break;
            case 9:$sender ="Priyam pant";
            break;
            case 10:$sender =	"Shweta Tiwari";
            break;


   }

   switch($receiver){
    case 1:$receiver = "Ritik jain";
    break;
    case 2:$receiver = 	"Dristi Pathak";
    break;
    case 3:$receiver = 	"Dinesh Taneja";
    break;
    case 4:$receiver = 	"riya jain";
    break;
    case 5:$receiver = "satyam sharma";
    break;
    case 6:$receiver = "shoaib qureshi";
    break;
    case 7:$receiver = 	"hardik pandya";
    break;
    case 8:$receiver = "shreya sinha";
    break;
    case 9:$receiver ="Priyam pant";
    break;
    case 10:$receiver =	"Shweta Tiwari";
    break;

}

          $sql3= "SELECT * FROM `dbUser` WHERE `Name` ='$sender'";
          $result = mysqli_query($conn,$sql3);
         
          $row= mysqli_fetch_assoc($result);
          $balance = $row['Balance'];
          // echo $balance;
          
         
        
          if($amount > $balance){
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
              <strong>sorry!</strong> Insufficient Balance,Please enter a valid amount .
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
           
          }
          else{

         




       


         $sql1="UPDATE `dbUser` SET Balance=Balance-$amount where `Name`='$sender'";
         $sql2="UPDATE `dbUser` SET Balance=Balance+$amount where `Name`='$receiver'";
         mysqli_query($conn,$sql1);
         mysqli_query($conn,$sql2);
           
          $sql = "INSERT INTO `Transactions`(`Sender`,`Receiver`,`Amount`,`Date`) VALUES('$sender','$receiver','$amount',current_timestamp())";
          $result = mysqli_query($conn,$sql);

          if($result){
              echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>Your transaction is successful.</strong> 
              <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
          }
          else
          {
              echo "the record was not inserted due to this error -->".mysqli_error($conn);
          }
        }
      }
      ?>

        
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Transfer</title>
  </head>
  <body>
  <div class="container">

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="b.svg " alt="" height="30px" width="22px">
        <a class="navbar-brand" href="#">ORIENTAL BANK</a>
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
</div>

<div class="container my-3">
        <h2>Tranfer Money</h2>
        <form method="post" action="/internship/transferr.php">
      
        <select class="form-select" name="from" aria-label="Default select example">
        <option selected>Transfer From</option>
        <?php



        $i=1;
         $sql = "SELECT * FROM `dbUser`";
         $result = mysqli_query($conn,$sql);
         while($row = mysqli_fetch_assoc($result)){
             echo  "
            
             <option value=\"".$i."\">".$row['Name']."(".$row['Balance'].")"."</option>
        
            
             ";

             $i= $i+1;
      
         }
         echo "</select>";

        ?>


           
<br>

<select class="form-select" name="to" aria-label="Default select example">
        <option selected>Transfer To</option>
        <?php



        $i=1;
         $sql = "SELECT * FROM `dbUser`";
         $result = mysqli_query($conn,$sql);
         while($row = mysqli_fetch_assoc($result)){
             echo  "
            
             <option value=\"".$i."\">".$row['Name']."(".$row['Balance'].")"."</option>
        
            
             ";

             $i= $i+1;
      
         }
         echo "</select>";

        ?>



<br>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" aria-describedby="emailHelp">

            </div>

     


            
            <button type="submit" class="btn btn-primary">Transfer</button>
        </form>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
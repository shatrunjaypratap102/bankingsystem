<?php


        //connect to the database
        $servername = "localhost";
        $username = "root";
       
        $password = "";
        $database = "sparks";

        //create a connection
        $conn = mysqli_connect($servername,$username,$password,$database);

        //Die if the connection is not formed
        if(!$conn){
            die("Sorry we failed  to connect ".mysqli_connect_error());
        }

        $sql="SELECT * FROM `users`";
        $result= mysqli_query($conn,$sql);

        echo mysqli_num_rows($result);

        $sql3= "SELECT `Balance` FROM `users` WHERE `Name` ='riya jain'";
          $balance = mysqli_query($conn,$sql3);
         
          $rowcount=mysqli_num_rows($balance);
          echo $rowcount;
        ?>
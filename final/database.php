<?php
        $servername = "162.241.244.73";
        $username = "izzyheal_iah";
        $password = "b1ackb3lt";
        $dbname = "izzyheal_recipe"; 
        
        mysqli_connect($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          ?>


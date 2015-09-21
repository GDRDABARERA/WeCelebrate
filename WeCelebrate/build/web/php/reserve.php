<?php

if (isset($_POST['reserve'])) {
    
        $username="root";
        $password="";
        $hostname="localhost:1234";

        $dbhandle = mysql_connect($hostname,$username,$password) or die("Unable to connect to MYSQL");

        //echo "Connected to mySQL<br>"
        $selected =mysql_select_db("wecelebrate",$dbhandle) or die("Could not select a db");
        
        $firstname =$_POST['first_name'];
        $lastname=$_POST['last_name'];
        $town=$_POST['town'];
        $datepicker=$_POST['datepicker'];
        $timefrom=$_POST['reserve_time_from'];
        $timeto=$_POST['reserve_time_to'];
        $phone=$_POST['phone'];
        $nic=$_POST['nic'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $cost=$_POST['cost'];
        
       // $sql = "INSERT INTO employee ". "(emp_name,emp_address, emp_salary, join_date) ". "VALUES('$emp_name','$emp_address',$emp_salary, NOW())";
         $sql = "INSERT INTO reservation ". "(first_name,last_name,town,reserve_date, reserve_time_from,phone,nic,email,reason,reserve_time_to,payment) ". "VALUES('$firstname','$lastname','$town', '$datepicker','$timefrom','$phone','$nic','$email','$subject','$timeto','$cost')";
         
         $result=  mysql_query($sql, $dbhandle);
         if(! $result )
            {
               die('Could not enter data: ' . mysql_error());
            }
            $Message="You have successfully reserved the event !!";
           // echo "Entered data successfully\n";
            header("Location: ../index.php#reservation?Message=" . urlencode($Message));
            mysql_close($dbhandle);             
        

}

?>
<?php


 if (isset($_POST['button_reserve'])) {
                $tableType =$_POST["table_type"];
                $tableNo =$_POST["table_count"];
                $chairType=$_POST["chair_type"];
                $chairNo=$_POST["chair_count"];
                $datentime=  date("Y-m-d h:i:sa");
        
        $username="root";
        $password="";
        $hostname="localhost:1234";

        $dbhandle = mysql_connect($hostname,$username,$password) or die("Unable to connect to MYSQL");

        //echo "Connected to mySQL<br>"
        $selected =mysql_select_db("wecelebrate",$dbhandle) or die("Could not select a db");

        $result1 = mysql_query('SELECT  No_items from facility where facilityName="'.$tableType.'"');
        $result2 = mysql_query('SELECT  No_items from facility where facilityName="'.$chairType.'"');
        
        $raw1= mysql_fetch_array($result1 );
        $raw2= mysql_fetch_array($result2 );
         
          $tall=$raw1{'No_items'};          
          $call=$raw2{'No_items'};         
           
          if(($tall<$tableNo)||($call<$chairNo)){
              echo 'all tables = "'.$tall.'"';
               echo 'all chairs ="'.$call.'"';
              echo("<p>Can not reserve that much amount of resources!</p>\n");
              
          }else{
            //  $result3=  mysql_query("INSERT INTO Order (chair_resourceID,no_chairs,table_resourceID,no_tables,dateNtime) VALUES ('$chairType','$chairNo','$tableType','$tableNo','$datentime')")or die(mysql_error());
              
               mysql_close();
               // header("Location: ../arangeTable.html");
                header("Location: ../birthdayCustomize.php");
          }

     /*   while(($row1 = mysql_fetch_array($result1))&&($row2 = mysql_fetch_array($result2))){
             
            
             
          
        } */
        
       
        
 }
        
        
?>  
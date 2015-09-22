<?php


 if (isset($_POST['check'])) {
     
        $username="root";
        $password="";
        $hostname="localhost:1234";

        $dbhandle = mysql_connect($hostname,$username,$password) or die("Unable to connect to MYSQL");

        //echo "Connected to mySQL<br>"
        $selected =mysql_select_db("wecelebrate",$dbhandle) or die("Could not select a db");

        $result = mysql_query("SELECT reserve_date,time_from,time_to,eventType from availability");
        

        while($row = mysql_fetch_array($result)){
                $radio = $_POST['options'];
                if(($row{'reserve_date'}==$_POST['t_date'])&&($row{'time_from'}==$_POST['start_time'])&&($row{'time_to'}==$_POST['end_time'])&&($row{'eventType'}==$radio)){
                      echo "THE DATE AND TIME IS NOT AVAILABLE"; 
                      header("Location: ../checkAvailabilityError.html");
               
                      
                      
                }else{
                   
                             
                            // echo $radio;
                           //  $status="true";
                                    if ($radio=="Birthday") {

                                       header("Location: ../birthdayCustomize.php");

                                    }
                                    else if ($radio =="Anniversary") {
                                       // echo $_POST['t_date'];
                                      //  echo $_POST['t_time'];
                                        echo $_POST['options'];
                                      //  header("Location: ../anniversaryCustomize.html");
                                    }
                                    else if ($radio == "Conference") {

                                        header("Location: ../customize.html");
                                    } 
                                    
                                   
                           }
                           
                 /*          
                  
                    switch ($status){
                         case "Birthday":    
                                 header("Location: ../birthdayCustomize.html");
                                 break;
                             
                             
                         case "Anniversary":
                             header("Location: ../anniversaryCustomize.html");
                             break;
                         
                         
                         default :
                            header("Location: ../customize.html");
                            break;
                    }*/
                }

          }
        
        
?>  
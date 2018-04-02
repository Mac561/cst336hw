<?php
session_start();

if(isset($_POST["firstName"])){
    $session["firstName"]=$_POST["firstName"];
    
}

if(isset($_POST['lastName'])){
    $session["lastName"]= $_POST["lastName"];
    
}

echo " Welcome ".$session["firstName"]. " " .$session["lastName"]  ;


?>
<br> <br/>
<!DOCTYPE html>
<html>
    <head>
        <title>pdata</title>
            <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
         <a href="logout.php">Logout</a>
         <hr>
         <br> <br/>
        <div>
        <?php
        session_start();
        if(isset($_POST['state'])){
            echo " I will like to visit:".$_POST["state"]."<br> <br/>";
             if($_POST['state']=="Arizona"){
                 
                 echo '<img src="img/AZ.jpg" alt="Arizona" id="img" <br><br/>';
             }
             
             elseif($_POST['state']=="California"){
                 echo '<img src="img/CA.jpg" alt="California" id="img" <br> <br/> ';
             }
             
              elseif($_POST['state']=="Illinois"){
                 echo '<img src="img/IL.jpg" alt="Illinois" id="img" <br> <br/>';
             }
             
             elseif($_POST['state']=="Liberia"){
                 echo '<img src="img/LIB.jpg" alt="Liberia" id="img" <br> <br/>';
             }
             
             elseif($_POST['state']=="Nigeria"){
                 echo '<img src="img/NIG.jpg" alt="Nigeria" id="img" <br> <br/>';
             }
             
        }
        
        ?>
        </div>
        <br><br/>
        <!--////////////////////////////////////////////////////////////////////-->
        <div>
            <?php
            session_start();
            if(isset($_POST['degreeChoices'])){
                echo "Highest Degree Obtained:" ." ".$_POST["degreeChoices"] ."<br> <br/>" ;
                if($_POST['degreeChoices']=="High School"){
                    // echo------------------;
                    echo " Good job but it's not enouth Try and get your College degree";
                }
                
                elseif($_POST['degreeChoices']=="College"){
                    // echo "-------------------------------------------"
                     echo " Well done!!!!";
                }
            }
            
            ?>
        </div>
        <br><br/>
        <!--////////////////////////////////////////////////////////////////////-->
        <div>
            <?php
            session_start();
            if(isset($_POST['sports'])){
                echo "My favorite is : " ." ".$_POST["sports"]."<br> <br/>";
                if($_POST['sports']=="basket"){
                     echo "<iframe width='560' height='315' src='https://www.youtube.com/embed/rvOlvSgxkTk'
                     frameborder='0' allow='autoplay; encrypted-media' 
                     allowfullscreen></iframe>";
                        
                
                }
                
                elseif ($_POST['sports']=="soccer") {
                    // code...
                    echo  "<iframe width='560' height='315' src='https://www.youtube.com/embed/O1FglMjJV_8' 
                    frameborder='0' 
                    allow='autoplay; encrypted-media' allowfullscreen></iframe>";
                            
                    
                }
            }
            ?>
        </div>
          
    </body>
</html>
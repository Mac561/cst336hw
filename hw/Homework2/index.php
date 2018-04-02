<?php
    // Start session
     session_start();

    // $_XXXXXX are objects provided by PHP
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // $_POST will contain all values provided by 
        // inputs with name attributes
       if(empty($_POST['firstName'])){
           echo "you did't enter your First Name";
       }
       
       elseif(empty($_POST['lastName'])){
           echo "you did not enter your Last Name";
       }
       
       elseif(empty($_POST['state'])){
           echo "got to enter a State";
       }
       
       elseif(empty($POST['Highschool'])){
           echo "Enter a school";
       }
       
        elseif(empty($POST['sport'])){
           echo "Enter a sport";
       }
        
        else{
            
             header('Location: '. 'index.php');
            exit();
        }    
            // If I take no action, I will go right back to login
            // What do I want to do? Go to player
           
    }
        
        // var_dump($_POST);1
?>


<!DOCTYPE html>
<html>

<head>
    <title>index</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
      <a href="index.html" class="w3-bar-item w3-button">HOME</a>
</head>

<body>
    <div name="myindex">
        <form method="POST" action="pdata.php">
            First Name:<br>
            <input type="text" name="firstName" size="25" /> <br /> Last Name:<br>
            <input type="text" name="lastName" size="25" /> <br /> Feedback: <textarea id="feedback" cols="30" rows="3"></textarea><br/><br />
            Will like to visit: <br>
            <select name="state">
                <option value="Arizona">Arizona</option>
                <option value="California">California</option>
                <option value="Illinois">Illinois</option>
                <option value="NigeriaG">Nigeria</option>
                <option value="Liberia">Liberia</option>
            </select>
            <br /><br /> Highest Degree Obtained: <br>
            <input type="radio"  id="item1"  name="degreeChoices"  value="High School" >
            <label for="item1">High School Diploma</label> <br>
            <input type="radio"  id="item2"  name="degreeChoices" value="College">
            <label for="item2">College</label>
            
            <br><br> Sports I like: <br>
            
            <input type="checkbox" id="basket"  name="sports" value="basket">
            <label for="basket"> Basketball </label> <br>
            <input type="checkbox" id="soccer" name="sports" value="soccer">
            <label for="soccer"> Soccer </label>
            
            <br/><br/>
            
            <input type="submit" value="Submit Data" />
        </form>
    </div>

</body>

</html>

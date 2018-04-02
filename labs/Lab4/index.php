<?php
   
    include 'DBConnection.php';
    
    $conn = getDataBaseConnection('lab4');
    
    function getDeviceTypes(){
        
        global $conn;
        $sql = "SELECT DISTINCT (deviceType)
                FROM device
                ORDER by deviceType";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchALL(PDO::FETCH_ASSOC);
        
        print_r($records);
        
        foreach($records as $record){
            echo "<option>" . $record['deviceType']. "</option>";
        }
    }
    
    
    function displayDevices(){
        //echo " In displayDevices() ";
        global $conn;
        
        $sql = "SELECT * FROM device WHERE 1";
        
        if(isset($_GET['submit'])){
            $namedParameters = array();
            
            if(!empty($_GET['deviceName'])){
                //The following query allows SQL injection due to the single quotes.
            //$sql .= " AND deviceName LIKe '%" . $_GET['deviceName'] . "%'";
            $sql .= " AND deviceName LIKE :deviceName"; // using named parameters,
            //to avoid using single quotes, prevent hacking by sql injection.
                                            //^place holder
            $namedParameters[':deviceName'] = "%" . $_GET['deviceName'] . "%"; 
            
            }
        }
        
        if(!empty($_GET['deviceType'])){
            $sql .= " AND deviceType = :dType";
            $namedParameters[':dType'] = $_GET['deviceType'];
            
        }
        
        if(!empty($_GET['status'])){
            $sql .= " AND status = :stat";
            $namedParameters[':stat'] = "A";
            echo $_GET['status'];
        }
        
        if(!empty($_GET['orderByName'])){
            $sql .= " ORDER BY deviceName";
        }
        
        if(!empty($_GET['orderByPrice'])){
            $sql .= " ORDER BY price";
        }
        
        if(!empty($_GET['orderByStatus'])){
            $sql .= " ORDER BY status";
        }
        
        $stmt = $conn->prepare($sql);
        $stmt->execute($namedParameters);
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<table style='width:85%'>";
        
        
        foreach ($records as $record) {
            echo "<tr>";
            echo "<th>";
            echo $record['deviceName'] . " </th>";
            echo "<th> " . $record['deviceType'] . " </th>";
            echo "<th>" . $record['price'] . " </th>"; 
            echo "<th>" . $record['status'] . " </th> ";
                 // "<a href='checkoutHistory.php?deviceId=".$record['deviceId']."'> Checkout History </a> <br />";
            echo "</th>";
            echo "</tr>";
         }
         
         
         
         echo "</table>";
}
        
               
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        
        <title> Lab 4 Device Filter</title>
        
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id = "title_text">
        <h1>Tech Devices: Filtering Devices </h1>
        </div>
        
        <div id = "choices">
        <form action="">
            Device: <input type="text" name="deviceName" placeholder="Device name"/>
            Type:
            <select name="deviceType" id="device">
                <option value="">Select One</option>
                <?php
                   
                    getDeviceTypes();
            
                ?>
            </select>
            
            <input type="checkbox" name="available" id="available">
            <label for="available">Available</label>
            
            <br>
            Order by: 
            
                    
                <input type="radio" name="orderByName" id="orderByName" value="name"/>
                <label for="order">Name</label>
                <input type="radio" name="orderByPrice" id="orderByPrice" value="price"/>
                <label for="order"> Price </label>
           
            <input type="submit" name="submit" value="Search">
           </div>
        </form>
        
        <hr>
        <?=displayDevices()?>

    </body>
</html>
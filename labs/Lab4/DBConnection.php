<?php
function getDataBaseConnection($dbName) {
    $connUrl = getenv('JAWSDB_MARIA_URL');
    //$connUrl = "mysql://g69dk9ev0cbolfw2:p9w0204oqfeedrif@p2d0untihotgr5f6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/f347b2efijj5blaw";
    $hasConnUrl = !empty($connUrl);
    
    $connParts = null;
    if ($hasConnUrl) {
        $connParts = parse_url($connUrl);
    }
    
    $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
    $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : $dbName;
    $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
    $password = $hasConnUrl ? $connParts['pass'] : '';
    
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);    
    
    return $dbConn;
}

?>
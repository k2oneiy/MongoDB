


<?php

include 'vendor/autoload.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Mongo DB</title>
</head>
<body>
    <h2>Mongo DB</h2>
    <h4>READ</h4>
    
</body>
</html>

<?php

    $client = new MongoDB\Client("mongodb://127.0.0.1:27017");
    $db = $client->k2oneiy;
    $collection = $db->login;
    $result = $collection->find();
    foreach ($result as $res) {  
        echo $res['_id'],'',$res['name'], ' ', $res['password']."<br>";  
    }





?>
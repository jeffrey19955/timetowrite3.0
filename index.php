<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>TimeToWrite</title>
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <script type="text/javascript" src="libs/jquery.js"></script>
        <script>
        $(document).ready(function()
        {
            
        });
        </script>
    </head>
    <body>
  
        <?php       
        
        include('config.php');
        
        if(isset($_POST['login']));
        {
        $sql = "SELECT COUNT(*) 
                FROM `users` 
                WHERE (`username` = :user 
                AND `password` = :pass)
                GROUP BY `username`";
        
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(":user", $_POST['username']);
        $stmt->bindParam(":pass", $_POST['password']);
        $stmt->execute();
        
        $count = $stmt->fetch();
        echo "test";
        
        }
        
        $smarty->display('index.tpl');
        
        ?>
        
    </body>
</html>


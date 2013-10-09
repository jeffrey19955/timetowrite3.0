<?php       
        
        include('config.php');
        
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            echo $_POST['username'];
            echo $_POST['password'];
        }
        else{
            
        }
        
        $smarty->display('index.tpl');
        
?>
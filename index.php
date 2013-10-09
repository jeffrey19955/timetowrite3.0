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
        
        $smarty = new Smarty();
        
        $smarty->template_dir = "views";
        $smarty->compile_dir = "tmp";
        
        if(isset($_POST['username']) && !empty($_POST['username']) && !empty($_POST['password']));
        {
            
        }
        
        $smarty->display('index.tpl');
        
        ?>
        
    </body>
</html>


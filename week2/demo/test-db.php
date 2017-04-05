<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            require_once './autoload.php';
            
            $db = new DBPhone();
            $phones = $db->getAllPhones();
            
            echo var_dump($phones);
            
            include './views/view-phones.html.php';
            
            
        ?>
    </body>
</html>

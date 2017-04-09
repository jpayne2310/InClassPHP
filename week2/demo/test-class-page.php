<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php         
            include './models/TestClass.php';
            
            $test = new TestClass('testing');
                
            echo $test->getTest();
            
            ?><br /><?php
            $test->setTest('true');
             echo $test->getTest();
            ?><br /><?php
            
           echo $test->functionName();
        ?>
    </body>
</html>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      
        class Dog {
            
            public $name;
            public function __construct($name) {
                $this->name = $name;
            }

            public function bark() {
                
                echo "$this->name is barking <br />";
            }            
        }
        
        $beast = 'Dog';
        $action = 'bark';
        
        $dog = new $beast('Gabe');
             
        $dog->$action();
        ?>
    </body>
</html>

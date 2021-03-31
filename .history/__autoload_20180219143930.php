<?php
$directorys = array(
    'lib/',    
);

foreach($directorys as $directory)
        {
            //see if the file exsists
            if(file_exists($directory.$class_name . '.lib.php'))
            {
                require_once($directory.$class_name . '.lib.php');               
                
            } else{
                return;

        }
    }
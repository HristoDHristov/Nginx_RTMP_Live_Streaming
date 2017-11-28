<?php

$pattern = "/\\?(.*$)/i";

    if( !preg_match($pattern, $_GET['swfurl'], $matches) )
    {
        http_response_code(401);
        die("Validation error");
    }


if($matches[1] == "pass")

   {

    echo "Password and Username OK! ";
exit();

   }


else

   {

    http_response_code(401);
        die("Validation error");

   }

?>

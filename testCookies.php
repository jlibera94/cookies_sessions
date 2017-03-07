<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!-- Test Cookie Functions
     -->
<html xmlns = "http://www.w3.org/1999/xhtml">
  <head>
    <title> PHP cookies </title>
       
  </head>
  <body>
       <?php
           if (isset($_COOKIE["user"]))
			  echo "<h1> Welcome " . $_COOKIE["user"] . "! </h1>";
			else{
			  echo "<h1>Welcome guest!</h1>";
              setcookie("user", "Harry Potter", time()+3600);

            }
        ?>
  </body>
</html>


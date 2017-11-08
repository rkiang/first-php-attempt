<?php
$user = 'Ryan';
$message = 'Hello World';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/master.css" media="screen">
    <title>PHP</title>
  </head>
  <body>
        <ul>
        <li><?php echo $user . ': ' . $message; ?></li>
        </ul>
  </body>
</html>
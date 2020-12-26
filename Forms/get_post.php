
<!DOCTYPE html>
<html>
<head>
<title>Linda Angulo Lopez - Forms</title>
</head>
<body>
<h1> Forms: </h1>

<p>Guessing game...</p>
<form method="post">
   <p><label for="guess">Input Guess</label>
   <input type="text" name="guess" size="40" id="guess"/></p>
   <input type="submit"/>
</form>
<pre>
$_POST:
<?php
   print_r($_POST);
?>
$_GET:
<?php
   print_r($_GET);
?>
</pre>

<!-- http://localhost:81/Forms/guess.php?guess=2

$_POST:
Array
(
    [guess] => 3
)
$_GET:
Array
(
    [guess] => 2
) -->


<pre>ASCII ART:

                  
    /*     
    **  
    **      	
    **
    **
    **    
    **      	
    **
    **
    **             
    *********** 
    **********/
</pre>
</body>


<!DOCTYPE html>
<html>
<head>
<title>Linda Angulo Lopez - Variable Scope</title>
</head>
<body>
<h2>Variable Scopes: </h2>

<p>Normal Scope (isolated)</p>
<?php 
function tryzap() {
    $val = 100;
}

$val = 10;
tryzap();
echo "TryZap = $val\n";

 ?>

<pre>
                 
    /* 
    **********/
</pre>

<p>Global Scope (makes function's value global)</p>
<?php 
function dozap() {
    global $val;
    $val = 100;
}

$val = 10;
dozap();
echo "DoZap = $val\n";
echo "use with caution!";
 ?>

 <?php 
$x = 75;
$y = 25; 

function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
?>

<pre>
                 
    /* 
    **********/
</pre>

<p>Depending on the version or configuration of a particular PHP instance, some functions may be missing. To check that use...
</p>
<?php 
if (function_exists("array_combine")){
    echo "function_exists()";
} else {
    echo "Function does not exist";
}

 ?>
<pre>
                 
    /* 
    **********/
</pre>

<p>PHP info</p>
 
<?php
    phpinfo();
?>

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

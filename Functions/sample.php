
<!DOCTYPE html>
<html>
<head>
<title>Linda Angulo Lopez - Functions</title>
</head>
<body>

<h2>Call By Value</h2>
<!-- alias _ copies value -->
<?php
function double($alias) {
    $alias = $alias * 2;
    return $alias;
}
$val = 10;
$dval = double($val);
echo "Value = $val Doubled = $dval\n";

?>

<h2>Call By Reference</h2>
<!-- &$realthing _ changes the array! -->
<?php
function triple(&$realthing) {
    $realthing = $realthing * 3;
}

$val = 10;
triple($val);
echo "Triple = $val\n";

?>


<h2>Base Functions</h2>

<!-- string -->
<pre>
                
    /*  
    **
    */   
  </pre>

<?php
echo strrev(" .dlrow olleH");    echo str_repeat("Hip ", 2);    echo strtoupper("hooray!"); 
echo strlen("intro"); 
echo "\n";
?>

<!-- simplefun() -->
<pre>
                
    /*  
    **
    */   
  </pre>

<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg();
?>

<!-- return fun()
 -->
<?php
function greeting() {
    return "Hello";
}

print greeting() . " Glenn\n";
print greeting() . " Sally\n";

?>

<!-- Arguments -->
<pre>
                
    /*  
    **
    */   
  </pre>

  <?php
  function howdy($lang) {
    if ( $lang == 'es' ) return "Hola";
    if ( $lang == 'fr' ) return "Bonjour";
    return "Hello";
}

print howdy('es') . " Glenn\n";
print howdy('fr') . " Sally\n";


  ?>


  <pre>
                
    /*  
    **
    */   
  </pre>

<!-- Optional Arguments -->

<?php
function howdyOP($lang='es') {
    if ( $lang == 'es' ) return "Hola";
    if ( $lang == 'fr' ) return "Bonjour";
    return "Hello";
}

print howdyOP() . " Glenn\n";
print howdyOP('fr') . " Sally\n";

?>
  <pre>
                
    /*  
    **
    */   
  </pre>

  <pre>
                
    /*  
    **
    */   
  </pre>

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

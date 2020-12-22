
<!DOCTYPE html>
<html>
<head>
<title>Linda Angulo Lopez - Arrays</title>
</head>
<body>
<h1>PHP Arrays</h1>

<ol> 
    <li>array_key_exists($key, $ar) - Returns TRUE if key is set in the array</li>
$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";

if (array_key_exists('course',$za) ) {
    echo("Course exists\n");
} else {
    echo("Course does not exist\n");
}

echo isset($za['name']) ? "name is set\n" : "name is not set\n";
echo isset($za['addr']) ? "addr is set\n" : "addr is not set\n";

<li>PHP 7 - Null Coalescing Operator</li>

<?php
   // fetch the value of $_GET['user'] and returns 'not passed'
   // if username is not passed
   $username = $_GET['username'] ?? 'not passed';
   print($username);
   print("<br/>");

   // Equivalent code using ternary operator
   $username = isset($_GET['username']) ? $_GET['username'] : 'not passed';
   print($username);
   print("<br/>");
   // Chaining ?? operation
   $username = $_GET['username'] ?? $_POST['username'] ?? 'not passed';
   print($username);
?>

    <li>isset($ar['key']) - Returns TRUE if key is set in the array</li>

<?php
$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";

// PHP >= 7.0.0 only
$name = $za['name'] ?? 'not found';
$addr = $za['addr'] ?? 'not found';

echo("Name=$name\n");
echo("Addr=$addr\n");

// PHP < 7.0.0 equivalent
$name = isset($za['name']) ? $za['name'] : 'not found';


    <li>count($ar) - How many elements in an array</li>
<?php
    $stuff = array("Chuck","SI664");
    for($i=0; $i < count($stuff); $i++) {
       echo "I=",$i," Val=",$stuff[$i],"\n";
    }
?>
    <li>is_array($ar) - Returns TRUE if a variable is an array</li>

$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";
print "Count: " . count($za) . "\n";
if (  is_array($za) ) {
    echo '$za Is an array' . "\n";
} else {
    echo '$za Is not an array' . "\n";
}


    <li>sort($ar) - Sorts the array values (loses key)</li>

/* don't use sort() wipes out key
Array(
    [name] => Chuck
    [course] => WA4E
    [topic] => PHP
)
Array(
    [0] => Chuck
    [1] => PHP
    [2] => WA4E
)

*/    
$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";
$za["topic"] = "PHP";
print_r($za);
sort($za);
print_r($za);


    <li>ksort($ar) - Sorts the array by key</li>
        <li>asort($ar) - Sorts array by value, keeping key association</li>

    /* use ksort() & asort() */
$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";
$za["topic"] = "PHP";
print_r($za);
ksort($za);
print_r($za);
asort($za);
print_r($za);

/*
Array(
    [name] => Chuck
    [course] => WA4E
    [topic] => PHP
)

Array(
    [course] => WA4E
    [name] => Chuck
    [topic] => PHP
)

Array(
    [name] => Chuck
    [topic] => PHP
    [course] => WA4E
)

*/

<li>Exploding Arrays</li>

$inp = "This is a sentence with seven words";
$temp = explode(' ', $inp);
print_r($temp);

/*
Array(
    [0] => This
    [1] => is
    [2] => a
    [3] => sentence
    [4] => with
    [5] => seven
    [6] => words
)

*/
    <li>shuffle($ar) - Shuffles the array into random order</li>
</ol>

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

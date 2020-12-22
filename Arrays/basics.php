
<!DOCTYPE html>
<html>
<head>
<title>Linda Angulo Lopez - Arrays</title>
</head>
<body>
<h1>PHP Arrays</h1>

/*basic array*/
<?php
    $stuff = array("Hi", "There");
    echo $stuff[1], "\n";
?>

/* key maps to vaue*/

<?php
    $stuff = array("name" => "Chuck",
                    "course" => "WA4E");
    echo $stuff["course"], "\n";
?>

/*how to print*/
<?php
    $stuff = array("name" => "Chuck",
                    "course" => "WA4E");
    echo("<pre>\n");
    print_r($stuff);
    echo("\n</pre>\n");
?>

/*explicit print*/

<?php
   $stuff = array("name" => "Chuck", 
                   "course" => "SI664");
    var_dump($stuff);
?>

/*print FALSE*/
<?php
   $thing = FALSE;
echo("One\n");
print_r($thing);
echo("Two\n");
var_dump($thing);
?>

/* construct an array*/
$va = array();
$va[] = "Hello";
$va[] = "World";
print_r($va);

/* add items to array */
$za = array();
$za["name"] = "Chuck";
$za["course"] = "WA4E";
print_r($za);


/* loop through an array*/
<?php
    $stuff = array("name" => "Chuck",
                   "course" => "SI664");
    foreach($stuff as $k => $v ) {
       echo "Key=",$k," Val=",$v,"\n";
    }
?>

/* linear array

Key=0 Val=Chuck
Key=1 Val=SI664

*/
<?php
    $stuff = array("Chuck","SI664");
    foreach($stuff as $k => $v ) {
       echo "Key=",$k," Val=",$v,"\n";
    }
?>

/* counted loop*/

<?php
    $stuff = array("Chuck","SI664");
    for($i=0; $i < count($stuff); $i++) {
       echo "I=",$i," Val=",$stuff[$i],"\n";
    }
?>

/* nested arrays */

$products = array(
    'paper' =>  array( 
        'copier' => "Copier & Multipurpose", 
        'inkjet' => "Inkjet Printer", 
        'laser' => "Laser Printer", 
        'photo' => "Photographic Paper"),
    'pens' => array(
        'ball'  => "Ball Point", 
        'hilite' => "Highlighters", 
        'marker' => "Markers"),
    'misc' => array( 
        'tape'  => "Sticky Tape", 
        'glue'  => "Adhesives", 
        'clips' => "Paperclips") 
);


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
<a href="check.php">Click here to check the error setting</a>
<br/>
<a href="fail.php">Click here to cause a traceback</a>
</body>


<!DOCTYPE html>
<html>
<head>
<title>Linda Angulo Lopez - Forms</title>
</head>
<body>
<h1> Forms: HTML INjecTION</h1>

<?php
   $oldguess = isset($_POST['guess']) ? $_POST['guess'] : '';
?>
<p>Guessing game...</p>
<form method="post">
   <p><label for="guess">Input Guess</label>
   <input type="text" name="guess" id="guess" 
     size="40" value="<?= $oldguess ?>"/></p>
   <input type="submit"/>
</form>

<!-- <?= $oldguess ?>
<?php echo($oldguess); ?>
 -->

<form method="post">
   <p><label for="guess">Input Guess</label>
   <input type="text" name="guess" id="guess
     size="40" "value=""><b>DIE DIE</b>" /></p>
   <input type="submit"/>
</form>

<form method="post">
  <p><label for="guess">Input Guess</label>
  <input type="text" name="guess" id="guess" 
   size="40" value="<?= htmlentities($oldguess) ?>"/></p>
   <input type="submit"/>
</form>

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

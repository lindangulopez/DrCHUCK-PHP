<?php
$md5 = "Not computed";
if ( isset($_GET['encode']) ) {
    $md5 = hash('md5', $_GET['encode']);
}
?>
<!DOCTYPE html>
<head><title>Linda Angulo Lopez MD5</title></head>
<body>
<h1>MD5 Maker adapted from Charles Severence's <a href="https://github.com/csev/wa4e/tree/master/code/crack">wa4e</a> </h1>
<p>MD5: <?= htmlentities($md5); ?></p>
<form>
<input type="text" name="encode" size="40" />
<input type="submit" value="Compute MD5"/>
</form>
<p><a href="md5.php">Reset</a></p>
<p><a href="index.php">Back to Cracking</a></p>
</body>
</html>
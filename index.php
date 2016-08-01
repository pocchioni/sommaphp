<html>
 <head>
  <title>Somma PHP</title>
 </head>
 <body>
   <form action="index.php" method="POST">
   <p>A: <input type="text" name="a" value="" /></p>
   <p>B: <input type="text" name="b" value ="" /></p>
   <p>C: <input type="text" name="c" value ="" /></p>
   <p><input type="submit"></p>
  </form>
  <?php echo "Somma di " .$_POST['a']. " con " .$_POST['b']. " e con " .$_POST['c']. ": " .($_POST['a'] + $_POST['b'] + $_POST['c']). "<p>"; ?>


 </body>
</html>

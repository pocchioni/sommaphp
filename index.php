<html>
 <head>
<<<<<<< HEAD
  <title>Somma e prodotto PHP</title>
 </head>
 <body>

 <?php echo "Somma e prodotto <p>"; ?>

  <title>Somma di 2 numeri in PHP</title>
 </head>
 <body>
   <form action="index.php" method="POST">
   <p>A: <input type="text" name="a" value="" /></p>
   <p>B: <input type="text" name="b" value ="" /></p>
   <p><input type="submit"></p>
  </form>
  <?php echo "Somma di " .$_POST['a']. " con " .$_POST['b']. ": " .($_POST['a'] + $_POST['b']). "<p>"; ?>

 </body>
</html>

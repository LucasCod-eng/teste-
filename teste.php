<html>
 <head>
  <title>Teste 01</title>
 </head>
 <body>
 <form action=ae method="get">
  Numero<input type="number" name="numb" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form> 
 <?php
  $n = $_GET['numb'];
  
  if($n == soma($n))
   echo "Divisivel";
  else
   echo "Não divisiveis";
   
  function soma($n){
   $divisores=0;
   for($count=1 ; $count<$n ; $count++)
    if($n % $count==0)
     $divisores += $count;
   return $divisores;
  }
 ?>
 </body>
</html>
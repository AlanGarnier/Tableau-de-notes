
<div class="hero-unit">
    <h1>Note maximum</h1>
     <p> 
     <?php 
     $min=$_SESSION['notes'][0];
     $indice=0;
     for ($i=1;$i<sizeof($_SESSION['notes']);$i=$i+1)
     {
         if ($min>$_SESSION['notes'][$i])
         {
             $min=$_SESSION['notes'][$i];
             $indice=$i;
         }
     }
     echo"La note minimum est à l'indice:".$indice?>
     </p> 
</div>

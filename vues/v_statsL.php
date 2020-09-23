 <?php
 $tableau=$_SESSION['notes'];
 $a=0;
 $b=0;
 $c=0;
 $d=0;
 $e=0;
 for ($i=0;$i<sizeof($tableau);$i++)
 {
     if ($tableau[$i]>=0 && $tableau[$i]<4 )
     {
         $a++;
     }
     else
     {
           if ($tableau[$i]>=4 && $tableau[$i]<8 )
         {
             $b++;
         }  

         else
         {
           if ($tableau[$i]>=8 && $tableau[$i]<12 )
         {
             $c++;
         }  
         else
         {
                if ($tableau[$i]>=12 && $tableau[$i]<16 )
              {
                  $d++;
              }  
              else
                {
                  if ($tableau[$i]>=16 && $tableau[$i]<20 )
                {
                    $e++;
                }  
                }
         }
        }
     }
 }
 ?>


<html>
<div class="hero-unit">
    <h1>Résultats à obtenir – Afficher les statistiques</h1>
</div> 
<table class="table">
 <caption>Statistiques des notes entre :</caption>
  <thead>
    <tr>
      <td>0-4</td>
      <td>4-8</td>
      <td>8-12</td>
      <td>12-16</td>
      <td>16-20</td>
    </tr>
  </thead>
  <tbody>
       <tr>
      <td><?php echo $a; ?></td>
      <td><?php echo$b; ?></td>
      <td><?php echo$c; ?></td>
      <td><?php echo$d; ?></td>
      <td><?php echo$e; ?></td>
    </tr>

  </tbody>
</table>
</html>

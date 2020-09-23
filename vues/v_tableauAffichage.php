
<html>
<table class="table">
 <caption>Note des élèves</caption>
  <thead>
    <tr>
      <th>Eleve n°</th>
      <th>Note</th>
    </tr>
  </thead>
  <tbody>
 <?php
        $tabDesNotes=$_SESSION['notes'];
        for ($i=0;$i<sizeof($tabDesNotes);$i=$i+1)
        {
        echo'
        <tr>
        <td> '.($i+1).' </td>
        <td> '.$tabDesNotes[$i].' </td>
        </tr>'; 
        }?>
  </tbody>
</table>
</html>










<?php
$i=$_POST["id"];
$j=$_POST["nom"];
$k=$_POST["description"];
$l=$_POST["adresse"];
$m=$_POST["domaine"];

?>

<table border="1">
    <tr>
        <td>id</td>
        <td>nom</td>
        <td>description</td>
        <td>adresse</td>
        <td>domaine</td>
    </tr>
    <tr>
        <td> <?php echo$i;?> </td>
        <td> <?php echo$j;?> </td>
        <td> <?php echo$k;?> </td>
        <td> <?php echo$l;?> </td>
        <td> <?php echo$m;?> </td>
    </tr>
</table>
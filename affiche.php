<?php
include "club.php";
$c =new club(2,"aaaa","ffff","dddd","qqqqq");
$liste =$c->affiche();
?>
<table border="2">
    <tr>
        <td>id</td> <td>nom</td> <td>description</td> <td>adresse</td> <td>domaine</td>
    </tr>
    <?php
    foreach($liste as $row ){
    ?>
    <tr>
        <td>
            <?php echo $row["id"];?>
        </td>
    
    
        
            <td>
                <?php echo $row["nom"];?>
            </td>
        

   
        <td>
            <?php echo $row["description"];?>
        </td>
    

    
        <td>
            <?php echo $row["adresse"];?>
        </td>
   

    
        <td>
            <?php echo $row["domaine"];?>
        </td>
   
</tr>
<?php }  ?>
</table>
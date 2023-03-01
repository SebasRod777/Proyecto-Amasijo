<?php
require_once '../DBconect.php';
	$select_stmt=$db->prepare("SELECT * FROM suscripcion");
	$select_stmt->execute();
									
	while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
	{
?>                                      
    <?php echo $row["email"]; ?>
<?php
}
?>
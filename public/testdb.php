<?php
	require_once('includes/Dao.php');
	$dao = new Dao();
    $users = $dao->getUsers();
    
?>
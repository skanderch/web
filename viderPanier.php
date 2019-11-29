<?php

require_once("session.php");

if (session_destroy()){
	header("location:ajouterPanier.php");
}else{
	echo "echec...";
}

?>
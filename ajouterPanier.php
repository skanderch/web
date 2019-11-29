<?php
   require_once('session.php');
   if(!isset($_SESSION['panier'])){
	   $_SESSION['panier'] =array();
   }
   if (isset($_GET['id'])) {
	   $_SESSION['panier'][] =$_GET['id'];
   }
   $nbrb = count(array_keys($_SESSION['panier'],"Ballon"));
   $nbrc= count(array_keys($_SESSION['panier'],"Ceinture"));
   $nbrt= count(array_keys($_SESSION['panier'],"Table"));
   
   echo "<ul>";
   
   echo"<li> Nombre de Ballon: ".$nbrb."</li>";
   echo"<li> Nombre de Ceinture:".$nbrc."</li>";
   echo"<li> Nombre de Table:".$nbrt."</li>";
   
   echo"</ul>";
   echo "<hr>";
   
   echo'<a href="index.html"> Revenir aux pages des produits</a>';
   
   
   ?>
   
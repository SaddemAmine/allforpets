<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'web_database') or die(mysqli_error($mysqli));

$id_condidat=0;
$update=false;
$nom='';
$prenom='';
$nom_animal='';
$adresse_mail='';
$lettre_motivation='';
$telephone=0;

if(isset($_POST['submit']))
{
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$adresse_mail = $_POST['adresse_mail'];
	$nom_animal = $_POST['nom_animal'];
	$lettre_motivation = $_POST['lettre_motivation'];
	$telephone = $_POST['telephone'];

	$mysqli->query("INSERT INTO condidats(nom,prenom,nom_animal,adresse_mail,lettre_motivation,telephone) VALUES('$nom','$prenom','$nom_animal','$adresse_mail','$lettre_motivation','$telephone')") or die($mysqli->error);

	$_SESSION['message']="Record has been saved!";
	$_SESSION['msg_type']="success";

	header("location: index.php");
}
if(isset($_GET['delete']))
{
	$id_condidat = $_GET['delete'];
	$mysqli->query("DELETE FROM condidats WHERE id_condidat=$id_condidat")or die($mysqli->error());

	$_SESSION['message']="Record has been deleted!";
	$_SESSION['msg_type']="danger";

	header("location: index.php");
}
if(isset($_GET['edit']))
{
	$id_condidat=$_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM condidats WHERE id_condidat=$id_condidat") or die($mysqli->error());
	if(count($result)==1)
	{
		$row = $result->fetch_array();
		$nom = $row['nom'];
		$prenom = $row['prenom'];
		$adresse_mail = $row['adresse_mail'];
		$nom_animal = $row['nom_animal'];
		$lettre_motivation = $row['lettre_motivation'];
		$telephone = $row['telephone'];
	}
}
 if(isset($_POST['update']))
 {
 	$id_condidat = $_POST['id_condidat'];
 	$nom = $_POST['nom'];
 	$prenom = $_POST['prenom'];
 	$adresse_mail = $_POST['adresse_mail'];
 	$nom_animal = $_POST['nom_animal'];
 	$lettre_motivation = $_POST['lettre_motivation'];
 	$telephone = $_POST['telephone'];

 	$mysqli->query("UPDATE condidats SET nom='$nom',prenom='$prenom', adresse_mail='$adresse_mail', nom_animal='$nom_animal', lettre_motivation='$lettre_motivation', telephone='$telephone' WHERE id_condidat=$id_condidat") or die($mysqli->error());

 	$_SESSION['message']="record has been updated!";
 	$_SESSION['msg_type']="warning";

 	header('location: index.php');
 }
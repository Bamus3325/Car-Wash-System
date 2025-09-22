<?php

$conn = mysqli_connect("localhost", "root", "", "carz");

if(!$conn){
	echo "<script> alert('Database Not Connected'); <script>";
}

?>

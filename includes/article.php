<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	class Article {
		public function fetch_all() { 
			global $db;

			$query = $db->prepare("SELECT * FROM blogs"); 
			$query->execute();

			return $query->fetchAll();
		}
	}
?>

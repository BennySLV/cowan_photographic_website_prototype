<?php 
/* 
 * File:   mysqli_connect_cpa.php
 * Author: Benjamin Silveston
 *
 * Created on 22 April 2014, 11:02
 * 
 * File to connect to the cowan_photographic_accounts (cpa) MySQL database
 */
 
 /* Variables to store the database access information:
  - Hostname
  - Database User
  - Database Password
  - Database Name
 */
  
 $db_host = 'localhost';
 $db_user = 'root';
 $db_password = 'root';
 $db_name = 'cowan_photographic_accounts';
 
 // Connect to the database
 $dbc = @mysqli_connect($db_host, $db_user, $db_password, $db_name);
 
 // If no connection was established
 if(!$dbc) {
	die('Could not connect to the database ' . mysqli_connect_error($dbc)); 
 }
?>
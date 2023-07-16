<?php
  // $host_name = 'db5010223375.hosting-data.io';
  // $database = 'dbs8664406';
  // $user_name = 'dbu1625078';
  // $password = '30Sept2019';

  $host_name = 'localhost';
  $database = 'job_search';
  $user_name = 'root';
  $password = 'root';

  $link = new mysqli($host_name, $user_name, $password, $database);

  if ($link->connect_error) {
    die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
  } 

?>
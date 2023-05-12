<?php
function createtable(){
    global $wpdb;
    $table_name=$wpdb->prefix  .'userdata';
    $charset_collate = $wpdb->get_charset_collate();

$sql = "CREATE TABLE $table_name (
  id int  AUTO_INCREMENT,
  myname  varchar(255)  
  ,email varchar(255) ,
  phone  varchar(255),
  mesage varchar(255),
 PRIMARY KEY (id) 
  )
  ";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
  dbDelta( $sql );
}
createtable();


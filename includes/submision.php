<?php

   


     

// getdata();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
    <table class="table table-dark mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
       <th scope="col">message</th>
    </tr>
  </thead>
  <tbody>

<?php
    global $wpdb;

$result = $wpdb->get_results ( "
    SELECT * 
    FROM wp_wordpressuserdata
       
" );


?>
  <?php foreach($result as $res):?> 
  <tr>
      <th scope="row">1</th>
      <td><?php echo $res->myname?></td>
      <td><?php echo $res->email?></td>
      <td><?php echo $res->phone?></td>
       <td><?php echo $res->mesage?></td>
    </tr>
   <?php endforeach?>
    
  </tbody>
</table>
</body>
</html>


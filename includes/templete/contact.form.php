 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
 </head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <body>
    <div class=" w-50 mt-5"style="margin:auto; border:1px solid gary;padding:20px;box-shadow:10px 10px 10px 10px gray ;border-radius:10px;">
<form id="" method="post" >
<?php
if(isset($_POST['submit'])){
    global $wpdb;
    $table_name=$wpdb->prefix . "userdata";
    $wpdb->insert($table_name,
array(
    'myname'=>$_POST['myname'],
    'email'=>$_POST['email'],'phone'=>$_POST['phone'],'mesage'=>$_POST['mesage'])
);
}
?>        
<?php wp_nonce_field('wp_rest');?>
      <div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" class="form-control w-50" id="name"name="myname" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control w-50" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">phone</label>
    <input type="phone" class="form-control w-50" id="phone" name="phone">
  </div>
  <div class="mb-3">
    <label for="mesage" class="form-label">mesaage</label>
    <textarea type="text" class="form-control w-50" id="mesage" name="mesage"></textarea>
  </div>
 
  <button type="submit" class="btn btn-dark" name="submit">Submit</button>
</form>  
    </div>
    <script>

      jQuery(document).ready(function($){


            $("#form").submit( function(event){
  var form = $(this);
                  event.preventDefault();


           $.ajax({


                        type:"POST",
                        url:  "<?php echo get_rest_url(null, 'v1/contact-form/submit');?>",
                        data:form.serialize(),
                    }
     )            

      });
    });
</script>  
 </body>
 </html>
<?php

include_once pluginpath . 'includes/submision.php';
?>
 

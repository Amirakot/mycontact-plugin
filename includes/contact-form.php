<?php
//contact form for front end display plugin form and for shortcut is acode i can use in place i need
//contact is name of shortcode
add_action("rest_api_init",'create_rest_endpoint');
add_shortcode('amira','showform');
add_shortcode('submit','showsubmision');
function showform(){
    include pluginpath .'/includes/templete/contact.form.php';
}
function create_rest_endpoint(){
register_rest_route("v1/contact-form","submit",array(
    'methods'=>"POST",
    "callbak"=>"handaldata"
));


}
function showsubmision(){
    include pluginpath .'/includes/templete/submision.php';
}
function handaldata($data){
    $params=$data->get_parmes();
     

    if (!wp_verify_nonce($params['_wpnonce'], 'wp_rest')) {

            return new WP_Rest_Response('Message not sent', 422);
      }

      // Remove unneeded data from paramaters
      unset($params['_wpnonce']);
      unset($params['_wp_http_referer']);

      // Send the email message
      $headers = [];

    
}
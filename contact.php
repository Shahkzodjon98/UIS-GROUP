<?php
  $name = $_POST['name'];
  $email = $_POST['mail'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $choose = $_POST['choose'];

  $token = "6009666371:AAHJ2JV-QrHQpV3pKNRgQj4cps3ZQofY7N4";
  $chat_id = "-1001869878240";

  $array = array (
    'Name: ' => $name,
    'Email: ' => $email,
    'Phone number: ' => $phone,
    'Message: ' => $message,
    'Project type: ' => $choose,
  );

  foreach($array as $key => $value) {
    $text.="<b>".$key."</b>".$value."%0A";
  }

  $sendTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}","r");
  header('location:contact.html');
?>

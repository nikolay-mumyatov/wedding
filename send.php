<?php
$man = $_POST['user-man'];
$woman = $_POST['user-woman'];
$token = "1700373059:AAFbVaPpJ5rS6YTJCcs1wKRb02EXNCl-IeY";
$chat_id = "-520974542";
$arr = array(
  'Гость: ' => $man,
  'Гостья: ' => $woman
);

foreach ($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
}
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank_you.html');
} else {
  echo "Error";
}
?>

<!-- https://api.telegram.org/bot1700373059:AAFbVaPpJ5rS6YTJCcs1wKRb02EXNCl-IeY/getUpdates -->
<?php
/* сбор инфы в секции */
$zayavka="____";
$marka = $_POST['marka'];
$model = $_POST['model'];
$problem = $_POST['problem'];
$date = $_POST['date'];
$probeg = $_POST['probeg'];
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$middle_name = $_POST['middle_name'];
$tel=$_POST['tel'];
$v1 = $_POST['v1'];


$token = "5501594389:AAG0Mgv-_8pY3mQZb9_S0-kiphefSw8I7ss";
$chat_id = "-748247926";



/* коды */

$arr = array(
  '____ЗАЯВКА'=> $zayavka,
  'Марка машины: ' => $marka,
  'Модель: ' => $model,
  'Описание проблемы:' => $problem,
  'Год выпуска: ' => $date,
  'Пробег: ' => $probeg,
  'Фамилия: ' => $last_name,  
  'Имя: ' => $name,
  'Отчество: ' => $middle_name,
  'Телефон:' => $tel,
  'Вид связи:' => $v1,
); 


foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>



<?php
if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
echo "Спасибо за заявку, ожидайте ответа!" ; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="index.html">Вернуться на страницу</a>
</body>
</html>

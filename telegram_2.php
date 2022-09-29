<?php
/* сбор инфы в секции */
$zakaz="____";
$zayavka=$_POST['zayavka'];
$fio=$_POST['fio'];
$tel=$_POST['tel'];
$marka = $_POST['marka'];
$model = $_POST['model'];
$usluga=$_POST['usluga'];
$problem = $_POST['problem'];
$ispolnitel = $_POST['ispolnitel'];
$zakazchik = $_POST['zakazchik'];
$date = $_POST['date'];

$token = "5501594389:AAG0Mgv-_8pY3mQZb9_S0-kiphefSw8I7ss";
$chat_id = "-748247926";

/* коды */

$arr = array(
  '____ЗАЯВКА'=> $zakaz,
  'Заявка номер: ' => $zayavka,
  'Фио клиента:' => $fio,
  'Телефон: ' => $tel,
  'Марка:'  => $marka,
  'Модель: ' => $model,
  'Услуги:' => $usluga,
  'Описание проблемы:' => $problem,
  'Исполнтитель:' => $ispolnitel,
  'Заказчик:' => $zakazchik,
  'Дата создания заказа:' => $date,

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

<?php 
include 'include/top.php';
include 'include/header.php';
?>
<?php
   $back = "<p style=\"margin-left:5%; margin-top:5vh;\">Ваше сообщение успешно отправлено!<Br> Вы получите ответ в 
      ближайшее время<br><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
   $back_wrong = "<p style=\"margin-left:5%; margin-top:5vh;\">Для отправки сообщения заполните все поля!<br><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
   if(!empty($_POST['Name']) and !empty($_POST['Email']) and !empty($_POST['Subject']) 
   and !empty($_POST['Message'])){
      $name = trim(strip_tags($_POST['Name']));
      $phone = trim(strip_tags($_POST['Subject']));
      $mail = trim(strip_tags($_POST['Email']));
      $message = trim(strip_tags($_POST['Message']));
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      mail('ivan2004alex@gmail.com', $phone, 
      'Вам написал: '.$name.'<br />Его почта: '.$mail.'<br />
      Его сообщение: '.$message,$headers);
 
      echo "$back";
 
      exit;
   } 
   else {
      echo $back_wrong;
      exit;
   }
?>
</body>
</html>
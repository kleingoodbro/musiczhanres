<?php
$recepient = "Nataly_lustoklad@ukr.net"; //Почта на которую будут уходить заявки
$sitename = "natalii.zzz.com.ua"; //Название сайта
//
//
$name = trim($_POST["name"]); //Создаем переменную $name и помещаем в неё значения из поля формы 'name'
$mail = trim($_POST["email"]); //Создаем переменную $mail и помещаем в неё значения из поля формы 'email'
$comment = trim($_POST["comment"]);//Если надо добавить ещё поля в форму, нужно добавить переменную по примеру 7-й строки и 
//её же в выражение на 11-й строке
//
$message = "\nИмя: $name \nПочта: $mail \nКонтент: $comment"; //Создаем шаблон письма
$pagetitle = "Новая заявка с сайта \"$natalii.zzz.com.ua\""; //Задаем тему письма
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
if($message){
    header("Location: http://natalii.zzz.com.ua/thank-you.html");  //В случае успешной отправки перенаправляем пользователя на заранее созданную страницу с благодарностью
  }else{  //В случае ошибки выводим такое сообщение:
    echo "Упс, что-то пошло не так.";
  }
?>
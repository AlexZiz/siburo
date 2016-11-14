<?php
//принимаем данные с формы
$name=$_POST['name'];
$phone=$_POST['phone'];
$what=$_POST['what'];
//Тут указываем на какой ящик будет отправляться письмо
$to="email@mail.com";
//Делее идет тема и само сообщение
$subject = "Заявка с сайта СвязьИнформБюро";
$massage = "
Письмо отправленно из моей формы. <br/>
Пользователь хочет: ".htmlspecialchars($what)."<br/>
Имя: ".htmlspecialchars($name)."<br/>
Телефон: ".htmlspecialchars($phone);
$headers = "From: mysite.ru <site-email@mysite.ru>\r\nContent-type: text\html;
charset=utf-8 \r\n";
mail ($to, $subject, $massage, $headers);
header('Location: index.html');
exit();
?>
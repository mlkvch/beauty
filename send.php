<?php 

if(isset($_POST['submit'])){
    $to = "karina.malkevich@gmail.com"; // Здесь нужно написать e-mail, куда будут приходить письма
    $name = $_POST['name'];
    $subject = "Форма отправки сообщений с сайта";
    $message = $name . " оставил сообщение:" . "\n\n" . $_POST['phone'] . "," . "\n\n" . $_POST['message'];
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
    
    mail($to,$subject,$message,$headers);
   // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
    echo "Сообщение отправлено. Спасибо Вам " . $name . ", мы скоро свяжемся с Вами.";
    echo "<br /><br /><a href='https://bon-bon.of.by'>Вернуться на сайт.</a>";

}

?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://bon-bon.of.by");}
window.setTimeout("changeurl();",3000);
</script>
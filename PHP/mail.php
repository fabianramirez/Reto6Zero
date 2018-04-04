<?php
echo "<form>

    <input type='text' name='email' placeholder='tu@mail.com'>
    <button class='ui button' name='submit'>Enviar correo</button>
</form>";
$to = $_POST['email'];
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: altimedic01@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
echo $_POST['email'];
mail('A01630024@itesm.mx','testMail','with');
?>

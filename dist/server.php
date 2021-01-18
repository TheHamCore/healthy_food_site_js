<?php
$_POST = json_decode(file_get_contents("php://input"), true);
echo var_dump($_POST);
// команда берет те данные, которые пришли с клиента=>
// превращает в строку и показывает обратно на клиенте(responce)
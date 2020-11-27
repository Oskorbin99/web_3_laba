<?php
if ($_SESSION['login'] == 'root')
    echo "
    <div class = 'admin_part'>
  <h2> <a href='http://localhost/Tools/phpMyAdmin/' vlink='#cecece'>Переход в админчасть </a></h2>
    <p>Удалить аккаунт</p>
<form action='php/bd/del.php' method='post'>
    <p>
        <label>Укажите логин, что нужно удалить:<br></label>
        <input name='login' type='text' size='15' maxlength='15'>
    </p>
    <p>
        <input type='submit' name='submit' value='Удалить'>
    </p></form>
    </div>";
?>
<?php
include './config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body style="
          text-align: center;
          color: blue;">
        <h1>
            Trang đăng nhập
        </h1>
        <form action="user.php" method="POST">
            Username: <input type="text" name="username"><br><br>
            Password: <input type="text" name="password"><br><br>
            <input type="submit" name="submit" value="Đăng nhập">
        </form>

        <?php if (!empty($_POST['username']) && !empty($_POST['password'])): ?>

            <?php foreach ($users as $item): ?>

                <?php if (($item['username'] == $_POST['username']) && ($item['password'] == $_POST['password'])): ?>

                   
                     <?php header('Location: http://www.google.com/'); ?>

                <?php endif ?>

            <?php endforeach ?>

        <?php endif; ?>
    </body>
</html>
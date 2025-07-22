<?php
require __DIR__ . '/auth.php';
$login = getUserLogin();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
</head>
<body>
<?php if ($login === null): ?>
    <a href="login.php">Please, register/auth your account</a>
<?php else: ?>
    <p>Welcome to our service, <?= $login ?></p>
    <br>
    <a href="logout.php">Exit</a>
<?php endif; ?>
</body>
</html>
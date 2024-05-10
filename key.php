<!DOCTYPE html>
<html>
<head>
    <title>Nhận Key</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <?php
    $key = $_GET['key'];

    if ($key) {
        echo "<p class='key'>Key của bạn là: $key</p>";
    } else {
        echo "<p class='key'>Vui lòng cung cấp key thông qua URL.</p>";
    }
    ?>
</div>

</body>
</html>

<html>
<head> <title>First PHP App</title> </head>
<body>
<?php
    require_once('../../lib/math.php');
    $res = addRandomNumbers();

    print("Here's a random sum:");
    print($res);
    print("<br>");
?>
</body>
</html>
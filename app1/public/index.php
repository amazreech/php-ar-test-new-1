<html>
<head> <title>AppRunner Monorepo Test PHP App</title> </head>
<body>
<?php
    require_once('../../lib/math.php');
    $res = addRandomNumbers();

    $str = "{$res[0]} + {$res[1]} = {$res[2]}";

    print("Here's a random sum: ");
    print($str);
    print("<br>");
?>
</body>
</html>

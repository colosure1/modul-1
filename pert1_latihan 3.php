<html>
<head><title> Variable Static</title></head>
<body><h1> Variabel Static</h1>
<?php 
function test()
{
    static $a=0; //denganstatic
    echo    "nilai a : ";
    echo    $a;
    echo   "<br>";
}
test();
test();
test();
test();
test();
?>
</body>
</html>
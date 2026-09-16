<!-- Xây dựng 1 trang web thỏa yêu cầu xuất ra bảng cửu chương từ
1 → 10. -->
<!-- <?php
    echo"BANG CUU CHUONG";
    echo "</br>";
    echo "</br>";
    for( $i = 1; $i <= 10; $i++ ){
        echo "Bang cuu chuong $i";
        echo "</br>";
        for( $j = 1; $j <=   10; $j++ ){
            $var = $i* $j;
            echo "$i x $j = $var";
            echo "</br>";
        }
        echo "</br>";
echo "";
    }
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo"<table boder='1' align='center'>";
    echo "<tr>";
    for( $i = 1; $i <= 10; $i++ ){
        echo "<td><b>Chuong " . $i . "</b></td>";
    }
    echo"</tr>";
    ?>
</body>
</html>
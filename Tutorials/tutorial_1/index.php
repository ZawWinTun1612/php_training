<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tutorial_1</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <table>
        <?php
        for($i=1;$i<=8;$i++){
            echo "<tr>";
            for($j=1;$j<=8;$j++){
                $total=$i+$j;
                if($total%2==0){
                    echo "<td id='td1'></td>";
                }
                else{
                    echo "<td id='td2'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
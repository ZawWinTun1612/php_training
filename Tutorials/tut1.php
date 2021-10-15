<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tutorial_1</title>
</head>
<style>
    table{
        width: 270px;
        border: 2px solid;
    }
    #td1{
        width:30px;
        height:30px;
        background-color:white;
    }
    #td2{
        width:30px;
        height:30px;
        background-color:black;
    }
</style>
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
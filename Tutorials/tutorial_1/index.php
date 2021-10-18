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
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($column = 1; $column <= 8; $column++) {
                $total = $row + $column;
                if ($total % 2 == 0) {
                    echo "<td id='td1'></td>";
                } else {
                    echo "<td id='td2'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $path = $_POST['path'];
    foreach (glob("$path") as $file) {
        foreach (file($file) as $line) {
            echo $line . "<br/>";
        }
    }
}
?>

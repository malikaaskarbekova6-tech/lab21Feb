<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>таблица</title>
</head>
<body>

<form method="post">
    Введите число: 
    <input type="number" name="size" min="1" required>
    <button type="submit">Создать</button>
</form>

<?php
if (isset($_POST['size'])) {
    $n = (int)$_POST['size'];

    if ($n > 0) {
        echo "<table style='border-collapse: collapse;'>";

        for ($i = 0; $i < $n; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $n; $j++) {

                $color = (($i + $j) % 2 == 0) ? "white" : "black";

                // Добавляем жёлтые линии только внутри таблицы
                $style = "width:40px; height:40px; background-color:$color;";

                if ($i == 0) {
                    $style .= " border-top: 5px solid yellow;";
                }

                if ($j == 0) {
                    $style .= " border-left: 5px solid yellow;";
                }

                echo "<td style='$style'></td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }
}
?>

</body>
</html>
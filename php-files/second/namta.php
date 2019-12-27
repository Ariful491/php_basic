<?php

echo "<table border='1'>";

for ($row = 1; $row <= 10; $row++) {
    echo "<tr>";


    for ($col = 1; $col <= 10; $col++) {
        $x = $col * $row;
        echo "<td>$col*$row=$x</td>";
    }
    echo "</tr>";
}
echo "</table>";


echo "</table>";


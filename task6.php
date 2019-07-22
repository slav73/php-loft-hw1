<?php
echo '<table width="500px" border="1px" align="center">';

for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        echo '<td align="center">';
        if ($i % 2 == 1 && $j % 2 == 1) {
            echo '[', $i * $j, ']</td>';
        } elseif ($i % 2 == 0 && $j % 2 == 0) {
            echo '(', $i * $j, ')</td>';
        } else {
            echo $i * $j, '</td>';
        }
    }    
    echo '</tr>';
}

echo '</table>';
<div class="table_field">
    <?php
    $table = get_sub_field('table_fl');
    if (!empty($table)) {
        echo '<table border="0">';
        if (!empty($table['caption'])) {
            echo '<caption>' . $table['caption'] . '</caption>';
        }
        if (!empty($table['header'])) {
            echo '<thead>';
            echo '<tr>';
            foreach ($table['header'] as $th) {

                echo '<th>';
                echo $th['c'];
                echo '</th>';
            }
            echo '</tr>';
            echo '</thead>';
        }
        echo '<tbody>';
        foreach ($table['body'] as $tr) {
            echo '<tr>';
            foreach ($tr as $td) {
                echo '<td>';
                echo $td['c'];
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    }
    ?>
</div>

<?php
    echo '<select>';
    for ($i=date('Y'); $i >= date('Y')-10 ; $i--) { 
        echo '<option value="'.$i.'">'.$i.'</option>';
        echo $i.'<br>';
    }
    echo '</select>';

<?php
$m = 0;
while ($m < 20) {
    echo $m . ' ';
    $m++;
}
echo '<br>';

?>

<?php
echo 'while in while<br>';
$l = 0;
while ($l < 4) {
    $m = 0;
    while ($m < 10) {
        $m++;
        if ($m === 5) {
            continue;
        }
        echo $m . ' ';
    }
    $l++;
    echo '<br>';
}


                             <ul>
                                 <?php   echo '<li>' . $ni . ', ' . '</li>';   ?>
                             </ul>
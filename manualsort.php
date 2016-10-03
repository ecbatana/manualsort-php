<?php
// Setup data to sort
$data = array();
for ($i=0; $i < 10; $i++) { 
    $data[] = rand(0, 515);
}

function manualsort($data) {
    // Begin looping 
    for ($x=0; $x < $n = count($data); $x++) { 
        for ($y=$x; $y < $n; $y++) {
            // Begin Swapping
            if ($data[$x] > $data[$y]) {
                // Swapping
                $temp = $data[$x];
                $data[$x] = $data[$y];
                $data[$y] = $temp;
            }
        }
    }
    return $data;
}
print_r(manualsort($data));

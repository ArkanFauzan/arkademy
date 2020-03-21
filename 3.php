<?php
function triangle($input){
  if(is_int($input) and $input>=1){
    $j=1;
    for($i=1;$i<=$input;$i++){
      if($j<=$input){
        for($k=1;$k<=$j;$k++){
          echo "#";
        };
        echo "<br/>";
      };
      $j++;
    };
  }
  else {
    echo "<b>Parameter Harus Angka dan Positif!</b>";
  };
};

triangle(18);
?>

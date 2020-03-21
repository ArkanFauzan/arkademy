<?php
function number($input){
  //membersihkan agar hanya angka
  $deret=preg_replace("/[\D]/","",$input);
  //mencari digit angka
  $digit=strlen($deret);
  //pisahkan perkelompok
  if($digit>3){
    $jumlah_kelompok=floor($digit/3);
    if($digit%3==0){
      $j=0;$k=0;
      for($i=0;$i<$jumlah_kelompok;$i++){
        $bagian[$k]=substr($deret,0+$j,3);
        $j+=3;
        $k++;
      };
    }
    elseif($digit%3==2){
      $j=0;$k=0;
      for($i=0;$i<$jumlah_kelompok;$i++){
        $bagian[$k]=substr($deret,0+$j,3);
        $j+=3;
        $k++;
      };
      $bagian[$jumlah_kelompok]=substr($deret,-2,2);
    }
    else{
      $jumlah_kelompok-=1;
      $j=0;$k=0;
      for($i=0;$i<$jumlah_kelompok;$i++){
        $bagian[$k]=substr($deret,0+$j,3);
        $j+=3;
        $k++;
      };
      $bagian[$jumlah_kelompok]=substr($deret,-4,2);
      $bagian[$jumlah_kelompok+1]=substr($deret,-2,2);
    };
  }
  else{
    $bagian[0]=$deret;
  };

  $hasil=implode("-",$bagian);


  return $hasil;
};

var_dump(number("12345678901232212345"));
?>

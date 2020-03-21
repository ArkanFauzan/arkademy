<?php
function longest($kalimat){
  //memecah kata
  $kata=explode(" ",$kalimat);
  //menghitung ada berapa kata
  $jumlah_kata=count($kata);
  //menghilangkan simbol atau angka
  for($i=0;$i<$jumlah_kata;$i++){
    $kata[$i]=preg_replace("/[\W!0-9]/","",$kata[$i]);
  };
  //mencari jumlah huruf pada setiap kata
  for($i=0;$i<$jumlah_kata;$i++){
    $jumlah_huruf[$i]=strlen($kata[$i]);
  };
  //mencari kata terpanjang
  if($jumlah_kata==1){
    $kata_terpanjang=$jumlah_huruf[0];
  }
  elseif($jumlah_kata==2){
    if($jumlah_huruf[1]>$jumlah_huruf[0]){
      $kata_terpanjang=$jumlah_huruf[1];
    }
    else{
      $kata_terpanjang=$jumlah_huruf[0];
    };
  }
  else{
    if($jumlah_huruf[1]>$jumlah_huruf[0]){
      $kata_terpanjang=$jumlah_huruf[1];
    }
    else{
      $kata_terpanjang=$jumlah_huruf[0];
    };
    for($i=3;$i<=$jumlah_kata;$i++){
      if($jumlah_huruf[$i-1]>$kata_terpanjang){
        $kata_terpanjang=$jumlah_huruf[$i-1];
      }
    }
  };
  $key=array_search($kata_terpanjang,$jumlah_huruf);
  return $kata[$key];
};

$a=longest("aku kamu   aaaaa5555  kkkkk lllllllllllll");
var_dump($a);

?>

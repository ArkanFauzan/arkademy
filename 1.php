<?php
function biodata($nama,$umur){
  class school{
    public $name;
    public $year_in;
    public $year_out;
    public $major;
  };
  $sd=new school();
  $sd->name="SDIT Rahmaniyah";
  $sd->year_in="2007";
  $sd->year_out="2013";

  $smp=new school();
  $smp->name="SMPN 4 Depok";
  $smp->year_in="2013";
  $smp->year_out="2016";

  $smk=new school();
  $smk->name="SMK-SMAK Bogor";
  $smk->year_in="2016";
  $smk->year_out="2020";
  $smk->major="chemical analyst";

  class skill{
    public $skill_name;
    public $level;
  };
  $skill1=new skill;
  $skill1->skill_name="baca Al-Quran";
  $skill1->level="advanced";

  $skill2=new skill;
  $skill2->skill_name="run 5 km";
  $skill2->level="advanced";

  $skill3=new skill;
  $skill3->skill_name="chemical analyst";
  $skill3->level="advanced";

  $skill4=new skill;
  $skill4->skill_name="logical thinking";
  $skill4->level="advanced";

  $skill5=new skill;
  $skill5->skill_name="web programming";
  $skill5->level="beginner";

  $biodata=array(
            "name"=>(string) $nama,
            "age"=>(int) $umur,
            "address"=>"gang sate ayam no.46 rt.5 rw.2 kp.sidamukti, sukamaju, cilodong, depok",
            "hobbies"=>array("jogging","programming","baca Al-Quran"),
            "is_married"=>false,
            "list_school"=>array($sd,$smp,$smk),
            "skills"=>array($skill1,$skill2,$skill3,$skill4,$skill5),
            "interest_in_coding"=>true,
           );
  $biodata=json_encode($biodata);
  return $biodata;
};

var_dump(biodata("arkan",19));

?>

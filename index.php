<!-- Users  -->

<?php

Class User {
  public $name;
  public $surname;
  public $year_of_birth;
  public $nationality;
  public $username;
  public $email;
  public $password;

}

$pippo = new User();
$pippo->name = "Pippo";
$pippo->surname = "Verdi";
$pippo->year_of_birth = 1989;
$pippo->nationality = "Italian";
$pippo->username = "pippo1";
$pippo->email = "pippo@gmail.com";
$pippo->password = "pippo89";
var_dump($pippo);

 ?>

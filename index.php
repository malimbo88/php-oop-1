<!-- Users  -->

<?php

Class User {
  public $name;
  public $surname;
  public $nationality;
  public $username;
  public $email;
  public $password;

  //Methods

  //Method birthDate
  //Arguments year of birth, month of birth, day of birth
  //Return a string that rapresent the date of birth
  public function birthDate($year, $month, $day) {

    //Se $day e` un numero inferiore a 10
    //$day sara` preceduto da uno 0
    if ($day < 10 ) {
      $day = 0 . $day;
    }

    //Se $month e` un numero inferiore a 10
    //$month sara` preceduto da uno 0
    if ($month < 10 ) {
      $month = 0 . $month;
    }

    $this->birth_date = $year . "-" . $month . "-" . $day;
    return $this->birth_date;
  }

}

$pippo = new User();
$pippo->name = "Pippo";
$pippo->surname = "Verdi";
$pippo->birthDate(1989, 7, 1);
$pippo->nationality = "Italian";
$pippo->username = "pippo1";
$pippo->email = "pippo@gmail.com";
$pippo->password = "pippo89";
var_dump($pippo);

 ?>

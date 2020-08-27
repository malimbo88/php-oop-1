<!-- User.php -->

<?php
Class User {
  public $name;
  public $surname;
  public $nationality;
  public $username;
  public $email;
  public $password;
  public $authorized;

  //Methods

  //Method cunstruct
  public function __construct($_name, $_surname, $_authorized = false) {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->authorized = $_authorized;
  }

  //Method getAuthorized
  public function getAuthorized($_authorized) {
    if ($_authorized === false) {
      $this->$authorized = "denied";
    }else {
      $this->$authorized = "allowed";
    }
  }

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

  //Method getUserData
  //Return an array with all the user data
  public function getUserData() {
    return [
      "name" => $this->name,
      "surname" => $this->surname,
      "nationality" => $this->nationality,
      "year" => $this->year,
      "month" => $this->month,
      "day" => $this->day,
      "username" => $this->username,
      "email" => $this->email,
      "password" => $this->password,
      "authorized" => $this->authorized,
    ];
  }

};

 ?>

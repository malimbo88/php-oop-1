<!-- User.php -->

<?php
Class User {
  public $name;
  public $surname;
  public $nationality;
  public $username;
  public $year;
  public $month;
  public $day;
  public $email;
  public $password;
  private $authorized;

  //Methods

  //Method cunstruct
  public function __construct($_name, $_surname, $_authorized = false) {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->authorized = $_authorized;
  }

  public function setAuthorized($_authorized) {
    if (is_bool($_authorized)) {
      $this->authorized = $_authorized;
    }
  }

  //Method getAuthorized
  public function getAuthorized() {
    if ($this->authorized === false) {
      return "denied";
    }else {
      return "allowed";
    }
  }

  //Method birthDate
  //Arguments year of birth, month of birth, day of birth
  //Return a string that rapresent the date of birth
  public function getBirthDate() {
    $day = $this->day;
    $month = $this->month;
    $year = $this->year;

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

    $birth_date = $year . "-" . $month . "-" . $day;
    return $birth_date;
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

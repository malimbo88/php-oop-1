<!-- employee.php -->

<!-- Class Employee -->
<?php
Class Employee extends User {
  private $salary;
  public $level;
  public $position;

  //Methods
  public function getEmployeeSalary($_salary) {
    $this->salary = $_salary;
    return $this->salary;
  }

  //Method setSalary
  public function setSalary() {
    if(isset($this->salary) && !is_null($this->salary)) {
      return $this->salary . " $";
    }else {
      return "Unavailable";
    }
  }
  //End Method setSalary

};
 ?>
 <!-- End Class Employee -->

<!-- Users  -->

<?php
require_once( __DIR__ . "/user.php");
include( __DIR__ . "/database.php");

foreach ($array_users as $single_user) {
  $user = new User ($single_user["name"], $single_user["surname"]);
  $user->nationality = $single_user["nationality"];
  $user->username = $single_user["username"];
  $user->email = $single_user["email"];
  $user->password = $single_user["password"];
  $user->authorized = $single_user["authorized"];
  echo "Name: " . $user->name . " - " . $user->surname . " / ". $user->birthDate($single_user["year"], $single_user["month"], $single_user["day"]) . " / " . "Nationality: " . $user->nationality . " / " . "Username: " . $user->username . " / " . "Email: " . $user->email . " / " . "Password: " . $user->password . "<br>";
}

var_dump($user);
 ?>

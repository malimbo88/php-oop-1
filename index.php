<!-- Users  -->

<?php
require_once( __DIR__ . "/user.php");
include( __DIR__ . "/database.php");

foreach ($array_users as $single_user) {
  $user = new User ($single_user["name"], $single_user["surname"]);
  $user->setAuthorized(true);
  $user->nationality = $single_user["nationality"];
  $user->username = $single_user["username"];
  $user->email = $single_user["email"];
  $user->password = $single_user["password"];
  $user->year = $single_user["year"];
  $user->month = $single_user["month"];
  $user->day = $single_user["day"];
  
?>

<ul>
  <li>Name: <?php echo $user->name ?> </li>
  <li>Surname: <?php echo $user->surname; ?> </li>
  <li>Username: <?php echo $user->username; ?> </li>
  <li>Email: <?php echo $user->email ?> </li>
  <li>Username: <?php echo $user->getBirthDate() ?> </li>
</ul>

<?php } ?>

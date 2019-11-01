<?php
function log_user($userMail, $password) {
  try {
      $conn = new PDO('mysql:host=localhost;dbname=login' , 'root', '');
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $query= $conn->prepare("SELECT id, username FROM users WHERE mail=:mail AND password=:password AND verified='Y'");
      $userMail = strtolower($userMail);
      $password = hash("whirlpool", $password);
      $query->execute(array(':mail' => $userMail, ':password' => $password));
      $val = $query->fetch();
      if ($val == null) {
          $query->closeCursor();
          return (-1);
      }
      $query->closeCursor();
      return ($val);
    } catch (PDOException $e) {
      $v['err'] = $e->getMessage();
      return ($v);
    }
}
?>
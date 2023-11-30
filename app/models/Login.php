<?php

namespace App\Models;

use App\Core\Model;

class Login extends Model
{
     public function proses()
     {
          $user_email = $_POST['user_email'];
          $user_password = $_POST['user_password'];

          $query = "SELECT * FROM tb_users WHERE user_email=:user_email AND user_password=PASSWORD(:user_password)";
          $stmt = $this->db->prepare($query);
          $stmt->bindParam(":user_email", $user_email);
          $stmt->bindParam(":user_password", $user_password);
          $stmt->execute();

          return $stmt->fetch();
     }
}

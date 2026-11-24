<?php
declare(strict_types=1);

class User
{
 private PDO $db;

  public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function LogIn(string $email, )

}

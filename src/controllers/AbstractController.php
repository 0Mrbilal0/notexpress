<?php 

namespace Controllers;

use PDO;
use utilities\Database;

abstract class AbstractController
{
    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = (new Database())->getPDO();
    }

}
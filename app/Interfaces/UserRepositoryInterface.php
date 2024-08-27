<?php

namespace App\Interfaces;

interface UserRepositoryInterface{
    public function checkUserExist($username);
    public function checkUserPassword($username, $password);
    public function getUserByUsername($username);
}

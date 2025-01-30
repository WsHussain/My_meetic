<?php

include 'db.php';

class HashedPass
{
    public function hash($pwd)
    {
        return password_hash($pwd, PASSWORD_DEFAULT);
    }

    public function samePwd($pwd, $hsh)
    {
        if (password_verify($pwd, $hsh)) {
            return true;
        } else {
            return false;
        }
    }
}

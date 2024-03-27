<?php

namespace app\database\models;

class User extends Model
{
    protected string $table = 'users';

    public function teste()
    {
        dd('teste');
    }
}
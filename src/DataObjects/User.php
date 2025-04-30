<?php

namespace Src\DataObjects;


class User
{
    public string $usertype;
    public int $id;
    public string $email;

    public function __construct(string $usertype, int $id, string $email)
    {
        $this->usertype = $usertype;
        $this->id = $id;
        $this->email = $email;
    }

    public static function createByQuery(array $res)
    {
        return new User(
            $res["type"],
            $res["uid"],
            $res["email"]
        );
    }

}
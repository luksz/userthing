<?php
declare(strict_types = 1);

namespace userthing\domain;

class User
{
    private $name;
    private $mail;
    private $pass;
    private $failed;

    public function __construct(string $name, string $mail, string $pass)
    {
        $this->name = $name;
        $this->mail = $mail;

        if (strlen($pass) < 5) {
            throw new \Exception(
                "Hasło musi mieć co najmniej 5 liter"
            );
        }

        $this->pass = $pass;
    }

    public function getMail(): string
    {
        return $this->mail;
    }

    public function getPass(): string
    {
        return $this->pass;
    }

    public function failed(string $time)
    {
        $this->failed = $time;
    }
}

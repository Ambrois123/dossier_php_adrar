<?php

abstract class users {
    public string $login;
    public string $password;

    public function __construct(string $login, string $password) {
        $this->login = $login;
        $this->password = $password;
    }

    public function getLogin(): string {
        return $this->login;
    }

}

class Admin extends users {
    public 
    public function __construct(string $login, string $password) {
        parent::__construct($login, $password);
    }
}
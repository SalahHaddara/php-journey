<?php

class User
{
    private string $username;
    private string $email;
    private string $password;

    public function __construct(string $username, string $email, string $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public static function checkPassword(string $password)
    {
        if (strlen($password) < 12) {
            return false;
        }

        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }

        if (!preg_match('/[a-z]/', $password)) {
            return false;
        }

        if (!preg_match('/[^a-zA-Z0-9]/', $password)) {
            return false;
        }

        return true;
    }

    public static function validateEmail(string $email)
    {
        $isValid = filter_var($email, FILTER_VALIDATE_EMAIL);

        return $isValid !== false;
    }

    public function copyWith(?string $username = null, ?string $email = null, ?string $password = null)
    {
        return new User(
            $username ?? $this->username,
            $email ?? $this->email,
            $password ?? $this->password
        );
    }
}
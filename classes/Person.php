<?php

abstract class Person
{
    protected string $name;
    protected string $surname;

    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    abstract public function getFullName(): string;
    abstract public function getSalary(): string;
}

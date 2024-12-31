<?php

abstract class Employee extends Person {
    protected string $position;
    public int $salary;

    public function __construct(string $name, string $surname, int $salary)
    {
        parent::__construct($name, $surname);
        if ($salary < 0) {
            throw new Exception('Зарплата не может быть меньше нуля');
        }
        $this->salary = $salary;
    }

    public function getFullName(): string
    {
        return "$this->name $this->surname";
    }

    public function getSalary(): string
    {
        return 'Зарплата: ' . number_format($this->salary, 0, '', ' ') . ' руб.. ';
    }

    abstract public function getFullInfo(): string;
}
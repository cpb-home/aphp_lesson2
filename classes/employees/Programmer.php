<?php

class Programmer extends Employee implements ApplicationCreatorInterface
{
    public function __construct(string $name, string $surname, int $salary)
    {
        parent::__construct($name, $surname, $salary);
        $this->position = 'Программист';
    }

    public function canDevelop(): string
    {
        return "Может: заниматься разработкой приложения. ";
    }

    public function getFullInfo(): string
    {
        $fullName = parent::getFullName();
        return "$fullName. Должность: $this->position. " . $this->getSalary() . $this->canDevelop();
    }
}
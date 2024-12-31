<?php

class Tester extends Employee implements ApplicationCreatorInterface
{
    public function __construct(string $name, string $surname, int $salary)
    {
        parent::__construct($name, $surname, $salary);
        $this->position = 'Тестировщик';
    }

    public function canDevelop(): string
    {
        return "Может: тестировать и заниматься разработкой приложения. ";
    }

    public function getFullInfo(): string
    {
        $fullName = parent::getFullName();
        return "$fullName. Должность: $this->position. " . $this->getSalary() . $this->canDevelop();
    }
}
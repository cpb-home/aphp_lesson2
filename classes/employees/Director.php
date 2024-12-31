<?php

class Director extends Employee implements LeadInterface
{
    public function __construct(string $name, string $surname, int $salary)
    {
        parent::__construct($name, $surname, $salary);
        $this->position = 'Директор';
    }

    public function canManage(): string
    {
        return "Может: управлять или руководить. ";
    }

    public function getFullInfo(): string
    {
        $fullName = parent::getFullName();
        return "$fullName. Должность: $this->position. " . $this->getSalary() . $this->canManage();
    }
}
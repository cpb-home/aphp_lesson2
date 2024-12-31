<?php

class Manager extends Employee implements LeadInterface, WebinarSpeakerInterface
{
    public function __construct(string $name, string $surname, int $salary)
    {
        parent::__construct($name, $surname, $salary);
        $this->position = 'Менеджер';
    }

    public function canManage(): string
    {
        return "Может: управлять или руководить. ";
    }

    public function canConductWebinars(): string
    {
        return "Может: вести вебинар для коллег. ";
    }

    public function getFullInfo(): string
    {
        $fullName = parent::getFullName();
        return "$fullName. Должность: $this->position. " . $this->getSalary() . $this->canManage() . $this->canConductWebinars();
    }
}
<?php

include './autoloader.php';
require './calcFunc.php';

spl_autoload_register('autoloader');
//
$eployees[] = new Director('Иван', 'Петров', 100000);
$eployees[] = new Tester('Пётр', 'Сидоров', 85000);
$eployees[] = new Programmer('Сидор', 'Алексеев', 125000);
$eployees[] = new Programmer('Алексей', 'Александров', 125000);
$eployees[] = new Manager('Александр', 'Иванов', 122500);
$allSalary = 0;

try {
    foreach ($eployees as $employee) {
        echo $employee->getFullInfo() . '<br>' . PHP_EOL;
        $allSalary += $employee->salary;
    }
} catch (Exception $e) {
    echo 'Произошла ошибка: ' . $e . '<br>' . PHP_EOL;
}

echo 'Общее количество сотрудников: ' . count($eployees) . '<br>' . PHP_EOL;
echo 'Общая сумма зарплат: ' . number_format($allSalary, 0, "", " ") . ' руб.<br>' . PHP_EOL;

$a = 1;
$b = 1.2;
$c = "строка";
$d = true;
$e = [1, 2, 3];
$f = new Director('Иван', 'Петров', 100000);

try {
    calculate($a);
} catch (TypeError $e) {
    echo "Ошибка: $e";
}


<?php

class TypeErrors extends Exception {
    public function __construct(string $expected, string $current)
    {
        parent::__construct(
            "Ожидался тип $expected, и получен тип $current. Обработчик сработал правильно"
        );
    }
}
<?php

function calculate($arg) {
    $type = gettype($arg);

    switch ($type) {
        case 'integer':
            throw new TypeErrors('integer', $type);
            break;
        case 'double':
            throw new TypeErrors('double', $type);
            break;
        case 'string':
            throw new TypeErrors('string', $type);
            break;
        case 'boolean':
            throw new TypeErrors('boolean', $type);
            break;
        case 'array':
            throw new TypeErrors('array', $type);
            break;
        case 'object':
            throw new TypeErrors('object', $type);
            break;
    }
}
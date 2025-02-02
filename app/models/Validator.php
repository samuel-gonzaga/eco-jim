<?php

class Validator {

    public static function required($value, $fieldName) {
        if (empty($value)) {
            throw new Exception("$fieldName é um campo obrigatório");
        }
    }

    public static function email($value) {
        if (!filter_var(FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Formato de e-mail inválido");
        }
    }

    public static function minLength($field, $min) {
        if (strlen($field <= $min)) {
            throw new Exception("$field precisa ter no mínimo $min caracteres");
        }
    }
}
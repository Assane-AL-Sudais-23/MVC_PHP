<?php

    function required(string $value, array &$errors, string $errorRequired, string $fieldName = "libele"): void
    {
        if (empty($value)) {
            $errors[$fieldName]['required'] = $errorRequired;
        }
    }

    function unique(array $datas, string $value, array &$errors, string $errorUnique, string $key = 'libele'): void
    {
        foreach ($datas as $data) {
            if ($data[$key] === $value) {
                $errors[$key]['unique'] = $errorUnique;
            }
        }
    }


    function positive(int $value, array &$errors, string $errorMessage, string $fieldName): void
    {
        if ($value <= 0) {
            $errors[$fieldName]['positive'] = $errorMessage;
        }
    }

?>
<?php
class recordFactory {
    public static function buildRecord($fieldNames,$values) {
        return new Record($fieldNames, $values);
    }
}

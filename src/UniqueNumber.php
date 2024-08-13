<?php
namespace Iantoo\LaravelUniqueNumber;

class UniqueNumber {
    public function  generate(){
        $year = date('Y');
        $month = date('m');
        $day = date('d');

        return $year . $month . $day;
    }
}
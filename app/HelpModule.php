<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelpModule extends Model
{
    /**
     * Переменные массива со знаком _ меняем на нижний-верхний регистр
     * @param array $inputArray
     * @return array
     */
    public function changeRegisterToTop($inputArray = null)
    {
        foreach ($inputArray as $key => $value) {
            if (strstr($key, '_')) {

                unset($inputArray[$key]); //удаляем значение по старому ключу

                $explode = explode('_', $key);
                $key = "";
                foreach ($explode as $word)
                    $key .= ucfirst($word);
                $key = lcfirst($key);

                $inputArray[$key] = $value; //добавлякс значение по старому ключу
            }
        }

        return $inputArray;
    }

    /**
     * Переменные массива верхнего регистра меняем на _
     * @param array $stringArray
     * @return array
     */
    public function changeRegisterToUnderline($stringArray = null)
    {
        foreach ($stringArray as $key => $value) {
            $array = str_split($key); // делим строку на массив
            $key = "";
            foreach ($array as $symbol) // перебираем массив, заменяя заглавные буквы
                $key .= ctype_upper($symbol) ? strtolower("_" . $symbol) : $symbol;

            $newStringArray[$key] = $value; //добавлякс значение по новому ключу
        }

        return $newStringArray;
    }

    /**
     * Получаем текстовое название месяца, исходя из указанной даты
     * @param string $date
     * @return string
     */
    public function getMonthName($date)
    {
        $month = "";
        $date = explode('-', $date);

        switch ($date[1]) {
            case "01":
                $month = "Январь";
                break;
            case "02":
                $month = "Февраль";
                break;
            case "03":
                $month = "Март";
                break;
            case "04":
                $month = "Апрель";
                break;
            case "05":
                $month = "Май";
                break;
            case "06":
                $month = "Июнь";
                break;
            case "07":
                $month = "Июль";
                break;
            case "08":
                $month = "Август";
                break;
            case "09":
                $month = "Сентябрь";
                break;
            case "10":
                $month = "Октябрь";
                break;
            case "11":
                $month = "Ноябрь";
                break;
            case "12":
                $month = "Декабрь";
                break;
        }

        return $month;
    }

}

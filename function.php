<?php

/**
 * Урок 1
 * Lesson 1
 * Таблица умножения 
 */
class Multiplication
{
    /**
     * Рассчет 1 строки таблицы
     * Calculation of 1 row of a table
     */
    public function line_1()
    {
        for ($num = 1; $num <= 5; $num++) {
            echo '<th>';
            for ($i = 1; $i <= 10; $i++) {
                $res = $num * $i;
                echo '<p align="left">' . $num . ' x ' . $i . ' = ' . $res . '</p>';
            }
            echo '</th>';
        }
    }

    /**
     * Рассчет 2 строки таблицы
     * Calculation of 2 row of a table
     */
    public function line_2()
    {
        for ($num = 6; $num <= 10; $num++) {
            echo '<th>';
            for ($i = 1; $i <= 10; $i++) {
                $res = $num * $i;
                echo '<p align="left">' . $num . ' x ' . $i . ' = ' . $res . '</p>';
            }
            echo '</th>';
        }
    }
}

/**
 * Урок 2
 * Lesson 2
 * Таблица умножения (цифры разного цвета)
 */
class MultiplicationColor
{
    /**
     * Назначение цифре - цвет
     */
    public $healthy = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
    public $yummy = array(
        "<span style=\"color:Fuchsia;\">0</span>",
        "<span style=\"color:red;\">1</span>",
        "<span style=\"color:green;\">2</span>",
        "<span style=\"color:Gold;\">3</span>",
        "<span style=\"color:blue;\">4</span>",
        "<span style=\"color:SpringGreen;\">5</span>",
        "<span style=\"color:DimGrey;\">6</span>",
        "<span style=\"color:yellow­green;\">7</span>",
        "<span style=\"color:MediumSlateBlue;\">8</span>",
        "<span style=\"color:Turquoise;\">9</span>"
    );

    /**
     * Рассчет 1 строки таблицы
     * Calculation of 1 row of a table
     */
    public function line_1()
    {
        for ($num = 1; $num <= 5; $num++) {
            echo '<th>';
            for ($i = 1; $i <= 10; $i++) {
                $res = $num * $i;
                $text = '<p align="left">' . $num . ' x ' . $i . ' = ' . $res . '</p>';
                $newphrase = str_replace($this->healthy, $this->yummy, $text);
                //------------
                echo $newphrase;
            }
            echo '</th>';
        }
    }

    /**
     * Рассчет 2 строки таблицы
     * Calculation of 2 row of a table
     */
    public function line_2()
    {
        for ($num = 6; $num <= 10; $num++) {
            echo '<th>';
            for ($i = 1; $i <= 10; $i++) {
                $res = $num * $i;
                $text = '<p align="left">' . $num . ' x ' . $i . ' = ' . $res . '</p>';
                $newphrase = str_replace($this->healthy, $this->yummy, $text);
                //------------
                echo $newphrase;
            }
            echo '</th>';
        }
    }
}

class ReverseText
{
    public $result = '';

    public function __construct(string $text)
    {
        $charlist = preg_split('/(?<!^)(?!$)/u', $text);
        $kol_el = count($charlist) - 1;
        for ($i = $kol_el; $i >= 0; $i--) {
            $this->result .= $charlist[$i];
        }
    }

    public function setText()
    {
        return $this->result;
    }

}
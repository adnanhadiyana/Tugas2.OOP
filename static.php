<?php
class ContohStatic{
    public static $angka = 1;
    public static function halo(){
        return "Saya Cinta Hello Word." . self::$angka++ . " Kali";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();
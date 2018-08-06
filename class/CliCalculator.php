<?php
/**
 * PHP-CLI-Calculator-Class.
 *
 * @author   Malik Umer Farooq <lablnet01@gmail.com>
 * @author-profile https://www.facebook.com/malikumerfarooq01/
 *
 * @license MIT
 *
 * @link   https://github.com/Lablnet/PHP-CLI-Calculator-Class/
 */
require_once "OperatingSystem.php";
class CliCalculator
{
    public function add()
    {
        (int) $sum = 0;
        (int) $tNum = 0;
        echo "For Addition \n";
        echo 'Enter first number: ';
        $handle = fopen('php://stdin', 'r');
        $a = fgets($handle);
        $a = strtolower(trim($a));
        fclose($handle);
        while ($a != -1) {
            $sum = $sum + $a;
            $tNum++;
            echo 'Enter another number enter -1 to calculate ';
            $handle = fopen('php://stdin', 'r');
            $a = fgets($handle);
            $a = strtolower(trim($a));
            fclose($handle);
        }
        echo 'Total number you enter: '.$tNum."\n";
        echo 'Sum is: '.$sum."\n";
        $this->main();
    }

    public function avg()
    {
        (int) $aTotal = 0;
        (int) $tNum = 0;
        echo "For Addition \n";
        echo 'Enter first number: ';
        $handle = fopen('php://stdin', 'r');
        $a = fgets($handle);
        $a = strtolower(trim($a));
        fclose($handle);
        while ($a != -1) {
            $aTotal = $aTotal + $a;
            $tNum++;
            echo 'Enter another number enter -1 to calculate ';
            $handle = fopen('php://stdin', 'r');
            $a = fgets($handle);
            $a = strtolower(trim($a));
            fclose($handle);
        }
        echo 'Total number you enter: '.$tNum."\n";
        echo 'Average is: '.$aTotal."\n";
        $this->main();
    }

    public function mul()
    {
        (int) $mul = 1;
        (int) $tNum = 0;
        echo "For Multiplication \n";
        echo 'Enter first number: ';
        $handle = fopen('php://stdin', 'r');
        $a = fgets($handle);
        $a = strtolower(trim($a));
        fclose($handle);
        while ($a != -1) {
            $mul = $mul * $a;
            $tNum++;
            echo 'Enter another number enter -1 to calculate ';
            $handle = fopen('php://stdin', 'r');
            $a = fgets($handle);
            $a = strtolower(trim($a));
            fclose($handle);
        }
        echo 'Total number you enter: '.$tNum."\n";
        echo 'Multiply is: '.$mul."\n";
        $this->main();
    }

    public function sub()
    {
        echo "For Subtraction \n";
        echo 'Enter first number: ';
        $handle = fopen('php://stdin', 'r');
        $a = fgets($handle);
        $a = strtolower(trim($a));
        fclose($handle);
        echo "\n Enter 2nd number: ";
        $handle = fopen('php://stdin', 'r');
        $b = fgets($handle);
        $b = strtolower(trim($b));
        fclose($handle);
        $sub = $a - $b;
        echo 'Subtraction of '.$a.' - '.$b.' = '.$sub."\n";
        $this->main();
    }

    public function div()
    {
        echo "For Division \n";
        echo 'Enter first number: ';
        $handle = fopen('php://stdin', 'r');
        $a = fgets($handle);
        $a = strtolower(trim($a));
        fclose($handle);
        echo "\n Enter 2nd number: ";
        $handle = fopen('php://stdin', 'r');
        $b = fgets($handle);
        $b = strtolower(trim($b));
        fclose($handle);
        $div = $a / $b;
        echo 'Division of '.$a.' / '.$b.' = '.$div."\n";
        $this->main();
    }

    public function rem()
    {
        echo "For Reaminder \n";
        echo 'Enter first number: ';
        $handle = fopen('php://stdin', 'r');
        $a = fgets($handle);
        $a = strtolower(trim($a));
        fclose($handle);
        echo "\n Enter 2nd number: ";
        $handle = fopen('php://stdin', 'r');
        $b = fgets($handle);
        $b = strtolower(trim($b));
        fclose($handle);
        $rem = $a % $b;
        echo 'Reaminder of '.$a.' % '.$b.' = '.$rem."\n";
        $this->main();
    }

    public function per()
    {
        echo "For Reaminder \n";
        echo 'Enter first number: ';
        $handle = fopen('php://stdin', 'r');
        $a = fgets($handle);
        $a = strtolower(trim($a));
        fclose($handle);
        echo "\n Enter 2nd number: ";
        $handle = fopen('php://stdin', 'r');
        $b = fgets($handle);
        $b = strtolower(trim($b));
        fclose($handle);
        $per = 100 * $a / $b;
        echo 'Percentage is '.$per."\n";
        $this->main();
    }

    public function main()
    {
        do {
            echo " CLI Calculator in PHP \n";
            echo " ***************************** \n";
            echo " For addition enter 'a' \n";
            echo " For substraction enter 's' \n";
            echo " For division enter 'd' \n";
            echo " For multiplication enter 'm' \n";
            echo " For average enter 'v' \n";
            echo " For percentage enter 'p' \n";
            echo " For reaminder enter 'e' \n";
            echo " ***************************** \n";
            $handle = fopen('php://stdin', 'r');
            $x = fgets($handle);
            $x = strtolower(trim($x));
            fclose($handle);
            if ($x === 'a') {
                $this->add();
            } elseif ($x === 's') {
                $this->sub();
            } elseif ($x === 'd') {
                $this->div();
            } elseif ($x === 'm') {
                $this->mul();
            } elseif ($x === 'v') {
                $this->avg();
            } elseif ($x === 'p') {
                $this->per();
            } elseif ($x === 'e') {
                $this->rem();
            } else {
                $this->main();
            }
            echo "Enter 'r' to repeat";
        } while ($x === 'r');
    }

    public function run()
    {
        $this->main();
    }
}

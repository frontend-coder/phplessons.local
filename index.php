<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <!-- <base href="/"> -->
    <title>Работаю над изучением над изучением php </title>
    <meta name="description"
          content="Олег Василенко самый лучший исполнитель, который способен создать качественные сайты с нуля"/>
    <meta name="keywords" content="создать сайт с нуля, верстаю быстрые шаблоны">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Олег Василенко">
    <meta name="copyright"
          content="Все права на сайт и размещенные материалы в рамках данного проекта принадлежат Олегу Василенко">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="shortcut icon" href="img/favicon/favicon.ico"/>
    <!-- 3 нижние строки Chrome, Firefox OS and Opera; Windows Phone; iOS Safari    -->
    <meta name="theme-color" content="#000">
    <meta name="msapplication-navbutton-color" content="#000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <style>
        html {
            background-color: #fff;
        }

        body {
            opacity: 0;
            overflow-x: hidden;
        }
    </style>
    <link rel="stylesheet" href="css/libs.min.css"/>
</head>
<!-- Это первый комментарий -->
<body>
<!-- Custom HTML -->
<header id="header" class="header_fon">
    <div class="container">
        <div class="row">
            <div class="header_contenr_wrap">
                <div class="header_contenr">
                    <?php $zaglavie = "Учите, козлы, языки программирования";
                    $descript = "Ничего подобного я еще не делал, но это первый шаг к быстрой посадке шаблона на WordPress";
                    ?>
                    <h1> <?php echo $zaglavie; ?></h1>
                    <h3> <?php echo $descript; ?></h3>

                </div>

            </div>


        </div>
    </div>
</header><!-- /header -->

<main>

    <!--    <div class="pimg1">-->
    <!--        <div class="ptext">-->
    <!--            <span class="border">Paralax Website</span>-->
    <!--        </div>-->
    <!--    </div>-->


    <!--//https://www.youtube.com/watch?v=JttTcnidSdQ  6.00-->

    <section class="block block_color_e">
        <div class="container">
            <h2><?php echo 'Прорабатываю полученные знания'; ?></h2>
            <div class="row">
                <div class="win_borer">
                    <?php
                    $tera = NULL; //false; //true;
                    //$tera =  2;
                    $tera_one = 3.4;

                    $tera_to = 3.4;
                    if (isset($tera)) {
                        $tera_rex = $tera_one * $tera_to / ($tera_one * $tera_to) / 1000;
                        echo "$tera_one * $tera_to / ($tera_one * $tera_to)/1000 = $tera_rex <br>";
                    } else {
                        echo 'Результатов не может быть';
                    }
                    echo '<br>';
                    var_dump($tera);
                    echo '<br>';
                    var_dump($tera_rex);
                    ?>
                </div>
                <?php
                echo '<br>';
                define('PAGE444', 'Это константа, которая в коде называется PAGE444');
                defined(PAGE444);
                echo '<br>';
                var_dump(PAGE444);
                // define('TESTING', 'вывести сообщение, если константа отдает True');
                define('TEST', 'Проверка создания новой константы в моем проекте');
                define('TEST2', 'Если вы видите этот текст, вы прошли на следующий уровень');
                echo '<br>';
                var_dump(TEST2);
                echo '<br>';
                var_dump(TEST);

                echo '<br>' . '_________________________________' . '<br>';

                if (defined('TESTING')) {
                    echo TEST . ' - ' . TEST2;
                } else {
                    echo ' Проверяющей константы не отнаружено ';
                }
                ?>

                <div class="win_borer">
                    <?php
                    // Создаем новый класс Coor:
                    class Coor {
// данные (свойства):
                        var $name;
                        var $addr;

// методы:
                        function Name() {
                            echo "<h3>John</h3>";
                        }

                    }

                   // $string = [1, 44, 'ssdf'];
                    $string = new Coor;
                    echo gettype( $string );
                    echo '<br>';
                    echo is_string($string);
                    echo '<br>';
                    if(is_string($string)) {
                        echo 'Это обычная строка';
                    } else {
                        echo 'Это что-то другое';
                    }
                    echo '<br>';
                    if (is_int($string)) {
                        echo 'Это обычное число';
                    } elseif (is_bool($string)) {
                        echo 'Это логическая переменная';
                    } elseif (is_float($string)) {
                        echo 'Это число с плавающей точкой';
                    } elseif (is_string($string)) {
                        echo 'Это обычная строка';
                    } elseif (is_array($string)) {
                        echo 'Это массив данных';
                    }elseif (is_object($string)) {
                        echo 'Это объект';
                    } else {
                        echo 'Это NULL';
                    }

                    echo '<br>';
                    $test_num = 354 . ' string ';
                    if (is_numeric($test_num)) {
                        echo 'Это число даже в виде строки';
                    } else {
                        echo 'Это что-то иное';
                    }
                    echo '<br>';
                    $ff = 9;
                    echo $ff+=24; //33
                    echo '<br>';
                    echo $ff += 20;   //53
                    echo '<br>';
                    echo $ff-=38;
                    echo '<br>';
                    echo $ff /= 4;
                    echo '<br>';
                    echo $ff *= 6;
                    echo '<br>';
                    ++$ff;
                    echo $ff;
                    echo '<br>';
                    echo $ff %= 2; //если 2 - ответ 0,

echo '<h4> Присваивание </h4>';
                    $a = 43;
                    echo $a;
                    $f = 54;
                    $a = $f;
                    echo $$f;

                    ?>
                </div>
            </div>
    </section>


    <section class="block block_color_d">
        <div class="container">
            <h2><?php echo 'Вывод таблицы умножения'; ?></h2>
            <div class="row">
                <?php
                $line_gorizont = 1;
                echo '<table>';
                while ($line_gorizont <= 10) {
                    echo '<tr>';
                    $line_vertical = 1;
                    while ($line_vertical <= 10) {
                        echo '<td class="table_td_right">';
                        echo $line_gorizont . ' * ' . $line_vertical . ' = ' . $line_vertical * $line_gorizont . ' |';

                        echo '</td>';
                        $line_vertical++;
                    }

                    echo '</tr>';
                    $line_gorizont++;
                }

                echo '</table>';


                ?>


            </div>
        </div>
    </section>


    <!--    массивы в курсе wfms lessons 9-->
    <section class="block block_color_e">
        <div class="container">
            <h2><?php echo 'Условия do while'; ?></h2>
            <div class="row">
                <?php
                $i = 11;// выполняется интерация цикла а потом проверит условия
                do {
                    echo $i++ . '<br>';
                    //  $i++;
                } while ($i <= 10);
                echo "\t _______________ \n" . '<br>';

                $i = 1;// выполняется интерация цикла а потом проверит условия
                do {
                    echo $i++ . '<br>';
                    //  $i++;
                } while ($i <= 20);

                ?>

            </div>
        </div>
    </section>
    <section class="block block_color_d">
        <div class="container">
            <h2><?php echo 'Условия while: вывод тега select'; ?></h2>
            <div class="row">
                <?php
                $i = 1900;
                echo '<select>' . "\n";
                $n = 2015;
                while ($i <= $n) {

                    echo "\t<option value='$i'>";
                    echo $i;
                    echo "</option>\n\t";
                    $i++;
                }
                echo '</select>';

                ?>
            </div>
        </div>
    </section>

    <section class="block block_color_e">
        <div class="container">
            <h2><?php echo 'Условия while: вывод тега select'; ?></h2>
            <div class="row">
                <?php
                $i = 1900;
                echo '<select>';
                $n = 2015;
                while ($i <= $n) {

                    echo "<option value='$i'>";
                    echo $i;
                    echo "</option>";
                    $i++;
                }
                echo '</select>';

                ?>
            </div>
        </div>
    </section>


    <section class="block block_color_d">
        <div class="container">
            <h2><?php echo 'Условия while: таблицы'; ?></h2>
            <div class="row">
                <?php
                $i = 1;
                echo '<table>';
                While ($i <= 10) { // счетчик строк
                    echo '<tr>';
                    $n = 1;
                    while ($n < 5) {
                        echo '<td>';
                        echo '| ' . 'Строка № ' . $i . ' Ячейка № ' . $n . ' |';
                        echo '</td>';
                        $n++;
                    }
                    echo '</tr>';
                    $i++;
                }
                echo '</table>';


                ?>

            </div>
        </div>
    </section>


    <section class="block block_color_e">
        <div class="container">
            <h2><?php echo 'Условия while'; ?></h2>
            <div class="row">
                <div class="while_wrapper">

                    <div class="while_wrapper_item">
                        <h3><?php echo 'Работаю с while. Пример номер ' . '1'; ?></h3>
                        <?php
                        $i = 1;
                        while ($i <= 10) {
                            echo $i . '<br>';
                            $i++; // $i = $i + 1; $i += 1;
                        }

                        ?>
                    </div>

                    <div class="while_wrapper_item">
                        <h3><?php echo 'Работаю с while. Пример номер ' . '2'; ?></h3>
                        <?php
                        $i = -22;
                        while ($i <= -10) {
                            echo $i . '<br>';
                            $i++;
                        }

                        ?>
                    </div>

                    <div class="while_wrapper_item">
                        <h3><?php echo 'Работаю с while. Пример номер ' . '3'; ?></h3>
                        <?php
                        $i = 252;
                        while ($i <= 500) {
                            echo $i . ' ';
                            $i++;
                        }

                        ?>
                    </div>

                    <div class="while_wrapper_item">
                        <h3><?php echo 'Работаю с while. Пример номер ' . '4'; ?></h3>
                        <?php
                        $i = -50;
                        while ($i <= -10) {
                            echo $i . '<br>';
                            $i++;
                        }

                        ?>
                    </div>


                    <div class="while_wrapper_item">
                        <h3><?php echo 'Работаю с while. Пример номер ' . '5'; ?></h3>
                        <ul>
                            <?php

                            $i = 0;
                            while ($i < 130) {
                                $ni = 0;
                                while ($ni <= 15) {
                                    echo $ni . ', ';
                                    $ni += 2;
                                }
                                // echo $i . ', ';
                                $i += 10;
                                echo '<br>';
                            }

                            ?>
                        </ul>
                    </div>

                    <div class="while_wrapper_item">


                        <?php
                        echo 'while in while<br>';
                        $l = 0;
                        while ($l < 4) {
                            $m = 0;
                            while ($m < 10) {
                                $m++;
                                echo $m . ' ';
                            }
                            $l++;
                            echo '<br>';
                        }
                        ?>


                    </div>


                </div>


            </div>
        </div>
    </section>

    <section class="block block_color_d">
        <div class="container">
            <h2><?php echo 'Условия if'; ?></h2>
            <div class="row">
                <?php
                $light = 'broun';
                if ($light == 'red') {
                    echo 'Стоять у проезжей части';
                } elseif ($light == 'yellow') {
                    echo 'Подготовиться к измененнию цвета лампы';
                } else {
                    echo 'Начать переходить дорогу';
                }
                ?>
            </div>
        </div>
    </section>

    <section class="block block_color_e">
        <div class="container">
            <h2><?php echo 'Операторы PHP'; ?></h2>
            <div class="row">
                <?php
                $sum_one = 5466;
                $sum_two = 78;
                $sum = $sum_one + $sum_two;
                echo $sum_one . ' + ' . $sum_two . ' = ' . $sum;
                echo '<br>';
                $deduct_one = 5466;
                $deduct_two = 78;
                $deduct = $deduct_one - $deduct_two;
                echo $deduct_one . ' - ' . $deduct_two . ' = ' . $deduct;
                echo '<br>';
                $multiply_one = 5466;
                $multiply_two = 78;
                $multiply = $multiply_one * $multiply_two;
                echo $multiply_one . ' * ' . $multiply_two . ' = ' . $multiply;
                echo '<br>';


                $carve_one = 5466;
                $carve_two = 78;
                $carve = $carve_one / $carve_two;
                echo $carve_one . ' / ' . $carve_two . ' = ' . $carve;
                echo '<br>';

                $ostatok_one = 53;
                $ostatok_two = 2;
                $ostatok = $ostatok_one % $ostatok_two;
                echo $ostatok_one . ' % ' . $ostatok_two . ' = ' . $ostatok;
                echo '<br>';

                $ostatok_three = 54;
                $ostatok_foure = 2;
                $ostatok__best = $ostatok_three % $ostatok_foure;
                echo $ostatok_three . ' % ' . $ostatok_foure . ' = ' . $ostatok__best;
                echo '<br>';

                $stepen_base = 9;
                $stepen_index = 2;
                $stepen = $stepen_base ** $stepen_index;
                echo $stepen_base . ' ** ' . $stepen_index . ' = ' . $stepen;
                echo '<br>';
                $koren_base = 81;
                $koren = sqrt($koren_base);
                echo 'корень квадратный из ' . $koren_base . ' = ' . $koren;
                echo '<br>';

                $base_step = 181;
                $vozveden_step = 2;
                $vozveden = pow($base_step, $vozveden_step);
                $vozveden = number_format($vozveden, 0, '', ' ');
                echo 'возвести число ' . $base_step . ' в степень ' . $vozveden_step . ' = ' . $vozveden;
                echo '<br>';
                // изучаю присваевание по ссылке
                $link_pris_one = 5;
                echo 'Изначально первая переменная была равна ' . $link_pris_one;
                $link_pris_two = $link_pris_one;
                $link_pris_one = 51;
                echo ' Вывел первую переменную ' . $link_pris_one . ' вывел вторую переменную ' . $link_pris_two;

                // изучаю присваевание по ссылке

                $link_pris_three = 65;
                echo '<br>' . 'Изначально первая переменная была равна ' . $link_pris_three . ' ';
                $link_pris_five = &$link_pris_three;
                $link_pris_three = 98;
                echo ' Вывел первую переменную \' $link_pris_three  \'   ' . $link_pris_three . ' вывел вторую переменную \'$link_pris_five\' - ' . $link_pris_five;

                echo '<br><br>' . ' Прикол приведения чисел';
                echo '<br>';
                echo 908 + '251';
                echo '<br>';
                echo 45 + '251 uiuj';
                echo '<br>';
                echo 47 + 'text5iuj';
                echo '<br>';
                echo 'Икремент и дикремент' . '<br>';


                $i = 10;
                echo $i++;

                echo '<br>';
                $t = 10;
                echo ++$t;

                echo '<br>';
                $b = 9;
                echo $b--;

                echo '<br>';
                $k = 14;
                echo --$k;
                echo '<br>';
                echo '<ul style="margin-top:30px;">';
                for ($i = 0; $i < 10; $i++) {
                    echo '<li>' . $i++ . '</li>';
                }
                echo '</ul>';

                echo '<ul style="margin-top:30px;">';
                for ($i = 0; $i < 45; ++$i) {
                    echo '<li>' . $i++ . '</li>';
                }
                echo '</ul>';


                echo '<ul style="margin-top:30px;">';
                for ($i = 0; $i <= 11; $i++) {
                    echo '<li>' . $i . '</li>';
                }
                echo '</ul>';

                echo '<ul style="margin-top:30px;">';
                for ($i = 0; $i <= 20; $i++) {
                    echo '<li>' . $i . '</li>';
                }
                echo '</ul>';

                // префиксный - сначала увеличит потом вернет
                // посфиксный сначала вернет потом увеличит
                echo '<br>';
                $fruits = 'apple';
                $well_write = 'Hi, I\'m Ihorman, I have 3 ' . $fruits . 's';

                echo $well_write;
                echo '<br>';
                // Комбинированные элементы
                echo 'Комбинированные элементы' . '<br>';

                echo $ff = 20;
                echo '<br>';
                echo $ff += 5;
                echo '<br>';
                echo $ff -= 7;
                echo '<br>';
                echo $ff *= 5;
                echo '<br>';

                echo $ff /= 4;
                echo '<br>';
                echo $ff += 5;
                echo '<br>';

                echo $ff %= 2;
                echo '<br>';

                $der = 'Привет, ';
                echo $der .= 'Никифор';
                echo '<br>';

                //error_reporting(-1); //вывод всех документов
                var_dump($var_var);
                //если выведена не обявленная переменная - значин NULL
                echo '<br>';
                $var_var_var = '';
                var_dump($var_var_var);
                unset($var_var_var);
                echo '<br>';
                var_dump($var_var_var);

                ?>

            </div>
        </div>
    </section>


    <section class="block block_color_d">
        <div class="container">
            <h2><?php echo 'Что такое типы данных'; ?></h2>
            <div class="row">
                <?php
                $boplean = true;
                $interger = 98;
                $float = 3.45;
                echo 'boplean: true | false ;' . '<br>' .
                    'interger: 1, 2, 3 и так далее целые числа;' . '<br>' .
                    'float: 1.454, 2.098, 3.08 и так далее дробные числа;' . '<br>';
                var_dump($boplean);
                echo '<br>';
                var_dump($interger);
                echo '<br>';
                var_dump($float);
                echo '<br>';
                echo gettype($float);
                echo '<br>';
                echo gettype($interger);
                ?>
                <?php
                echo 'Разбираюсь с сторочными типами данных<br>';
                $str2 = 'srting type line, who i can write in my phpstorm';
                echo $str2;
                define('PAGE444', 'Это константа, которая в коде называется PAGE444');
                $number_unit = 3454;
                $str4 = "this is line with variable \'variable\', who I can use \"on page\" and const - PAGE444: " . PAGE444;
                $str5 = 'this is line with variable';
                echo '<br>';
                echo '<br>';
                echo '<br>';
                echo $str5;
                echo '<br>';
                echo $str4;
                var_dump($str4);
                echo '<br>';
                echo '<br>';
                echo 'По другому' . '<br>';
                echo '<br>';
                //HEREDOC налог двойных ковычек
                $str7 = <<<HERE
this is line with variable "variable", who I can use 'on page' and const - PAGE444:  . PAGE444;             
HERE;
                echo $str7;
                echo '<br>';
                //NOWDOC аналогов одинарных ковычек
                $str8 = <<<'HERE'
this is line with variable 'variable', who I can use "on page" and const - PAGE444:  . PAGE444;             
HERE;
                echo $str8;

                ?>

            </div>
        </div>
    </section>
    <section class="block block_color_e">
        <div class="container">
            <h2><?php echo 'Что такое переменные и константы'; ?></h2>


            <div class="row">
                <?php
                echo '$perem = Это переменная в PHP' . '<br>';
                //'define('PAGE', 'Это константа, которая в коде называется PAGE ');' . '<br><br>';

                const PAGE3 = 'Это константа, обьявлена по новому php5.3';

                $perem = 'Это переменная в PHP';
                define('PAGEPAGE', 'Это константа, которая в коде называется PAGEPAGE');
                echo '<br>' . $perem . '<br>' . PAGEPAGE . '<br>' . PAGE3;


                ?>


            </div>
        </div>
    </section>

    <section class="block block_color_d">
        <div class="container">
            <h2><?php echo 'Простое условие в PHP do while'; ?></h2>
            <div class="row">
                <div class="cont_info">
                    <?php
                    $m = 0;
                    while ($m < 20) {
                        echo $m . ' ';
                        $m++;
                    }
                    echo '<br>';

                    ?>

                    <?php
                    echo 'while in while<br>';
                    $l = 0;
                    while ($l < 4) {
                        $m = 0;
                        while ($m < 10) {
                            $m++;
                            if ($m === 5) {
                                continue;
                            }
                            echo $m . ' ';
                        }
                        $l++;
                        echo '<br>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="block block_color_e">
        <div class="container">
            <h2><?php echo 'Простое условие в PHP for'; ?></h2>
            <div class="row">
                <div class="cont_info">
                    <?php
                    echo "<br>  __________ __________ _______ <br> ";

                    for ($i = 0; $i < 50; $i++) {
                        if ($i === 5) {
                            continue;
                        }
                        echo $i . '<br>';
                    }
                    echo "<br>  __________ __________ _______ <br> ";

                    for ($i = 0; $i < 10; $i++) {
                        if ($i === 8) {
                            break;
                        }
                        echo $i . '<br>';
                    }


                    for ($k = 0; $k < 10; $k++) {
                        for ($i = 0; $i < 10; $i++) {
                            echo $i . '';
                        }
                        echo '<br>';
                    }
                    echo '<br> <br> <br>';
                    for ($k = 0; $k < 10; $k++) {
                        for ($i = 0; $i < 10; $i++) {
                            if ($i === 4) {
                                continue;
                            }
                            echo $i . '';
                        }
                        echo '<br>';
                    }

                    echo '<br> <br> <br>';
                    for ($k = 0; $k < 10; $k++) {
                        if ($k === 4) {
                            continue;
                        }
                        for ($i = 0; $i < 10; $i++) {
                            if ($i === 4) {
                                continue;
                            }
                            echo $i . '';
                        }
                        echo '<br>';
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>


    <section class="block block_color_d">
        <div class="container">
            <h2><?php echo 'О переменных'; ?></h2>
            <div class="row">
                <?php
                $a = 'Привет мир';
                $kub = 'Вроде не правильно показывает кирилицу 41';
                $g = 'hello';
                $bif = 'My friends Yogo';

                echo $a . '<br />' . $g;
                var_dump($a);
                echo '</br>';
                var_dump($g);
                echo '</br>';
                var_dump($bif);
                echo '</br>';
                var_dump($kub);
                $number = 34322.34;
                echo '</br>';
                var_dump($number);
                $number_bul = 5454;
                echo '</br>';
                var_dump($number_bul);
                $bullen_bul = true;
                echo '</br>';
                var_dump($bullen_bul);
                $array_array = ['2', '32', '21'];
                echo '</br>';
                var_dump($array_array);
                ?>

            </div>
        </div>
    </section>

    <section class="block block_color_e">
        <div class="container">
            <h2><?php echo 'Простое условие в PHP for'; ?></h2>
            <div class="row">
                <div class="cont_info">
                    <?php
                    $array = [
                        'position1' => 'Номер один',
                        'position2' => 'Номер два',
                        'position3' => 'Номер три',
                        'position4' => 'Номер четыре',
                        'position5' => 'Номер пять',
                        'position6' => 'Номер шесть',
                    ];
                    $array_one = [
                        'Номер один',
                        'Номер два',
                        'Номер три',
                        'Номер четыре',
                        'Номер пять',
                        'Номер шесть',
                    ];
                    echo $array['position6'];

                    for ($i = 0; $i < 6; $i++) {
                        echo '<br/>' . $array_one[$i];
                    }
                    // count() 1. 03
                    for ($i = 0; $i < count($array_one); $i++) {
                        echo '<br/> ' . $i . ' ' . $array_one[$i];
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>


    <section class="block block_color_d">
        <div class="container">
            <h2><?php echo 'Работа с циклами PHP foreach'; ?></h2>
            <div class="row">
                <div class="cont_info">
                    <?php
                    //$name = 'Номер один';
                    $array = [
                        'position1' => 'Номер один',
                        'position2' => 'Номер два',
                        'position3' => 'Номер три',
                        'position4' => 'Номер четыре',
                        'position5' => 'Номер пять',
                        'position6' => 'Номер шесть',

                    ];
                    foreach ($array as $name) {
                        echo $name . '<br />';
                    }

                    ?>
                </div>
            </div>
        </div>
    </section><!-- /block_color_e -->

    <section class="block block_color_e">
        <div class="container">
            <h2><?php echo 'Простое условие в PHP if else'; ?></h2>
            <div class="row">
                <div class="cont_info">
                    <?php
                    $a = 5;
                    if ($a <= 6) {
                        echo '<h2 class="title_post">' . 'Больше' . '</h2>';
                    }
                    ?>
                    <?php $gorun = 21;
                    if ($gorun > 16) {
                        $age = 'Cовершенолетний';
                    } else {
                        $age = 'Не совершенолетний';
                    }
                    echo '<h2 class="title_post">' . $age . '</h2>';
                    ?>
                    <?php $gorun = 12;
                    if ($gorun > 16) {
                        $age = 'Cовершенолетний';
                    } else {
                        $age = 'Не совершенолетний';
                    }
                    echo '<h2 class="title_post">' . $age . '</h2>';

                    $gorin_two = 23;

                    if ($gorun > 12 || $gorin_two < 28) {
                        $answear = 'В рамках дозволенного';
                    } else {
                        $answear = 'Выделяется из обычной толпы';
                    }

                    echo '<h2 class="title_post">' . $answear . '</h2>';


                    $age_school = 15;
                    $age_institute = 26;
                    if ($age_school < 17) {
                        $result = 'Ребята ходят в школу';
                    } else if ($age_school >= 17 && $age_institute <= 25) {
                        $result = 'Ребята получают высшее образование';
                    } else {
                        $result = 'Ребята пошли на рынок труда, удачи!!!';
                    }
                    echo '<h2 class="title_post">' . $result . '</h2>';


                    $age_foure = 23;
                    if ($age_foure = (14 + 9)) {
                        $result_one = 'Cooтветствует!!!';
                    } else {
                        $result_one = 'Не сooтветствует!!!';
                    }
                    echo '<h2 class="title_post">' . $result_one . '</h2>';
                    ?>
                </div>
            </div>
        </div>
    </section><!-- /block_color_e -->

    <section class="block">
        <div class="container">
            <h2><?php echo 'Переменные и типы данных'; ?></h2>
            <div class="row">
                <?php
                $string = 'Строка, которая может быть частью сайта';
                $number = 125;
                $floatnumber = 2255.125;
                $boolen = true;
                $arrayData = ['первый ряд', 'второй ряд', 'третий ряд'];
                $arrayDataFull = ['number-1' => 'первый ряд',
                                  'number-2' => 'второй ряд',
                                  'number-3' => 'третий ряд'];
                ?>
                <div class="perem_wrap">
                    <div class="perem_wrap_items"><?php echo $string; ?></div>
                    <div class="perem_wrap_items"><?php echo $number; ?></div>
                    <div class="perem_wrap_items"><?php echo $floatnumber; ?></div>
                    <div class="perem_wrap_items"><?php echo $boolen; ?></div>
                    <div class="perem_wrap_items"><?php print_r($arrayData); ?></div>
                    <div class="perem_wrap_items"><?php print_r($arrayDataFull); ?></div>
                </div>
            </div>
        </div>
    </section> <!-- /section block -->

    <section class="block">
        <div class="container">
            <h2><?php echo 'Простые условия в PHP'; ?></h2>
            <div class="row">
                <div class="perem_wrap">
                    <div class="perem_wrap_items">
                        <?php
                        $boolenDataTerms = true;
                        if ($boolenDataTerms) {
                            echo "Переменная содержит значение TRUE";
                        } else {
                            echo "Переменная содержит значение FALSE";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /section block -->

    <section class="block">
        <div class="container">
            <h2><?php echo 'Переменные и типы данных'; ?></h2>
            <div class="row">
                <?php
                $string = 'Строка, которая может быть частью сайта';
                $number = 125;
                $floatnumber = 2255.125;
                $boolen = true;
                $arrayData = ['первый ряд', 'второй ряд', 'третий ряд'];

                ?>


            </div>
        </div>
    </section> <!-- /section block -->

    <div class="container">
        <H1>Hello, world!</H1>
        <p><?php echo $onePeremen; ?><br/>
            вывод констант:
            <?php echo NEWCONSTANT; ?><br/>
            <?php echo PAGE2; ?><br/>
            Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Знаках она города себя
            букв lorem языком имеет вопроса, текст пояс маленькая проектах.
        </p>
        <p>тестирование теста переменных var_dump($testPerem); </p>
        <?php
        const PAGE2 = 'mhtnbq второй вариант объявления переменых версия PHP 5.3 и выше и обьявлять в начале кода ';
        ?>
    </div>


</main><!-- /main -->

<footer>
    <div class="conteiner">
        <div class="row">

        </div>
    </div>
</footer><!-- /footer -->

<script src="js/scripts.min.js"></script>
</body>

</html>
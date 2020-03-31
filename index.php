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

    <div class="pimg1">
        <div class="ptext">
            <span class="border">Paralax Website</span>
        </div>
    </div>
<!--//https://www.youtube.com/watch?v=JttTcnidSdQ  6.00-->

    <section class="block block_color_d">
        <div class="container">
            <h2><?php echo 'Простое условие в PHP do while'; ?></h2>
            <div class="row">
                <div class="cont_info">
<?php
$m = 0;
while($m < 20) {
    echo $m . ' ';
    $m++;
}
echo '<br>';

?>

<?php
echo 'while in while<br>';
$l = 0;
while($l < 4) {
    $m = 0;
    while ($m < 10) {
         $m++;
         if( m === 5 ) {continue;}
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
                        if ($i == 5) {
                            continue;
                        }
                        echo $i . '<br>';
                    }
                    echo "<br>  __________ __________ _______ <br> ";

                    for ($i = 0; $i < 10; $i++) {
                        if ($i == 8) {
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
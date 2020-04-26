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
    <section class="block block_color_d">
        <div class="container">
            <h2><?php echo 'Изучаю массивы в PHP foreach '; ?></h2>
            <div class="row">
                <?php

                $goods = [
                    ['title'       => 'Nokia',
                     'price'       => 340,
                     'description' => 'Это описание товара Нокиа',
                    ],
                    ['title'       => 'iPad',
                     'price'       => 440,
                      'description' => 'Это описание товара iPad',
                    ],
                    ['title'       => 'Sumsung',
                     'price'       => 250,
                     'description' => 'Это описание товара Sumsung',
                    ],
                    ['title'       => 'LG',
                     'price'       => 140,
                     'description' => 'Это описание товара LG',
                    ]

                ];
                echo "<pre>";
                print_r($goods);
                echo "</pre>";
                echo '<br>';
echo $goods[2]['title'] . ' ' . $goods[2]['description'];
                echo '<br>';
                echo '<hr>';

$i = 0;
while($i < count( $goods )) {
    echo $goods[$i]['title'] . ' - ' . $goods[$i]['price'] . '<br>';
    $i++;
}
                echo '<br>';
                echo '<hr>';
                echo 'Элементов в массиве ' . count( $goods );
                echo '<br>';
                echo '<hr>';
                echo 'Элементов в массиве 4 + 4X3' . count( $goods , 1);
                echo '<br>';
                echo '<hr>';









/*
 * count
 * array_diff
 * array_intersect
 * array_key_exists
 * array_keys
 * array_values
 * array_merge
 * array_rand
 * array_reverse
 * compact
 * extract
 * arsort
 * asort
 * sort
 * rsort
 *
 * array_combine
 * array_search
 * array_shift
 * array_unique
 * array_unshift
 * array_flip
 * array_pop
 * array_push
 * in_array
 * list
 * 
 */

                $students = [
                    ['name'       => 'Kirill',
                     'age'       => 34,
                     'sex'       => 'men',
                     'work' => 'Director',
                    ],
                    ['name'       => 'Jely',
                     'age'       => 57,
                     'sex'       => 'women',
                     'work' => 'Meneger',
                    ],
                    ['name'       => 'Yura',
                     'age'       => 28,
                     'sex'       => 'men',
                     'work' => 'Gardener',
                    ],
                    ['name'       => 'Maria',
                     'age'       => 44,
                     'sex'       => 'women',
                     'work' => 'roomservice',
                    ],
                ];
                echo '<br>' . ' Тестирую вывод даных их массивов ' . '<br>' ;
                $i = 0;
                while($i < count( $students )) {
                    echo $students[$i]['name'] . ' - ' . $students[$i]['sex'] . '<br>';
                    $i++;
                }
                echo '<br>';
                echo '<hr>';
                echo 'Элементов в массиве ' . count( $students );
                echo '<br>';
                echo '<hr>';
                echo 'Элементов в массиве 4 + 4X4 ' . count( $students , 1);
                echo '<br>';
                echo '<hr>';








                echo '<br>';
                echo '<hr>';
                echo '<br>';
                $array_5 = [1, 5, 8, true, false, 'Моя строка', 2, 4];
                foreach ($array_5 as $value) {
                    echo $value . '<br>';
                }
                echo '<br>';
                foreach ($array_5 as $value) :
                    echo $value . '<br>';
                endforeach;

                echo '<br>';

                $array_6 = [
                    ['name' => 'Oleg', 'age' => 34, 'prof' => 'designer', 'color' => 'red'],
                    ['name' => 'Olga', 'age' => 20, 'prof' => 'driver', 'color' => 'white'],
                    ['name' => 'Saha', 'age' => 54, 'prof' => 'writer', 'color' => 'brown'],
                    ['name' => 'Boris', 'age' => 47, 'prof' => 'physician', 'color' => 'blue'],
                    ['name' => 'Masha', 'age' => 37, 'prof' => 'seller', 'color' => 'silver'],
                ];

                echo '<br>';
                echo '<hr>';
                echo $first_name . '  ' . $first_name_two;
                echo "Это певый эллемент {$first_name}, Это второй элемент {$first_name_two}";
                echo '<br>';
                echo '<hr>';
                echo '<br>';
                $array_7 = ['Oleg', 34, 'designer', 'color', 'red'];

                //                $first_name = $array_7[1];
                //                $first_name_two = $array_7[2];

                list($first_name, , $first_name_two, , $third_name) = $array_7;
                echo "$first_name, $first_name_two, $third_name";


                echo '<br>';
                echo '<hr>';
                echo '<br>';
                echo 'Ассотиативный массив <br>';
                foreach ($array_6 as $value) :
                    foreach ($value as $vb) :
                        echo $vb . ' - ';
                    endforeach;
                    echo '<br>';
                endforeach;

                echo 'Ассотиативный массив <br>';
                foreach ($array_6 as $key => $value) :
                    echo $key . ': ';
                    foreach ($value as $k => $vb) :
                        echo $k . ' = ' . $vb . ' - ';
                    endforeach;
                    echo '<br>';
                endforeach;
                echo '<br>' . 'Работаю с пустым массивом' . '<br>';

                $arr_empty = [];
                for ($i = 0; $i < 100; $i++) {
                    $arr_empty[] = $i * 5;
                }
                foreach ($arr_empty as $value) :
                    echo $value . ' ';
                endforeach;
                echo '<br>';

                foreach ($arr_empty as $key => $value) :
                    echo $value *= 2 . ' ';
                endforeach;

                echo '<br>';

                foreach ($arr_empty as &$value) :
                    echo $value *= 2;
                endforeach;

                ?>
            </div>
        </div>
    </section>

    <section class="block block_color_e">
        <div class="container">
            <h2><?php echo 'Изучаю массивы в PHP'; ?></h2>
            <div class="row">
                <?php
                echo 'Как задавать массивы в этом языке программирования';
                echo ' <br> <br> <br> ';


                $arr_3 = [[1, 2], [3, 4, 5], [54.34, true, 'Это крайник элемент']];

                for ($i = 0; $i < count($arr_3); $i++) {
                    for ($j = 0; $j < count($arr_3[$i]); $j++) echo $arr_3[$i][$j] . ' | ';
                }
                echo '<br>';
                echo '<br>';
                echo '<hr>';
                echo '<br>';

                for ($i = 0; $i < count($arr_3); $i++) :
                    for ($j = 0; $j < count($arr_3[$i]); $j++) :
                        echo $arr_3[$i][$j] . ' | ';
                    endfor;
                endfor;
                echo '<br>';
                echo '<br>';
                echo '<hr>';
                echo '<br>';
                for ($i = 0; $i < count($arr_3); $i++) :
                    for ($j = 0; $j < count($arr_3[$i]); $j++) echo $arr_3[$i][$j] . ' | ';
                endfor;
                echo '<br>';
                echo '<br>';
                echo '<hr>';
                echo '<br>';

                $arr_4 = [0 => [1, 2, 88],
                          1 => [3, 4, 5],
                          2 => [54.34, true, 'Это крайник элемент'],
                ];

                echo '<br>';
                echo '| ' . $arr_4[0][2];
                echo '<br>';
                echo '<hr>';
                echo '<br>';
                for ($i = 0; $i < count($arr_4); $i++) :
                    for ($j = 0; $j < count($arr_4[$i]); $j++) echo ' <br> ' . $arr_4[$i][$j] . ' | ';
                endfor;
                echo '<hr>';
                echo '<br>';


                $array_one = [1, 0, -87, 43555.5, 'Ничего себе', true, 'Обычный массив'];
                $array_two = [1, 0, -87, 43555.5, 'Ничего себе', true, 'Обычный массив'];
                echo '<br>';


                var_dump($array_one);
                echo '<br>';
                var_dump($array_two);
                echo '<br>' . ' 0: ' . $array_two[0] . ' 4: ' . $array_two[4] . ' 7: ' . $array_two[7];

                echo '<br>';
                echo '<br>' . ' 1: ' . $array_one[1] . ' 3: ' . $array_two[3] . ' 5: ' . $array_two[5]; //массив список
                echo '<br>';
                echo 'Перебор массива';
                echo '<br>';
                for ($i = 0, $iMax = count($array_one); $i < $iMax; $i++) {
                    echo $array_one[$i] . '<br>';
                }
                echo '<br>';
                for ($i = 0; $i < count($array_two); $i++) {
                    echo $array_one[$i] . ' | ';
                }
                $array_three = ['name'      => 'Patrick',
                                'age'       => 43,
                                'apartment' => '2 rooms',
                                'work'      => 'programmer',
                ]; //ассоциативный массив
                echo '<br>';
                for ($i = 0, $iMax = count($array_three); $i < $iMax; $i++) {
                    echo $array_three[$i] . '<br>';
                }
                echo '<br>' . $array_three['name'] . ' | ' . $array_three['apartment'];
                echo '<br>';

                /** @var TYPE_NAME $array_multylevel */
                $array_multylevel = [['name'      => 'Patrick',
                                      'age'       => 43,
                                      'apartment' => '2 rooms'],
                    'work'   => 'programmer',
                    'mather' => 'Valia',
                    'wife'   => 'Olia',
                    'son'    => 'Oleg',

                ];
                echo '<br>' . $array_multylevel['son'] . ' ' . $array_multylevel[0]['name'] . ' ' . $array_multylevel[0]['apartment'];
                echo '<br>';

                $staff = [
                    0 => [
                        'name'     => 'Nike',
                        'age'      => 34,
                        'practice' => 5,
                    ],
                    1 => [
                        'name'     => 'Mike',
                        'age'      => 28,
                        'practice' => 4,
                    ],
                    2 => [
                        'name'     => 'Philip',
                        'age'      => 58,
                        'practice' => 32,
                    ],
                ];
                echo $staff[0]['name'];

                $staff_two = [
                    [
                        'name'     => 'Bruce',
                        'age'      => 24,
                        'practice' => 7,
                    ],
                    [
                        'name'     => 'Cara',
                        'age'      => 27,
                        'practice' => 7,
                    ],
                    [
                        'name'     => 'Xlo',
                        'age'      => 34,
                        'practice' => 14,
                    ],
                ];
                $staf_three = [[1, 33], [3, 4, 5, 6], [45, 543, 454]];
                echo '<br>' . $staff_two[0]['name'];
                echo '<br>' . $staff_two[2]['age'];
                echo '<br>' . 'Перебор многомерных массивов' . '<br>';

                for ($ip = 0; $ip < count($staf_three); $ip++) :
                    for ($j = 0, $jMax = count($staf_three[$ip]); $j < $jMax; $j++) :
                        echo $staff_two[$ip][$j] . ' \ ';
                    endfor;
                endfor;

                ?>
                <?php
                echo '<br>';
                echo '<br>';
                $name = ['Boss',
                    'Lentin',
                    'NAV',
                    'Endless',
                    'Dragons',
                    'SiLeNT',
                    'Doctor',
                    'Lynx'];
                $min = strlen($name[0]);
                $nam = $name[0];
                for ($i = 1; $i < count($name); $i++) {
                    $len = strlen($name[$i]);
                    if ($len < $min) {
                        $nam = $name[$i];
                        $min = strlen($nam);
                    }
                }
                echo 'Наименьшая длина слова в символах - ' . $nam;
                ?>


            </div>
        </div>
    </section>


    <section class="block block_color_d">
        <div class="container">
            <h2><?php echo 'Тестирую знания по массивам в PHP'; ?></h2>
            <div class="row">
                <?php
                $array_test = ['primary'   => 'company',
                               'family'    => 'single',
                               'apartment' => '3th badrooms',
                               'cars'      => 'ford',
                ];
                echo '<br>';
                var_dump($array_test);
                echo '<br>';
                echo 'Первый элемент массива: ' . $array_test['primary'];
                echo '<br>';
                echo 'Второй элемент массива: ' . $array_test['family'];
                echo '<br>';
                echo 'Третий элемент массива: ' . $array_test['apartment'];
                echo '<br>';
                echo 'Четвертый элемент массива: ' . $array_test['cars'];
                ?>
            </div>
        </div>
    </section>


    <div class="pimg1">
        <div class="container">
            <div class="row">
                <div class="ptext">
              <span class="border">
<h2><?php echo 'Решаю задачи по базовым понятиям PHP'; ?></h2>
<h3><?php echo 'Ничего особенного, это просто только бизнес'; ?></h3>
    </span>
                </div>
            </div>

        </div>
    </div>

    <section class="block block_color_d">
        <div class="container">
            <h2><?php echo 'Первые пятьдесят задач'; ?></h2>
            <div class="row">
                <?php
                echo 'Task #1' . '<br>';
                $var = 'hello';
                echo $var[1];

                echo 'Сколько секунд в часе?';
                $s_in_h = 60 * 60;
                echo '<br>';
                echo $s_in_h;
                echo '<br>';
                $task_hour = 4;
                echo "Сколько секунд в $task_hour часах?";
                echo '<br>';
                $s_in_taskhour = $task_hour * 60 * 60;
                $s_in_taskhour = number_format($s_in_taskhour, 0, '', ' ');
                echo '- ' . $s_in_taskhour;
                echo '<br>';
                ?>

                <?php
                echo 'Task #2' . '<br>';
                $var = 1;
                $var = $var + 12;
                $var = $var - 14;
                $var = $var * 5;
                $var = $var / 7;
                $var = $var + 1;
                $var = $var - 1;
                echo $var;
                echo '<br>' . 'Task closed' . '<br>';
                $bar = 1;
                $bar += 12;
                $bar -= 14;
                $bar *= 5;
                $bar /= 7;
                $bar++;
                $bar--;
                echo $bar;
                ?>
                <?php
                echo '<br>' . 'Task #3' . '<br>';

                $a = 3;
                echo '</br>' . $a . '<br>';
                $a = 10;
                $b = 2;
                echo '</br>' . ($a + $b) . ' | ' . ($a - $b) . ' | ' . ($a * $b) . ' | ' . ($a / $b) . ' | ';

                $a = 17;
                $b = 10;
                $c = $a - $b;
                $d = 7;
                $result = $c + $d;
                echo '</br>' . $result . '<br>';
                echo '<br>' . 'Task #4' . '<br>';

                $text = 'Привет, мир';
                echo $text . '<br>';
                $text1 = 'Привет, ';
                $text2 = 'Мир!';
                echo '<br>';
                echo $text1 . $text2;
                echo '<br>';
                $var = 47;
                $var = $var + 7;
                $var = $var - 18;
                $var = $var * 10;
                $var = $var / 20;
                echo $var;
                echo '<br>';
                $var_bebe = 47;
                echo $var_bebe;
                echo '<br>';
                $var_bebe += 7;
                $var_bebe -= 18;
                $var_bebe *= 10;
                $var_bebe /= 20;
                echo $var_bebe;
                echo '<br>';

                $text = 'Я';
                $text = $text . ' хочу';
                $text = $text . ' знать';
                $text = $text . ' PHP!';
                echo $text;
                echo '<br>';
                $text_text = 'Я';
                $text_text .= ' хочу';
                $text_text .= ' знать';
                $text_text .= ' РНР';
                $text_text .= '!';
                echo $text_text;
                echo '<br>';
                echo '<br>' . 'Task #5' . '<br>';
                $sum = 0;
                $n = 10;
                for ($i = 1; $i <= $n; $i++) {
                    $sum += $i;
                }
                echo $sum;
                echo '<br>';
                $sum = 0;
                $n = 10;
                for ($i = 1; $i <= $n; $i++) :
                    $sum += $i;
                endfor;
                echo $sum;

                echo '<br>' . 'Task #6' . '<br>';
                $text_pic = 'abcde';
                echo '<br>';
                echo $text_pic[0] . ' ' . $text_pic[2] . ' ' . $text_pic[4];
                echo '<br>';
                $text_check = 'abcde';

                $text_check[0] = '!';
                echo $text_check;
                echo '<br>';
                $num = 12345;

                echo $num;
                echo '<br>' . 'Task #7' . '<br>';


                echo date(' h : i : s ');
                echo '<br>';

                $nextWeek = time() + (14 * 24 * 60 * 60);
                // 14 дней; 24 часа; 60 минут; 60 секунд
                echo 'Сейчас:           ' . date('Y-m-d') . '<br>';
                echo 'Следующая неделя: ' . date('Y-m-d', $nextWeek) . '<br>';
                // или с помощью strtotime():
                echo 'Следующая неделя: ' . date('Y-m-d', strtotime('+1 week')) . '<br>';


                echo '<br>';
                echo '<br>';
                echo '<br>';
                //                $num = 12345;
                //                for ($i = 1; $sizei = count($num);
                //                     $i < $sizei;
                //                     $i++) {
                //                    $num +=$num[$i];
                //                }
                //                echo $num;

                $str = '12345';
                $array = str_split($str);
                echo '<h2>' . var_dump($array) . '</h2>';
                $print_array = array_sum($array);
                echo '<br>';
                echo '<h2>' . $print_array . '</h2>';
                ?>
                <div id="get_number"></div>
                <script>
                    const n = 12345;
                    document.querySelector('#get_number').innerHTML = eval(n.toString().split('').join('+'));
                    //   alert( eval(n.toString().split('').join('+')) );


                    //     alert( eval(n.toString().replace(/\d/g, '+$&')) );

                </script>
            </div>
        </div>
    </section>


    <section class="block block_color_e">
        <div class="container">
            <h2><?php echo 'Изучаю оператор switch case '; ?></h2>
            <div class="row">

                <?php
                $gorov = 12;
                $borov = 29;
                if ($gorov > 12 || $borov < 28) :
                    $input_site = 'Допустимо';
                elseif ($gorov < 12 || $borov > 28) :
                    $input_site = 'Преднамерено';
                else:
                    $input_site = 'Не допустимо';
                endif;
                echo '<h2>' . $input_site . '</h2>';
                echo '<br><hr><br><hr>';


                $gorov = 12;
                $borov = 23;
                if ($gorov > 12 || $borov < 28) :
                    $input_site = 'Допустимо';
                else:
                    $input_site = 'Не допустимо';
                endif;
                echo '<h2>' . $input_site . '</h2>';
                echo '<br><hr><br><hr>';


                $akapu = 17;
                switch (true) {
                    case ($akapu >= 0 && $akapu <= 18):
                        echo 'Инструкция 1';
                        break;
                    case ($akapu > 18 && $akapu <= 30):
                        echo 'Инструкция 2';
                        break;
                }

                echo '<br><hr><br>';

                $priceSkadovsk = 2560;
                switch (true) {
                    case ($priceSkadovsk > 0 && $priceSkadovsk < 2500):
                        echo 'Вы заявили цену меньше заявленной';
                        break;
                    case ($priceSkadovsk > 2500):
                        echo 'Вы заявили цену больше заявленной';
                        break;
                    case ($priceSkadovsk === 2500):
                        echo 'Мы договорились, ладушки';
                        break;
                    case ($priceSkadovsk === 0):
                        echo 'Ребята, товар не может стоить 0';
                        break;
                    default:
                        echo 'Вы ввели отрицательное значение';
                }

                echo '<br><hr><br>';

                $a = 6;
                $b = 8;
                switch (true) {
                    case $a === 1:
                        print '1';
                        break;
                    case $b === 10:
                        print 'b == 10';
                        break;
                    case $a === 2:
                        print '2';
                        break;
                    case ($a >= 5 && $a <= 10):
                        print '5..10';
                        break;
                    case ($a >= 11 && $a <= 15):
                        print '11..15';
                        break;
                }


                echo '<br><hr><br>';

                $number_base = 3;
                switch ($number_base) {
                    case 0:
                        echo 'Вы ввели число 0';
                        break;
                    case 1:
                        echo 'Вы ввели число 1';
                        break;
                    case 2:
                    case 3:
                        echo 'Вы ввели число 2, а может быть и 3';
                        break;
                }

                echo '<br><hr><br>';

                $check = 6;
                switch ($check) {
                    case 5:
                        echo 'проверка пройдена';
                        break;
                    case 4:
                        echo 'проверка не пройдена - мало';
                        break;
                    case 6:
                        echo 'проверка не пройдена - много';
                        break;
                    default:
                        echo 'неконектное значение';
                }
                echo '<br><hr><br>';
                ?>

                <?php
                echo 'space ship';
                echo '<br>';
                $a = 24;
                $b = 12;
                switch ($a <=> $b) {
                    case 0:
                        echo "$b = $a";
                        break;
                    case 1:
                        echo "$a > $b";
                        break;
                    case -1:
                        echo "$a < $b";
                        break;
                }
                echo '<br>';
                //8.42
                ?>


                <?php
                $x = null;
                if (gettype($x) == 'string') {
                    echo 'x - это строка';
                } elseif (gettype($x) == 'integer') {
                    echo 'x - это целое число';
                } elseif (gettype($x) == 'boolean') {
                    echo 'x - это логическое значение';
                } elseif (gettype($x) == 'double') {
                    echo 'x - это число с плавающей точкой';
                } elseif (gettype($x) == 'array') {
                    echo 'x - это массив';
                } elseif (gettype($x) == 'object') {
                    echo 'x - это объект';
                } elseif (gettype($x) == 'resource') {
                    echo 'x - это ресурс';
                } else {
                    echo 'x - это NULL';
                }
                echo '<br>';
                echo '<hr>';
                echo '<br>';
                switch (gettype($x)) {
                    case 'string':
                        echo 'x - это строка';
                        break;
                    case 'integer':
                        echo 'x - это целое число';
                        break;
                    case 'boolean':
                        echo 'x - это логическое значение';
                        break;

                    case 'double':
                        echo 'x - это число с плавающей точкой';
                        break;
                    case 'array':
                        echo 'x - это массив';
                        break;
                    case 'object':
                        echo 'x - это объект';
                        break;
                    case 'resource':
                        echo 'x - это ресурс';
                        break;
                    default:
                        echo 'x - это NULL';
                }
                echo '<br>';
                echo '<hr>';
                echo '<br>';
                ?>
            </div>
        </div>
    </section>


    <section class="block block_color_d">
        <div class="container">
            <h2><?php echo 'Прорабатываю логические операции'; ?></h2>
            <div class="row">


                <?php

                $i = 0;
                while ($i < 10) :
                    echo "$i | ";
                    $i++;
                endwhile;
                echo "<hr>";

                $i = 1;
                do {
                    echo $i . '<br>';
                    $i += 3;
                } while ($i <= 32);
                echo "\t _______________ \n" . '<br>';
                echo '<hr>';

                ?>


                <?php
                $summa = 0;
                $n = 10;
                $i = 0;
                while ($i <= $n) {
                    $summa += $i;
                    $i++;
                }
                echo "Сумма чисел от 1 до $n равна $summa";
                echo '<br><hr>';
                $nn = 10;
                for ($i = 0; $i <= $nn; $i++) {
                    $suma += $i;
                }
                echo "Сумма чисел от 1 до $nn равна $suma";
                echo '<br><hr>';
                ?>
            </div>
        </div>
    </section>


    <section class="block block_color_e">
        <div class="container">
            <h2><?php echo 'Прорабатываю логические операции'; ?></h2>
            <div class="row">
                <div id="get-multiPly"> Здесь результат: <span id="get-multiply-span">ttt</span></div>
                <hr/>
                <?php
                $f_c = 1;
                echo '<table>';
                while ($f_c <= 10) {
                    echo '<tr>';
                    $f_r = 1;
                    while ($f_r <= 10) {
                        echo '<td>';
                        echo '  ' . "$f_r" . ' * ' . "$f_c" . ' = ' . $f_c * $f_r . '  |';
                        echo '</td>';
                        $f_r++;
                    }
                    echo '</tr>';
                    $f_c++;
                }
                echo '</table>';
                echo '<br>';
                echo '<hr/>';
                echo '<br>';
                for ($i = 0; $i < 10; $i++) {
                    if ($i == 3) {
                        continue;
                    }
                    echo '<div style="color:red">' . $i . '<br />' . '</div>';
                    if ($i == 7) {
                        break;
                    }
                }
                echo '<br>';
                echo '<hr/>';
                echo '<br>';
                for ($i = 0; $i < 10; $i++) {
                    echo '<div style="color:blue">' . $i . '<br />' . '</div>';
                }
                echo '<br>';
                echo '<hr/>';
                echo '<br>';
                for ($i = 0; $i < 10; $i++) {
                    echo "<div style=\"color:orange\">";
                    echo '<ul>';
                    for ($k = 0; $k < 10; $k++) {

                        echo '<li>' . "$i  *  $k  = " . $i * $k . '</li>';

                    }
                    echo '</ul>';
                    echo '</div>';
                    echo '<br>';
                }
                echo '<br>';

                ?>









                <?php
                for ($i = 10; $i >= 0; $i -= 2) echo "$i, ";
                echo '<br>' . '<br>';

                $sum = 0;
                $n = 10;
                for ($i = 1; $i <= $n; $i++) {
                    $sum += $i;
                    echo '<br>' . $sum;
                }
                echo '<br>';

                $deduct = 0;
                $n = 10;
                for ($i = 1; $i <= $n; $i++) {
                    $deduct -= $i;
                    echo '<br>' . $deduct;
                }
                echo '<br>';

                $multiply = 0;
                $n = 10;
                for ($i = 1; $i <= $n; $i++) {
                    $deduct *= $i;
                    echo '<br>' . $multiply;
                }

                echo '<br>';
                $dilay = 0;
                $n = 10;
                for ($i = 1; $i <= $n; $i++) {
                    $dilay /= $i;
                    echo '<br>' . $dilay;
                }

                echo '<br>';

                ?>

                <?php
                $Dja_pu_Dja_pu = NULL;
                $Dja_pu = 23;
                $Dja_pukar = 152;
                $Dja_pu_dja = 184;
                if ($Dja_pu > $Dja_pu_dja || $Dja_pu_dja <= $Dja_pukar) {
                    echo '<br> Логическая западня реализована <br>';
                } else {
                    echo '<br> Логическая западня НЕ реализована <br>';
                }
                if (isset($Dja_pu_Dja_pu)) {
                    $result = $Dja_pu * $Dja_pukar + ($Dja_pu * $Dja_pukar) * 4 / $Dja_pu_dja;
                    echo $result;
                } else {
                    'Да результата нет никакого';
                }
                echo 'Крутой цикл' . '<br>';


                $gem_get = 34;
                //    $gem_get = NULL;
                if (isset($gem_get)) {
                    $gem_get_input = 'Все правильно';
                } else {
                    $gem_get_input = 'Все не правильно';
                }
                echo $gem_get_input;
                echo '<br>' . 'Первый цикл' . '<br>';

                $gem_get_input = isset($gem_get) ? 'Все правильно' : 'Все не правильно';
                echo 'Ответ на крутой цикл ' . $gem_get_input;
                ?>

            </div>
        </div>
    </section>


    <section class="block block_color_d">
        <div class="container">
            <h2><?php echo 'Прорабатываю логические операции'; ?></h2>
            <div class="row">


                <?php
                echo '<h3> Это логическое отрицание </h3>';
                $ku = 23;
                if ($ku) { // 23 - true, !23 - false
                    echo 'Это wrong'; // если true и true;
                } else {
                    echo 'Это not wrong';// если false и true; если true и false; если false и false;
                }
                ?>
                <?= '<br>' ?>
                <?php
                $b_1 = true;
                $b_2 = false;
                $x = 10;
                $y = 0;
                echo '<h3> Проверка </h3>';
                echo(!($b_1 && $b_2) xor (!$b_1 || $x < 10));
                echo '<br>';
                $Y__N = 434;
                $Y__Y = '434';
                echo gettype($Y__N);
                echo '<br>';
                echo gettype($Y__Y);
                echo '<br>';

                if ($Y__N == $Y__Y) {
                    echo "Переменные равны между собой  <br>";
                } else {
                    echo "Переменные не равны между собой  <br>";
                }

                ?>
                <?= '<br>' ?>

                <?= '<br>' ?>
                <?php
                if (4 > 5 || 75 > 44) {
                    echo 'Это правда'; // если (true и true), если false и true, если true и false
                } else {
                    echo 'Это неправда';// если false и false
                }

                ?>
                <?= '<br>' ?>

                <?php
                if (4 > 5 && 75 < 44) { // и
                    echo 'Это правда'; // если true и true;
                } else {
                    echo 'Это неправда';// если false и true; если true и false; если false и false;
                }

                ?>
                <?= '<br>' ?>

                <?php $test_perem = 345;
                echo $test_perem;
                ?>
                <?= '<br>' ?>
                <?= $test_perem ?>
                <?= '<br>' ?>
                <?= $test_perem ?>
                <?= '<br>' . " Теcтирую новый синтаксис <br>\n " . $test_perem;


                echo "<h3>Постфиксный инкремент</h3>";
                $a = 5;
                echo "Должно быть 5: " . $a++ . "<br />\n";
                echo "Должно быть 6: " . $a . "<br />\n";

                $b_1 = true;
                $b_2 = false;

                $x = 5;
                $y = '5';
                echo "b_1 = $b_1; b_2 = $b_2 <br>";
                echo 'Отрицание b_1: ' . !$b_1 . '<br>';
                echo 'b_1 или b_2 ' . ($b_1 || $b_2) . '<br>';
                echo 'b_1 и b_2 ' . ($b_1 && $b_2) . '<br>';
                echo 'b_1 сключающее или b_2: ' . ($b_1 xor $b_2) . '<br>';


                echo (!($b_1 && $b_2) xor (!$b_1 || $x < 10)) . '<br>';
                echo 'Результат проверки на равенство  х и у ' . ($x == $y) . '<br>';
                echo 'Результат проверки на эквивалентность х и у' . ($x === $y) . '<br>';

                ?>


            </div>
        </div>
    </section>


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
                    class Coor
                    {
// данные (свойства):
                        var $name;
                        var $addr;

// методы:
                        function Name()
                        {
                            echo "<h3>John</h3>";
                        }

                    }

                    // $string = [1, 44, 'ssdf'];
                    $string = new Coor;
                    echo gettype($string);
                    echo '<br>';
                    echo is_string($string);
                    echo '<br>';
                    if (is_string($string)) {
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
                    } elseif (is_object($string)) {
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
                    echo $ff += 24; //33
                    echo '<br>';
                    echo $ff += 20;   //53
                    echo '<br>';
                    echo $ff -= 38;
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
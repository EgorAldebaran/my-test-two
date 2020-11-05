<?php

/// пусть нам дана некая строка из различных слов либо же строки
$_words = "journe nighlapse pig night day pig pig pig";
/// определение функции
function search_large_element( $_words ) {
    /// главное чтобы их разделителем являлся пробел - используем explode для превращения строк в массив
    $_system_words = explode(" ", $_words);
    /// используем array_count_values для подсчета элементов в массиве
    $count_system = array_count_values($_system_words);
    /// используем if кондицию в цикле для поиска самого большого числа - max - для этого поможет
    foreach ($count_system as $key => $value) {
        if($value == max($count_system)) {
            echo "в этих предложениях (предложении) самое частое слово - ";
            echo $key;
            echo "  и повторяется оно ";
            echo $value;
            echo " разa.";
        }
    }
}
/// запуск функции
search_large_element($_words);

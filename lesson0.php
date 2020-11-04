<?php

/// пусть на дана некая строка из различных слов либо же строки
$_words = "jacke queen king dolores dolores jacke dolores";
/// определение функции
function search_large_element( $_words ) {
    /// главное чтобы их разделителем являлся пробел - используем explode для превращения строк в массив
    $_system_words = explode(" ", $_words);
    /// используем array_count_values для подсчета элементов в массиве
    $count_system = array_count_values($_system_words);
    /// используем if кондицию в цикле для поиска самого большого числа - max - для этого поможет
    foreach ($count_system as $key => $value) {
        if($value == max($count_system)) {
            echo "the largest name is - ";
            echo $key;
            echo "  and number ";
            echo $value;
        }
    }
}
/// запуск функции
search_large_element($_words);

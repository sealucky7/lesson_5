﻿<?php

//GET

$news='Четыре новосибирские компании вошли в сотню лучших работодателей
Выставка университетов США: открой новые горизонты
Оценку «неудовлетворительно» по качеству получает каждая 5-я квартира в новостройке
Студент-изобретатель раскрыл запутанное преступление
Хоккей: «Сибирь» выстояла против «Ак Барса» в пятом матче плей-офф
Здоровое питание: вегетарианская кулинария
День святого Патрика: угощения, пивной теннис и уличные гуляния с огнем
«Красный факел» пустит публику на ночные экскурсии за кулисы и по закоулкам столетнего здания
Звезды телешоу «Голос» Наргиз Закирова и Гела Гуралиа споют в «Маяковском»';
$news=  explode("\n", $news);
//print_r($news);

// Функция вывода всего списка новостей.
function show_all_news($news){
    echo '<strong>Последние новости :</strong><br />';
    foreach ($news as $show_news) {
        echo $show_news.'<br />';
    }
}
// Функция вывода конкретной новости.
function show_news($id, $news){
    echo $news[$id];
}
// Точка входа.
// Если новость присутствует - вывести ее на сайте, иначе мы выводим весь список
function news ($id, $news){
    array_key_exists($id, $news)? show_news($id, $news): show_all_news($news);
}
// Был ли передан id новости в качестве параметра?
// если параметр не был передан - выводить 404 ошибку
// http://php.net/manual/ru/function.header.php
if($_GET){
    if(array_key_exists('id', $_GET) && is_numeric($_GET['id'])){
    news($_GET['id'], $news);
    }
 else {
    header("HTTP/1.0 404 Not Found");
    echo 'Error 404 Not Found';
    }
};
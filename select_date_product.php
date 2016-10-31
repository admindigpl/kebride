<?php
//этот скрипт должен выдать записать данные в файл getdata.html
$start_graph = $_GET['start_graph'];//придут данные для выборки из базы в форме 2016-10-24 2016-10-31 all
$arr_data=explode(' ', $start_graph);//из этой строки сделать массив
//начальные переменные для формирования запроса из БД
$start_date = $arr_data[0];
$end_date = $arr_data[1];
$select_product = $arr_data[2];
//эти переменные могут перезаписываться
$start_date = $_GET['start_date'];
$end_date = $_GET['end_date'];
$select_product = $_GET['product'];
//далее выборка данных из БД
//далее запись в файл getdata.html в формате JSON
?>
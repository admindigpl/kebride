<?php
//этот скрипт должен записать данные в файл getdata.html
//начальные переменные для формирования запроса из БД
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$select_product = $_POST['product'];
//далее выборка данных из БД
//далее запись в файл getdata.html в формате JSON
//комментарий по файлу getdata.html пишу здесь так в том файле комментарии не работают
//sales это данные о продажах из БД, количество зависит от выбираемого периода - выбрали за 7 дней значит эта строка должна содержать семь значений
// если в этот день было несколько продаж и выбраны все продукты, то показывать суммарное число
//views это данные о просмотрах, количество тоже зависит от выбранного периода и выбранных продуктов
//labels это даты начала, середины и конца графика, эти значения должны быть строкой и они будут показываться на оси Х графика, тут всегда должно быть только эти три даты,
// дата середины должна вычисляться на основе дат начала и конца, все должно пересчитываться при выборе другой/других дат начала/конца выбираемого периода 
//tips_day это даты которые будут показываться в подсказках при наведении мыши на точку графика, количество дат зависит от выбираемого периода эти значения должны быть строкой
//n_days количество дней зависит от выбираемого периода - выбрали за 7 дней значит n_days=7, выбрали за 10 дней значит n_days=10
?>
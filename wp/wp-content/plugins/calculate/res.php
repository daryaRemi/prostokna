<?php

# title массив заголовков

$title = array('12'=>'Тип дома?',                 '22'=>'Тип дома?',                    '32'=>'Тип помещения?',
               '13'=>'Этаж?',                     '23'=>'Средняя температура зимой?',   '33'=>'Вид помещения?',
               '14'=>'Беспокоят?',                '24'=>'Беспокоят?',                   '34'=>'Внешний вид профиля?',
               '15'=>'Внешний вид профиля?',      '25'=>'Внешний вид профиля?',         '35'=>'Ценовая категория?',
               '16'=>'Ценовая категория?',        '26'=>'Ценовая категория?');

# way's массивы для вывода в калькуляторе

$way1 = array(
    array('Панель','Кирпич','Монолит','Не знаю'),                            #0
    array('1-5','6-11','12-...'),                                            #1
    array('Холод','Шум','Ветер','Солнце','Ничего, просто нужны новые окна'), #2
    array('Обычный', 'Красивый', 'Не важно'),                                #3
    array('Подешевле', 2=> 'Подороже'));                                  #4

$way2 = array(
    array('Дерево','Кирпичный','Монолитный','Не знаю'),                      #0
    array('0-10','11-15','16-30'),                                           #1
    array('Холод','Шум','Ветер','Солнце','Ничего, просто нужны новые окна'), #2
    array('Обычный', 'Красивый', 'Не важно'),                                #3
    array('Подешевле', 2=>'Подороже')                                    #4
);

$way3 = array(
    array('Панель','Кирпич','Монолит','Другое','Не знаю'),                  #0
    array('Офис','Склад'/*,'Коммерческое'*/,'Пройти комиссию','Другое'),         #1
    array('Обычный', 'Красивый', 'Не важно'),                                #2
    array('Подешевле', 2=> 'Подороже')                                    #3
);

# профили окон
/*
    'MONTBLANC_ECO-60.png',   // 0
    'MONTBLANC_NORD-70.png',  // 1
    'RehauBlitz.png',         // 2
    'RehauSibDesign.png',     // 3
    'RehauDelightDesign.png', // 4
    'RehauBrillantDesign.png',// 5
    'WINTECH_Isotech.png',    // 6
    'al-profile.png'          // 7
*/
$profit = array();
$profit[] = array();
?>

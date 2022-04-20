<?


$pages = [
    'main' => [
        'name' => 'Главная',
        'icon' => 'fal fa-home'
    ],
    'contact' => [
        'name' => 'Контакты',
        'icon' => 'fal fa-address-book'
    ],
    'table' => [
        'name' => 'Таблица умножения',
        'icon' => 'fas fa-times'
    ],
    'calc' => [
        'name' => 'Калькулятор',
        'icon' => 'fas fa-calculator-alt'
    ],
    'slide' => [
        'name' => 'Слайдер',
        'icon' => 'far fa-presentation'
    ],
    'guest' => [
        'name' => 'Гостевая книга',
        'icon' => 'fal fa-books'
    ],
    'test' => [
        'name' => 'Тест',
        'icon' => 'fal fa-vial'
    ],
];


$route = $_GET['route'] ? $_GET['route'] : 'main';



function rusmonth($n) {
    $month = [1 => 'Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'];
    return $month[$n];
}
$date = [ 
    'day' => date(' d '),
    'month' => rusmonth(date('n')),
    'year' => date(' Y ')
];

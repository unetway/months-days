# Месяцы и дни

Получение количества месяцев из дней. Получение количества дней из месяцев


## Установка

````
$ composer require unetway/months-days
````


## Использование

***Получение количества месяцев из дней***


````
use Unetway\MonthsDays\MonthsDays;

$days = new MonthsDays();
$res = $rates->getMonthByDays(60);

echo $res; // 2
````


***Получение количества дней из месяцев***


````
use Unetway\MonthsDays\MonthsDays;

$months = new MonthsDays();
$res = $rates->getDaysByMonths(3);

echo $res; // 120
````


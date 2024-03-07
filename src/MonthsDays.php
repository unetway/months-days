<?php

namespace Unetway\MonthsDays;

use DateTimeImmutable;
use Exception;

class MonthsDays
{
    /**
     * @param int $day
     * @return int
     * @throws Exception
     */
    public function getMonthByDays(int $day): int
    {
        if ($day <= 0) {
            throw new Exception('Day is not defined');
        }

        $daysInMonth = $this->getDaysInMonth();

        return (int)ceil($day / $daysInMonth);
    }

    /**
     * @return int
     */
    private function getDaysInMonth(): int
    {
        $currentDateTime = new DateTimeImmutable();
        $currentMonth = (int)$currentDateTime->format('n');
        $currentYear = (int)$currentDateTime->format('Y');

        return (int)cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);
    }

    /**
     * @param int $month
     * @return int
     * @throws Exception
     */
    public function getDaysByMonths(int $month): int
    {
        if ($month <= 0) {
            throw new Exception('Month is not defined');
        }

        $daysInMonth = $this->getDaysInMonth();

        return $month * $daysInMonth;
    }
}
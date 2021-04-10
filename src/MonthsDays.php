<?php

namespace Unetway\MonthsDays;

use Exception;

class MonthsDays
{

    /**
     * @param int $day
     * @return false|float
     * @throws Exception
     */
    public function getMonthByDays(int $day)
    {
        if (empty($day)) {
            throw new Exception('Day is not defined');
        }

        $daysInMonth = $this->getDaysInMonth();
        $month = $day / $daysInMonth;
        $month = floor($month);

        return $month;
    }

    /**
     * @param int $month
     * @return float|int
     * @throws Exception
     */
    public function getDaysByMonths(int $month)
    {
        if (empty($month)) {
            throw new Exception('Month is not defined');
        }

        $daysInMonth = $this->getDaysInMonth();
        return $month * $daysInMonth;
    }

    /**
     * @return int
     */
    private function getDaysInMonth(): int
    {
        $currentMonth = date('n');
        $currentYear = date('Y');
        return cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);
    }

}
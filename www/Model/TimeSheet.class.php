<?php

/**
 * Created by PhpStorm.
 * User: Marius
 * Date: 4-2-2016
 * Time: 12:32
 */
class TimeSheet
{
    public function getEntrees()
    {
        $rows = array();

        $res = Database::query("SELECT * FROM `timesheet`");

        setlocale(LC_TIME, 'Dutch');

        foreach ($res as $val) {
            $rows[] = new TimeSheetRow($val['Name'], $val['Task'], $val['Time']);
        }

        return $rows;
    }

    public function getTotals()
    {
        $rows = $this->getEntrees();

        $totalMarius = 0;
        $totalPatrick = 0;
        foreach ($rows as $value) {
            if ($value->Name == "Marius")
                $totalMarius += $value->Time;
            else
                $totalPatrick += $value->Time;
        }

        $tmp = array("Marius" => $totalMarius, "Patrick" => $totalPatrick);
        return $tmp;
    }

    public function submitEntree($name, $task, $hours)
    {
        if (filter_var($hours, FILTER_VALIDATE_INT)) {
            $res = Database::query_safe("INSERT INTO `timesheet`(`Name`, `Task`, `Time`) VALUES (?,?,?);", array($name, $task, $hours));
        }
    }

}
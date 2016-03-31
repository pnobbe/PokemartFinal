<?php

/**
 * Created by PhpStorm.
 * User: Marius
 * Date: 3-2-2016
 * Time: 21:10
 */
class TimeSheetController
{
    public $ts;

    public function __construct()
    {
        $this->ts = new TimeSheet();
    }

    public function run()
    {
        $_SESSION["breadcrumbTrial"]->disable();

        $this->CheckInsert();

        $rows = $this->ts->getEntrees();
        $totals = $this->ts->getTotals();
        $totalMarius = $totals["Marius"];
        $totalPatrick = $totals["Patrick"];

        render("timesheet.tpl", ["title" => "Time Sheet", "rows" => $rows, "Marius" => $totalMarius, "Patrick" => $totalPatrick]);
    }

    public function CheckInsert()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            if (!Empty($_POST["name"]) && !Empty($_POST["task"]) && !Empty($_POST["hours"])) {
                $this->ts->submitEntree($_POST["name"], $_POST["task"], $_POST["hours"]);
            }
        }
    }
}
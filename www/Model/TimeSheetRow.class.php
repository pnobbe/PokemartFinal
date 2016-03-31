<?php

/**
 * Created by PhpStorm.
 * User: Marius
 * Date: 3-2-2016
 * Time: 21:21
 */
class TimeSheetRow
{
    public $Name,$Task,$Time;

    public function  __construct($Name,$Task,$Time)
    {
        $this->Name = $Name;
        $this->Task = $Task;
        $this->Time = $Time;
    }

    //
}

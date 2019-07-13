<?php

namespace App\Exports;

use App\Task;
use Maatwebsite\Excel\Concerns\FromCollection;

class TaskExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Task::all();
    }
}

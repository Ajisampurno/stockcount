<?php

namespace App\Exports;

use App\Models\Master;
use Maatwebsite\Excel\Concerns\FromCollection;

class MasterExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Master::all();
    }
}

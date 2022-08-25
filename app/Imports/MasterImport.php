<?php

namespace App\Imports;

use App\Models\Master;
use Maatwebsite\Excel\Concerns\ToModel;

class MasterImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Master([
            'id' => $row[0],
            'desc' => $row[1],
            'harga' => $row[2],
            'lv3' => $row[3],
            'lv4' => $row[4],
        ]);
    }
}

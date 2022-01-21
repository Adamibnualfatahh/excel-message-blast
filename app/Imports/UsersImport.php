<?php

namespace App\Imports;

use App\Models\Data;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Data([
            'name'     => $row[0],
            'phone'    => $row[1], 
            'message'    => $row[2],
        ]);
    }
}

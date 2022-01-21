<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Data extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'message',
         ];
    // use HasFactory;
    public function model(array $row)
    {
        
        return new data([
           'name'     => $row[0],
           'phone'    => $row[1], 
           'message'    => $row[2],
            
        ]);
    }

    public function delete()
    {
        DB::table('data')->delete();
        return redirect()->back()->withSuccess('Data Berhasil Dihapus');
    }
    public function deleteId($id)
    {
        DB::table('data')->where('id',$id)->delete();
        return redirect()->back()->withSuccess('Data Berhasil Dihapus');
    }
}

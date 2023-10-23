<?php

namespace App\Exports;

use App\Models\Staffcreates;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StaffExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

   
    public function collection()
    {
        return Staffcreates::all();
    }

    public function headings():array{
        return[
            'id',
            'employee_id',
            'username',
            'fullname',
            'dob',
            'department',
            'designation',
            'mobileno',
            'a_mobileno',
            'email',
            'qualification',
            'exprience',
            'bloodgroup',
            'doj',
            'permanant_addr',
            'curr_addr',
            'password',
            'profileimage',
            'aatherimage',
            'pancard',
            'otherdoc',
            'monthlysalary',
            'ctc',
            'dailytarget',
            'monthlytarget',
            'zone_id',
            'route_id',
            'flag',
            'createdBy',
            'Created_at',
            'Updated_at' 
        ];
    } 
}

<?php

namespace App\Exports;

use App\Models\grieviance;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\withHeadings;

class categoryExport implements FromCollection,withHeadings
{
    public function headings(): array{
        return[
            'Grm Refrence Number',
            'NSR Number',
            'State',
            'Zone',
            'LGA',
            'Ward',
            'Community',
            'Beneficiaries',
            'Name',
            'Gender',
            'Age',
            'Phone',
            'Email',
            'Description',
            'Category',
            'Sub Category',
            'Complaint Mode',
            'Resolved',
            'Resolved Comment',
            'Assigned To',
            'Refered To',
            'Time and date of Registration'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return grieviance::all();
        return collect(grieviance::get_category());
    }
}

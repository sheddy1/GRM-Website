<?php

namespace App\Exports;

use App\Models\grieviance;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\withHeadings;

class listExport implements FromCollection,withHeadings
{
    public function headings(): array{
        return[
            'Grm Refrence Number',
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
            'Resolved Comment'
        ]; 
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return grieviance::all();
        return collect(grieviance::get_grieviance());
    }
}

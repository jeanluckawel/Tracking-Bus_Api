<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Employee::create([
            'MST_SQ' => 106133,
            'EMP_EMPNO' => '1013-008100',
            'TITLE_CODEID' => 1,
            'EMP_SURNAME' => 'Kawel',
            'EMP_INITIALS' => 'JL',
            'EMP_FIRSTNAME' => 'Jean Luc',
            'EMP_ID' => 'NN33700309746',
            'GC_CODEID' => 1,
            'EMP_CONTRACTOR' => 0,
            'OC_CODEID' => 921,
            'DPT_CODEID' => 68,
            'GNG_CODEID' => 1233,
            'EMP_ENGAGE' => '2024-10-09 00:00:00',
            'DR_CODEID' => 13,
            'PCAT_CODEID' => 15,
            'EMP_BIRTHDATE' => '2002-03-06 00:00:00',
            'EMP_UNIVERSALID' => 'EMP0012503',
            'EMP_ISGUARD' => 0,
            'EMP_ISDRIVER' => 0,
            'Manager' => 802,
            'EMP_HOST' => 0,
            'EMP_ISHOST' => 0,
        ]);

        Tag::create([
            'TAG_CODE' => '1532469764',
            'TT_CODEID' => 9,
            'TAGF_CODEID' => 1,
            'MST_SQ' => 106133,
            'TAG_REPLACED' => 0,
            'TAG_EXPIRY' => null,
            'TAG_IDENTITY' => null,
            'TAG_RESTRICTED' => 0,
        ]);


        Employee::create([
            'MST_SQ' => 106136,
            'EMP_EMPNO' => '1013-008043',
            'TITLE_CODEID' => 1,
            'EMP_SURNAME' => 'Kasongo',
            'EMP_INITIALS' => 'F',
            'EMP_FIRSTNAME' => 'Franck',
            'EMP_ID' => 'NN33744510934',
            'GC_CODEID' => 1,
            'EMP_CONTRACTOR' => 0,
            'ERS_CODEID' => 1,
            'OC_CODEID' => 921,
            'DPT_CODEID' => 68,
            'GNG_CODEID' => 1646,
            'EMP_ENGAGE' => '2024-10-09 00:00:00',
            'DR_CODEID' => 13,
            'PCAT_CODEID' => 0,
            'EMP_BIRTHDATE' => '1998-03-17 00:00:00',
            'EMP_UNIVERSALID' => 'EMP0012465',
            'EMP_ISGUARD' => 0,
            'EMP_ISDRIVER' => 0,
            'Manager' => 798,
            'EMP_HOST' => 0,
            'EMP_ISHOST' => 0,
        ]);

        Tag::create([
            'TAG_CODE' => '1539385252',
            'TT_CODEID' => 9,
            'TAGF_CODEID' => 1,
            'MST_SQ' => 106136,
            'TAG_REPLACED' => 0,
            'TAG_EXPIRY' => null,
            'TAG_IDENTITY' => null,
            'TAG_RESTRICTED' => 0,
        ]);
    }
}

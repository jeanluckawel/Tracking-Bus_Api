<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //


    protected $primaryKey = 'MST_SQ';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'MST_SQ', 'EMP_EMPNO',
        'TITLE_CODEID', 'EMP_SURNAME', 'EMP_INITIALS', 'EMP_FIRSTNAME', 'EMP_ID', 'GC_CODEID', 'EMP_CONTRACTOR', 'ERS_CODEID', 'OC_CODEID', 'DPT_CODEID', 'GNG_CODEID', 'CC_CODEID', 'EMP_ENGAGE', 'EMP_DISCHARGE', 'DR_CODEID', 'PCAT_CODEID', 'PRUL_CODEID', 'CYC_CODEID', 'EMP_CYCLEADY', 'ENV_CODEID', 'EMP_PAYRATE', 'RM_CODEID', 'EMP_INHERITTRG', 'ERCAT_CODEID', 'EMP_CALLOUT', 'EMP_BIRTHDATE', 'EMP_TERMMSG', 'VPT_CODEID', 'WL_CODEID', 'HRD_CODEID', 'EMP_UNIVERSALID', 'EMP_ISGUARD', 'EMP_ISDRIVER', 'Manager', 'EMP_PASSPORT', 'LCAT_CODEID', 'LCAT2_CODEID', 'ACL_CODEID', 'EMP_TEMPACL', 'EMP_TACLEXP', 'EMP_ACCLCNT', 'EMP_CONABS', 'HOLCAT_CODEID', 'EMP_ISSCHEDULED', 'HODG_CODEID', 'EMP_ISEMERGENCY', 'EMP_HOST', 'EMP_ISHOST', 'created_at', 'updated_at',
    ];

    public function tags()
    {
        return $this->hasMany(Tag::class, 'MST_SQ', 'MST_SQ');
    }
}

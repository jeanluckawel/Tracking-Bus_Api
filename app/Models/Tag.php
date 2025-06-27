<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    protected $table = 'tags';
    public $incrementing = false;
    public $timestamps = false;

    protected $primaryKey = null;
    protected $fillable = [
        'TAG_CODE', 'TT_CODEID', 'TAGF_CODEID', 'MST_SQ', 'TAG_REPLACED', 'TAG_EXPIRY', 'TAG_IDENTITY', 'TAG_RESTRICTED', 'created_at', 'updated_at',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'MST_SQ', 'MST_SQ');
    }
}

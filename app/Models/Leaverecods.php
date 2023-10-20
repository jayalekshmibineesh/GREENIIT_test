<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaverecods extends Model
{
    use HasFactory;
    protected $fillable=[
     
     'type',
     'start_date',
     'end_date',
     'reason',
     'id',
     'leave_status'
                
    ];
protected $primaryKey='leave_request_id';
}

<?php

namespace Amar\Useractivity\Model;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $table = 'activity_logs';

    protected $fillable = ['url', 'method', 'ip', 'platform', 'browser', 'device', 'user_id', 'created_at'];

    public $timestamps = false;
}

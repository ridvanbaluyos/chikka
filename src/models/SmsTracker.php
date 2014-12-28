<?php
use \Illuminate\Database\Eloquent\Model as Eloquent;

class SmsTracker extends Eloquent {
    protected $table = 'sms_tracker';
}
/*
1. php artisan migrate --bench="ridvanbaluyos/chikka"
2. Create SmsTracker.php under app/models
*/

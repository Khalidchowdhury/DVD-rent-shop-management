<?php

namespace App\Models;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    public function getDaysLeftAttribute()
    {
        $rentDate = Carbon::parse($this->rent_date);
        $refundDate = Carbon::parse($this->refund_date);
        
        $daysLeft = $rentDate->diffInDays($refundDate, false);
        
        return $daysLeft;
    }




    use HasFactory;    
    protected $fillable = [
        'customer_name',
        'select_dvd',
        'take_date',
        'refund_date',
        'payment_method',
        'amount',
        'transaction_id',
    ];

    
}









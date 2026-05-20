<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ["fullName", "email", "phoneNumber", "subject", "budget", "message"];


    /**
     * Set the phoneNumber attribute (concatenate country code and phone number).
     *
     * @param  string  $value
     * @return void
     */
    public function setPhoneNumberAttribute($value)
    {
        // Get the country code from the request
        $countryCode = request()->input('countryCode'); // Assuming country code comes from the form
        $this->attributes['phoneNumber'] = $countryCode . $value; // Concatenate country code with the phone number
    }


    public static $type = ['proposal', 'support', 'feedback', 'general'];
}

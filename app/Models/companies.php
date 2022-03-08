<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    use HasFactory;

    protected $table = 'company_table';

    public $timestamps = false;

    protected $fillable = ['name', 'CEO', 'pvm_code', 'address', 'phone_number', 'email', 'description'];
}

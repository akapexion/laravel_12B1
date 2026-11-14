<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    public $fillable = ["emp_name", "emp_email", "emp_code"];
}

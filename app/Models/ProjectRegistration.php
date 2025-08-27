<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectRegistration extends Model
{
     protected $table='tbl_customer_projects';

    protected $fillable = [
        'id','fname', 'lname', 'phone', 'email', 'project_title', 'project_description','created_at','updated_at'
    ];
}

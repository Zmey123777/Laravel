<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    private $name;
    //public $salary;

    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }

}

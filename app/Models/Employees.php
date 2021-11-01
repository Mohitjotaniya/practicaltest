<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    

    protected $fillable =[
       
        "e_name","lname","gender","bod","age","contact","city","company","email","password","image"


    ];
   


        protected $table = "employees";

    public function insert($data)
    {
        return Employees::create($data); 
    }
    public function show()
    {
        return  Employees::paginate();
    }
    public function count()
    {
        return  "SELECT company, COUNT(*) FROM employees GROUP BY company";
    }
}

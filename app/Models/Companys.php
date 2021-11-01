<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companys extends Model
{
    use HasFactory;
    protected $fillable =[
       
        "name","address","city","zip","contact"

    ];
   


        protected $table = "companys";

    public function insert($data)
    {
        return Companys::create($data); 
    }

    public function show()
    {
        
        return Companys::paginate(5);
    }
}

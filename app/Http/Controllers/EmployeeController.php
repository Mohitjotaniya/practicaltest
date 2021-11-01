<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Companys;
use Validator;
use Hash;

class EmployeeController extends Controller
{
    protected $users;

    public function __construct(Employees $users)
    {
        $this->users = $users;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=Companys::all();
        return view('frontend.emloyee',['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'e_name'=>'required',
            'lname'=>'required',
            'gender'=>'required',
            'bod'=>'required',
            'age'=>'required',
            'contact'=>'required',
            'city'=>'required',
            'company'=>'required',
            'email'=>'required',
            'password'=>'required',
            'image'=>'required',
           
            ]);
        

        $e_name=$request->input('e_name');
        $lname =$request->input('lname');
        $gender =$request->input('gender');
        $bod =$request->input('bod');
        $age = $request->input('age');
        $contact = $request->input('contact');
        $city = $request->input('city');
        $company =$request->input('company');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        
      


        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('image'), $imageName);    

           $data=array("e_name"=>$e_name,"lname"=>$lname,"gender"=>$gender,"bod"=>$bod,"age"=>$age,"contact"=>$contact,"city"=>$city,"company"=>$company,"email"=>$email,"password"=>$password,"image"=>$imageName);  
         // dd($data);
           $inser=$this->users->insert($data);
           //return $inser;
          // dd( $this->users);
         // echo $data;
         //return view("admin.addbooks");

        return redirect("employee")->with('success','Add Employees successfuly');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

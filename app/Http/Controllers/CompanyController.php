<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companys;
use Validator;


class CompanyController extends Controller
{
    protected $users;

    public function __construct(Companys $users)
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
        return view('admin.company');

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
            'name'=>'required',
            'address'=>'required',
            'city'=>'required',
            'zip'=>'required',
            'contact'=>'required',
            
           
            ]);

       
        $name=$request->input('name');
        $address =$request->input('address');
        $city =$request->input('city');
        $zip =$request->input('zip');
        $contact = $request->input('contact');
       
      

    

           $data=array("name"=>$name,"address"=>$address,"city"=>$city,"zip"=>$zip,"contact"=>$contact);  
         // dd($data);
           $inser=$this->users->insert($data);
           //return $inser;
          // dd( $this->users);
         // echo $data;
         //return view("admin.addbooks");

        return redirect("company")->with('success','Add company successfuly');
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

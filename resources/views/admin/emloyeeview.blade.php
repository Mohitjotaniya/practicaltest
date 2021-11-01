@extends('admin.master')
@include('admin.header')

@include('admin.sidebar')


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Statistics</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Widget</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Statistics</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->

            
                    <div class="col-xl-12 col-xxl-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                  
                            <div class="card-header">
                                <h4 class="card-title">Basic</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                                 
                                <form method="get" action="{{ url('sarch_employee')}}" >
          <br>

          show
          <select name="select" value="{{request()->query('select')}}">
            <option value="5" >5</option>
            <option value="10" >10</option>
            <option value="20">20</option>
            <option value="50" >50</option>
          </select>entries  
          
         <!-- <input type="submit" name="submit" />  -->
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          
         

         
          <input type="text"  name="search" placeholder="Search for names.." value="{{request()->query('search')}}" title="Type in a name">
         
          <input type="submit" name="submit"  />

        
        <br>
        <br>

                                    <table class="table table-responsive-sm">
                                
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>lname</th>
                                                <th>bod</th>
                                                <th>age</th>
                                                <th>contact </th>
                                                <th>city</th>
                                                <th>company</th>
                                                <th>email</th>
                                             
                                            </tr>
                                        </thead>
                                        @foreach($user as $row)
                                        <tbody>
                                            <tr>
                                                <th>{{$row->e_id}}</th>
                                                <td>{{$row->e_name}}</td>
                                                <td>{{$row->lname }}</td>

                                                <td>{{$row->bod}}</td>
                                                <td>{{$row->age}}</td>
                                                <td>{{$row->contact }}</td>
                                                <td>{{$row->city}}</td>
                                                <td>{{$row->company}}</td>
                                                <td>{{$row->email}}</td>
                                               
                                            </tr>
                                            
                                        </tbody>
                                        @endforeach
                                    </table>

                                    <br>
                                    <center>
                                    <span>
                                    {{ $user->appends(Request::except(' $user'))->links() }}



</span>
</center>
<style>
    .w-5{
       
        width: 25px;
        margin: auto;
       
    }
    </style>
                                </div>
                            </div>
                        </div>
</div>
                                  
                          
                
                </div>
            </div>
        </div>
        @include('admin.footer')

        <!--**********************************
            Content body end
        ***********************************-->

</body>

</html>
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
                                    <div class="card-body">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                            <div class="card-body">
                                <div class="basic-form">
                                @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
                                @if(Session::has('success'))
        <div class="alert alert-success">
        
        <strong role="alert" class="">{!! Session::get('success') !!}</strong>
        
        </div>
     

        @endif
                                    <form action="{{ url('/company')}}" method="post" >
@csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>company name</label>
                                                <input type="text" name="name"class="form-control" >
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>address</label>
                                                <input type="text" name="address" class="form-control" >
                                            </div>
                                            
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label>State</label>
                                                <select id="inputState" class="form-control" name="city">
                                                    <option selected>Choose...</option>
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>Zip</label>
                                                <input type="text" name="zip" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                        <div class="form-group col-md-12">
                                                <label>contact</label>
                                                <input type="number" name="contact" class="form-control" >
                                            </div>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-primary">
                                        <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
                                    </form>
                                </div>
                            </div>
                                            </div>
                                            
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
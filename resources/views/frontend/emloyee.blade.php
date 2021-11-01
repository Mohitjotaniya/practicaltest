@extends('frontend.master')

@include('frontend.header')

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    
    <script>
    $(function() {
    $("#nu_datebirth").datepicker({
    onSelect: function(value, ui) {
        var today = new Date(),
            age = today.getFullYear() - ui.selectedYear;
        $('#a_ge').val(age);
    },
       
    dateFormat: 'dd-mm-yy',changeMonth: true,changeYear: true,yearRange:"c-100:c+0"
    });
      
});
    </script>
<br>
<br>
<div class="row gx-4 gx-lg-5 justify-content-center mb-5">
    <div class="col-lg-6">

    <p class="h4 mb-4">EMPLOYEE FORM.....</p>   
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        
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
        <form action="{{ url('/register')}}" method="post"  enctype="multipart/form-data" id="contactForm" >
        @csrf    
        <!-- Name input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="name" name="e_name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                <label for="name">First Name</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="name" name="lname" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                <label for="name">Last Name</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
            </div>
            <div class="form-floating mb-3">
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Female
                                </label>
                            </div>

                        </div>
                    </div>
                </fieldset>
                <!-- <input class="form-control" id="name" type="gender" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">gender	</label> -->
                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control"  type="text" id="nu_datebirth" name="bod" placeholder="Enter your name..." data-sb-validations="required" />
              
                
                <div class="invalid-feedback" data-sb-feedback="name:required">A date is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control"type="text" name="age" id="a_ge" class="nu_field"  data-sb-validations="required" />
                <label for="name">age</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">A Age is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="phone" name="contact" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                <label for="phone">contact </label>
                <div class="invalid-feedback" data-sb-feedback="phone:required">A contact number is required.</div>
            </div>
            <div class="form-floating mb-3">
                <div class="row">
                    <div class="col">


                        <select id="inputState" class="form-control" name="city">
                            <option selected>City...</option>
                            <option>Rajkot</option>
                            <option>Surat</option>
                            <option>Jamnager</option>
                            <option>Bhavanger</option>
                        </select>

                        <div class="invalid-feedback" data-sb-feedback="phone:required">city is required.</div>
                    </div>
                    <div class="col">

                  
                        <select id="inputState" class="form-control"name="company">
                        <option selected>company...</option>
                        @foreach($user as $row)
                            
                         
                            <option>{{$row->name}}</option>
                            @endforeach
                        </select>
                      
                        <div class="invalid-feedback" data-sb-feedback="phone:required">city is required.</div>

                    </div>
                </div>


            </div>

            <!-- Email address input-->
            <div class="form-floating mb-3">
                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                <label for="email">Email address</label>
                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="phone" name="password" type="password" data-sb-validations="required" />
                <label for="phone">password </label>
                <div class="invalid-feedback" data-sb-feedback="phone:required">password is required.</div>
            </div>

            <input class="form-control" id="phone" name="image" type="file" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="phone:required">Photo is required.</div>
            <br><br>
           
            <!-- Submit Button-->
            <input type="submit" name="submit" class="btn btn-default">
            <!-- <button type="submit"  name="submit" class="btn btn-default">Submit</button>     -->
        </form>
    </div>
</div>
@include('frontend.footer')
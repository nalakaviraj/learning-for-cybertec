<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>



    <div class="container">
      <h2>Passport Appointment System</h2><br/>

      <div class="notice-frame">
<h4>
  PERSONAL DETAILS.
</h4>
      <form method="post" action="{{url('applicants')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-12">
           <label for="Name_in_full">Name in Full *</label>
            <input type="text" class="form-control" name="Name_in_full" placeholder="Enter your name in full">
          </div>
        </div>
       <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-12">
           <label for="address">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter your Residence Address">
          </div>
        </div>
        <div class="row">
         <div class="col-md-2"></div>
          <div class="form-group col-md-12">
              <label for="signup_email">Email address</label>
              <input type="email" class="form-control" id="signup_email" name="signup_email"  aria-describedby="emailHelp" placeholder="Enter email">
            </div>
          </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-12">
              <label for="mobile">Mobile Number</label>
    <input type="telephone" class="form-control" id="mobile" name="mobile"   placeholder="Enter your Mobile Number">
            </div>
          </div>
          <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-12">
            <strong>Birth Day : </strong>  
            <input class="date form-control"  type="text" id="datepicker" name="birthday">   
         </div>
        </div>


          <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-12">
              <div class="form-group">
    <label for="nic_number">NIC Number</label>
    <input type="telephone" class="form-control" id="nic_number" name="nic_number"   placeholder="Enter your NIC Number">
            </div>
          </div>
        </div>



          <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-12">
              <div class="form-group">
    <label>Your CV</label>
    <input type="file" name="name" >
            
          </div>
        </div>
      </div>
    </div>

<div class="notice-frame">
<h4>
  PROFESIONAL DETAILS.
</h4>


          <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-12">
              <div class="form-group">
    <label for="position">what is the position you need to apply? *</label>
    <select id="position" name="position" style="width: 100%;" >
  <option value="volvo">Laravel Developer</option>
  <option value="saab">UI Developer</option>
  <option value="opel">Business Deveoper</option>
  <option value="audi">Wordpress Developer</option>
  <option value="audi">React Developer</option>
</select>
            </div>
          </div>
        </div>


         <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-12">
              <div class="form-group">
    <label for="previously_worked_company">Previously worked company *</label>
    <input type="text" class="form-control" id="previously_worked_company" name="previously_worked_company"  placeholder="Enter the company name that you have been worked at last...">
            </div>
          </div>
        </div>

 <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-12">
              <div class="form-group">
    <label for="job_title">Your job tittle *</label>
    <input type="text" class="form-control" id="job_title" name="job_title"   placeholder="Ex: Marketing Assistant, Software Engineer, UI/UX designer, etc...">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-12">
              <div class="form-group">
   <label for="monthly_salory">Monthly salary was</label>
    <input type="text" class="form-control" id="monthly_salory" name="monthly_salory"  placeholder="Ex: 25000 LKR">
            </div>
          </div>
        </div>

         <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-12">
              <div class="form-group">
  <label for="experience">Experience in years *</label>
    <input type="text" class="form-control" id="experience" name="experience"  placeholder="Ex: 2 1/2 years, etc...">
            </div>
          </div>
        </div>

         <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-12">
  <label for="expertise">Areas you're expertise with</label>
    <input type="textarea" class="form-control" id="expertise" name="expertise"   placeholder="Ex: Sales & marketing, PHP, Laraval, Java, CSS, Jscript, Bootstrap, etc...">
            </div>
          </div>

        </div>




  <div class="notice-frame">
    <h4>
 ACCOUNT DETAILS
</h4><p> (All payments will be deposited to this account)</p>

         
        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-12">
 <label for="account_no">Bank Account Number *</label>
    <input type="text" class="form-control" id="account_no" name="account_no"  placeholder="Enter your Account Number">
            </div>
          </div>

          <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-12">
  <label for="account_holder">Account Holder's Name *</label>
    <input type="text" class="form-control" id="account_holder" name="account_holder"  placeholder="Enter Account holder's Name">
            </div>
          </div>

          <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-12">
  <label for="bank_name">Bank name</label>
    <input type="text" class="form-control" id="bank_name" name="bank_name"  placeholder="Name of the bank">
            </div>
          </div>

          <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-12">
  <label for="bank_branch">Branch</label>
    <input type="text" class="form-control" id="bank_branch" name="bank_branch"  placeholder="Enter your Branch">
            </div>
          </div>

 <div class="row">
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="check"  id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">     By clicking "Submit" you agree to our Terms of Use and Privacy Policy also acknowledge that data you provide are correct & accurate.</label>
  </div>
</div>




        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="submit" class="btn btn-success danger">Reset</button>
          </div>
        </div>


      </form>
    </div>

    
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="main_container" style="">
    <div class="applicant">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Birthday</th>
        <th>NIC Number</th>
        <th>Position</th>
        <th>Previous Company</th>
        <th>Job title</th>
        <th>Montly Salory</th>
        <th>Experience</th>
        <th>Expertise</th>
        <th>Account No</th>
        <th>Account Holder</th>
        <th>Bank Name</th>
        <th>Bank Branch</th>
        
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($applicants as $applicant)
      @php
        $date=date('Y-m-d', $applicant['birthday']);
        @endphp
      <tr>
        <td>{{$applicant['id']}}</td>
        <td>{{$applicant['Name_in_full']}}</td>
        <td>{{$applicant['address']}}</td>
        <td>{{$applicant['signup_email']}}</td>
        <td>{{$applicant['mobile']}}</td>
        <td>{{$applicant['birthday']}}</td>
        <td>{{$applicant['nic_number']}}</td>
        <td>{{$applicant['position']}}</td>
        <td>{{$applicant['previously_worked_company']}}</td>
        <td>{{$applicant['job_title']}}</td>
        <td>{{$applicant['monthly_salory']}}</td>
        <td>{{$applicant['experience']}}</td>
        <td>{{$applicant['expertise']}}</td>
        <td>{{$applicant['account_no']}}</td>
        <td>{{$applicant['account_holder']}}</td>
        <td>{{$applicant['bank_name']}}</td>
        <td>{{$applicant['bank_branch']}}</td>

        
      
        
        <td><a href="{{action('ApplicantsController@edit', $applicant['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('ApplicantsController@destroy', $applicant['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
            <div class="btn-group" data-toggle="buttons">
  <label class="btn btn-primary active">
    <input type="checkbox" autocomplete="off" checked> Checkbox 1 (pre-checked)
  </label>
  <label class="btn btn-primary">
    <input type="checkbox" autocomplete="off"> Checkbox 2
  </label>
  <label class="btn btn-primary">
    <input type="checkbox" autocomplete="off"> Checkbox 3
  </label>
</div>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
</div>
  </body>
</html>
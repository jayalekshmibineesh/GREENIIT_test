@extends('index2')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>leave request</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h3>leave request</h3>
    <center>
    <div class="card" style="background-color:purple; width:50%; mt-4">
      <form action="{{ route('request_send') }}" method="POST">
                @csrf 
                  <div class="form-outline mb-4">
                  
                  <select name="type" id=""required class="form-control-lg mt-3">
                       <option>Select  Leave type</option>
                       <option value="Medical">Medical leave</option>
                       <option value="casual">casual leave</option>
                  </select><br>
                  <label for="">Start Date</label>
                  <input type="date" name="start_date"class="form-control-lg mt-2"><br>
                  <label for="">End date</label>
                  <input type="date" name="end_date"class="form-control-lg mt-2"><br>
                  
                  <input type="hidden" name="id" id="form3Example4cg"  value="{{Auth::user()->id}}"class="form-control-lg mt-2" />
                  <input type="textarea" name="reason" id="form3Example4cdg" placeholder="Enter reason for leave" class="form-control-lg mt-2" />
                       <br>                        
                  <input class="btn btn-primary mt-3" type="submit" value="submit">
        </form>

    </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
@endsection
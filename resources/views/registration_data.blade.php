<!doctype html>
<html lang="en">
  <head>
    <title>Users Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <table class="table" border="2">
            <thead>
                <tr>
                    <th>Sr_No:</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>User Name </th>
                    <th>password</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Country</th>
                    <th>Phone Number</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($RegisterData as $datas )              
                <tr>
                    <td>{{$datas->id}}</td>
                    <td>{{$datas->FullName}}</td>
                    <td>{{$datas->email}}</td>
                    <td>{{$datas->userName}}</td>
                    <td>{{$datas->password}}</td>
                    <td>{{$datas->Dob}}</td>
                    <td>{{$datas->gender}}</td>
                    <td>{{$datas->country}}</td>
                    <td>{{$datas->PhnNo}}</td>
                    <td><a href="{{url('/register/delete/')}}/{{$datas->id}}"><button class="btn btn-danger">Delete</button></a>
                    <a href="{{url('/register/edit/')}}/{{$datas->id}}"><button class="btn btn-primary">Edit</button></a></td>

                  
                    
                </tr>
                @endforeach
                 
            </tbody>
        </table>
      </div>
    
  </body>
</html>
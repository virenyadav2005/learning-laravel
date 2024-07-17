<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database Entry</title>

    <style>
        body {
            background-color: #f7f7f7;
        }

        .container {
            max-width: 500px;
            margin: 100px auto;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn {
            width: 100%;
        }
    </style>


</head>

<body>

    </head>

    <body>
        <div class="container">
            <h2 class="mb-4">{{$title}}</h2>
            <form action="{{$url}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" name="FullName" class="form-control" id="fullname" placeholder="Enter your full name"  required>

                    <span class="text-danger">
                        @error('FullName')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email"  required>
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>


                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="userName" class="form-control" id="username" placeholder="Choose a username"  required>
                    <span class="text-danger">
                        @error('userName')
                            {{ $message }}
                        @enderror
                    </span>

                </div>


                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter a password"  required>
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>


                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirmPassword"class="form-control" id="confirm_password" placeholder="Confirm your password"  required>
                    <span class="text-danger">
                        @error('confirmPassword')
                            {{ $message }}
                        @enderror
                    </span>

                </div>



                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="Dob" class="form-control" id="dob" required>
                    <span class="text-danger">
                        @error('Dob')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender"  required>
                        <option name="gender" value="">Select Gender</option>
                        <option name="gender" value="male">Male</option>
                        <option name="gender" value="female">Female</option>
                        <option name="gender" value="other">Other</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" name="country" class="form-control" id="country"  placeholder="Enter your country"  required>
                    <span class="text-danger">
                        @error('country')
                            {{ $message }}
                        @enderror
                    </span>

                </div>


                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" name="PhnNo" class="form-control" id="phone"   placeholder="Enter your phone number"  required>
                    <span class="text-danger">
                        @error('PhnNo')
                            {{ $message }}
                        @enderror
                    </span>
                </div>



                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>

        <!-- Bootstrap JS (Optional for form validation) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

</html>


</body>

</html>

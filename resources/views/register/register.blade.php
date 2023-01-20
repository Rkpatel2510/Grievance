<html>

<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">
  <link rel="stylesheet" href="css/vendors/simplebar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>

  <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card mb-4 mx-4">
            <div class="card-body p-4">
              <form action="/register" method="post">
                @csrf

                @if($errors)
                @foreach($errors -> all() as $err)
                <label> {{$err}} </label>
                @endforeach
                @endif

                <h1>Register</h1>
                <p class="text-medium-emphasis">Create your account</p>
                <div class="input-group mb-3">
                  <span class="input-group-text">
                    <i class="fa-solid fa-person"></i>
                  </span>
                  <input class="form-control" type="text" name="name" placeholder="Enter full name" value="{{old('name')}}">
                </div>

                <div class="input-group mb-3"> <span class="input-group-text">
                    <i class="fa-solid fa-envelope"></i>
                  </span>
                  <input class="form-control" type="text" name="email" placeholder="Enter e-mail id" value="{{old('email')}}">
                </div>

                <div class="input-group mb-3"> <span class="input-group-text">
                    <i class="fa-solid fa-phone"></i>
                  </span>
                  <input class="form-control" type="text" name="contact" placeholder="Enter mobile number" value="{{old('contact')}}">
                </div>

                <div class="input-group mb-4"> <span class="input-group-text">
                    <i class="fa-solid fa-id-card-clip"></i>
                  </span>
                  <input class="form-control" type="text" name="enrollment" placeholder="Enter enrollment number" value="{{old('enrollment')}}">
                </div>


                <div class="tab-content rounded-bottom ">
                  <div class="p-3 preview select-ds-inln col-md">
                    <select name="vertical" class="form-select" aria-label="Default select example">
                      <option selected="" value="">Vertical</option>
                      <option value="1">BFSI</option>
                      <option value="2">IT</option>
                      <option value="3">MEPS</option>
                    </select>
                  </div>
                  <div class="p-3 preview select-ds-inln col-md">
                    <select name="year" class="form-select" aria-label="Default select example">
                      <option selected="" value="">Year</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </div>
                  <div class="p-3 preview select-ds-inln col-md">
                    <select name="semester" class="form-select" aria-label="Default select example">
                      <option selected="" value="">Semester</option>
                      <option value="1">I</option>
                      <option value="2">II</option>
                      <option value="3">III</option>
                      <option value="3">IV</option>
                      <option value="3">V</option>
                      <option value="3">VI</option>
                    </select>
                  </div>
                </div>

                <button class="btn btn-primary px-4" type="submit">SUBMIT</button>&nbsp;&nbsp;
                <button class="btn btn-secondary px-4" type="reset">CANCEL</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script>
    //   function click() {
    //     windows.location.href = "/create";
    //   }
    // 
  </script>
  <!-- CoreUI and necessary plugins-->
  <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
  <script src="vendors/simplebar/js/simplebar.min.js"></script>
  <script>
  </script>
</body>

</html>
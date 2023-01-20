<html>

<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
  <link rel="stylesheet" href="css/vendors/simplebar.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<div class="bg-light min-vh-100 d-flex flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="card-group d-block d-md-flex row">
          <div class="card col-md-12 p-4 mb-0">
            <div class="card-body">
              <form action="/admin" method="POST">
                @csrf

                @if($errors)
                @foreach($errors -> all() as $err)
                <label> {{$err}} </label>
                @endforeach
                @endif

                <h1>Admin</h1>
                <p class="text-medium-emphasis">Sign In to your account</p>
                <div class="input-group mb-3">
                  <span class="input-group-text">
                    <i class="fa fa-envelope"></i>
                  </span>


                  <input class="form-control" type="text" name="email" placeholder="Email">
                </div>
                <div class="input-group mb-4">
                  <span class="input-group-text">

                    <i class="fa fa-key"></i>
                  </span>
                  <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="submit">LOGIN</button>
                  </div>
                  <div class="col-6 text-end">
                    <button class="btn btn-link px-0" type="button"><a href="/forgetlink/create"> Forgot password?</a> </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

</html>
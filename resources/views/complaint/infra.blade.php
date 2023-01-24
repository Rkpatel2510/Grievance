<html>

<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
  <link rel="stylesheet" href="css/vendors/simplebar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<body>
  @include('sidebar.sidebar')

  <div class="wrapper d-flex flex-column min-vh-100 bg-light">

    <header class="header header-sticky mb-4">
      <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
          <i class="fa-solid fa-bars"></i>
        </button>

        <ul class="header-nav ms-3">
          <li>
            <a class="logout" href="/">Logout &nbsp;<i class="fa-solid fa-right-from-bracket"></i></a>
          </li>
        </ul>
      </div>
    </header>

    <div class="container">
      <div class="row justify-content-center">
        <div class="mb-3">
          <div class="card mb-4 mx-4">
            <div class="card-body p-4">
              <form action="/infra" method="POST">
                @csrf

                @if($errors)
                @foreach($errors -> all() as $err)
                <label> {{$err}} </label>
                @endforeach
                @endif

                <h2 style="margin-bottom: 20px;">Infrastructure grievance </h2>

                <div class="input-group mb-3"><span class="input-group-text">
                    <i class="fa-solid fa-book"></i></span>
                  <input class="form-control" type="text" name="subject" placeholder="Subject">
                </div>

                <div class="input-group mb-4">
                  <textarea class="form-control" type="text" name="grievance" placeholder="Write grievance here"></textarea>
                </div>

                <!-- <form action="/action_page.php"> -->
                  <label for="myfile">Attach grievance file:</label>
                  <input type="file" id="myfile" name="name" multiple><br><br>
                <!-- </form> -->


                <button class="btn btn-primary px-4" type="submit" >SUBMIT</button>&nbsp;&nbsp;
                <button class="btn btn-secondary px-4" type="reset">CANCEL</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{url('js/vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>

</body>
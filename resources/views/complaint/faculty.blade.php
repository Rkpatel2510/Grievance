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
        <div class="mb-2">
          <div class="card mb-4 mx-4">
            <div class="card-body p-4">
              <form action="/faculty" method="POST">
                @csrf

                @if($errors)
                @foreach($errors -> all() as $err)
                <label> {{$err}} </label>
                @endforeach
                @endif

                <h2 style="margin-bottom: 20px;">Faculty grievance </h2>

                <div class="input-group mb-3">
                  <span class="input-group-text">
                    <i class="fa-solid fa-person"></i>
                  </span>
                  <select class="form-select"  aria-label="Default select example">
                    <option selected >Select faculty name</option>
                    <option value="1">Bhadresh shah</option>
                    <option value="2">Hardik Rabari</option>
                    <option value="3">Sanjay jaysawal</option>
                  </select>
                </div>

                <div class="input-group mb-3"><span class="input-group-text">
                    <i class="fa-solid fa-book"></i></span>
                  <input class="form-control" name="subject" type="text" placeholder="Subject">
                </div>
                <div class="Vertical"></div>

                <div class="tab-content rounded-bottom">
                  <div class="p-3 preview select-ds-inln col-md">
                    <select class="form-select" aria-label="Default select example">
                      <option selected >Select vertical</option>
                      <option value="1">BFSI</option>
                      <option value="2">IT</option>
                      <option value="3">MEPS</option>
                    </select>
                  </div>
                  <div class="p-3 preview select-ds-inln col-md">
                    <select class="form-select" aria-label="Default select example">
                      <option selected="">Select semester</option>
                      <option value="1">I</option>
                      <option value="2">II</option>
                      <option value="3">III</option>
                      <option value="3">IV</option>
                      <option value="3">V</option>
                      <option value="3">VI</option>
                    </select>
                  </div>
                </div>

                <div class="input-group mb-3">
                  <textarea class="form-control" name="grievance" type="text" placeholder="Write grievance here" rows="3"></textarea>
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

  <script src="{{url('js/vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>

</body>

</html>
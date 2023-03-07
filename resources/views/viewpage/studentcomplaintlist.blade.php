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
        @if (session('success'))
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <div class="car"></div>
                <div class="card mb-4">
                    <div class="card-header"><strong>Grievances</strong></div>
                    <div class="card-body">
                        <div class="example">
                            <div class="tab-content rounded-bottom">
                                <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-566">
                                    <table class="table table-bordered">
                                        <thead class="table-light" style="text-align: center;">

                                            <tr>
                                                <th scope="col">Grievance no.</th>
                                                <th scope="col">Subject</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($records as $value)
                                            <tr style="text-align: center;">
                                                <th scope="row"> {{$value->c_no;}}</th>
                                                <td> {{$value->type;}}</td>
                                                <td> {{date('d F Y H:i', strtotime($value ->c_created_dt))}}</td>
                                                <td> {{$value->c_status;}}</td>
                                                <td>
                                                    <a class="view" href="/student/complaint/{{$value->c_id;}}">
                                                        <i class="fa-solid fa-eye" style="padding-right: 15px;" title="View grievance"></i>
                                                    </a>
                                                    <a class="view" href="/student/complaint/{{$value->c_id;}}/edit">
                                                        <i class="fa-solid fa-pen-to-square" style="padding-right: 15px;" title="Edit grievance"></i>
                                                    </a>
                                                    <form action="/student/complaint/{{$value->c_id;}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dbn" >
                                                           <a class="view" href=""><i class="fa-solid fa-trash" title="Delete grievance"></i></a>
                                                        </button>
                                                    </form>
                                                    <!-- style="background-color:transparent; border-color:transparent;" -->
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 25px;">
                            @include('pagination')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <script>
    </script>

</body>

</html>
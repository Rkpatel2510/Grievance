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


        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <div class="example">
                    <div class="tab-content rounded-bottom">
                        <div class="card mb-4">
                            <div class="card-header"><strong>Grievances</strong></div>
                            <div class="card-body">
                                <div class="example">

                                    <div class="tab-content rounded-bottom">
                                        <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-277">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Faculty</h5>
                                                            <p class="card-text">Grievance for faculty</p>
                                                            <a class="btn btn-primary" href="/faculty"> <i class="fa-solid fa-plus"></i> Add</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Infrastructure</h5>
                                                            <p class="card-text">Grievance for infrastructure</p>
                                                            <a class="btn btn-primary" href="/infra"> <i class="fa-solid fa-plus"></i> Add</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content rounded-bottom">
                                        <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-277">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Management</h5>
                                                            <p class="card-text">Grievance for management</p>
                                                            <a class="btn btn-primary" href="/management"> <i class="fa-solid fa-plus"></i> Add</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Placement</h5>
                                                            <p class="card-text">Grievance for placement</p>
                                                            <a class="btn btn-primary" href="/placement"> <i class="fa-solid fa-plus"></i> Add</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{url('js/vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>

</body>

</html>
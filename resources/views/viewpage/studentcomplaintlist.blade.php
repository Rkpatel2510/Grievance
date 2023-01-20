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

        <style>
            i {
                cursor: pointer;
            }
        </style>

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
                                            <tr style="text-align: center;">
                                                <th scope="row">IN20221006</th>
                                                <td>Infrastructure</td>
                                                <td>6-10-2022 14:25</td>
                                                <td>Pending</td>
                                                <td>
                                                    <a class="view" href="/student/view/create"><i class="fa-solid fa-eye" style="padding-right: 15px;" title="View grievance"></i></a>
                                                    <i class="fa-solid fa-pen-to-square" title="Edit grievance"></i>
                                                </td>

                                            </tr>
                                            <tr style="text-align: center;">
                                                <th scope="row">IN20221006</th>
                                                <td>Infrastructure</td>
                                                <td>6-10-2022 9:45</td>
                                                <td>Pending</td>
                                                <td>
                                                    <a class="view" href="/student/view/create"><i class="fa-solid fa-eye" style="padding-right: 15px;" title="View grievance"></i></a>
                                                    <i class="fa-solid fa-pen-to-square" title="Edit grievance"></i>
                                                </td>

                                            </tr>
                                            <tr style="text-align: center;">
                                                <th scope="row">IN20221006</th>
                                                <td>Infrastructure</td>
                                                <td>6-10-2022 12:40</td>
                                                <td>Pending</td>
                                                <td>
                                                    <a class="view" href="/student/view/create"><i class="fa-solid fa-eye" style="padding-right: 15px;" title="View grievance"></i></a>
                                                    <i class="fa-solid fa-pen-to-square" title="Edit grievance"></i>
                                                </td>

                                            </tr>
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
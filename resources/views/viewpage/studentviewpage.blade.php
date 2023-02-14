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
            table {
                text-align: center;
                width: 100%;
            }

            th,
            td {
                border: 1px solid #DADCE0;
                padding: 5px 20px;
            }
        </style>

        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-2">
                    <div class="card mb-4 mx-4">
                        <div class="card-body p-4">

                            <h2 style="margin-bottom: 20px;">Grievance-Raxit</h2>

                            <div class="example">
                                <div class="tab-content rounded-bottom">
                                    <table>
                                        <tbody>
                                            <tr style="text-align: left;">
                                                <th scope="col">Grievance no.</th>
                                                <td> {{$records->c_no;}}</td>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th scope="col">Grievance subject</th>
                                                <td> {{$records->c_type;}}</td>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th scope="col">Faculy name</th>
                                                <td> {{$records->c_fname;}}</td>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th scope="col">Faculty subject</th>
                                                <td> {{$records->c_fsubject;}}</td>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th scope="col">Faculty semester</th>
                                                <td> {{$records->c_fsem;}}</td>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th scope="col">SKP name</th>
                                                <td> {{$records->c_skpname;}}</td>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th scope="col">Placement status</th>
                                                <td> {{$records->placement;}}</td>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th scope="col">Attach file</th>
                                                <td> {{$records->c_attach;}}</td>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th scope="col">Grievance</th>
                                                <td> {{$records->c_complaint;}}</td>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th scope="col">Date</th>
                                                <td> {{$records->c_modified_dt;}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
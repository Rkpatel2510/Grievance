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
                            <h2 style="margin-bottom: 20px;">Grievance Grievance no.-IN20221006</h2>
                            <div class="example">
                                <div class="tab-content rounded-bottom">
                                    <table>
                                        <tbody>
                                            <tr style="text-align: left;">
                                                <th scope="col">Student name</th>
                                                <td>Raxit</td>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th scope="col">Vertical</th>
                                                <td>IT</td>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th scope="col">Semester</th>
                                                <td>III</td>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th scope="col">Grievance subject</th>
                                                <td>Infrastructure</td>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th scope="col">Attach file</th>
                                                <td>link</td>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th scope="col">Date</th>
                                                <td>6/10/2022 13:50</td>
                                            </tr>
                                            <tr style="text-align: left;">
                                                <th scope="col">Grievance</th>
                                                <td>Class is not clean</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="input-group mb-3" style="margin-top: 30px;">
                                    <textarea class="form-control" type="text" placeholder="Reply here" rows="3"></textarea>
                                </div>

                                <div style="margin-bottom: 25px;">
                                    <input type="radio" name="age" value="60">
                                    <label for="age2">Pending</label>&nbsp;&nbsp;
                                    <input type="radio" name="age" value="100">
                                    <label for="age3">Process</label>&nbsp;&nbsp;
                                    <input type="radio" name="age" value="100">
                                    <label for="age3">Resolve</label>
                                </div>

                                <button class="btn btn-primary px-4" type="submit" onclick="">SUBMIT</button>&nbsp;&nbsp;

                                <button class="btn btn-secondary px-4" type="reset">CANCEL</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{url('js/vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>

</body>
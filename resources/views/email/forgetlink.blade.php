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
                <div class="col-md-5">
                    <div class="card mb-4 mx-4">
                        <div class="card-body p-4">
                            <form action="/" method="$_POST">
                                @csrf
                                <h1>Forgot password?</h1>
                                <p >Reset password</p>

                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" placeholder="Enter email id">
                                </div>

                                <button class="btn btn-primary col-md" type="submit" style="margin-top: 10px;">Reset password</button>
                                <button class="btn btn-secondary px-4" type="reset" style="margin-top: 10px;">CANCEL</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
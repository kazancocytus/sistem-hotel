<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Access Denied</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 750px;
            margin: 0 auto;
            margin-top: 100px;
            text-align: center;
        }

        .denied-icon {
            font-size: 96px;
            color: #d9534f;
            margin-bottom: 30px;
        }

        .denied-title {
            font-size: 36px;
            color: #d9534f;
            margin-bottom: 20px;
        }

        .denied-description {
            font-size: 24px;
            color: #666;
            margin-bottom: 30px;
        }

        .btn-denied {
            color: #fff;
            background-color: #d9534f;
            border-color: #d9534f;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <i class="fas fa-ban denied-icon"></i>
                    <h1 class="denied-title">Access Denied!!!</h1>
                    <p class="denied-description">
                        It seems that you do not have the necessary permissions to access the requested page.
                    </p>
                    <a href="{{ route('home') }}" class="btn btn-denied">Go to Home</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
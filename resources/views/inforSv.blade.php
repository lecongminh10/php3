<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Display</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">{{$thongtin['msv']}}</h1>
                <p class="card-text">{{$thongtin['ten']}}</p>
                <p class="card-text">{{$thongtin['email']}}</p>
                <p class="card-text">{{$thongtin['sdt']}}</p>
            </div>
        </div>
    </div>
</body>
</html>

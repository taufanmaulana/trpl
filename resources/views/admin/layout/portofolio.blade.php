<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Square Trip</title>
    <style>
        .container {
            padding: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <embed src="{{asset('storage/'.$data)}}" type="application/pdf" width="100%" height="750px">
    </div>
</body>

</html>
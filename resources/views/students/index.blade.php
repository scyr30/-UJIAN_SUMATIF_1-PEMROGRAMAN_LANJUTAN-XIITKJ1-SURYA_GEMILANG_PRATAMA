<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Review</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inria+Serif&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sour+Gummy:ital,wdth,wght@0,101.6,100..900;1,101.6,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css"/>
</head>
<body>
 
<div class="content">
 
    @foreach($students as $student)
        <div class="card">
            <div class="card-1">
                <img src="{{ $student['foto'] }}"/>
                <div class="card-2">
                    <a href="{{ url('/students/' . $student['id']) }}">{{$student['nama']}}</a>
                    <p>{{ $student['username'] }}</p>
                </div>
            </div>
 
            <p>{{  $student['deskripsi']  }}</p>
        </div>
    @endforeach
   
 
 
</body>
</html>
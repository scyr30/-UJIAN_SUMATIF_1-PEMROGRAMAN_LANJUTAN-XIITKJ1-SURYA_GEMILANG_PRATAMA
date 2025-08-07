<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detail Siswa</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gabarito:wght@400..900&family=Inria+Serif&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sour+Gummy:ital,wdth,wght@0,101.6,100..900;1,101.6,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/app.css"/>
</head>
<body>
<div class="student-detail">
 
    <img src="{{  $student['foto'] }}"/>
 
    <p>{{ $student['username'] }}</p>
<p>{{ $student['nama'] }}</p>
<div class="card">
<p>{{ $student['kelas'] }}</p> |
<p>{{ $student['hobi'] }}</p>
</div>
<p>{{ $student['deskripsi'] }}</p>
 
    <div class="button">
<button type="submit" class="edit">Edit Profile</button>
<button type="submit" class="delete">Delete Account</button>
</div>
</div>
</body>
</html>

 
 
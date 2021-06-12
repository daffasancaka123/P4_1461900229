<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Buku</title>
</head>
<body>
  <p>TES</p>
</body>
</html>
[10:22 AM]
$buku = Buku::all();
        return view('buku0229', ['Buku'=> $buku]);
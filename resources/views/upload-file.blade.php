<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload CSV File</title>
</head>
<body>
    <form action="/upload" method="post" enctype="multipart/form-data">
    @csrf
        <input type="file" name="uploadcsv" id="uploadcsv">
        <input type="submit" value="Upload">
    </form>
</body>
</html>
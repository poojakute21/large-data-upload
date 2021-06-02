<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Upload CSV File</title>
    <script>
        $(document).ready(function() {
           
            setInterval(function(){
                $.ajax({
                url: "/getquaterdata",
                success:function(data){
                    $('#displaydata').html(data); //insert text of test.php into your div
                
                }
            }), 2000});

            setInterval(function(){
                $.ajax({
                url: "/progress-bar",
                success:function(data){
                    $('#progress').html(data); //insert text of test.php into your div
                
                }
            }), 2000});

            
        });
    </script>
<style>
body{
    padding: 20px 100px 100px 100px;
} 
</style>
</head>
<body>
    <div class="row">
        <form action="/upload" method="post" enctype="multipart/form-data">

            @csrf
            <div class="row">
                <div class="panel panel-primary filterable">
                    <div class="panel-heading">
                        <h3 class="panel-title">Upload Large Data</h3>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-6">
                    <div class="col-md-6">
                        <input class="form-control" type="file" name="uploadcsv" id="uploadcsv">
                    </div>
                    <div class="col-md-6">
                        <input class="btn btn-success form-control" type="submit" value="Upload">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row" id="progress" style="width:50%;margin-left:50px;" >
                    </div>
                </div>
            </div>
            <div class="row" id="displaydata">
                
            </div>
                
        </form>
    </div>
            
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<?php
if($getDatas->total_jobs == $getDatas->pending_jobs ){
    $percentage = 0;
    $total = "Total Jobs: 0";
    $pending = "Pending Jobs: 0";
    $completed = "Completed Jobs: 0";
    $percentage_display = "Percentage Completed 0 %";
}elseif($getDatas->pending_jobs == 0 ){
    $uploaded_jobs = $getDatas->total_jobs - $getDatas->pending_jobs;
    $percentage = 100;
    $total = "Total Jobs: ".$getDatas->total_jobs;
    $pending = "Pending Jobs: ".$getDatas->pending_jobs;
    $completed = "Completed Jobs: ".$uploaded_jobs;
    $percentage_display = "Percentage Completed: ".$percentage." %";
}
else{
    $uploaded_jobs = $getDatas->total_jobs - $getDatas->pending_jobs;
    $percentage = round(($uploaded_jobs/$getDatas->total_jobs)*100);
    $total = "Total Jobs: ".$getDatas->total_jobs;
    $pending = "Pending Jobs: ".$getDatas->pending_jobs;
    $completed = "Completed Jobs: ".$uploaded_jobs;
    $percentage_display = "Percentage Completed: ".$percentage." %";
}
?>
<div class="row">
    <ul style="color:red;font-size:20px;">
        <li><?php echo $total; ?></li>
        <li><?php echo $pending; ?></li>
        <li><?php echo $completed;?></li>
        <li><?php echo $percentage_display;?></li>
    </ul>
</div>
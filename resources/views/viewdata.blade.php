<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<table class="table table-striped  table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Time Ref</th>
            <th>Account</th>
            <th>Code</th>
            <th>Country Code</th>
            <th>Product Type</th>
            <th>Value</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($getDatas as $getData)
        <tr>
            <td>{{$getData->id}}</td>
            <td>{{$getData->time_ref}}</td>
            <td>{{$getData->account}}</td>
            <td>{{$getData->code}}</td>
            <td>{{$getData->country_code}}</td>
            <td>{{$getData->product_type}}</td>
            <td>{{$getData->value}}</td>
            <td>{{$getData->status}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $getDatas->links() }}


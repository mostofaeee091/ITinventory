<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>All Gate Pass</h2>
            <a href="{{url('/add-gatepass')}}" class="btn btn-sm btn-primary float-right">Add Gatepass</a>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gatepass No</th>
                    <th scope="col">Date & Time</th>
                    <th scope="col">Employee ID</th>
                    <th scope="col">Destination</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($gatepasses as $gatepass)
                <tr>
                    <th scope="row">{{$gatepass->id}}</th>
                    <td>{{$gatepass->gatepassNo}}</td>
                    <td>{{$gatepass->created_at}}</td>
                    <td>{{$gatepass->employeeId}}</td>
                    <td>{{$gatepass->destination}}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                        <a href="{{url('/generategatepass',$gatepass->id)}}" class="btn btn-sm btn-success">Generate Gatepass</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

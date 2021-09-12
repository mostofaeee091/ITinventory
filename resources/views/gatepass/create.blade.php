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
            <a href="{{url('/gatepass')}}" class="btn btn-sm btn-primary float-right">All Gate Pass</a>
            <form class="row g-3" action="{{url('/add-gatepass')}}" method="Post">
                @csrf

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Gatepass No</label>
                        <input type="text" name="gatepassNo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div></div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Company Name</label>
                        <input type="text" name="companyName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div></div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Destination</label>
                        <input type="text" name="destination" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div> </div>




                <div class="col-md-3">
                    <label for="exampleInputEmail1" class="form-label">Attention</label>
                    <input type="text" name="attention" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <div class="col-md-3">
                    <label for="exampleInputEmail1" class="form-label">Carrier Name</label>
                    <input type="text" name="carrierName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <div class="col-md-3">
                    <label for="exampleInputEmail1" class="form-label">Designation</label>
                    <input type="text" name="designation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <div class="col-md-3">
                    <label for="exampleInputEmail1" class="form-label">Employee ID</label>
                    <input type="text" name="employeeId" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <table class="table table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Purpose</th>
                        <th><a href="javascript:void(0)" class="btn btn-sm btn-success addRow">+</a></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>

                            <input type="text" name="productName[]" class="form-control">
                        </td>
                        <td>

                            <input type="text" name="quantity[]" class="form-control">
                        </td>

                        <td>

                            <textarea class="form-control" name="purpose[]" aria-label="With textarea"></textarea>
                        </td>
                        <th><a href="javascript:void(0)" class="btn btn-sm btn-danger deleteRow">-</a></th>
                    </tr>
                    </tbody>
                </table>



                <div class="col-md-4">
                    <label for="exampleInputEmail1" class="form-label">Prepared By</label>
                    <input type="text" name="preparedBy" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <div class="col-md-4">
                    <label for="exampleInputEmail1" class="form-label">Received By</label>
                    <input type="text" name="receivedBy" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <div class="col-md-4">
                    <label for="exampleInputEmail1" class="form-label">Authorized By</label>
                    <input type="text" name="authorizedBy" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $('thead').on('click','.addRow',function () {
        var tr ="<tr>"+
            "<td><input type='text' name='productName[]' class='form-control'></td>"+
            "<td><input type='text' name='quantity[]' class='form-control'></td>"+
            "<td><textarea class='form-control' name='purpose[]'></textarea></td>"+
            "<th><a href='javascript:void(0)' class='btn btn-sm btn-danger deleteRow'>-</a></th>"+
            "</tr>"
        $('tbody').append(tr);
    });
    $('tbody').on('click','.deleteRow',function () {
        $(this).parent().parent().remove();
    });
</script>
</body>
</html>

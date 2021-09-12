<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
<style>
    #textbox {
        display: flex;
    }
    .alignleft {
        flex: 1;
        text-align: left;
    }
    .aligncenter {
        flex: 1;
        text-align: center;
    }
    .alignright {
        flex: 1;
        text-align: right;
    }

</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h2 class="text-center">{{$gatepass->companyName}}</h2>
            <p class="text-center">House 77, Sorharwardi Avenue, Baridhara Diplometic Zone, Dhaka 1212</p>
            <h2 class="text-center">IT Hotline : : 01777707585</h2><br><br>
            <h1 class="text-center">Gate Pass</h1>
            <p class="text-center">Information Technology Department</p><br><br>
            <div class="destination-section">
                <div id="textbox">
                    <p class="alignleft">Destination: {{$gatepass->destination}}</p>

                    <p class="alignright">Date & Time : {{$gatepass->created_at}}</p>
                </div>



            <p><strong>Attention : {{$gatepass->attention}}</strong></p>

                <div id="textbox">
                    <p class="alignleft">Carrier Name : {{$gatepass->carrierName}}</p>
                    <p class="aligncenter">Designation : {{$gatepass->designation}}</p>
                    <p class="alignright">Employee Id : {{$gatepass->employeeId}}</p>
                </div>

                <div class="col-md-4"><p></p></div>
                <div class="col-md-4"><p></p></div>
                <div class="col-md-4"><p></p></div>
            </div>
            <table class="table table-bordered" id="table-datatables">
                <p>Items Details</p>
                <thead>
                <tr>
                    <th scope="col" class="aligncenter">Gatepass No</th>
                    <th scope="col" class="aligncenter">Product Description</th>
                    <th scope="col" class="aligncenter">Quantity</th>
                    <th scope="col" class="aligncenter">Purpose</th>


                </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)

                <tr>

                    <td class="aligncenter">{{$row->gatepassNo}}</td>
                    <td class="aligncenter">{{$row->productName}}</td>
                    <td class="aligncenter">{{$row->quantity}}</td>
                    <td class="aligncenter"><li>{{$row->purpose}}</li></td>
                </tr>

                    @endforeach

{{--                    <tr>--}}

{{--                        <td class="aligncenter">{{$gatepass->gatepassNo}}</td>--}}

{{--                        <td class="aligncenter">{{$gatepass->product->productName}}</td>--}}
{{--                        <td class="aligncenter">{{$gatepass->product->quantity}}</td>--}}
{{--                        <td class="aligncenter"><li>{{$gatepass->product->purpose}}</li></td>--}}
{{--                    </tr>--}}

                </tbody>
            </table>
            <p><strong>NB: Please acknowledge by (email: tech@usbair.com) upon item received.</strong></p>
            <br><br><br><br><br>
            <div id="textbox">
                <p class="alignleft">{{$gatepass->preparedBy}}
               <br>

                Prepared By
                </p>
                <p class="aligncenter">{{$gatepass->receivedBy}}<br>Received By</p>
                <p class="alignright">{{$gatepass->authorizedBy}}<br>Authorized By</p>
            </div>
{{--                <a href="" class="btn btn-sm btn-danger">Print</a>--}}
            <br>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>

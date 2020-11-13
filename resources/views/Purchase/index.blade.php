<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Second Buyer Purchase Information</h2>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Buyer ID</th>
                        <th scope="col">Buyer Name</th>
                        <th scope="col">Total Diary Taken</th>
                        <th scope="col">Total Pen Taken</th>
                        <th scope="col">Total Eraser Taken</th>
                        <th scope="col">Total Items Taken</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @if(isset($data))
                            <th scope="row">{{$data["Buyer id"]}}</th>
                            <td>{{$data["Buyer Name"]}}</td>
                            <td>{{$data["Total Diary Taken"]}}</td>
                            <td>{{$data["Total Pen Taken"]}}</td>
                            <td>{{$data["Total Eraser Taken"]}}</td>
                            <td>{{$data["Total items Taken"]}}</td>

                        @elseif($purchase_list)
                    <tr>
                           @foreach ($purchase_list as $item)
                           <th scope="row">{{$item["id"]}}</th>
                           <td>{{$item["name"]}}</td>
                           <td>{{$item["d_taken"]}}</td>
                           <td>{{$item["p_taken"]}}</td>
                           <td>{{$item["e_taken"]}}</td>
                           <td>{{$item["total_taken"]}}</td>
                        </tr>
                           @endforeach

                        @endif

                    </tbody>
                </table>
    </div>
</div>
</div>


</body>
</html>

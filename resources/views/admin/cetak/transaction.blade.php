<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table.static{
            position: relative;
            /* left 3%; */
            border: 1px solid #545454;
        }
    </style>
    <title>Laporan Transaksi</title>
</head>
<body>
    <div class=" form-group">
        <p align="center"><b>Laporan Transaksi</b></p>

        <div class="col-lg-12 py-3">
            <div class="card shadow">
                <div class="table-responsive rounded-lg text-nowrap">
                  <table class="table bg-colorPrimary static" align="center" border="1px" style="width: 95%;">
                        <thead class=" bg-colorSecondary">
                            <tr class="font-josefin">
                                <th>No Reservation</th>
                                <th>Customer Name</th>
                                <th>Phone</th>
                                <th>Suites Room</th>
                                <th>Deluxe Room</th>
                                <th>Standart Room</th>
                                <th>Check-in</th>
                                <th>Check-out</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                            @foreach($transaction as $data)
                            <tr>
                                <td>{{ $data->no_reservation }} </td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $data->name }}</strong></td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->suite }}</td>
                                <td>{{ $data->deluxe }}</td>
                                <td>{{ $data->standart }}</td>
                                <td>{{ $data->check_in }}</td>
                                <td>{{ $data->check_out }}</td>
                                <td> ${{ $data->price }}</td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>          

    </div>
    
</body>
</html>
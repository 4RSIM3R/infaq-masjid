<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campaign Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .table-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
            margin: auto;
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid black;
        }

        th {
            background-color: #f2f2f2;
        }

        @media print {
            @page {
                size: A4;
                margin: 20mm;
            }

            body {
                margin: 0;
                padding: 0;
            }
        }
    </style>
</head>

<body onload="window.print()">

    <h1 style="text-align: center;">Campaign Report</h1>

    <div class="table-container">
        <table>
            <tr>
                <th>Nama Campaign</th>
                <td>{{ $data->name }}</td>
                <th>Total Donasi</th>
                <td>{{ number_format($data->total_donations_paid) }}</td>
            </tr>
            <tr>
                <th>Deathline</th>
                <td>{{ $data->end_date }}</td>
                <th>Target</th>
                <td>{{ $data->target }}</td>
            </tr>
        </table>
    </div>

    <div class="table-container">
        <table>
            <tr>
                <td>Donatur</td>
                <td>Jumlah</td>
                <td>Status</td>
            </tr>
            @foreach ($data->donations as $donation)
                <tr>
                    <td>{{ $donation->name }}</td>
                    <td>{{ number_format($donation->amount) }}</td>
                    <td>{{ $donation->status }}</td>
                </tr>
            @endforeach
        </table>
    </div>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Print Table</title>
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

    th, td {
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
        <td>aaa</td>
        <th>Total Donasi</th>
        <td>100000</td>
      </tr>
      <tr>
        <th>Deathline</th>
        <td>aaaa</td>
        <th>Target</th>
        <td>1000</td>
      </tr>
    </table>
  </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Request Tracking</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f9;
      margin: 0;
      padding: 20px;
    }

    h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .filters {
      display: flex;
      gap: 10px;
      margin-bottom: 20px;
    }

    select {
      padding: 8px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
      background-color: #fff;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }

    th, td {
      padding: 12px 16px;
      border-bottom: 1px solid #eee;
      text-align: left;
    }

    th {
      background-color: #e6f0ff;
      color: #333;
      font-weight: 600;
    }

    td {
      color: #444;
    }

    .status {
      color: orange;
      font-weight: bold;
    }

    .actions a {
      display: inline-block;
      padding: 6px 12px;
      background-color: #007BFF;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      font-size: 13px;
    }

    .actions a:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <h2>Request Tracking</h2>

  <div class="filters">
    <select><option>All Request Type</option></select>
    <select><option>All Years</option></select>
    <select><option>All Months</option></select>
    <select><option>All Status</option></select>
  </div>

  <table>
    <thead>
      <tr>
        <th>ID Number</th>
        <th>Name</th>
        <th>Request Type</th>
        <th>Date Requested</th>
        <th>Status</th>
        <th>Days Processing</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>202500123</td>
        <td>Juan Dela Cruz</td>
        <td>Document</td>
        <td>2025-10-30</td>
        <td class="status">PENDING</td>
        <td>3 days</td>
        <td class="actions"><a href="#">View Form Request</a></td>
      </tr>
      <tr>
        <td>202500124</td>
        <td>Juan Dela Cruz</td>
        <td>ID Replacement</td>
        <td>2025-10-28</td>
        <td class="status">PENDING</td>
        <td>5 days</td>
        <td class="actions"><a href="#">View Form Request</a></td>
      </tr>
      <tr>
        <td>202500125</td>
        <td>Juan Dela Cruz</td>
        <td>Wi-Fi Extension</td>
        <td>2025-10-25</td>
        <td class="status">PENDING</td>
        <td>8 days</td>
        <td class="actions"><a href="#">View Form Request</a></td>
      </tr>
      <tr>
        <td>202500126</td>
        <td>Juan Dela Cruz</td>
        <td>E-Tarp Design</td>
        <td>2025-10-31</td>
        <td class="status">PENDING</td>
        <td>2 days</td>
        <td class="actions"><a href="#">View Form Request</a></td>
      </tr>
      <tr>
        <td>202500127</td>
        <td>Juan Dela Cruz</td>
        <td>Refund</td>
        <td>2025-10-29</td>
        <td class="status">PENDING</td>
        <td>4 days</td>
        <td class="actions"><a href="#">View Receipt</a></td>
      </tr>
    </tbody>
  </table>

</body>
</html>

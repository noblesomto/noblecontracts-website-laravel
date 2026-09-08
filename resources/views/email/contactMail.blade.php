<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>A user with the details below made an inquiry on the {{ config('global.site_name') }} website</h2>

<table style="width:100%">
  <tr>
    <th>Name:</th>
    <td>{{ $name }}</td>
  </tr>

  <tr>
    <th>Phone:</th>
    <td>{{ $phone }}</td>
  </tr>
  <tr>
    <th>Email:</th>
    <td>{{ $email }}</td>
  </tr>
  <tr>
  
  <tr>
    <th>Subject:</th>
    <td>{{ $subject }}</td>
  </tr>
  
  <tr>
    <th>Message:</th>
    <td>{{ $message }}</td>
  </tr>
</table>

</body>
</html>


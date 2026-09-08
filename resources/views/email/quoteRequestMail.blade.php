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

<h2>New project quote request from the {{ config('global.site_name') }} website</h2>

<table style="width:100%">
  <tr>
    <th>Name / Business</th>
    <td>{{ $draft->name }}</td>
  </tr>
  <tr>
    <th>Email</th>
    <td>{{ $draft->email }}</td>
  </tr>
  <tr>
    <th>Phone</th>
    <td>{{ $draft->phone }}</td>
  </tr>
  <tr>
    <th>Preferred Contact Method</th>
    <td>{{ ucfirst($draft->contact_method ?? 'Not specified') }}</td>
  </tr>
  <tr>
    <th>Service Type</th>
    <td>{{ ucwords(str_replace('_', ' ', $draft->service_type)) }}</td>
  </tr>
  <tr>
    <th>Budget</th>
    <td>{{ ucwords(str_replace('_', ' ', $draft->budget ?? 'Not specified')) }}</td>
  </tr>
  <tr>
    <th>Timeline</th>
    <td>{{ ucwords(str_replace('_', ' ', $draft->timeline ?? 'Not specified')) }}</td>
  </tr>
  <tr>
    <th>Project Description</th>
    <td>{{ $draft->description }}</td>
  </tr>
  @if($draft->goal)
  <tr>
    <th>Main Goal / Problem</th>
    <td>{{ $draft->goal }}</td>
  </tr>
  @endif
  @if($draft->additional_notes)
  <tr>
    <th>Additional Notes</th>
    <td>{{ $draft->additional_notes }}</td>
  </tr>
  @endif
  <tr>
    <th>IP Address</th>
    <td>{{ $draft->ip_address }}</td>
  </tr>
  <tr>
    <th>Submitted</th>
    <td>{{ $draft->submitted_at?->format('M d, Y h:i A') }}</td>
  </tr>
</table>

<p><a href="mailto:{{ $draft->email }}?subject=Re: Your Project Quote Request">Reply to {{ $draft->name }}</a></p>

</body>
</html>

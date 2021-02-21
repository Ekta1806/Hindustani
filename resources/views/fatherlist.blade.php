<head>
<style>
#person {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#person td, #customers th {
  border: 1px solid #ddd;
  text-align: center;
  padding: 8px;
}

#person tr:nth-child(even){background-color: #f2f2f2;}

#person tr:hover {background-color: #ddd;}

#person th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<table border="1" id="person">
<h1 style="align:center">Father Details</h1>
<tr>
<th>Id</th>
<th>Father's Name</th>
<th>Father's Occupation</th>
<th>Father's Adhar</th>
<th>Father's Mobile</th>
</tr>

@foreach($per as $p)
<tr>
<td>{{$p->id}}</td>
<td>{{$p->father}}</td>
<td>{{$p->f_occupation}}</td>
<td>{{$p->f_adhar}}</td>
<td>{{$p->f_mobile}}</td>
</tr>
@endforeach
</table>

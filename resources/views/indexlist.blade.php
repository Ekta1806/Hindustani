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
<h1 style="align:center">Index Form List</h1>
<tr>
<th>Id</th>
<th>Name</th>
<th>Adhar</th>
<th>B'Date</th>
<th>Extra</th>
</tr>
@foreach($per as $p)
<tr>
<td>{{$p['id']}}</td>
<td>{{$p['name']}}</td>
<td>{{$p['adhar']}}</td>
<td>{{$p['bdate']}}</td>
<td><a href={{'showdetails'}} style="color:green">Show Details</a> </td>
</tr>
@endforeach
</table>
<span>
{{$per->links()}}
</span>
<style>
.w-5{
    display:none
}
</style>
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
<h1>Show Details Form List</h1>
<table border="1" id="person">

<tr>
<th>Id</th>
<th>Name</th>
<th>Adhar No.</th>
<th>B'Date</th>
<th>Father</th>
<th>Mother</th>
<th>Children</th>
</tr>
@foreach($per as $p)
<tr>
<td>{{$p['id']}}</td>
<td>{{$p['name']}}</td>
<td>{{$p['adhar']}}</td>
<td>{{$p['bdate']}}</td>
<td><a href={{'fatherlist/' .$p['id'] }} style="color:green">{{$p['father']}}</td></a>
<td><a href={{'motherlist/' .$p['id']  }} style="color:green">{{$p['mother']}}</td></a>
<td><a href={{'childrenlist/'. $p['id'] }} style="color:green">{{$p['children']}}</td></a>
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
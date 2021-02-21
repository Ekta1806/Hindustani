<head>
<style>
input[type=text],input[type=date], select {
  width: 100%;
  padding: 10px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box
}

input[type=submit] {
  width: 17%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  align:right;
}
input[type=button]{
    /* margin: 0 8px; */

}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
    align:center;
    width:50%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin:0px 200px;
}

</style>

</head>
<body>
<div>
<form action="/insertc" method="post">
<fieldset><legend>Children Information</legend>
@csrf

<h3>Children Details:</h3>
Child's id:<input type="text"  name="id" value={{ $per['id'] }}>
Child's Name:<input type="text" name="children" placeholder="Enter Children Name..">
Child's Occupation:<input type="text" name="c_occupation" placeholder="Enter Child's Occupation.."><br>
Child's Adhar No.:<input type="text" maxlength="12" name="c_adhar" placeholder="Enter Child's Adhar.."><br>
Child's Mobile No.:<input type="text"  maxlength="10"name="c_mobile" placeholder="Enter Child's Mobile.."><br>
<input type="submit" value="Submit"><br>
</fieldset>
</form>
</div>
</body>
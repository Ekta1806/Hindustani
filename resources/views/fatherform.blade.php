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
<form action="/insertf" method="post">
<fieldset><legend>Father Information</legend>
@csrf
<h3>Father Details:</h3>
Father's id:<input type="text" name="id"  placeholder="Enter Id.." value={{ $per['id'] }}>
Father's Name:<input type="text" name="father"  placeholder="Enter Your Father Name.." value={{ $per['father'] }}><br>
Father's Occupation:<input type="text" name="f_occupation" placeholder="Enter Father's ocuupation.."><br>
Father's Adhar No.:<input type="text" maxlength="12" name="f_adhar" placeholder="Enter Father's Adhar.."><br>
Father's Mobile No.:<input type="text" maxlength="10"name="f_mobile" placeholder="Enter Father's Mobile.."><br>
<input type="submit" value="Next"><br>
<button type="submit"><a style="align:right" href={{ 'indexform' }}>Go Back</a></button>
</fieldset>
</form>
</div>
</body>
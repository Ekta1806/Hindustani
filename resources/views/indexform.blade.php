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
<form action="/insert" method="post">
<fieldset><legend>Person Information</legend>
@csrf
<h3>Candidate Details:</h3>
Id:<input type="text" name="id" placeholder="Enter Id..">
Name<leble style="color:red">*</leble>:<input type="text" name="name" placeholder="Enter Your Name.."><br>
<span style="color:red">@error('adhar'){{$message}}@enderror</span><br>
Adhar No.<leble style="color:red">*</leble>:<input type="text" maxlength="12" name="adhar"  placeholder="Enter Your Adhar No.."><br>
Birth Date:<input type="date" name="bdate" placeholder="Enter Your Birthdate"><br>
Father:<input type="text" name="father" placeholder="Enter Your Father Name.."><br>
Mother:<input type="text" name="mother" placeholder="Enter Your Mother Name..">
Children:<input type="text" name="children" placeholder="Enter Your Children Name..">
<input type="submit" value="Next"><br>
</fieldset>
</form>
</div>
</body>
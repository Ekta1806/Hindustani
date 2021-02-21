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
<form action="/insertm" method="post">
<fieldset><legend>Mother Information</legend>
@csrf
<h3>Mother Details:</h3>
Mother's id:<input type="text" name="id" value= {{$per['id']}} >
Mother's Name:<input type="text" name="mother" placeholder="Enter Mother Name.." >
Mother's Occupation:<input type="text" name="m_occupation" placeholder="Enter Mother's Occupation.."><br>
Mother's Adhar No.:<input type="text" maxlength="12" name="m_adhar" placeholder="Enter Mother's Adhar.."><br>
Mother's Mobile No.:<input type="text" maxlength="10" name="m_mobile" placeholder="Enter Mother's Mobile.."><br>

<input type="submit" value="Next"><br>
</fieldset>
</form>
</div>
</body>
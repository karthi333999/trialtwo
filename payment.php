<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css">    
<style>
.first {
    
  width: 620px;
  height:500px;
  padding: 10px;
  border: 5px solid gray;
  margin: 0;
  border-radius:8px;
}

table{

width:30%;
border-collapse: collapse;

}
td {
text-align: left;
margin: 80px;
}
tr{
height: 60px;
}

.submitcol{

padding-left:120px;
}

.backlink{
float:right;
margin-right: 200px;
}

</style>

<script>


function myFunction() {

/*var cname=document.getElementById("cnameid");
  var cardno=document.getElementById("cardnoid");
  var cvvno=document.getElementById("cvvnoid");

  if (cname===null || cardno===null || cvvno===null) {
alert("fill all columns");
}
  else if(cname!==null&&cardno!==null&&cvvno!==null){
    alert('Payment was paid');
  }
  
}*/

let x = document.forms["myForm"]["cname"].action;
let y = document.forms["myForm"]["cardno"].action;
let z = document.forms["myForm"]["cardno"].action;
  if (x !== "" &&y !== ""&&z !== "") {
    alert("Amount was paid");
    return false;
  }

  else if (x === "" &&y === ""&&z === "") {
    alert("Amount was paid");
    return false;
  }

</script>

</head>
<body>

<center>

<br><br>
<div class="first">
<br><br><br><br>
<form name="myForm" >
<table>
  <tr>
    <td>Consumer Name</td>
    <td><input type="text" name="cname" ></td>
  </tr>


  <tr>
    <td>Card No</td>
    <td><input type="text" name="cardno" ></td>
  </tr>

  <tr>
    <td>CVV No</td>
    <td><input type="text" name="cvvno" ></td>
  </tr>

  
  <tr >
    <td class="submitcol"><input type="submit" value="Submit" class="btn btn-primary"></td>
    <button onclick="myFunction()">Submit</button>
  </tr>
  </table>
  
</div>
<form>
</center>
</body>
</html>



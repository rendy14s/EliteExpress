<html>
<head>
</head>
<body>
<div id="content">
<script src="jquery.min.js"></script>
<script>
function hitung2() {
var a = $(".a2").val();
var b = $(".b2").val();
c = a * b; //a kali b
$(".c2").val(c);
}
function isNumberKey(evt){
 var charCode = (evt.which) ? evt.which : event.keyCode;
 if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
 return false;
 return true;
}
</script>
 
 <table>
 <div id="inputa">
 <p> Harga </p>
 <input type="text" name="harga" id="harga" class="a2" onkeyup="hitung2();" required="" size="40" onkeypress="return isNumberKey(event)" >
 </div>
 
 <div id="inputa">
 <p> Jumlah: </p>
 <input type="text" name="jumlah" id="jumlah" class="b2" onkeyup="hitung2();" required="" size="40" onkeypress="return isNumberKey(event)" >
 </div>
 <div id="inputa">
 <p> Total: </p>
 <input type="text" name="total" id="total" class="c2" readonly size="40">
 </div>
 </div>
 </table>
 <input type="submit" name="submit" id="submit" Value="Submit">
 </form>
</div>
</div>
</body>
</html>
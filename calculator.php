<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-image: linear-gradient(245deg, rgba(27, 27, 27, 0.04) 0%, rgba(27, 27, 27, 0.04) 93%,rgba(92, 92, 92, 0.04) 93%, rgba(92, 92, 92, 0.04) 100%),linear-gradient(44deg, rgba(11, 11, 11, 0.04) 0%, rgba(11, 11, 11, 0.04) 39%,rgba(186, 186, 186, 0.04) 39%, rgba(186, 186, 186, 0.04) 100%),linear-gradient(134deg, rgba(178, 178, 178, 0.04) 0%, rgba(178, 178, 178, 0.04) 95%,rgba(237, 237, 237, 0.04) 95%, rgba(237, 237, 237, 0.04) 100%),linear-gradient(322deg, rgba(56, 56, 56, 0.04) 0%, rgba(56, 56, 56, 0.04) 58%,rgba(232, 232, 232, 0.04) 58%, rgba(232, 232, 232, 0.04) 100%),linear-gradient(139deg, rgba(51, 51, 51, 0.04) 0%, rgba(51, 51, 51, 0.04) 62%,rgba(35, 35, 35, 0.04) 62%, rgba(35, 35, 35, 0.04) 100%),linear-gradient(252deg, rgba(9, 9, 9, 0.04) 0%, rgba(9, 9, 9, 0.04) 39%,rgba(174, 174, 174, 0.04) 39%, rgba(174, 174, 174, 0.04) 100%),linear-gradient(229deg, rgba(241, 241, 241, 0.04) 0%, rgba(241, 241, 241, 0.04) 2%,rgba(140, 140, 140, 0.04) 2%, rgba(140, 140, 140, 0.04) 100%),linear-gradient(223deg, rgba(82, 82, 82, 0.04) 0%, rgba(82, 82, 82, 0.04) 36%,rgba(229, 229, 229, 0.04) 36%, rgba(229, 229, 229, 0.04) 100%),linear-gradient(90deg, rgb(245, 16, 17),rgb(177, 69, 207));
        }
        form{
            margin-left:620px;
            margin-top:100px;
        }
    </style>
</head>
<body>
 
<?php
ini_set('display_errors',0);
 
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
$n1 = $_REQUEST['first_value'];
$n2 = $_REQUEST['second_value'];
 
if($operator=="+")
{
$res= $n1+$n2;
}
if($operator=="-")
{
$res= $n1-$n2;
}
if($operator=="*")
{
$res =$n1*$n2;
}
if($operator=="/")
{
$res= $n1/$n2;
}
 
if($_REQUEST['first_value']==NULL || $_REQUEST['second_value']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter Correct values.\");</script>";
}
}
?>
 <center><h1>CALCULATOR</h1></center>
<form>
<table style="border:groove black">
 
<tr>
<td style="background-image: linear-gradient(229deg, rgba(248, 248, 248, 0.04) 0%, rgba(248, 248, 248, 0.04) 54%,rgba(112, 112, 112, 0.04) 54%, rgba(112, 112, 112, 0.04) 100%),linear-gradient(239deg, rgba(252, 252, 252, 0.04) 0%, rgba(252, 252, 252, 0.04) 66%,rgba(111, 111, 111, 0.04) 66%, rgba(111, 111, 111, 0.04) 100%),linear-gradient(141deg, rgba(40, 40, 40, 0.04) 0%, rgba(40, 40, 40, 0.04) 44%,rgba(168, 168, 168, 0.04) 44%, rgba(168, 168, 168, 0.04) 100%),linear-gradient(287deg, rgba(40, 40, 40, 0.04) 0%, rgba(40, 40, 40, 0.04) 78%,rgba(141, 141, 141, 0.04) 78%, rgba(141, 141, 141, 0.04) 100%),linear-gradient(90deg, rgb(53, 166, 233),rgb(17, 240, 126)); color:black; font-family:'Times New Roman'">Enter Number</td>
<td colspan="1">
<input name="first_value" type="text" style="color:red"/></td>
</tr>
 
<tr>
<td style="background-image: linear-gradient(229deg, rgba(248, 248, 248, 0.04) 0%, rgba(248, 248, 248, 0.04) 54%,rgba(112, 112, 112, 0.04) 54%, rgba(112, 112, 112, 0.04) 100%),linear-gradient(239deg, rgba(252, 252, 252, 0.04) 0%, rgba(252, 252, 252, 0.04) 66%,rgba(111, 111, 111, 0.04) 66%, rgba(111, 111, 111, 0.04) 100%),linear-gradient(141deg, rgba(40, 40, 40, 0.04) 0%, rgba(40, 40, 40, 0.04) 44%,rgba(168, 168, 168, 0.04) 44%, rgba(168, 168, 168, 0.04) 100%),linear-gradient(287deg, rgba(40, 40, 40, 0.04) 0%, rgba(40, 40, 40, 0.04) 78%,rgba(141, 141, 141, 0.04) 78%, rgba(141, 141, 141, 0.04) 100%),linear-gradient(90deg, rgb(53, 166, 233),rgb(17, 240, 126)); font-family:'Times New Roman'">Select Operator</td>
<td>
<select name="operator" style="width: 63px">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select></td>
</tr>
 
<tr>
<td style="background-image: linear-gradient(229deg, rgba(248, 248, 248, 0.04) 0%, rgba(248, 248, 248, 0.04) 54%,rgba(112, 112, 112, 0.04) 54%, rgba(112, 112, 112, 0.04) 100%),linear-gradient(239deg, rgba(252, 252, 252, 0.04) 0%, rgba(252, 252, 252, 0.04) 66%,rgba(111, 111, 111, 0.04) 66%, rgba(111, 111, 111, 0.04) 100%),linear-gradient(141deg, rgba(40, 40, 40, 0.04) 0%, rgba(40, 40, 40, 0.04) 44%,rgba(168, 168, 168, 0.04) 44%, rgba(168, 168, 168, 0.04) 100%),linear-gradient(287deg, rgba(40, 40, 40, 0.04) 0%, rgba(40, 40, 40, 0.04) 78%,rgba(141, 141, 141, 0.04) 78%, rgba(141, 141, 141, 0.04) 100%),linear-gradient(90deg, rgb(53, 166, 233),rgb(17, 240, 126)); font-family:'Times New Roman'">Enter Number</td>
<td class="auto-style5">
<input name="second_value" type="text"  style="color:red"/></td> 
</tr>
 
<tr>
<td></td>
<td><input type="submit" name="calculate" value="Calculate" style="background-image: linear-gradient(229deg, rgba(248, 248, 248, 0.04) 0%, rgba(248, 248, 248, 0.04) 54%,rgba(112, 112, 112, 0.04) 54%, rgba(112, 112, 112, 0.04) 100%),linear-gradient(239deg, rgba(252, 252, 252, 0.04) 0%, rgba(252, 252, 252, 0.04) 66%,rgba(111, 111, 111, 0.04) 66%, rgba(111, 111, 111, 0.04) 100%),linear-gradient(141deg, rgba(40, 40, 40, 0.04) 0%, rgba(40, 40, 40, 0.04) 44%,rgba(168, 168, 168, 0.04) 44%, rgba(168, 168, 168, 0.04) 100%),linear-gradient(287deg, rgba(40, 40, 40, 0.04) 0%, rgba(40, 40, 40, 0.04) 78%,rgba(141, 141, 141, 0.04) 78%, rgba(141, 141, 141, 0.04) 100%),linear-gradient(90deg, rgb(53, 166, 233),rgb(17, 240, 126));background-color:rosybrown" /></td>	 
</tr>
 
<tr>
<td style="background-image: linear-gradient(229deg, rgba(248, 248, 248, 0.04) 0%, rgba(248, 248, 248, 0.04) 54%,rgba(112, 112, 112, 0.04) 54%, rgba(112, 112, 112, 0.04) 100%),linear-gradient(239deg, rgba(252, 252, 252, 0.04) 0%, rgba(252, 252, 252, 0.04) 66%,rgba(111, 111, 111, 0.04) 66%, rgba(111, 111, 111, 0.04) 100%),linear-gradient(141deg, rgba(40, 40, 40, 0.04) 0%, rgba(40, 40, 40, 0.04) 44%,rgba(168, 168, 168, 0.04) 44%, rgba(168, 168, 168, 0.04) 100%),linear-gradient(287deg, rgba(40, 40, 40, 0.04) 0%, rgba(40, 40, 40, 0.04) 78%,rgba(141, 141, 141, 0.04) 78%, rgba(141, 141, 141, 0.04) 100%),linear-gradient(90deg, rgb(53, 166, 233),rgb(17, 240, 126));color:black">Output = </td>
<td style="color:white;font-size:24px"><b><?php echo $res;?></b></td>
</tr>	
 
</table>
</form>
 
</body>
</html>
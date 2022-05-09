<?php

session_start();

//if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
//{
//    header("location: login.php");
//}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Personalized Fitness</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/calories.css">
</head>
<body>
	<header class="navbar">
		<img class="logo" src="imgs/gym-shoes.png">
		<span>Personalized Fitness</span>
		<nav>
			<ul class="navlist">
				<li><a href="index.php" >Home</a></li>
				<li><a href="about.php" >About</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<?php
            		if(isset($_SESSION['username'])){
                	echo '<li><a href="profile.php" class="active">'.$_SESSION['username'].'</a></li>';
                	echo '<li><a href="logout.php">Logout</a></li>';
            		}
            		else{
                	echo "<li><a href='login.php'><button>Login</button></a></li>";        
            		}
          		?>
				<!--<li><a href="profile.php" class="active"><?php echo $_SESSION['username']?></a></li>
				<li><a href="logout.php">Logout</a></li>-->
			</ul>
		</nav>
	</header>
	<section>
		<div class="det">
			<h3 class="acc">Account Details</h3>
            <div class="detail">
              <label class="acc-det1">Username</label><br>
              <label class="acc-det2">Vipul</label>
              <br>
                <label>Username</label><br>
              <label>Vipul</label>
            </div>
			<!--
			<label class="details1">Username</label>
			<label class="details2"><?php echo $_SESSION['username']?></label><br><br><br><br>

			<label class="details1">Email</label>
			<label class="details2"><?php echo $_SESSION['email']?></label><br><br><br><br>

			<label class="details1">Phone NO.</label>
			<label class="details2"><?php echo $_SESSION['phone']?></label><br><br><br><br>
            -->
			<!--<label class="details1">Age</label>
			<label>xx<?php echo $_SESSION['age']?></label><br>-->

			<!--<label class="details1">Gender</label>
			<label class="details2">male<?php echo $_SESSION['gender']?></label><br><br><br><br>-->
		</div>
	   <hr>
		<div class="cal">
			<!--<h3>Calories Calculator</h3>
			<form action="" method="post">
				<label>Age:</label>
				<input type="text" name="age" id="age" onkeypress="return cknum(event,age)"><label>years</label><br>
				<label>Gender:</label>
				<input type="radio" name="gen" id="gen" checked>
                <label>Male</label>
                <input type="radio" name="gen" id="gen">
                <label>Female</label><br>
                <label>Height:</label>
                <select style='width:30%;' name="foot" id="foot" onchange="hcon()">
                    <option value="1">1'</option>
                    <option value="2">2'</option>
                    <option value="3">3'</option>
                    <option value="4">4'</option>
                    <option value="5">5'</option>
                    <option value="6">6'</option>
                    <option value="7">7'</option>
                    </select><select style='width:20%;' name="inch" id="inch" onchange="hcon()">
                    <option value="1">1"</option>
                    <option value="2">2"</option>
                    <option value="3">3"</option>
                    <option value="4">4"</option>
                    <option value="5">5"</option>
                    <option value="6">6"</option>
                    <option value="7">7"</option>
                    <option value="8">8"</option>
                    <option value="9">9"</option>
                    <option value="10">10"</option>
                    <option value="11">11"</option>
                </select><br>
                <label>Cms :</label>
                <input type="text" name="cen" id="cen" size="4" onkeyup="con(cen)"><br>
                <label>Weight:</label>
                <input type="text" name="weight" id="weight" maxlength="3" size="3" onkeyup="isNumberKey(this.id)">
                <select name="wtype" id="wtype">
                <option value="kg">Kg</option>
                <option value="pounds">Pounds</option>
                </select>
                <label>Activeness:</label>
                <select style='width:100px;' name="loa" id="loa">
                <option value="1">Sedentary</option>
                <option value="2">Light Active</option>
                <option value="3">Moderately Active</option>
                <option value="4">Very Active</option>
                <option value="5">Extra Active</option>
                </select><br>
                <input class='blue_button' type="button" value="Calculate The Calorie" onclick="cc()">
			</form>
			<br>
			<caption><b>Calorie Result</b></caption><br>
			<label>Calorie Needed:</label>
			<input type="text" id="rc" style="font-size:13px;" size="15" readonly>
			<select name="caltype" id="caltype" onChange="convert()">
            	<option value="g">Grams</option>
            	<option value="kg">Kilograms</option>
            	<option value="pounds">Pounds</option>
            </select>
            <div style="color: #3D366F; font-size:13px;">You Must Intake The Following Daily</div>
            <label>Fat:</label>
            <input type="text" id="rf" style="font-size:13px;" size="10" readonly>
            <font color="#3D366F" size="2" style='float:right'><label id="l1"></label>per day</font><br>
            <label>Protein:</label>
            <input type="text" id="rp" style="font-size:13px;" size="10" readonly>
            <font color="#3D366F" size="2" style='float:right'><label id="l2"></label> per day</font><br>
            <label>Carbohydrate:</label>
            <input type="text" id="rh" style="font-size:13px;" size="10" readonly>
            <font color="#3D366F" size="2" style='float:right'><label id="l3"></label> per day</font><br>
            <label>Alcohol:</label>
            <input type="text" id="ra" style="font-size:13px;" size="10" readonly>
            <font color="#3D366F" size="2" style='float:right'><label id="l4"></label> per day</font><br>-->
		  <div class='resp_code' align='center'>
        <table id='tab' align='center' cellspacing='0' cellpadding='0' style="width:100%;" background="black">
            <tr>
                <td align=center><br><b>Calorie Calculator</b><br><br>
                    <form name="frm" action="" class='frms noborders'>
                        <table>
                            <tr>
                                <td style="color: #3D366F; font-size:13px;">Age:</td>
                            <td><input type="text" name="age" id="age" align="left" size="3" maxlength="2"
                                onkeypress="return cknum(event,age)"></td>
                                <td>
                                <font color="#3D366F" size="2">years</font>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: #3D366F; font-size:13px;">Gender:</td>
                            <td><input type="radio" name="gen" id="gen" checked>
                                <font color="#3D366F" size="0.7">Male</font><input type="radio" name="gen" id="gen">
                                <font color="#3D366F" size="0.7">Female</font>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: #3D366F; font-size:13px;">Height:</td>
                            <td><select style='width:50%;' name="foot" id="foot" onchange="hcon()">
                                <option value="1">1'</option>
                                <option value="2">2'</option>
                                <option value="3">3'</option>
                                <option value="4">4'</option>
                                <option value="5">5'</option>
                                <option value="6">6'</option>
                                <option value="7">7'</option>
                            </select><select style='width:40%;' name="inch" id="inch" onchange="hcon()">
                                <option value="1">1"</option>
                                <option value="2">2"</option>
                                    <option value="3">3"</option>
                                    <option value="4">4"</option>
                                    <option value="5">5"</option>
                                    <option value="6">6"</option>
                                    <option value="7">7"</option>
                                    <option value="8">8"</option>
                                    <option value="9">9"</option>
                                    <option value="10">10"</option>
                                    <option value="11">11"</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td style="color: #3D366F; font-size:13px;">Cms :</td>
                            <td><input type="text" name="cen" id="cen" size="4" onkeyup="con(cen)"></td>
                        </tr>
                        <tr>
                            <td style="color: #3D366F; font-size:13px;">Weight:</td>
                            <td><input type="text" name="weight" id="weight" maxlength="3" size="3"
                                onkeyup="isNumberKey(this.id)"></td>
                                <td><select name="wtype" id="wtype">
                                    <option value="kg">Kg</option>
                                    <option value="pounds">Pounds</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td style="color: #3D366F; font-size:13px;">Activeness:</td>
                                <td><select style='width:100px;' name="loa" id="loa">
                                    <option value="1">Sedentary</option>
                                    <option value="2">Light Active</option>
                                    <option value="3">Moderately Active</option>
                                    <option value="4">Very Active</option>
                                    <option value="5">Extra Active</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td colspan='2' align="center"><input class='blue_button' type="button"
                                    value="Calculate The Calorie" onclick="cc()"></td>
                                </tr>
                            </table>
                        </form>
                <br>
                <table align="center" border="0" class="frms noborders">
                    <caption><b>Calorie Result</b></caption>
                    <tr>
                        <td align="right" style="color: #3D366F; font-size:13px;">Calorie Needed:</td>
                        <td><input type="text" id="rc" style="font-size:13px;" size="15" readonly></td>
                        <td><select name="caltype" id="caltype" onChange="convert()">
                            <option value="g">Grams</option>
                            <option value="kg">Kilograms</option>
                                <option value="pounds">Pounds</option>
                            </select></td>
                        </tr>
                    </table>
                    <div style="color: #3D366F; font-size:13px;">You Must Intake The Following Daily</div>
                    <table class="frms noborders">
                        <tr>
                            <td style="color: #3D366F; font-size:13px;">Fat:</td>
                            <td style="color: #3D366F; font-size:13px;"><input type="text" id="rf" style="font-size:13px;"
                                size="10" readonly></td>
                                <td>
                                    <font color="#3D366F" size="2" style='float:right'><label id="l1"></label> per day</font>
                                </td>
                            </tr>
                            <tr>
                                <td style="color: #3D366F; font-size:13px;">Protein:</td>
                                <td style="color: #3D366F; font-size:13px;"><input type="text" id="rp" style="font-size:13px;"
                                    size="10" readonly></td>
                                    <td>
                                        <font color="#3D366F" size="2" style='float:right'><label id="l2"></label> per day</font>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: #3D366F; font-size:13px;">Carbohydrate:</td>
                                    <td style="color: #3D366F; font-size:13px;"><input type="text" id="rh" style="font-size:13px;"
                                        size="10" readonly></td>
                        <td>
                            <font color="#3D366F" size="2" style='float:right'><label id="l3"></label> per day</font>
                        </td>
                    </tr>
                    <tr>
                        <td style="color: #3D366F; font-size:13px;">Alcohol:</td>
                        <td style="color: #3D366F; font-size:13px;"><input type="text" id="ra" style="font-size:13px;"
                            size="10" readonly></td>
                            <td>
                                <font color="#3D366F" size="2" style='float:right'><label id="l4"></label> per day</font>
                            </td>
                        </tr>
                    </table>
                </tr>
            </td>
        </table>
    </div>
    
	</section>
	<footer>
		<p class="text-footer">Copyright &copy;2027 www.personalizedfitness.com - All right reserved.</p>
	</footer>
	<script type="text/javascript">
    var cneed;
    var fneed;
    var crneed;
    var pneed;
    var aneed;
    var fd;
    function cc()
    {
        var age=parseInt(document.getElementById("age").value);
        var wtype=document.getElementById("wtype").value;
        var foot=parseInt(document.getElementById("foot").value);
        var inch=parseInt(document.getElementById("inch").value);
        var cm =document.getElementById("cen").value;
        var weight=document.getElementById("weight").value;
        if (age!='' && cm!='' && weight!='') {
            if (wtype=="pounds")
            {weight=parseInt(weight);
                weight=Math.round(weight/2.2046);
            }
            var loa=document.getElementById("loa").value;
            if(document.getElementById("gen").checked)
            {
                fd=(10*weight)+(6.25*cm)-(5*age)+5;
            }
            else
            {
                fd=(10*weight)+(6.25*cm)-(5*age)-161;
            }
            switch(loa)
            {
                case "1":
                    cneed=fd*1.2;
                    break;
                    case "2":
                        cneed=fd*1.375
                        break;
                        case "3":
                            cneed=fd*1.53;
                            break;
                            case "4":
                                cneed=fd*1.725;
                                break;
                                case "5":
                                    cneed=fd*1.9;
                                    break;
                                }
                                cneed=Math.floor(cneed);
                                //cneed1=Math.floor(cneed*0.0353);
                                fneed=Math.floor((cneed*0.25)/9);
                                if (wtype=="pounds")
                                {
                                    fneed=Math.floor(fneed*0.0353);
                                    //fneed=fneed*0.0022 ;
                                }
                                pneed=Math.floor((cneed*0.25)/4);
                                if (wtype=="pounds")
                                {
                                    pneed=Math.floor(pneed*0.0353);
                                }
                                crneed=Math.floor((cneed*0.25)/4);
                                if (wtype=="pounds")
                                {
                                    crneed=Math.floor(crneed*0.0353);
                                }
                                aneed=Math.floor((cneed*0.25)/7);
                                if (wtype=="pounds")
                                {
                                    aneed=Math.floor(aneed*0.0353);
                                }
                                document.getElementById("rc").value=" "+cneed;
                                document.getElementById("rf").value=" "+fneed;
                                document.getElementById("rp").value=" "+pneed;
                                document.getElementById("rh").value=" "+crneed;
                                document.getElementById("ra").value=" "+aneed;
                                document.getElementById("l1").innerHTML="grams";
                                document.getElementById("l2").innerHTML="grams";
                                document.getElementById("l3").innerHTML="grams";
                                document.getElementById("l4").innerHTML="grams";
    var caltype=document.getElementById("caltype").value;
    if (caltype=='g') {
        document.getElementById("l1").innerHTML="grams";
        document.getElementById("l2").innerHTML="grams";
        document.getElementById("l3").innerHTML="grams";
        document.getElementById("l4").innerHTML="grams";
    }
    if (wtype=="pounds")
    {
        fat1 = fneed * 0.0022 ;
        pro1 = pneed * 0.0022 ;
        car1 = crneed * 0.0022 ;
        alh1 = aneed * 0.0022 ;
        fat1=fat1.toFixed(3);
        pro1 = pro1.toFixed(3);
        car1 = car1.toFixed(3);
        alh1 = alh1.toFixed(3);
        document.getElementById("rf").value=" "+fat1;
        document.getElementById("rp").value=" "+pro1;
        document.getElementById("rh").value=" "+car1;
        document.getElementById("ra").value=" "+alh1;
        document.getElementById("l1").innerHTML="lbs";
        document.getElementById("l2").innerHTML="lbs";
        document.getElementById("l3").innerHTML="lbs";
        document.getElementById("l4").innerHTML="lbs";
    }
    if (caltype=='pounds') {
        fat1 = fneed * 0.0022 ;
        pro1 = pneed * 0.0022 ;
        car1 = crneed * 0.0022 ;
        alh1 = aneed * 0.0022 ;
        fat1=fat1.toFixed(3);
        pro1 = pro1.toFixed(3);
        car1 = car1.toFixed(3);
        alh1 = alh1.toFixed(3);
        document.getElementById("rf").value=" "+fat1;
        document.getElementById("rp").value=" "+pro1;
        document.getElementById("rh").value=" "+car1;
        document.getElementById("ra").value=" "+alh1;
        document.getElementById("l1").innerHTML="lbs";
        document.getElementById("l2").innerHTML="lbs";
        document.getElementById("l3").innerHTML="lbs";
        document.getElementById("l4").innerHTML="lbs";
    }
    if (caltype=='kg') {
        fat2 = fneed / 1000;
        pro2 = pneed / 1000;
        car2 = crneed / 1000;
        alh2 = aneed / 1000;
        fat2=fat2.toFixed(3);
        pro2 = pro2.toFixed(3);
        car2 = car2.toFixed(3);
        alh2 = alh2.toFixed(3);
        document.getElementById("rf").value=" "+fat2;
        document.getElementById("rp").value=" "+pro2;
        document.getElementById("rh").value=" "+car2;
        document.getElementById("ra").value=" "+alh2;
        document.getElementById("l1").innerHTML="kilogram";
        document.getElementById("l2").innerHTML="kilogram";
        document.getElementById("l3").innerHTML="kilogram";
        document.getElementById("l4").innerHTML="kilogram";
    }
}
    else{
        alert("Please fill your details properly!");
    }
}
function con(num)
{
    var hc=parseInt(num.value);
    var hi=hc/2.54;
    var hf=Math.floor(hi/12);
    var ri=Math.round(hi%12);
    if(hc>40 && hc<=210)
    {
        document.getElementById("foot").value=hf;
    }
    document.getElementById("inch").value=ri;
}
function hcon()
    {
        var hf=parseInt(document.getElementById("foot").value);
        var hi=parseInt(document.getElementById("inch").value);
        var hc;
        hc=Math.round((hf*30.48)+(hi*2.54));
        document.getElementById("cen").value=hc;
    }
    function cknum(event,num)
    {var kc;
        if(window.event)
        {
            kc=event.keyCode;
        }
        else
        {
            kc=event.which;
        }
        var a=num.value;
        if(kc==48)
        {
            if(a=="")
            {
                return false;
            }
            else
            {
                return true;
            }
        }if (kc!=8 && kc!=0)
        {
            if (kc<49||kc>57)
            {
                return false;
            }
        }
    }
    function isNumberKey(id)
    {var no=eval('"'+id+'"');var number= document.getElementById(no).value; if(!number.match(/^[0-9\.]+$/) && number !=""){number = number.substring(0,number.length-1);document.getElementById(id).value = number;}
}
function convert() {
    var age=parseInt(document.getElementById("age").value);
    var cm =document.getElementById("cen").value;
    var weight=document.getElementById("weight").value;
    if (age!='' && cm!='' && weight!='') {
        var caltype=document.getElementById("caltype").value;
        var fat = document.getElementById("rf").value;
        var pro = document.getElementById("rp").value;
        var car = document.getElementById("rh").value;
        var alh = document.getElementById("ra").value;
        if (caltype=='g') {
            document.getElementById("rc").value=" "+cneed;
            document.getElementById("rf").value=" "+fneed;
            document.getElementById("rp").value=" "+pneed;
            document.getElementById("rh").value=" "+crneed;
            document.getElementById("ra").value=" "+aneed;
            document.getElementById("l1").innerHTML="grams";
            document.getElementById("l2").innerHTML="grams";
            document.getElementById("l3").innerHTML="grams";
            document.getElementById("l4").innerHTML="grams";
        }
        if (caltype=='pounds') {
            fat1 = fneed * 0.0022 ;
            pro1 = pneed * 0.0022 ;
            car1 = crneed * 0.0022 ;
            alh1 = aneed * 0.0022 ;
            fat1=fat1.toFixed(3);
            pro1 = pro1.toFixed(3);
            car1 = car1.toFixed(3);
            alh1 = alh1.toFixed(3);
            document.getElementById("rf").value=" "+fat1;
            document.getElementById("rp").value=" "+pro1;
    document.getElementById("rh").value=" "+car1;
    document.getElementById("ra").value=" "+alh1;
    document.getElementById("l1").innerHTML="lbs";
    document.getElementById("l2").innerHTML="lbs";
    document.getElementById("l3").innerHTML="lbs";
    document.getElementById("l4").innerHTML="lbs";
}
if (caltype=='kg') {
    fat2 = fneed / 1000;
    pro2 = pneed / 1000;
    car2 = crneed / 1000;
    alh2 = aneed / 1000;
    fat2=fat2.toFixed(3);
    pro2 = pro2.toFixed(3);
    car2 = car2.toFixed(3);
    alh2 = alh2.toFixed(3);
    document.getElementById("rf").value=" "+fat2;
    document.getElementById("rp").value=" "+pro2;
    document.getElementById("rh").value=" "+car2;
    document.getElementById("ra").value=" "+alh2;
    document.getElementById("l1").innerHTML="kilogram";
    document.getElementById("l2").innerHTML="kilogram";
    document.getElementById("l3").innerHTML="kilogram";
    document.getElementById("l4").innerHTML="kilogram";
}
}
else{
    alert("Please fill your details properly!");
}
}

</script>
	<script src=resp.js></script>      
</body>
</html>
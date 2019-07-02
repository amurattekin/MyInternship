<?php 
$cv["name"] = "Murat"; 
$cv["surname"]="TEKIN"; 
$cv["email"]="murat.tekin1939@gmail.com";
$cv["github"]="@amurattekin";
$cv["title"]="Murat TEKIN CV";
$cv["education1"]="Computer Engineering Student";
$cv["phone"]="0533 046 09 17";
$cv["ADDRESS"]="BEYLIKDUZU/ISTANBUL";
$cv["BIRTH"]="ISTANBUL 30.03.1996";
$cv["EDUCATION"]="ISTANBUL CERRAHPASA UNIVERSITY COMPUTER ENGINEERING";
$cv["MILITARY"]="POSTPONED";
$cv["LANGUAGES1"]="English (Upper Intermediate)";
$cv["LANGUAGES2"]="German (Beginner)";
$cv["PROGRAMMING L1"]="JAVA (Medium)";
$cv["PROGRAMMING L2"]="C (Low)";
$cv["PROGRAMMING L3"]="HTML (Low)";
$cv["PROGRAMMING L4"]="PHP (Elementary)";
$cv["EXPERIENCE"]="Ubit Bilgi Teknolojileri Enerji Dan.Hiz.San.Tic.AS";
$cv["Exp2.part"]="(Intern) 2019";

?>
<html>
<header>
<div class="alert alert-info" role="alert">
  github: <a href="https://github.com/amurattekin"><ins><?php echo $cv["github"];?></ins></a>
</div></header>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<meta charset="utf-8">
	<title><?php echo $cv["title"];?></title>
	<link rel="stylesheet" type="text/css" href="murattekincvcss.css">
	<body style=background-color:white;>
		<h2><div class="container">
  <div class="row">
    <div class="col-3">
      <img style= "WIDTH:200px; HEIGHT:150px" style="padding-left:200px" src="https://a.imge.to/2019/07/02/34dDF.jpg">
    </div>
    <div class="col-6 text-center">
      <?php echo $cv["name"];?> <?php echo $cv["surname"];?> <br><?php echo $cv["education1"];?><br><?php echo $cv["email"];?> <br><?php echo $cv["phone"];?>
    </div></h2><br>
		<ul class="list-group">
  <li class="list-group-item,alert alert-info"><b>ADDRESS:</b> &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; &nbsp;  <?php echo $cv["ADDRESS"];?></li>
  <li class="list-group-item,alert alert-info"><b>BIRTH LOCATION& DATE:</b>&emsp;<?php echo $cv["BIRTH"];?></li>
  <li class="list-group-item,alert alert-info"><b>EDUCATION:</b>&nbsp;&nbsp; &nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo $cv["EDUCATION"];?></li>
  <li class="list-group-item,alert alert-info"><b>MILITARY STATUS: </b> &nbsp;&nbsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;<?php echo $cv["MILITARY"];?>
</li></ul><br>
<div class="list heading;alert alert-info" role="alert">
  <b>LANGUAGES</b>
</div>
<ul class="list-group"></ul>
  <li class="list-group-item,alert alert-info"><?php echo $cv["LANGUAGES1"];?></li>
  <li class="list-group-item,alert alert-info"><?php echo $cv["LANGUAGES2"];?></li><br>
 <div class="list heading;alert alert-info" role="alert">
  <b>PROGRAMMING LANGUAGES</b>
</div> 
               <ul class="list-group"></ul>
                <li class="list-group-item,alert alert-info"><?php echo $cv["PROGRAMMING L1"];?></li>
                <li class="list-group-item,alert alert-info"><?php echo $cv["PROGRAMMING L2"];?></li>
                <li class="list-group-item,alert alert-info"><?php echo $cv["PROGRAMMING L3"];?></li>
                <li class="list-group-item,alert alert-info"><?php echo $cv["PROGRAMMING L4"];?></li><br>
               <div class="list heading;alert alert-info" role="alert">
                <b>EXPERIENCE</b>
              </div>
              <ul class="list-group"></ul>
  <li class="list-group-item,alert alert-info"><a href="https://www.linkedin.com/company/ubit-bilgi-teknolojileri-a-s"><ins><?php echo $cv["EXPERIENCE"];?> </a>
    &emsp;</ins><?php echo $cv["Exp2.part"];?></li></ul>
 
 

 

	</body>
</head>
</html>
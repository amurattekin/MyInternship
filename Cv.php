<?php 
 $cv["name"] = "Murat"; 
  $cv["surname"]="TEKIN"; 
   $cv["email"]="murat.tekin1939@gmail.com";
    $cv["github"]="@amurattekin";
     $cv["title"]="Murat TEKIN CV";
      $cv["education1"]="Computer Engineering Student";
       $cv["phone"]="0533 046 09 17";
        $cv["address"]="BEYLIKDUZU/ISTANBUL";
       $cv["birth"]="ISTANBUL 30.03.1996";
      $cv["education"]="ISTANBUL CERRAHPASA UNIVERSITY COMPUTER ENGINEERING";
     $cv["military"]="POSTPONED";
    $cv["languages"]=["ENGLISH (Upper Intermediate)","GERMAN (Beginner)"];
   $cv["programming"]=["JAVA (Medium)","C (Low)","HTML (Medium)","PHP (Low)"];
  $cv["experience"]="Ubit Bilgi Teknolojileri Enerji Dan.Hiz.San.Tic.AS";
 $cv["exp2"]="(Intern) 2019";
?>
          <html>
         <header>
       <div class="alert alert-info" role="alert">
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;github: <a href="https://github.com/amurattekin"><ins><?php echo $cv["github"];?></ins></a>
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
     <div class="container">
      <div class="row">
  <div class="col-3 alert alert-info"><b>ADDRESS:</b> <br>
  <b>BIRTH LOCATION& DATE:</b><br>
   <b>EDUCATION:</b><br>
    <b>MILITARY STATUS: </b> </p></div>
  <div class="col-6 alert alert-info"><?php echo $cv["address"];?><br>
  <?php echo $cv["birth"];?><br>
  <?php echo $cv["education"];?><br>
  <?php echo $cv["military"];?>
</div>
  <div class="col-2"></div>
</div>
      <div class="list heading;alert alert-info" role="alert">
     <b>LANGUAGES</b>
    </div>
   <ul class="list-group"></ul>
  <li class="list-group-item,alert alert-info"><?php echo $cv["languages"][0];?></li>
 <li class="list-group-item,alert alert-info"><?php echo $cv["languages"][1];?></li><br>
  <div class="list heading;alert alert-info" role="alert">
   <b>PROGRAMMING LANGUAGES</b>
    </div> 
     <ul class="list-group"></ul>
      <?php
               for ($i=0; $i <sizeof($cv["programming"]) ; $i++) { 
                ?>
                 </li><li class="list-group-item,alert alert-info"><?php
                   echo $cv["programming"][$i];
                  }?></li></ul> <br>
                 <div class="list heading;alert alert-info" role="alert">
                <b>EXPERIENCE</b>
               </div>
              <ul class="list-group"></ul>
             <li class="list-group-item,alert alert-info"><a href="https://www.linkedin.com/company/ubit-bilgi-teknolojileri-a-s"><ins><?php echo $cv["experience"];?> </a>
           &emsp;</ins><?php echo $cv["exp2"];?></li></ul></div>
 </body>
</head>
</html>

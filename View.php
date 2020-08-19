<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	<link href="fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>
  
  <body class="bg-light">
   <?php
//    include ('Nav_UChk.php');
//    include ('../../connection.php');
    $con= mysqli_connect('localhost','root','','testgrid') or die("Error: " . mysqli_error($con));
    mysqli_query($con, "SET NAMES 'utf8' ");
//    $id = $_GET['id'];
//    $date = $_GET['d'];
//    $line = $_GET['l'];
//    $shift = $_GET['shift'];
//    $version=$_GET['version'];
//    $y = substr($date,0,4);
//    $m = $date[5].$date[6];

//    switch ($m)
//    {
//         case "01":
//             $mm = "January";
//             break;
//         case "02":
//             $mm = "February";
//             break;
//         case "03":
//             $mm = "March";
//             break;
//         case "04":
//             $mm = "April";
//             break;
//         case "05":
//             $mm = "May";
//             break;
//         case "06":
//             $mm = "June";
//             break;
//         case "07":
//             $mm = "July";
//             break;
//         case "08":
//             $mm = "August";
//             break;
//         case "09":
//             $mm = "September";
//             break;
//         case "10":
//             $mm = "October";
//             break; 
//         case "11":
//             $mm = "November";
//             break;
//         case "12":
//             $mm = "December";
//             break;             
//    }
   $sql="SELECT * FROM  ph3_f_mtc_hde_745_06";
    $result = $con->query($sql);
         $D1 = '';
         $S1 ='';
         $D2='';
         $S2='';
         $D3 ='';
         $S3='';
         $D4='';
         $S4='';
         $D5='';
         $S5='';
         $D6='';
         $S6='';
         $D7='';
         
         $MTC_D='';
         $MTC_E='';
         $App_D='';
         $App_E='';
         $item ='';
         $d = '';
         $class='';
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            if($row['D1_1']==='/'){$row['D1_1']='<i class="fas fa-check"></i>';}
            if($row['D1_2']==='/'){$row['D1_2']='<i class="fas fa-check"></i>';}
            if($row['D1_3']==='/'){$row['D1_3']='<i class="fas fa-check"></i>';}
            if($row['D1_4']==='/'){$row['D1_4']='<i class="fas fa-check"></i>';}

            if($row['D2_1']==='/'){$row['D2_1']='<i class="fas fa-check"></i>';}
            if($row['D2_2']==='/'){$row['D2_2']='<i class="fas fa-check"></i>';}
            if($row['D2_3']==='/'){$row['D2_3']='<i class="fas fa-check"></i>';}
            if($row['D2_4']==='/'){$row['D2_4']='<i class="fas fa-check"></i>';}

            if($row['D3_1']==='/'){$row['D3_1']='<i class="fas fa-check"></i>';}
            if($row['D3_2']==='/'){$row['D3_2']='<i class="fas fa-check"></i>';}
            if($row['D3_3']==='/'){$row['D3_3']='<i class="fas fa-check"></i>';}
            if($row['D3_4']==='/'){$row['D3_4']='<i class="fas fa-check"></i>';}

            if($row['D4_1']==='/'){$row['D4_1']='<i class="fas fa-check"></i>';}
            if($row['D4_2']==='/'){$row['D4_2']='<i class="fas fa-check"></i>';}
            if($row['D4_3']==='/'){$row['D4_3']='<i class="fas fa-check"></i>';}
            if($row['D4_4']==='/'){$row['D4_4']='<i class="fas fa-check"></i>';}

            if($row['D5_1']==='/'){$row['D5_1']='<i class="fas fa-check"></i>';}
            if($row['D5_2']==='/'){$row['D5_2']='<i class="fas fa-check"></i>';}
            if($row['D5_3']==='/'){$row['D5_3']='<i class="fas fa-check"></i>';}
            if($row['D5_4']==='/'){$row['D5_4']='<i class="fas fa-check"></i>';}

            if($row['D6_1']==='/'){$row['D6_1']='<i class="fas fa-check"></i>';}
            if($row['D6_2']==='/'){$row['D6_2']='<i class="fas fa-check"></i>';}
            if($row['D6_3']==='/'){$row['D6_3']='<i class="fas fa-check"></i>';}
            if($row['D6_4']==='/'){$row['D6_4']='<i class="fas fa-check"></i>';}

            if($row['D7_1']==='/'){$row['D7_1']='<i class="fas fa-check"></i>';}
            if($row['D7_2']==='/'){$row['D7_2']='<i class="fas fa-check"></i>';}
            if($row['D7_3']==='/'){$row['D7_3']='<i class="fas fa-check"></i>';}
            if($row['D7_4']==='/'){$row['D7_4']='<i class="fas fa-check"></i>';}

            if($row['S1_1']==='/'){$row['S1_1']='<i class="fas fa-check"></i>';}
            if($row['S1_2']==='/'){$row['S1_2']='<i class="fas fa-check"></i>';}
            if($row['S1_3']==='/'){$row['S1_3']='<i class="fas fa-check"></i>';}
            if($row['S1_4']==='/'){$row['S1_4']='<i class="fas fa-check"></i>';}

            if($row['S2_1']==='/'){$row['S2_1']='<i class="fas fa-check"></i>';}
            if($row['S2_2']==='/'){$row['S2_2']='<i class="fas fa-check"></i>';}
            if($row['S2_3']==='/'){$row['S2_3']='<i class="fas fa-check"></i>';}
            if($row['S2_4']==='/'){$row['S2_4']='<i class="fas fa-check"></i>';}

            if($row['S3_1']==='/'){$row['S3_1']='<i class="fas fa-check"></i>';}
            if($row['S3_2']==='/'){$row['S3_2']='<i class="fas fa-check"></i>';}
            if($row['S3_3']==='/'){$row['S3_3']='<i class="fas fa-check"></i>';}
            if($row['S3_4']==='/'){$row['S3_4']='<i class="fas fa-check"></i>';}

            if($row['S4_1']==='/'){$row['S4_1']='<i class="fas fa-check"></i>';}
            if($row['S4_2']==='/'){$row['S4_2']='<i class="fas fa-check"></i>';}
            if($row['S4_3']==='/'){$row['S4_3']='<i class="fas fa-check"></i>';}
            if($row['S4_4']==='/'){$row['S4_4']='<i class="fas fa-check"></i>';}

            if($row['S5_1']==='/'){$row['S5_1']='<i class="fas fa-check"></i>';}
            if($row['S5_2']==='/'){$row['S5_2']='<i class="fas fa-check"></i>';}
            if($row['S5_3']==='/'){$row['S5_3']='<i class="fas fa-check"></i>';}
            if($row['S5_4']==='/'){$row['S5_4']='<i class="fas fa-check"></i>';}

            if($row['S6_1']==='/'){$row['S6_1']='<i class="fas fa-check"></i>';}
            if($row['S6_2']==='/'){$row['S6_2']='<i class="fas fa-check"></i>';}
            if($row['S6_3']==='/'){$row['S6_3']='<i class="fas fa-check"></i>';}
            if($row['S6_4']==='/'){$row['S6_4']='<i class="fas fa-check"></i>';}
            // if($row['status']==='a'){$class = "table-warning";}
            // if($row['status']==='c'){$class = "table-danger";}
            // if($row['status']==='s'){$class = "";}
           
            // if($row['shift']==='A/E')
            // {

               $evalD1_1='<td data-toggle="tooltip" title="'.$row['comD1_1'].'" class = '.$class.'> '.$row['D1_1'].'</td>';
               $evalD1_2='<td data-toggle="tooltip" title="'.$row['comD1_2'].'" class = '.$class.'> '.$row['D1_2'].'</td>';
               $evalD1_3='<td data-toggle="tooltip" title="'.$row['comD1_3'].'" class = '.$class.'> '.$row['D1_3'].'</td>';
               $evalD1_4='<td data-toggle="tooltip" title="'.$row['comD1_4'].'" class = '.$class.'> '.$row['D1_4'].'</td>';
               
               $evalS1_1='<td data-toggle="tooltip" title="'.$row['comS1_1'].'" class = '.$class.'> '.$row['S1_1'].'</td>';
               $evalS1_2='<td data-toggle="tooltip" title="'.$row['comS1_2'].'" class = '.$class.'> '.$row['S1_2'].'</td>';
               $evalS1_3='<td data-toggle="tooltip" title="'.$row['comS1_3'].'" class = '.$class.'> '.$row['S1_3'].'</td>';
               $evalS1_4='<td data-toggle="tooltip" title="'.$row['comS1_4'].'" class = '.$class.'> '.$row['S1_4'].'</td>';

               $evalD2_1='<td data-toggle="tooltip" title="'.$row['comD2_1'].'" class = '.$class.'> '.$row['D2_1'].'</td>';
               $evalD2_2='<td data-toggle="tooltip" title="'.$row['comD2_2'].'" class = '.$class.'> '.$row['D2_2'].'</td>';
               $evalD2_3='<td data-toggle="tooltip" title="'.$row['comD2_3'].'" class = '.$class.'> '.$row['D2_3'].'</td>';
               $evalD2_4='<td data-toggle="tooltip" title="'.$row['comD2_4'].'" class = '.$class.'> '.$row['D2_4'].'</td>';
               
               $evalS2_1='<td data-toggle="tooltip" title="'.$row['comS2_1'].'" class = '.$class.'> '.$row['S2_1'].'</td>';
               $evalS2_2='<td data-toggle="tooltip" title="'.$row['comS2_2'].'" class = '.$class.'> '.$row['S2_2'].'</td>';
               $evalS2_3='<td data-toggle="tooltip" title="'.$row['comS2_3'].'" class = '.$class.'> '.$row['S2_3'].'</td>';
               $evalS2_4='<td data-toggle="tooltip" title="'.$row['comS2_4'].'" class = '.$class.'> '.$row['S2_4'].'</td>';

               $evalD3_1='<td data-toggle="tooltip" title="'.$row['comD3_1'].'" class = '.$class.'> '.$row['D3_1'].'</td>';
               $evalD3_2='<td data-toggle="tooltip" title="'.$row['comD3_2'].'" class = '.$class.'> '.$row['D3_2'].'</td>';
               $evalD3_3='<td data-toggle="tooltip" title="'.$row['comD3_3'].'" class = '.$class.'> '.$row['D3_3'].'</td>';
               $evalD3_4='<td data-toggle="tooltip" title="'.$row['comD3_4'].'" class = '.$class.'> '.$row['D3_4'].'</td>';
               
               $evalS3_1='<td data-toggle="tooltip" title="'.$row['comS3_1'].'" class = '.$class.'> '.$row['S3_1'].'</td>';
               $evalS3_2='<td data-toggle="tooltip" title="'.$row['comS3_2'].'" class = '.$class.'> '.$row['S3_2'].'</td>';
               $evalS3_3='<td data-toggle="tooltip" title="'.$row['comS3_3'].'" class = '.$class.'> '.$row['S3_3'].'</td>';
               $evalS3_4='<td data-toggle="tooltip" title="'.$row['comS3_4'].'" class = '.$class.'> '.$row['S3_4'].'</td>';

               $evalD4_1='<td data-toggle="tooltip" title="'.$row['comD4_1'].'" class = '.$class.'> '.$row['D4_1'].'</td>';
               $evalD4_2='<td data-toggle="tooltip" title="'.$row['comD4_2'].'" class = '.$class.'> '.$row['D4_2'].'</td>';
               $evalD4_3='<td data-toggle="tooltip" title="'.$row['comD4_3'].'" class = '.$class.'> '.$row['D4_3'].'</td>';
               $evalD4_4='<td data-toggle="tooltip" title="'.$row['comD4_4'].'" class = '.$class.'> '.$row['D4_4'].'</td>';
                
               $evalS4_1='<td data-toggle="tooltip" title="'.$row['comS4_1'].'" class = '.$class.'> '.$row['S4_1'].'</td>';
               $evalS4_2='<td data-toggle="tooltip" title="'.$row['comS4_2'].'" class = '.$class.'> '.$row['S4_2'].'</td>';
               $evalS4_3='<td data-toggle="tooltip" title="'.$row['comS4_3'].'" class = '.$class.'> '.$row['S4_3'].'</td>';
               $evalS4_4='<td data-toggle="tooltip" title="'.$row['comS4_4'].'" class = '.$class.'> '.$row['S4_4'].'</td>';

               $evalD5_1='<td data-toggle="tooltip" title="'.$row['comD5_1'].'" class = '.$class.'> '.$row['D5_1'].'</td>';
               $evalD5_2='<td data-toggle="tooltip" title="'.$row['comD5_2'].'" class = '.$class.'> '.$row['D5_2'].'</td>';
               $evalD5_3='<td data-toggle="tooltip" title="'.$row['comD5_3'].'" class = '.$class.'> '.$row['D5_3'].'</td>';
               $evalD5_4='<td data-toggle="tooltip" title="'.$row['comD5_4'].'" class = '.$class.'> '.$row['D5_4'].'</td>';
               
               $evalS5_1='<td data-toggle="tooltip" title="'.$row['comS5_1'].'" class = '.$class.'> '.$row['S5_1'].'</td>';
               $evalS5_2='<td data-toggle="tooltip" title="'.$row['comS5_2'].'" class = '.$class.'> '.$row['S5_2'].'</td>';
               $evalS5_3='<td data-toggle="tooltip" title="'.$row['comS5_3'].'" class = '.$class.'> '.$row['S5_3'].'</td>';
               $evalS5_4='<td data-toggle="tooltip" title="'.$row['comS5_4'].'" class = '.$class.'> '.$row['S5_4'].'</td>';

               $evalD6_1='<td data-toggle="tooltip" title="'.$row['comD6_1'].'" class = '.$class.'> '.$row['D6_1'].'</td>';
               $evalD6_2='<td data-toggle="tooltip" title="'.$row['comD6_2'].'" class = '.$class.'> '.$row['D6_2'].'</td>';
               $evalD6_3='<td data-toggle="tooltip" title="'.$row['comD6_3'].'" class = '.$class.'> '.$row['D6_3'].'</td>';
               $evalD6_4='<td data-toggle="tooltip" title="'.$row['comD6_4'].'" class = '.$class.'> '.$row['D6_4'].'</td>';
               
               $evalS6_1='<td data-toggle="tooltip" title="'.$row['comS6_1'].'" class = '.$class.'> '.$row['S6_1'].'</td>';
               $evalS6_2='<td data-toggle="tooltip" title="'.$row['comS6_2'].'" class = '.$class.'> '.$row['S6_2'].'</td>';
               $evalS6_3='<td data-toggle="tooltip" title="'.$row['comS6_3'].'" class = '.$class.'> '.$row['S6_3'].'</td>';
               $evalS6_4='<td data-toggle="tooltip" title="'.$row['comS6_4'].'" class = '.$class.'> '.$row['S6_4'].'</td>';

               $evalD7_1='<td data-toggle="tooltip" title="'.$row['comD7_1'].'" class = '.$class.'> '.$row['D7_1'].'</td>';
               $evalD7_2='<td data-toggle="tooltip" title="'.$row['comD7_2'].'" class = '.$class.'> '.$row['D7_2'].'</td>';
               $evalD7_3='<td data-toggle="tooltip" title="'.$row['comD7_3'].'" class = '.$class.'> '.$row['D7_3'].'</td>';
               $evalD7_4='<td data-toggle="tooltip" title="'.$row['comD7_4'].'" class = '.$class.'> '.$row['D7_4'].'</td>';

               $D1.=$evalD1_1.$evalD1_2.$evalD1_3.$evalD1_4;
               $S1.=$evalS1_1.$evalS1_2.$evalS1_3.$evalS1_4;
               $D2.=$evalD2_1.$evalD2_2.$evalD2_3.$evalD2_4;
               $S2.=$evalS2_1.$evalS2_2.$evalS2_3.$evalS2_4;
               $D3.=$evalD3_1.$evalD3_2.$evalD3_3.$evalD3_4;
               $S3.=$evalS3_1.$evalS3_2.$evalS3_3.$evalS3_4;
               $D4.=$evalD4_1.$evalD4_2.$evalD4_3.$evalD4_4;
               $S4.=$evalS4_1.$evalS4_2.$evalS4_3.$evalS4_4;
               $D5.=$evalD5_1.$evalD5_2.$evalD5_3.$evalD5_4;
               $S5.=$evalS5_1.$evalS5_2.$evalS5_3.$evalS5_4;
               $D6.=$evalD6_1.$evalD6_2.$evalD6_3.$evalD6_4;
               $S6.=$evalS6_1.$evalS6_2.$evalS6_3.$evalS6_4;
               $D7.=$evalD7_1.$evalD7_2.$evalD7_3.$evalD7_4;

               $d .= '<th colspan="4" class="'.$class.'">11</th>';//echo date
               $item .= '<td>item#1</td><td>item#2</td><td>item#3</td><td>item#4</td>';
               $MTC_D.='<td  colspan="4" class="'.$class.'">MTC</td>';// echo MTC
               $App_D.='<td colspan="4" class="'.$class.'">APP</td>';// echo APP

            // }
        }
        echo($evalD1_1);
    }
   ?>
    <div class="container-fluid">
        <center><u><b> 3.5" MDL PH#3 Disk mount confrimation(Daily MTC Clean)</b></u></center>
        <img src="img/WD-4.PNG">
        <div class="row">
            <div class="col-4"><b>EQUIPMENT DAILY CHECK SHEET</b></div>
            <div class="col-4 offset-4">  LINE : <mark><?php echo ($line);?></mark>   MONTH : <mark><?php echo ($mm);?></mark>  YEAR  : <mark><?php echo ($y);?></mark></div>
        </div>
        <div class="col-12">
        <table class="table-hover table-bordered small table-striped table-info table"  >
            <thead class="table-primary text-center">
              <tr>
                 <th>Item.</th>
                 <th>Cycle</th>
                 <th>Check</th>
                 <th>Inspection Point</th>
                 <th>Inspection item/Method</th>
                 <th>spec</th>
                 <th>Action</th>
              </tr>
            </thead>
            <tbody class="table-info">
               <tr>
                  <td class="text-center">1</td>
                  <td class="text-center">1st</td>
                  <td class="text-center">MT</td>
                  <td><img src='img\Diskmountconfrimation1.png' style='width:30%' class='rounded border-dark float-left'> </td>
                  <td>Push up the center guide and move mount head in R-axis</td>
                  <td>No movement in R-axis<br> </td>
                  <td>Change new one/Adjust</td>
               </tr>
               <tr>
                  <td class="text-center">2</td>
                  <td class="text-center">1st</td>
                  <td class="text-center">MT</td>
                  <td><img src='img\Diskmountconfrimation2.png' style='width:30%' class='rounded border-dark float-left'> </td>
                  <td>Push mount head in X/Y-axis</td>
                  <td>No movement in X/Y-axis<br> </td>
                  <td>Change new one/Adjust</td>
               </tr>
               <tr>
                  <td class="text-center">3</td>
                  <td class="text-center">1st</td>
                  <td class="text-center">MT</td>
                  <td>P&P Head pick-up spacer <p><img src='img\Diskmountconfrimation3.png' style='width:30%' class='rounded border-dark float-left'></p> </td>
                  <td>Push up the center guide and move mount head in R-axis</td>
                  <td>No movement in R-axis<br> </td>
                  <td>Change new one/Adjust</td>
               </tr>
               <tr>
                  <td class="text-center">4</td>
                  <td class="text-center">1st</td>
                  <td class="text-center">MT</td>
                  <td>P&P Head pick-up spacer <p><img src='img\Diskmountconfrimation4.png' style='width:30%' class='rounded border-dark float-left'> </p></td>
                  <td>Push mount head in X/Y-axis</td>
                  <td>No movement in X/Y-axis<br> </td>
                  <td>Change new one/Adjust</td>
               </tr>
            </tbody>
        </table>
      </div>

    <div class="col-12 overflow-auto">
       <table class="table-bordered text-center table table-hover table-striped table-success" >
          <tr><th colspan="2" rowspan="2"><b>Item/Date</b></th><?php echo ($d);?></tr>
          <tr><?php echo ($item);?></tr>
          <tr><td  rowspan="3">  Disk#1 </td> 
          <td>D1</td> <?php echo ($D1);?></tr>
          <tr><td>  S1 </td>  <?php echo ($S1);?> </tr>
          <tr><td>  D2 </td>  <?php echo ($D2);?> </tr>
          
          <tr><td rowspan="6">Disk#2 </td><td>S2 </td> <?php echo ($S2);?></tr>
          <tr><td>  D3 </td>  <?php echo ($D3);?></tr>
          <tr><td>  S3 </td>  <?php echo ($S3);?></tr>
          <tr><td>  D4 </td>  <?php echo ($D4);?> </tr>
          <tr><td>  S4 </td>  <?php echo ($S4);?></tr>
          <tr><td>  D5 </td>  <?php echo ($D5);?></tr>

          <tr><td rowspan="4">  Disk#3 </td>   
          <td>S5</td> <?php echo ($S5);?> </tr>
          <tr><td>  D6 </td> <?php echo ($D6);?></td> </tr>
          <tr><td>  S6 </td> <?php echo ($S6);?></tr>
          <tr><td>  D7 </td> <?php echo ($D7);?></tr>
          <tr><td colspan="2">MTC</td><?php echo ($MTC_D);?></tr>       
          <tr><td colspan="2">Approve</td><?php echo ($App_D);?></tr>
       </table>
    </div>

  <div class = "row">
        <div class="col-4 small mt-3">
            <b> Remark</b><br>
            After checked each items completed,please specify mark into the periodical check sheet table  <br>
            <b> / : OK  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; R : REPLACE</b> <br>
            <b> A : ADJUST/REPAIR &nbsp;&nbsp;&nbsp; N/A : NO BUILD</b> <br>
        </div>
    <div class="col-4 mt-3"><img src="img/shift.PNG" ></div>
    <div class="col-4 small mt-3">
        <div class="row">
            <div class="col-6"><b>เอกสารเลขที่</b> : F-MTC-HDE-745 <br><b> หน้า</b> : 1/1</div>
            <div class="col-6"><b>วันที่ประกาศใช้ </b> : 1มิถุนายน 2563  <br><b>Revision</b> : <?php echo "$version" ?> </div>
        </div>
    </div>
    <div class="col-12 small ml-3 mt-3">
        <div class="row">
            <div class="col-1"><b>CYCLE :</b></div>
            <div class="col-2">1st : Start first shift <br>3M : Every 3 Month  </div>
            <div class="col-2">2WK : Every 2 Week <br>6M : Every 6 month</div>
            <div class="col-2">M: Every Month<br>Y : Every year </div>
         </div>
    </div>
    <div class="col-12 small ml-3 mt-3">
        <div class="row">
            <div class="col-1"><b>CHECK :</b></div>
            <div class="col-2 text-center">OP : OPERATOR</div>
            <div class="col-2 text-center">FR : FOREMAN</div>
            <div class="col-2 text-center">MT : MAINTENANCE</div>
        </div>
    </div>
  </div>
  
</div>
  
    
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.3.1.js"></script>
</body>
</html>
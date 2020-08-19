<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

    <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    <script src="semantic/semantic.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.appendgrid@2/dist/AppendGrid.js"></script>
</head>
<body>
<div class="col-12 overflow-auto">
       <table class="table-bordered text-center table table-hover table-striped table-success" >
          <tr> <th width="5%" colspan="2" rowspan="2"  ><b>Item/Date</b></th>  <?php echo ($d); ?>   </tr>


          <!-- <tr><th ><?php echo ($Item);?> </th>  <th ><?php echo ($Item2);?> </th>  <th ><?php echo ($Item3);?> </th> <th  ><?php echo ($Item4);?> </th></tr>; -->
           <!-- <?php echo $ItemTest1;  ?>   -->
           <!--<tr><?php //echo ($Item1)//.($Item2).($Item3).($Item4);?> </tr>-->
           <tr><?php echo ($Item1).($Item2).($Item3)//.($Item4);?> </tr>
          <tr><td width="5%" rowspan="3">  Disk#1 </td>   <td width="5%">D1 </td>  <td <?php echo ($evalD1_1);?>> </td>  <td <?php echo ($evalD1_2);?>> </td>  <td <?php echo ($evalD1_3);?>> </td> <td <?php echo ($evalD1_4);?> </td></tr>
          <tr><td width="5%">  S1 </td> <td <?php echo ($evalS1_1);?>></td> <td <?php echo ($evalS1_2);?>></td> <td <?php echo ($evalS1_3);?>></td> <td <?php echo ($evalS1_4);?>></td> </tr>
          <tr><td width="5%">  D2 </td> <td <?php echo ($evalD2_1);?>></td> <td <?php echo ($evalD2_2);?>></td> <td <?php echo ($evalD2_3);?>></td> <td <?php echo ($evalD2_4);?>></td></tr>
          
          <tr><td rowspan="6">  Disk#2 </td>   <td>S2 </td>  <td <?php echo ($evalS2_1);?>> </td>  <td <?php echo ($evalS2_2);?>> </td>  <td <?php echo ($evalS2_3);?>> </td> <td> <?php echo ($evalS2_4);?> </td></tr>
          <tr><td>  D3 </td> <td <?php echo ($evalD3_1);?>></td> <td <?php echo ($evalD3_2);?>></td> <td <?php echo ($evalD3_3);?>></td> <td <?php echo ($evalD3_4);?>></td> </tr>
          <tr><td>  S3 </td> <td <?php echo ($evalS3_1);?>></td> <td <?php echo ($evalS3_2);?>></td> <td <?php echo ($evalS3_3);?>></td> <td <?php echo ($evalS3_4);?>></td></tr>
          <tr><td>  D4 </td> <td <?php echo ($evalD4_1);?>></td> <td <?php echo ($evalD4_2);?>></td> <td <?php echo ($evalD4_3);?>></td> <td <?php echo ($evalD4_4);?>></td> </tr>
          <tr><td>  S4 </td> <td <?php echo ($evalS4_1);?>></td> <td <?php echo ($evalS4_2);?>></td> <td <?php echo ($evalS4_3);?>></td> <td <?php echo ($evalS4_4);?>></td></tr>
          <tr><td>  D5 </td> <td <?php echo ($evalD5_1);?>></td> <td <?php echo ($evalD5_2);?>></td> <td <?php echo ($evalD5_3);?>></td> <td <?php echo ($evalD5_4);?>></td> </tr>

          <tr><td rowspan="4">  Disk#3 </td>   <td>S5 </td>  <td <?php echo ($evalS5_1);?>> </td>  <td <?php echo ($evalS5_2);?>> </td>  <td <?php echo ($evalS5_3);?>> </td> <td> <?php echo ($evalS5_4);?> </td></tr>
          <tr><td>  D6 </td> <td <?php echo ($evalD6_1);?>></td> <td <?php echo ($evalD6_2);?>></td> <td <?php echo ($evalD6_3);?>></td> <td <?php echo ($evalD6_4);?>></td> </tr>
          <tr><td>  S6 </td> <td <?php echo ($evalS6_1);?>></td> <td <?php echo ($evalS6_2);?>></td> <td <?php echo ($evalS6_3);?>></td> <td <?php echo ($evalS6_4);?>></td></tr>
          <tr><td>  D7 </td> <td <?php echo ($evalD7_1);?>></td> <td <?php echo ($evalD7_2);?>></td> <td <?php echo ($evalD7_3);?>></td> <td <?php echo ($evalD7_4);?>></td> </tr>
                  


<!--         <tr><td ><b>C/E</b></td><?php echo ($evalE_1);?></tr> -->
<!--         <tr><td rowspan="3" ><b>2</b></td></tr>
             <tr><td ><b>A/D</b></td><?php echo ($evalD_2);?></tr>
             <tr><td ><b>C/E</b></td><?php echo ($evalE_2);?></tr> -->
<!--
             <tr><td rowspan="3" ><b>3</b></td></tr>
             <tr><td ><b>A/D</b></td><?php echo ($evalD_3);?></tr>
             <tr><td ><b>C/E</b></td><?php echo ($evalE_3);?></tr>
-->
          <tr><td rowspan="2" ><b>Checker</b> </td></tr>
          <tr><td ><b>A/E</b></td>  <?php echo ($MTC_D);?>> </tr>
<!--         <tr><td ><b>C/E</b> </td><?php echo ($MTC_E);?></tr> -->
          <tr><td rowspan="3"><b>Confirm</b> </td></tr>
          <tr><td ><b>A/E</b></td>  <?php echo ($App_D);?>> </tr>
             <!-- <tr><td ><b>C/E</b></td><?php echo ($App_E);?></tr> -->
       </table>
    </div>
</body>
</html>



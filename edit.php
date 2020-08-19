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
    <?php include("nav.php");
    $id = $_GET['id'];
    $con= mysqli_connect('localhost','root','','testgrid') or die("Error: " . mysqli_error($con));
            mysqli_query($con, "SET NAMES 'utf8' ");
            $sql = "SELECT * FROM datagrid WHERE ID = '$id'";
            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_array($result)){ 
            $ID  = $row['ID'];
            $grid1  = $row['grid1'];
            $totalgrid1  = $row['totalgrid1'];
            $grid2  = $row['grid2'];
            $totalgrid2  = $row['totalgrid2'];  
            }
    ?>
    <div class="container">
        <div class="card mt-5">
            <form action="save.php" method="post">
                <table id="appengrid1" class="mt-5"></table>
                <div class="col-4 offset-6">
                    Total :<input type="text" name="alltotal1" class="form-control" id="alltotal1" value=<?php echo($totalgrid1); ?> readonly>
                </div>
                <table id="appengrid2" class="mt-5"></table>
                <div class="col-4 offset-6">
                    Total :<input type="text" name="alltotal2" class="form-control" id="alltotal2" value=<?php echo($totalgrid2); ?> readonly>
                </div>
                <input type="hidden" name="grid1" id="grid1"  >
                <input type="hidden" name="grid2" id="grid2" >
                <input type="hidden" name="ID" id="ID" value= <?php echo($ID); ?> >
                <div class="text-center mt-2">
                    <button type="submit" name="submit" onclick="submit1()" class="btn btn-success">EDIT</button>
                    <button type="reset" class="btn btn-danger">RESET</button>
                </div>
            </form>
        </div>
       
    </div>
<script>


    var data = {"1":["","1.1","1.2","1.3","1.4"],
        "2":["","2.1","2.2","2.3","2.4"],
        "3":["","3.1","3.2","3.3","3.4"],
        };
    var data2 = {
        "1.1":["","1.1.1","1.1.2","1.1.3","1.1.4"],
        "1.2":["","1.2.1","1.2.2","1.2.3","1.2.4"],
        "1.3":["","1.3.1","1.3.2","1.3.3","1.3.4"],
        "1.4":["","1.4.1","1.4.2","1.4.3","1.4.4"],
        "1.5":["","1.5.1","1.5.2","1.5.3","1.5.4"],
        "2.1":["","2.1.1","2.1.2","2.1.3","2.1.4"],
        "2.2":["","2.2.1","2.2.2","2.2.3","2.2.4"],
        "2.3":["","2.3.1","2.3.2","2.3.3","2.3.4"],
        "2.4":["","2.4.1","2.4.2","2.4.3","2.4.4"],
        "2.5":["","2.5.1","2.5.2","2.5.3","2.5.4"],
        "3.1":["","3.1.1","3.1.2","3.1.3","3.1.4"],
        "3.2":["","3.2.1","3.2.2","3.2.3","3.2.4"],
        "3.3":["","3.3.1","3.3.2","3.3.3","3.3.4"],
        "3.4":["","3.4.1","3.4.2","3.4.3","3.4.4"],
        "3.5":["","3.5.1","3.5.2","3.5.3","3.5.4"],
        };    

    var myAppendGrid = new AppendGrid({
    element: "appengrid1",
    uiFramework: "bootstrap4",
    hideButtons: {
        moveUp: true,
        moveDown: true
    },
    columns: [ {
                name: 'Cascade1', display: 'ประเภท', type: 'select',
                ctrlOptions: { 0: '', 1: '1', 2: '2', 3: '3' },
                events :{ 
                  change: function(e){
                 grid1Cascade1(e)
                    
                 }
                } 
            },
            {
                name: 'Cascade2', display: 'บุคลากร', type: 'select',
                ctrlOptions: { 0: '' }, 
                ctrlAttr: { disabled: 'disabled' },
                events :{ 
                  change: function(e){
                    grid1Cascade2(e)
                 }
                } 
            },
            {
                name: 'Cascade3', display: 'ตำแหน่ง', type: 'select',
                ctrlOptions: { 0: '' }, 
                ctrlAttr: { disabled: 'disabled' }               
            },
             {
        name: "total1",
        display: "จำนวนเงิน",
        type: "number",
        events: { 
          change: function(e) {
          calculate1();
        }
      }
    }],
    initRows: <?php echo(count(json_decode($grid1))); ?>,
    initData: <?php echo($grid1); ?>
    
});



function calculate1(){
//   var rowIndex = myAppendGrid.getRowIndex(uniqueIndex);
//   var number1 = parseFloat(myAppendGrid.getCtrlValue("col-3", rowIndex) || 0);
//   var number2 = parseFloat(myAppendGrid.getCtrlValue("col-5", rowIndex) || 0);
//   var total = number1 * number2;
//   myAppendGrid.setCtrlValue("col-6", rowIndex, total);
  var rowcount = myAppendGrid.getRowCount();
  var total = 0;
   for(let i=0;i<rowcount;i++){
     if(myAppendGrid.getCtrlValue("total1", i)){
     total += parseInt(myAppendGrid.getCtrlValue("total1", i));
    }
   }
   document.getElementById("alltotal1").value = total;
}

function grid1Cascade1(evt) {
    var rowIndex = myAppendGrid.getRowIndex(evt.uniqueIndex);
    var elem1 = evt.target;
    var elem2 = myAppendGrid.getCellCtrl('Cascade2', rowIndex);
    var elem3 = myAppendGrid.getCellCtrl('Cascade3', rowIndex);
    elem2.options.length = 1;
    elem3.options.length = 1;
    if (0 < elem1.selectedIndex) {
        let val = elem1.value;
        let op = data[val];
        for(let [i,item] of op.entries()){
            elem2.options[i] = new Option(item,item);
   
        }
        elem2.disabled = false;
    } else {
        elem2.disabled = true;
    }
    elem3.disabled = true;
}
function grid1Cascade2(evt) {
    var rowIndex = myAppendGrid.getRowIndex(evt.uniqueIndex);
    var elem2 = evt.target;
    var elem3 = myAppendGrid.getCellCtrl('Cascade3', rowIndex);
    elem3.options.length = 1;
    if (0 < elem2.selectedIndex) {
        let val = elem2.value;
        let op = data2[val];
        for(let [i,item] of op.entries()){
            elem3.options[i] = new Option(item,item);
   
        }
        elem3.disabled = false;
    } else {
        elem3.disabled = true;
    }
}
///////////////////////// Grid 2 /////////////////////////////
var myAppendGrid2 = new AppendGrid({
    element: "appengrid2",
    uiFramework: "bootstrap4",
    hideButtons: {
        moveUp: true,
        moveDown: true
    },
    columns: [ {
                name: 'Cascade1', display: 'ประเภท', type: 'select',
                ctrlOptions: { 0: '', 1: '1', 2: '2', 3: '3' },
                events :{ 
                  change: function(e){
                  grid2Cascade1(e)
                    
                 }
                } 
            },
            {
                name: 'Cascade2', display: 'บุคลากร', type: 'select',
                ctrlOptions: { 0: '' }, 
                ctrlAttr: { disabled: 'disabled' }
               
            },
            {
                name: "number",display: "จำนวนเงิน", type: "number",
                events: { 
                change: function(e) {
                    calculate2(e);
                }
            }
            },
            {
                name: 'time', display: 'เวลา', type: 'select',
                ctrlOptions: { 0: '', 1: '1', 2: '2', 3: '3', 4: '4', 5: '5'}, 
                events :{ 
                  change: function(e){
                    calculate2(e);
                 }
                } 
            },
            {
                    name: "total2",
                    display: "จำนวนเงิน / เวลา",
                    type: "readonly",
            }
    ],
    initRows: <?php echo(count(json_decode($grid2))); ?>,
    initData: <?php echo($grid2); ?>
    
});



function calculate2(e){
   var rowIndex = myAppendGrid2.getRowIndex(e.uniqueIndex);
   var number1 = parseFloat(myAppendGrid2.getCtrlValue("number", rowIndex) || 0);
   var number2 = parseFloat(myAppendGrid2.getCtrlValue("time", rowIndex) || 0);
   var total = number1 / number2;
   alert(number1 / number2)
   myAppendGrid2.setCtrlValue("total2", rowIndex, total);
  var rowcount = myAppendGrid2.getRowCount();
  var total2 = 0;
   for(let i=0;i<rowcount;i++){
     if(myAppendGrid2.getCtrlValue("total2", i)){
     total2 += parseInt(myAppendGrid2.getCtrlValue("total2", i));
    }
   }
   document.getElementById("alltotal2").value = total2;
}

function grid2Cascade1(evt) {
    var rowIndex = myAppendGrid2.getRowIndex(evt.uniqueIndex);
    var elem1 = evt.target;
    var elem2 = myAppendGrid2.getCellCtrl('Cascade2', rowIndex);
    elem2.options.length = 1;
    if (0 < elem1.selectedIndex) {
        let val = elem1.value;
        let op = data[val];
        for(let [i,item] of op.entries()){
            elem2.options[i] = new Option(item,item);
   
        }
        elem2.disabled = false;
    } else {
        elem2.disabled = true;
    }
}
function submit1(){

    document.getElementById("grid1").value = JSON.stringify(myAppendGrid.getAllValue());
    document.getElementById("grid2").value = JSON.stringify(myAppendGrid2.getAllValue());
    
}

</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    <script src="semantic/semantic.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.appendgrid@2/dist/AppendGrid.js"></script>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/> 
    <!--Font Awesome webfont for appendGrid button icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"/>
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css">
    
    <title>Document</title>
</head>
<body >
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <!--appendGrid JS library-->
    <script src="https://cdn.jsdelivr.net/npm/jquery.appendgrid@2/dist/AppendGrid.js"></script>
    <!--Script for initialize appendGrid-->

<div class="container">
    <table id="tblAppendGrid">
    </table>
    <div class="col-3 offset-8">รวมทั้งหมด : <span id="alltotal"></span></div>
    <button onclick="testvalue()" >Show value</button>
    <hr/>
</div>

<script>
 
  var myAppendGrid = new AppendGrid({
    element: "tblAppendGrid",
    uiFramework: "bootstrap4",
    columns: [ {
                name: 'Cascade1', display: 'Cascade 1', type: 'select',
                ctrlOptions: { 0: '', 1: 'A', 2: 'B', 3: 'C', 4: 'D', 5: 'E' },
                onChange: handleCascadeChange1,
                events :{ 
                  change: function(e){
                    handleCascadeChange1(e)
                    
                 }
                } 
            },
            {
                name: 'Cascade2', display: 'Cascade 2', type: 'select',
                ctrlOptions: { 0: 'zxcx' }, 
                ctrlAttr: { disabled: 'disabled' },
                events :{ 
                  change: function(e){
                    handleCascadeChange2(e,e.uniqueIndex-1)
                 }
                } 
            },
            {
                name: 'Cascade3', display: 'Cascade 3', type: 'select',
                ctrlOptions: { 0: 'zxc' }, 
                ctrlAttr: { disabled: 'disabled' }
            },
             {
        name: "col-3",
        display: "ราคา",
        type: "number",
        events: { 
          change: function(e) {
          calculate(e.uniqueIndex);
        }
      }
    }, {
        name: "col-4",
        display: "sumting",
        type: "select",
        ctrlOptions: ["","คืน"]
    }, {
        name: "col-5",
        display: "จำนวน",
        type: "number",
        events: { 
          change: function(e) {
          calculate(e.uniqueIndex);
        }
      }
    }, {
        name: "col-6",
        display: "รวม ราคา * จำนวน",
        type: "readonly",
    
    }]
}); 
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
        name: "total",
        display: "จำนวนเงิน",
        type: "number",
        events: { 
          change: function(e) {
          calculate();
        }
      }
    }],
    initRows: "1"
    
}); 
function calculate(uniqueIndex){
  var rowIndex = myAppendGrid.getRowIndex(uniqueIndex);
  var number1 = parseFloat(myAppendGrid.getCtrlValue("col-3", rowIndex) || 0);
  var number2 = parseFloat(myAppendGrid.getCtrlValue("col-5", rowIndex) || 0);
  var total = number1 * number2;
  myAppendGrid.setCtrlValue("col-6", rowIndex, total);
  var rowcount = myAppendGrid.getRowCount();
  var total = 0;
   for(let i=0;i<rowcount;i++){
     if(myAppendGrid.getCtrlValue("col-6", i)){
     total += parseInt(myAppendGrid.getCtrlValue("col-6", i));
    }
   }
  document.getElementById("alltotal").innerHTML = total;
}

function handleCascadeChange1(evt) {
    // Get the select elements
    var rowIndex = myAppendGrid.getRowIndex(evt.uniqueIndex);
    var elem1 = evt.target;
    var elem2 = myAppendGrid.getCellCtrl('Cascade2', rowIndex);
    var elem3 = myAppendGrid.getCellCtrl('Cascade3', rowIndex);
    // Clear the generated options in elem2 and elem3
    elem2.options.length = 1;
    elem3.options.length = 1;
    // Check if user selected a valid option
    if (0 < elem1.selectedIndex) {
        // Generate options for elem2
        var selectedText = elem1.options[elem1.selectedIndex].innerHTML;
        for (var z = 1; z <= 5; z++) {
            elem2.options[z] = new Option(selectedText + '-' + z, z);
        }
        elem2.disabled = false;
    } else {
        elem2.disabled = true;
    }
    elem3.disabled = true;
}
function handleCascadeChange2(evt) {
    // Get the select elements
    var rowIndex = myAppendGrid.getRowIndex(evt.uniqueIndex);
    var elem2 = evt.target;
    var elem3 = myAppendGrid.getCellCtrl('Cascade3', rowIndex);
    // Clear the generated options in elem3
    elem3.options.length = 1;
    // Check if user selected a valid option
    if (0 < elem2.selectedIndex) {
        // Generate options for elem3
        var selectedText = elem2.options[elem2.selectedIndex].innerHTML;
        for (var z = 1; z <= 5; z++) {
            elem3.options[z] = new Option(selectedText + '-' + z, z);
        }
        elem3.disabled = false;
    } else {
        elem3.disabled = true;
    }
}

function testvalue() {
  var value = myAppendGrid.getAllValue();
  alert(JSON.stringify(value) );
}
  </script>
  

 <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
</body>
    
</html>
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
    <div class="container">
        <div class="card mt-5">
           
                
                <table id="appengrid2" class="mt-5"></table>
                <div class="col-2 offset-10 text-center">
                    รวมทั้งหมด <input type="text" name="alltotal2" class="form-control" id="alltotal2" value="0" readonly>
                </div>

        </div>
       
    </div>
<script>


    var data = {"งบบุคลากร":["","1.1","1.2","1.3","1.4"],
        "งบดำเนินงาน":["","2.1","2.2","2.3","2.4"],
        "งบลงทุน":["","3.1","3.2","3.3","3.4"],
        "งบอุดหนุน":["","3.1","3.2","3.3","3.4"],
        "งบรายจ่ายอื่นๆ":["","3.1","3.2","3.3","3.4"],
        };
    // var data2 = {
    //     "1.1":["","1.1.1","1.1.2","1.1.3","1.1.4"],
    //     "1.2":["","1.2.1","1.2.2","1.2.3","1.2.4"],
    //     "1.3":["","1.3.1","1.3.2","1.3.3","1.3.4"],
    //     "1.4":["","1.4.1","1.4.2","1.4.3","1.4.4"],
    //     "1.5":["","1.5.1","1.5.2","1.5.3","1.5.4"],
    //     "2.1":["","2.1.1","2.1.2","2.1.3","2.1.4"],
    //     "2.2":["","2.2.1","2.2.2","2.2.3","2.2.4"],
    //     "2.3":["","2.3.1","2.3.2","2.3.3","2.3.4"],
    //     "2.4":["","2.4.1","2.4.2","2.4.3","2.4.4"],
    //     "2.5":["","2.5.1","2.5.2","2.5.3","2.5.4"],
    //     "3.1":["","3.1.1","3.1.2","3.1.3","3.1.4"],
    //     "3.2":["","3.2.1","3.2.2","3.2.3","3.2.4"],
    //     "3.3":["","3.3.1","3.3.2","3.3.3","3.3.4"],
    //     "3.4":["","3.4.1","3.4.2","3.4.3","3.4.4"],
    //     "3.5":["","3.5.1","3.5.2","3.5.3","3.5.4"],
    //     };  

var myAppendGrid2 = new AppendGrid({
    element: "appengrid2",
    uiFramework: "bootstrap4",
    hideButtons: {
        moveUp: true,
        moveDown: true
    },
    columns: [ {
                name: 'Cascade1', display: 'หมวดการจ่าย', type: 'select',
                ctrlOptions: { 0: '', 'งบบุคลากร': 'งบบุคลากร', 'งบดำเนินงาน': 'งบดำเนินงาน', 'งบลงทุน': 'งบลงทุน', 'งบอุดหนุน': 'งบอุดหนุน', 'งบรายจ่ายอื่นๆ': 'งบรายจ่ายอื่นๆ' },
                events :{ 
                  change: function(e){
                  grid2Cascade1(e)
                    
                 }
                } 
            },
            {
                name: 'Cascade2', display: 'รายการ', type: 'select',
                ctrlOptions: { 0: '' }, 
                ctrlAttr: { disabled: 'disabled' }
               
            },
            {
                    name: "target",
                    display: "เป้าหมาย",
                    type: "number",
            },
            {
                name: 'unit', display: 'หน่วยนับ', type: 'select',
                ctrlOptions: { 0: '' , 1:'คน', 2:'ทีม' }
               
            },
            {
                    name: "time",
                    display: "ระยะเวลา",
                    type: "number",
            },
            {
                name: 'unit2', display: 'หน่วยนับ', type: 'select',
                ctrlOptions: { 0: '' , 1:'เดือน', 2:'ปี', 3:'วัน' }
               
            },
            {
                name: "number",display: "งบประมาณ", type: "number",
                events: { 
                change: function(e) {
                    calculats();
                }
            }
            },
            {
                    name: "total2",
                    display: "งบประมาณทั้งหมด",
                    type: "readonly",
            }
    ],
    initRows: "1",
    sectionClasses: {
        table: "table-sm text-center",
        buttonGroup: "btn-group-sm",
        control: "form-control-sm"
    },
    afterRowRemoved: function(caller, rowIndex) {
        calculats();
    }
    
});

function calculats(){
   //var rowIndex = myAppendGrid2.getRowIndex(e.uniqueIndex);
   var Net = 0 ; 
   var rowcount = myAppendGrid2.getRowCount();
   for(let i=0;i<rowcount;i++){
    var number1 = parseFloat(myAppendGrid2.getCtrlValue("target", i) || 0);
    var number2 = parseFloat(myAppendGrid2.getCtrlValue("time", i) || 0);
    var number3 = parseFloat(myAppendGrid2.getCtrlValue("number", i) || 0);
    var total = number1 * number2 * number3;
    myAppendGrid2.setCtrlValue("total2", i, total);
    Net+= total;
   }
   document.getElementById("alltotal2").value = Net;
}

function calculate2(e){
   var rowIndex = myAppendGrid2.getRowIndex(e.uniqueIndex);
   var number1 = parseFloat(myAppendGrid2.getCtrlValue("target", rowIndex) || 0);
   var number2 = parseFloat(myAppendGrid2.getCtrlValue("time", rowIndex) || 0);
   var number3 = parseFloat(myAppendGrid2.getCtrlValue("number", rowIndex) || 0);
   var total = number1 * number2 * number3;
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


</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
</body>
</html>
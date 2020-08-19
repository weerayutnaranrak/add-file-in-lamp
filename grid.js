
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
initRows: "1"

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
initRows: "1"

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
function submit(){
document.getElementById("grid1").value = JSON.stringify(myAppendGrid.getAllValue());
document.getElementById("grid2").value = JSON.stringify(myAppendGrid2.getAllValue());
}
function showItemName(x) {
    var atrClass = x.getAttribute("class")
    // x.setAttribute("class", atrClass + " tooltip" )
    alert(x.getAttribute("class"));
}

function addItem() {

    var wantOrHave = document.getElementById("want-have");


    var table = document.getElementById("trade-table-have");

    if (wantOrHave.selectedIndex == 1) {
        table = document.getElementById("trade-table-want");
    }


    var tr = document.createElement("tr");
    var td = document.createElement("td");


    var select = document.getElementById("itemSelect");


    var txt = document.createTextNode(select.options[select.selectedIndex].text);


    var btn = document.createElement('input');
    btn.type = "button";
    // btn.className = "btn";
    btn.value = "X";
    btn.onclick = (function () {
        return function () {
            removeItem(this)
        }
    });

    btn.onclick = function () {
        removeItem(this);
    }
    // btn.style.width= "10px"
    // btn.setAttribute("width", "2px");

    td.appendChild(btn);
    td.appendChild(txt);

    tr.appendChild(td);
    table.appendChild(tr);

    return false;
}




function removeItem(btn) {
    var row = btn.parentNode.parentNode;
    // alert(row + " " + btn);
    row.parentNode.removeChild(row);
}


$(function () {
    var dataSrc = ["australia", "austria", "antartica", "argentina", "algeria"];

    $("#searchItem").autocomplete({
        source:dataSrc
    });
});


// <script type="text/javascript">

var MousePointerToTopOfBox = 5;
var MousePointerToLeftOfBox = -30;

// End of customization section.
document.write('<div id="mouseover_message_box"></div>');
var cX = 0;
var cY = 0;
var rX = 0;
var rY = 0;
var DivPtr = document.getElementById("mouseover_message_box");
if (document.all) {
    document.onmousemove = UpdateMousePointerPositionDocAll;
}
else {
    document.onmousemove = UpdateMousePointerPosition;
}

function UpdateMousePointerPosition(e) {
    cX = e.pageX;
    cY = e.pageY;
}

function UpdateMousePointerPositionDocAll(e) {
    cX = event.clientX;
    cY = event.clientY;
}

function UndisplayMessage() {
    DivPtr.style.display = "none";
}

function DisplayMessage(d) {
    var s = d.innerHTML;
    var i = s.indexOf('<!--');
    var j = s.indexOf('-->');
    DivPtr.innerHTML = s.substr((i + 4), (j - i - 4));
    AssignPosition(DivPtr);
    DivPtr.style.display = "block";
} // function DisplayMessage()

function AssignPosition(d) {
    if (self.pageYOffset) {
        rX = self.pageXOffset;
        rY = self.pageYOffset;
    }
    else if (document.documentElement && document.documentElement.scrollTop) {
        rX = document.documentElement.scrollLeft;
        rY = document.documentElement.scrollTop;
    }
    else if (document.body) {
        rX = document.body.scrollLeft;
        rY = document.body.scrollTop;
    }
    if (document.all) {
        cX += rX;
        cY += rY;
    }
    d.style.left = parseInt(cX + MousePointerToLeftOfBox) + "px";
    d.style.top = parseInt(cY + MousePointerToTopOfBox) + "px";
} // function AssignPosition()
// </script>



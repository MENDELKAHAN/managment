!function($) {
    "use strict";
$(function(){
	
	var ctx2 = document.getElementById("canvas").getContext("2d");
    var data2 = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "#9575CD",
                strokeColor: "transparent",
                highlightFill: "#9575CD",
                highlightStroke: "#B3B3B3",
                data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
                label: "My Second dataset",
                fillColor: "#33AC71",
                strokeColor: "transparent",
                highlightFill: "#33AC71",
                highlightStroke: "#B3B3B3",
                data: [28, 48, 40, 19, 86, 27, 90]
            }
        ]
    };

    var chart2 = new Chart(ctx2).Bar(data2, {
        scaleBeginAtZero : true,
        scaleShowGridLines : true,
        scaleGridLineColor : "rgba(0,0,0,.05)",
        scaleGridLineWidth : 1,
        scaleShowHorizontalLines: true,
        scaleShowVerticalLines: false,
        barShowStroke : true,
        barStrokeWidth : 2,
        barDatasetSpacing : 1,
        legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
        responsive: true,
        scaleOverride: true,
        scaleSteps: 6,
        scaleStepWidth: 15,
        scaleStartValue: 0,
        barValueSpacing: 20,
        tooltipCornerRadius: 2
    });
});



 $('.select2').select2({placeholder: 'Select state'});

    //minumum 2 symbols input
    $('.select2-minimum').select2({
        placeholder: 'Select state',
        minimumInputLength: 2
    });




// var next = document.querySelectorAll("a[href='#next']");
//  next[0].onclick = function() {
//         alert("hello");
//         return false;
//     };



// document.getElementById("s2id_select_investors").addEventListener("keypress", myFunction);



// function myFunction() {
//     return false;
//     e.document.getElementById("next")
// }

document.getElementById("next").addEventListener("click", function(event){
    event.preventDefault();

    var e = document.getElementById("select_investors");
    var selected_values =  getSelectValues(e);
var total_percent =0;
   for (var i = 0; i < selected_values.length; i++) {

        var div_form_row = document.createElement("DIV");
        div_form_row.setAttribute("class", "form-group row");
                  
        var div_id = document.createElement("DIV");
        div_id.setAttribute("class", "col-md-0");
        div_form_row.appendChild(div_id);

        var id_input = document.createElement("INPUT");
        id_input.setAttribute("class","form-control");
        id_input.setAttribute("type", "hidden");
        id_input.setAttribute("name", "id["+(i+1)+"]");

        id_input.setAttribute("value", selected_values[i].id);
        id_input.readOnly = true;
        div_id.appendChild(id_input);

        var div_text = document.createElement("DIV");
        div_text.setAttribute("class", "col-md-9");
        div_form_row.appendChild(div_text);

        var text = document.createElement("INPUT");
        text.setAttribute("class","form-control");       
        text.setAttribute("type", "text");
        text.readOnly = true;
        text.setAttribute("value", selected_values[i].text);
        text.setAttribute("name", "text["+(i+1)+"]");
        div_text.appendChild(text);

        var div_percent = document.createElement("DIV");
        div_percent.setAttribute("class", "col-md-3");
        div_form_row.appendChild(div_percent);


        var company_id = 68;
        // xhttp.open("GET", "company/investor_percent/"+selected_values[i].id+"/"+company_id, true);
        


        var percent = document.createElement("INPUT");
        percent.setAttribute("class","form-control");       
        percent.setAttribute("type", "number");
        percent.setAttribute("name", "percent["+(i+1)+"]");

         
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                total_percent +=Number(this.responseText)
                    percent.setAttribute("value",  Number(this.responseText));
            }
        };
        xhttp.open("GET", "company/investor_percent/"+1, true);
        xhttp.send();


        div_percent.appendChild(percent);

     
        document.getElementById('dinamic_build').appendChild(div_form_row);

       }  
       
    
        alert(total_percent);

        $('#tab2').tab('show');
        $('#tab1').className = "disabled";
         $('#tab1').className = "active";
        



});




function getSelectValues(select) {
  var result = [];
  var options = select && select.options;
  var opt;

  for (var i=0, iLen=options.length; i<iLen; i++) {
    opt = options[i];

    if (opt.selected) {
        var id = opt.value;
        var text = opt.text;
        var unit = [];
        unit['id']= id
        unit['text'] = text;

        result.push(unit);
      // result.push(opt.value || opt.text);

    }
  }
  return result;
}













  
	}(window.jQuery);	
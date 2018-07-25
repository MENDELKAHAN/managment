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



document.getElementById("s2id_select_investors").addEventListener("keypress", myFunction);



function myFunction() {
    // alert("clicked");
    return false;
    e.document.getElementById("next")

    // document.getElementById("s2id_select_investors").style.backgroundColor = "red";
    // alert("press");
}

document.getElementById("next").addEventListener("click", function(event){
    event.preventDefault();

    var e = document.getElementById("select_investors");
// var value = e.options[e.selectedIndex].value;
// var text = e.options[e.selectedIndex].text;
        console.log(getSelectValues(e));
        $('#tab2').tab('show');
        $('#tab1').className = "disabled";
        



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
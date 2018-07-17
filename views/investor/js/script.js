
$(function () {
	$("#investors_financial_year").inputmask({"mask": "99/99"});

	toastr.options = {
        "debug": false,
        "newestOnTop": false,
        "positionClass": "toast-bottom-right",
        "closeButton": true,
        "progressBar": true
    };



var table1 = document.getElementById('table_content');
						
	$('#add_investor_form').submit(function () {
		var url = $(this).attr('action');
		var data = $(this).serialize();

		$.post(url, data, function (result) {
			var obj = JSON.parse(result);


			if(obj['error']){ 
				toastr.error('Error - ' + obj['error']);
				return false;
			}

			
			if(obj['investor']){ 
				toastr.success('Success - investor added');
				$('#add_investor_form_model').modal('toggle');
				$('#add_investor_form').trigger("reset");

				var table = obj.table;
				
				var table_content = document.getElementById("table_content");
				var row = table_content.insertRow(0)

				var cell1 = row.insertCell(0);
    			var cell2 = row.insertCell(1);
    			var cell3 = row.insertCell(2);
    			var cell4 = row.insertCell(3);
			    cell1.innerHTML =  table['investors_company_name'];			    
			    cell2.innerHTML =  table['investor_title']+ " " + table["investors_fname"] + " " + table["investors_lname"];  
			    if(table['investors_foreign']){var foreign = '&#x2714;'}else{var foreign = '&#x2716;'};
			    cell3.innerHTML =  foreign;
			    cell4.innerHTML =  "<a href='investorview/"+table['investors_id']+"' data-toggle='tooltip' title='' class='btn btn-sm btn-info' data-original-title='View'><i class='fa fa-eye'></i></a>";
							// Set page length in script:
				// $('#basic-datatables').dataTable( {
				//   "pageLength": 50
				// } );

			}else{
				toastr.error('Error - ' + obj['message']);
			}
			if(obj['number']){ 
								toastr.warning('Warning - ' + "Investor should have a number");

			}
					
		})


		return false;
		
	})


})

$(function () {
	$("#financial_year").inputmask({"mask": "99/99"});


	toastr.options = {
        "debug": false,
        "newestOnTop": false,
        "positionClass": "toast-bottom-right",
        "closeButton": true,
        "progressBar": true
    };



var table1 = document.getElementById('table_content');
						
	$('#add_company_form').submit(function () {

		var url = $(this).attr('action');
		var data = $(this).serialize();




		$.post(url, data, function (result) {
			var obj = JSON.parse(result);
		if(obj['error']){ 
				toastr.error('Error - ' + obj['error']);
				return false;
			}

			if(obj['company']){ 
				toastr.success('Success - company added');
				$('#add_company_form_model').modal('toggle');
				$('#add_company_form').trigger("reset");

				var table = obj.table;
				
				var table_content = document.getElementById("table_content");
				var row = table_content.insertRow(0)

				var cell1 = row.insertCell(0); // compay name
    			var cell2 = row.insertCell(1); // company number
    			var cell3 = row.insertCell(2); // forein
    			var cell4 = row.insertCell(3); // vat number
    			var cell5 = row.insertCell(4); // layout without concent
    			var cell6 = row.insertCell(5); // action

    			// var cell6 = row.insertCell(5);
			    cell1.innerHTML =  table['company_legal_name'];			    
			    cell2.innerHTML =  table['company_number'];  

			    if(table['company_foreign']){var foreign = '&#x2714;'}else{var foreign = '&#x2716;'};
			    cell3.innerHTML =  foreign;
			    cell4.innerHTML =  table['company_vat_number'];
			    cell5.innerHTML =  table['company_layout_without_consent'];
			    cell6.innerHTML =  "<a href='companyview/"+table['company_id']+"' data-toggle='tooltip' title='' class='btn btn-sm btn-info' data-original-title='View'><i class='fa fa-eye'></i></a>";
			// Set page length in script:
// $('#basic-datatables').dataTable( {
//   "pageLength": 50
// } );



			}else{
				toastr.error('Error - ' + obj['message']);
			}
					
		})


		return false;
		
	})


})
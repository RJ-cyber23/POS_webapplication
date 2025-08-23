$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});

$('.edit').on('click', function() {
    let row = $(this).closest('tr');
    let id = row.find('td:eq(1)').text();      // assuming first td after checkbox is ID
    let name = row.find('td:eq(2)').text();    // assuming next td is name

    $('#edit_customer_id').val(id);
    $('#edit_customer_name').val(name);
});


document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.delete').forEach(button => {
        button.addEventListener('click', function() {
            const customerId = this.getAttribute('data-id');
            document.getElementById('delete_customer_id').value = customerId;
        });
    });
});




$(document).ready(function(){
	// alert(1);
	$(document).on('click', '.menu-item-has-children > a', function(e){
		// alert('updater');
		// $(this).attr('href', 'javascript:void(0)');
		e.preventDefault();
		e.stopImmediatePropagation();
		return false;
	});
	$('.gallery-icon').on('click', 'a', function(e){
		e.preventDefault();
		return false;
		alert(1);
	})
})
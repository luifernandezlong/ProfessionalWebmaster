		// $(".fondo_inicio").hover(function(){
		// 	$(".fotofondo").css("filter", "blur(0px)").css("-webkit-filter", "blur(0px)");
		// }, function(){
		// 	$(".fotofondo").css("-webkit-filter", "blur(13px)").css("margin","-5px -15px -10px -15px").css("transform","scale(1.01)");
		// });
	// });
	// 	var figure = $(".video").hover( hoverVideo, hideVideo );

	// 	function hoverVideo(e) {  
	// 	    $('video', this).get(0).play(); 
	// 	}

	// 	function hideVideo(e) {
	// 	    $('video', this).get(0).pause(); 	
	// 	}


	$(document).ready(function() {

		
		$('.active').click(function(e) {	
			$('.active').removeClass('click');
			$("."+this.className.split(/\s+/)[0]).addClass('click');
		});

		  // get the action filter option item on page load

		  // PORTFOLIO
		  var $filterType = $('#filterOptions li.severe a').attr('class');

		  // get and assign the ourHolder element to the
		    // $holder varible for use later
		    var $holder = $('ul.ourHolder');

		  // clone all items within the pre-assigned $holder element
		  var $data = $holder.clone();

		  // attempt to call Quicksand when a filter option
		    // item is clicked
		    $('#filterOptions li a').click(function(e) {
		        // reset the active class on all the buttons
		        $('#filterOptions li').removeClass('severe');
		        
		        // assign the class of the clicked filter option
		        // element to our $filterType variable
		        var $filterType = $(this).attr('class');
		        $(this).parent().addClass('severe');
		        
		        if ($filterType == 'all') {
		            // assign all li items to the $filteredData var when
		            // the 'All' filter option is clicked
		            var $filteredData = $data.find('li');
		        } 
		        else {
		            // find all li elements that have our required $filterType
		            // values for the data-type element
		            var $filteredData = $data.find('li[data-type=' + $filterType + ']');
		        }
		        
		        // call quicksand and assign transition parameters
		        $holder.quicksand($filteredData, {
		        	duration: 800,
		        	easing: 'easeInOutQuad'
		        });
		        return false;
		    });


		var i = 0 , prec;
		var degs = $("#prec").attr("class").split(' ')[1];
		var activeBorder = $("#activeBorder");

		setTimeout(function(){
			if($("#circle").is(":hover"))
				loopit("c");
			else
				loopit("nc");
		},1);

		function loopit(dir){
			if (dir == "c")
				i--
			else
				i++;
			if (i < 0)
				i = 0;
			if (i > degs)
				i = degs;
			prec = (100*i)/360;       
			if (i<=180){
				activeBorder.css('background-image','linear-gradient(' + (90+i) + 'deg, transparent 50%, #F9C5C8 50%),linear-gradient(90deg, #F9C5C8 50%, transparent 50%)');
			}
			else{
				activeBorder.css('background-image','linear-gradient(' + (i-90) + 'deg, transparent 50%, #F4989E 50%),linear-gradient(90deg, #F9C5C8 50%, transparent 50%)');
			}
			
			setTimeout(function(){
				if($("#circle").is(":hover"))
					loopit("c");
				else
					loopit("nc");
			},1);
			
		}
	});

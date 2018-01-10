
   function hidePrices(){
	   $('#prices').hide();
		 $('#buyButton').hide();
		 $('span').hide();
	   return false;
	  };//end HidPrices
   
	  function togglePicture(){
		        
		    if($('#toggle').val() === 'picture'){
				 $('img').show();
				 $('span').hide();
					}else 
					if($('#toggle').val() === 'description'){
						 $('span').show();
						 $('img').hide();
						};
		      return false;
		     };//end togglePicture
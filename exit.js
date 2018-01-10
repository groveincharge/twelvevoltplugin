	
    function hideForm(){
	      $('form').hide();
				$('#buyButton').hide();
				$('span').hide();
				$('#prices').show();
				$('#item').html('12v Vacuum');
				$('#itemPrice').html('$ 0.01');
				$('#shippingPrice').html('$ 9.95');
				$('#totalPrice').html('$ 9.96');
      return false;
     };//end hideForm
		 
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
		
		  function showbuyButton(){
				 $('#prices').hide();
				 $('form').hide();
	        $('#buyButton').show();
				return false;
			};//end showbuyButton		
				 
	  var shippingPrice = 0;
		var totalPrice = 0;
		var vacPrice = 0;
		
	  function addShipping(){	
			     $('#shipping').click(function(){
						   if($(this).val() === 'standard'){
							  //vacPrice = 0.01;
							  shippingPrice = 0;
								shippingPrice += 9.95;
							
								$('#shippingPrice').html('$ '+shippingPrice);
								 totalPrice = shippingPrice;
								$('#totalPrice').html('$ '+totalPrice);
								}
						       });
									 
					 $('#shipping').click(function(){
						    if($(this).val() === 'three'){
								vacPrice = 0.01;
								shippingPrice = 0;
								shippingPrice += 29.95;
								
								$('#shippingPrice').html('$ '+shippingPrice);
								 totalPrice = vacPrice+shippingPrice;
								$('#totalPrice').html('$ '+totalPrice);
								}
						       });
									 
						 $('#shipping').click(function(){
						    if($(this).val()  === 'overnight'){
								vacPrice = 0.01;
							  shippingPrice = 0;
								shippingPrice += 59.95;
								
								$('#shippingPrice').html('$ '+shippingPrice);
								 totalPrice = vacPrice+shippingPrice;
								$('#totalPrice').html('$ '+totalPrice);
								}
						       });	 
								return false;	 
			   };//end checkShipping 
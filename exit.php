  <!DOCTYPE html>

  <html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Petit+Formal+Script|Cinzel Decorative|Teko" rel="stylesheet">
	  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="exit.js"></script>
	  <link rel="stylesheet" type="text/css" href="exit.php"/>
	  <link rel="stylesheet" type="text/css" href="exit.css"/>
    <title>Exit Subscriptiom Form</title>
  </head>
  <body onload="return hideForm()">
    <h1>Thanks for your Subscription</h1>
		
		<div id="container">
		
		 	 <div id="prices">
		   <table>
			   <tr><td>Item</td><td id="item"></td></tr>
				 <tr><td>Item Price</td><td id="itemPrice"></td></tr>
				 <tr><td>Shipping</td><td id="shippingPrice"></td></tr>
				 <tr><td>Total</td><td id="totalPrice"></td></tr>
			 </table>
			 	<fieldset>
			  <legend>Shipping</legend>
				<select id="shipping" name="shipping" onchange="addShipping()">
				 <option value="standard">Standard ($9.95)</option>
				 <option value="three">3-Day ($29.95)</option>
				 <option value="overnight">Overnight ($59.95)</option>
				</select>
			</fieldset>
			
			<fieldset>
			  <input type="submit" value="Proceed to Checkout" id="checkOut" onclick="return showbuyButton()">
			</fieldset>	
			<br />

			<p><strong>Thanks</strong> for your subscription, your item will be shipped immediately. Start receiving email updates about
			new and discounted products from <b>twelvevoltplugin.life.</b></p>
		    </div><!--prices-->
				
			 
		   <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="buyButton">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="3F3JP3UGZXGJC">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1%" height="1%">
       </form>
		  
			
		 <div id="itemContainer">
		   <img src="goodvac.jpg" alt="12v mini vac" width="75%" height="75%"/>
			 <br />
			 
			 <span>
			 Feature below: Package:1*vacuum cleaner Material:ABS Colors: Blue,Orange 
			 Size:34cm*9.5cm*10cm(13.39"*3.74"*3.94")/L*W*H 
			 Power line length: about 450cm(177.17") 
			 Working voltage: DC-12V Rated power: 100W 
			 Scope:General Motors Super suction,wet and dry dual-use,multi function. 
			 Model 2 Feature below: Package:1*cleaning brush 
			 Color:Green Material:microfiber,nylon and PP 
			 Size:16.5cm*4cm/6.50"*1.57" Weight:50g Specifications: Fast and easy to use.
			 Designed to clean blinds,keyboard, air-condition,etc.
			 Washable and convenient.Insert mini-blind cleaner,one roller between each slat.
			 100% brand new and high quality Stylish and unique design,very popular. 
			 </span>
			 <br />
		 
		 <select id="toggle" onclick="return togglePicture()">
				<option value="picture">Picture</option>
				<option value="description">Description</option>
			</select>
			
			   <p>This compact mini-vac gets the job done. 
				   A convevient and handy product for 
				   your vehicle. Subscribe and receive this Product for a Penny.
				  Just Pay <b>$ 0.01</b>, plus<b> $9.95</b> shipping & handling.
			 </p>
	   </div><!--end itemContainer-->
		</div><!--end container-->

  </body>
  </html>

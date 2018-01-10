   <!DOCTYPE html>

   <html>
   <head>
	  <link href="https://fonts.googleapis.com/css?family=Petit+Formal+Script|Cinzel Decorative|Teko" rel="stylesheet">
	  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="insert.js"></script>
	  <link rel="stylesheet" type="text/css" href="insert.php"/>
	  <link rel="stylesheet" type="text/css" href="insert.css"/>
    <title>Twelve volt Mini-Vac</title>
   </head>
	 
   <body onload="return hidePrices()" >
	   <h1>Twelve Volt Mini-Vac</h1>
		 
  <div id="container">
    <form action="insert.php" method="post">
		<fieldset>
	   First Name:<input type="text" name="firstName" id="input1"/><br/><br/>
     Last Name:<input type="text" name="lastName" id="input2"/><br/><br/>
     Email:<input type="email" name="email" id="input3"/><br /><br/><br/>
           <input type="submit" value="Subscribe" id="input4"/><br/><br/>
		</fieldset>
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

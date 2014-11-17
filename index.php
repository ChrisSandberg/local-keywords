<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Local Keyword Generator</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Local Keyword Generator</a></h1>
		<form id="form_283237" class="appnitro"  method="post" action="go.php">
					<div class="form_description">
			<h2>Local Keyword Generator</h2>
			<p>This tool combines root keywords with specific locations to creates keyword combinations for targeting local markets.</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Root Keywords </label>
		<div>
			<textarea id="element_1" name="rootkws" class="element textarea large"></textarea> 
		</div> 
		</li>		
    
    <li id="li_2" >
		<label class="description" for="element_2">Areas </label>
		<div>
			<textarea id="element_2" name="areas" class="element textarea large"></textarea> 
		</div> 
		</li>
		
		<li id="options">
		<label class="description" for="element_3">Combinations </label>
		<div>
        <input type="checkbox" name="LF" value="T" /> Location First (Salt Lake City Dentist)<br />
        <input type="checkbox" name="LL" value="T" /> Location Last (Dentist Salt Lake City)<br />
        <input type="checkbox" name="in" value="T" /> "in" (Dentist in Salt Lake City)<br />
        <input type="checkbox" name="around" value="T" /> "around" (Dentist around Salke Lake City)<br />
        <input type="checkbox" name="near" value="T" /> "near" (Dentist near Salke Lake City)<br />
        <input type="checkbox" name="from" value="T" /> "from" (Dentist from Salke Lake City)<br />
		</div> 		        
    </li>
			
		<li class="buttons">
			    <input type="hidden" name="form_id" value="283237" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
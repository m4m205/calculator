<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="mahmoud.css">
</head>
<body id="background">
	<div id="main">
	 <form name= "result">

		<div id="first-rows">
	        <input type="text" name="answer" id="screen"> <br>
            <input type="button" value=" = " onclick="result.answer.value = eval(result.answer.value) " id="equl">
            <input type="button" value=" Del " onclick="result.answer.value = '' " id="del">
        </div>
        <div class="rows">
        	<input type="button" value=" 1 " onclick="result.answer.value+= '1' ">
        	<input type="button" value=" 2 " onclick="result.answer.value += '2' ">
        	<input type="button" value=" 3 " onclick="result.answer.value += '3' ">
        	<input type="button" value=" + " onclick="result.answer.value += '+' ">
    	</div>
    	<div class="rows">
        	<input type="button" value=" 4 " onclick="result.answer.value += '4' ">
        	<input type="button" value=" 5 " onclick="result.answer.value += '5' ">
        	<input type="button" value=" 6 " onclick="result.answer.value += '6' ">
        	<input type="button" value=" - " onclick="result.answer.value += '-' ">
    	</div>
    	<div class="rows">
        	<input type="button" value=" 7 " onclick="result.answer.value += '7' ">
        	<input type="button" value=" 8 " onclick="result.answer.value += '8' ">
        	<input type="button" value=" 9 " onclick="result.answer.value += '9' ">
        	<input type="button" value=" * " onclick="result.answer.value += '*' ">
    	</div>
    	<div class="rows">
        	<input id="zero" type="button" value=" 0 " onclick="result.answer.value += '0' ">
        	<input type="button" value=" . " onclick="result.answer.value += '.' ">
        	
        	<input type="button" value=" / " onclick="result.answer.value += '/' ">
    	</div>
    	<div class="rows">
        	
    	</div>



	 </form>
	</div> 
</body>
</html>
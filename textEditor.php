<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" type="text/css" href="textEditorStyling.css">

<div class="toolbar">
	<ul class="tool-list">
		<li class="tool">
			<button 
				type="button" 
				data-command='justifyLeft'
				class="tool--btn">
				<i class=' fas fa-align-left'></i>
			</button>
		</li>
		<li class="tool">
			<button 
				type="button" 
				data-command='justifyCenter' 
				class="tool--btn">
				<i class=' fas fa-align-center'></i>
			</button>
		</li>
		<li class="tool">
			<button 
				type="button" 
				data-command="bold" 
				class="tool--btn">
				<i class=' fas fa-bold'></i>
			</button>
		</li>
		<li class="tool">
			<button 
				type="button" 
				data-command="italic"
				class="tool--btn">
				<i class=' fas fa-italic'></i>
			</button>
		</li>
		<li class="tool">
			<button 
				type="button" 
				data-command="underline"
				class="tool--btn">
				<i class=' fas fa-underline'></i>
			</button>
		</li>
		<li class="tool">
			<button 
				type="button" 
				data-command="insertOrderedList"
				class="tool--btn">
				<i class=' fas fa-list-ol'></i>
			</button>
		</li>
		<li class="tool">
			<button 
				type="button" 
				data-command="insertUnorderedList"
				class="tool--btn">
				<i class=' fas fa-list-ul'></i>
			</button>
		</li>
		<li class="tool">
			<button 
				type="button" 
				data-command="createlink" 
				class="tool--btn">
				<i class=' fas fa-link'></i>
			</button>
		</li>
	</ul>
</div>
<script type="text/javascript">
	function printf(){
		console.log("aise");
		var x=document.getElementById("output").innerText;
		document.write(x);
	}
</script>
<input type="textarea"  id="output" contenteditable="true">

<button onclick="printf()" >ok</button>
<script type="text/javascript" src="texteditor.js">
	

</script>
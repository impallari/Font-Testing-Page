<div class="dontprint">
	
	<input type="range" min="12" max="160" value="30" step="1" oninput="changeFontSizeNumbersGrid(this.value)" onchange="changeFontSizeNumbersGrid(this.value)" style="width: 300px;" />
	<input type="range" min="0" max="9" value="5" step="1" oninput="changeLineHeigthNumbersGrid(this.value)" onchange="changeLineHeigthNumbersGrid(this.value)" style="width: 100px;" />
	<script type="text/javascript">
		function changeFontSizeNumbersGrid(newValue) {
		document.getElementById("changedfontsizeNumbersGrid").innerHTML=newValue;
			$('.changesizeNumbersGrid').css('font-size',newValue + 'px');
		};
		function changeLineHeigthNumbersGrid(newValue) {
		document.getElementById("changedlineheigthNumbersGrid").innerHTML=newValue;
			$('.changesizeNumbersGrid').css('line-height','1.'+newValue);
		};
	</script>
	
</div>

<div contenteditable="true">
	
	<p class="sizelabel"><span id="changedfontsizeNumbersGrid">30</span>px / 1.<span id="changedlineheigthNumbersGrid">5</span>em</p>
	<p class="changesizeNumbersGrid" style="font-size: 30px; line-height: 1.5em;">1 2 3 4 5 6 7 8 9 0 1</p>
	<p class="changesizeNumbersGrid" style="font-size: 30px; line-height: 1.5em;">2 3 4 5 6 7 8 9 0 1 2</p>
	<p class="changesizeNumbersGrid" style="font-size: 30px; line-height: 1.5em;">3 4 5 6 7 8 9 0 1 2 3</p>
	<p class="changesizeNumbersGrid" style="font-size: 30px; line-height: 1.5em;">4 5 6 7 8 9 0 1 2 3 4</p>
	<p class="changesizeNumbersGrid" style="font-size: 30px; line-height: 1.5em;">5 6 7 8 9 0 1 2 3 4 5</p>
	<p class="changesizeNumbersGrid" style="font-size: 30px; line-height: 1.5em;">6 7 8 9 0 1 2 3 4 5 6</p>
	<p class="changesizeNumbersGrid" style="font-size: 30px; line-height: 1.5em;">7 8 9 0 1 2 3 4 5 6 7</p>
	<p class="changesizeNumbersGrid" style="font-size: 30px; line-height: 1.5em;">8 9 0 1 2 3 4 5 6 7 8</p>
	<p class="changesizeNumbersGrid" style="font-size: 30px; line-height: 1.5em;">9 0 1 2 3 4 5 6 7 8 9</p>
	<p class="changesizeNumbersGrid" style="font-size: 30px; line-height: 1.5em;">0 1 2 3 4 5 6 7 8 9 0</p>
	
</div>	
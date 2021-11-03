	document.getElementById('select0').addEventListener('change', function() {
  	document.getElementById('input0').setAttribute('placeholder', this.options[this.selectedIndex].getAttribute('data-placeholder'));
	});
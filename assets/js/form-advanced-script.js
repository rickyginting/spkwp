$(document).ready(function () {
	$('#datepicker').datepicker({
		keyboardNavigation: false,
		forceParse: false,
		todayHighlight: true
	});

	$('#date-popup').datepicker({
		keyboardNavigation: false,
		forceParse: false,
		todayHighlight: true
	});

	$('#year-view').datepicker({
		startView: 2,
		keyboardNavigation: false,
		forceParse: false,
		format: "mm/dd/yyyy"
	});

	var dragFixed = document.getElementById('drag-fixed');
	noUiSlider.create(dragFixed, {
		start: [40, 60],
		behaviour: 'drag-fixed',
		connect: true,
		range: {
			'min': 20,
			'max': 80
		}
	});

	var basicSlider = document.getElementById('basic-slider');
	noUiSlider.create(basicSlider, {
		start: 40,
		behaviour: 'tap',
		connect: 'upper',
		range: {
			'min': 20,
			'max': 80
		}
	});

	var rangeSlider = document.getElementById('range-slider');
	noUiSlider.create(rangeSlider, {
		start: [40, 60],
		behaviour: 'drag',
		connect: true,
		range: {
			'min': 20,
			'max': 80
		}
	});

	$(".select2").select2();
	$(".select2-placeholer").select2({
		allowClear: true
	});

	//$('.colorpicker').colorpicker();

	// Colorpicker
	if ($.isFunction($.fn.colorpicker))
	{
		$(".colorpicker").each(function (i, el)
		{
			var $this = $(el);
			var  opts = {
						//format: attrDefault($this, 'format', false)
					};
			var $nextEle = $this.next();
			var $prevEle = $this.prev();
			var $colorPreview = $this.siblings('.input-group-addon').find('.icon-color-preview');

			$this.colorpicker(opts);

			if ($nextEle.is('.input-group-addon') && $nextEle.has('span'))
			{
				$nextEle.on('click', function (ev)
				{
					ev.preventDefault();
					$this.colorpicker('show');
				});
			}

			if ($prevEle.is('.input-group-addon') && $prevEle.has('span'))
			{
				$prevEle.on('click', function (ev)
				{
					ev.preventDefault();
					$this.colorpicker('show');
				});
			}

			if ($colorPreview.length)
			{
				$this.on('changeColor', function (ev) {

					$colorPreview.css('background-color', ev.color.toHex());
				});

				if ($this.val())
				{
					$colorPreview.css('background-color', $this.val());
				}
			}
		});
	}
});

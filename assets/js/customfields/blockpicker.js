var blockpicker_field = function(context, options){
	$(context).on('change', '.blockpicker', function(e){
		var $this = $(this);
		if(!$this.is(':checked')) return;
		console.log('hello');
		var val = $this.val();
		var url = $this.data('url');
		if (!url) url = '';

		// for pages inline editing
		var module = $('#__fuel_module__');
		var context = $this.attr("name");
		if (module.length && module.val() == 'pagevariables'){
			var id = $('#page_id').val();
			var name = $this.attr("name").replace(/^value/, $('#name').attr("value"));
		} else {
			var id = $('#__fuel_id__').val();
			var name = '';
		}

		if (url.length){
			url = eval(unescape(url));
		} else {
			var layout = $this.val();
			if (layout && layout.length){
				//layout = layout.split('/').pop();
				layout = layout.replace('/', ':');

				//ptero.dev/fuel/blocks/layout_fields/full-width/1/english/ layouts is returning Sections instead of the blockname
				url = jqx_config.fuelPath + '/blocks/layout_fields/' + layout + '/' + id+ '/english/';
			}
		}
		
		// var contextArr = context.split("--")
		// if (contextArr.length > 1){
		// 	context = contextArr.pop();
		// }
		$layout_fields = $this.parent().nextAll('.block_layout_fields');
		if (url.length){
			url += '?context=' + context + '&name=' + name;
			// show loader
			var $loader = $this.parents('td').find('.loader');

			$loader.show();
			$('#form').data('disabled', true);
			// $layout_fields.load(url, function(){
			// 	// hide loader
			// 	$loader.hide();
			// 	$(this).find('.block_name').val(val);
			// 	fuel.adjustIframeWindowSize();
			// 	$(document).trigger('blockLoaded', [$this, context]);
			// 	$('#form').data('disabled', false);
			// });
		} else {
			$layout_fields.empty();
		}


	})
	
	$('.blockpicker', context).change();

}

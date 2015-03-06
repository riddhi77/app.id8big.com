<?php ?>
//<script>

	elgg.provide('elgg.kanban');

	elgg.kanban.init = function() {
		elgg.kanban.dropInit();
		elgg.kanban.eventsInit();
		//Chequeamos el WIP
		elgg.kanban.checkWip();
		elgg.kanban.keywordSearch();
		
		$('#responsible, #tasks_info_important, #tasks_info_overdue').change(function() {
			elgg.kanban.kanbanFilter();
		});
		
		$('select.max_tasks').change(function() {
			elgg.kanban.saveMaxTasks($(this));
		});
		
		$('.js_kanban_task_add').fancybox();
	};

	elgg.kanban.eventsInit = function() {	
		//Check wip
		$('.select-wip').change(function(){
			elgg.kanban.checkWip();
		})
	}
	
	elgg.kanban.dropInit = function() {
        draggable_options = {
            cursor: "move",
            items: ".portlet",
            connectWith: ".draggable-area",
            receive: elgg.kanban.dropAction
        }
        $( ".draggable-area" ).sortable(draggable_options);
 
        $( ".portlet" ).addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
		.find( ".portlet-header" )
		.addClass( "ui-widget-header ui-corner-all" )
		.prepend( "<span class='ui-icon ui-icon-plusthick'>[+]</span>")
		.end()
		.find( ".portlet-content" );
 
        $( ".portlet-header .ui-icon" ).click(function() {
            $( this ).toggleClass( "ui-icon-plusthick" ).toggleClass( "ui-icon-minusthick" );
			//			$( this ).toggle(function(){ $(this).html('[+]');}, function(){ $(this).html('[-]');console.log('sale');});
			if ($(this).hasClass('ui-icon-plusthick')) {
				$(this).html('[+]');
			}
			else {
				if ($(this).hasClass('ui-icon-minusthick')) {
					$(this).html('[-]');
				}
			}
            $( this ).parents( ".portlet:first" ).find( ".portlet-content" ).slideToggle();
        });
 
        $( ".draggable-area" ).disableSelection();	
	}

	elgg.kanban.dropAction = function( event, ui ) {
		var origen = $(ui.sender).parents('.column');
		var received = $(this).parents('.column')
		var origen_name = origen.attr('rel');
		var received_name = received.attr('rel');
		var ticket_id = $(ui.item).attr('rel'); 
		var scrumboard_url = $('#scrumboard_url').val();
		
		var options_url = {
			async : 1, 
			skip_layout : 1, 
			column: received_name, 
			milestone_id: $('#milestone_id').val(),
			ticket_id: ticket_id,
			origen: origen_name,
			received: received_name 
		}
		
		received.find('h3').addClass('ajax-loading');
		var href = elgg.get_site_url()+'action/gtask/changestatus';
		elgg.action(href, {
			data: {
				guid: ticket_id,
				origen: origen_name,
				received: received_name
			},
			success: function(data) {
				if (data.system_messages.error > 0) {
					$(ui.sender).sortable( "cancel" );
				}
				else {
					var icon = $(ui.item).find('.ui-icon');
					if (icon) {
						$(icon).removeClass('ui-icon-minusthick');
						$(icon).addClass('ui-icon-plusthick')
						$(icon).html('[+]');
					}
					$(ui.item).attr('data-status', received_name);
					elgg.kanban.updateColumn();
				}
				received.find('h3').removeClass('ajax-loading');
				elgg.kanban.kanbanFilter();
			}
		});
		
	}
	
	elgg.kanban.saveMaxTasks = function(el) {
		var parent = $(el).parents('.column');
		var status = parent.attr('rel');
		var val = $(el).val();
		
		var href = elgg.get_site_url()+'action/kanban/save_max_tasks';
		elgg.action(href, {
			data: {
				guid: elgg.page_owner.guid,
				max_tasks: val,
				status: status
			},
			success: function(data) {
				elgg.kanban.checkWip();
			}
		});
	}

	elgg.kanban.updateColumn = function(){
		elgg.kanban.checkWip(); 
		//$('.')
		$('.draggable-area').sortable(draggable_options);
	}
	
	elgg.kanban.kanbanFilter = function() {
		
		//Filtro
		var filter = '';
		
		// Responsable
		var responsible = $('#responsible').val();
		if (responsible > 0) {
			filter += '[data-responsible='+responsible+']';
		}
		
		// Importancia
		var is_checked_important = $('#tasks_info_important').is(':checked');
		if (is_checked_important) {
			filter += '[data-priority=high]';
		}
		
		// Retrasada
		var is_checked_overdue = $('#tasks_info_overdue').is(':checked');
		if (is_checked_overdue) {
			filter += '[data-overdue=1][data-status!=finished]';
		}
		
		// Search
		var search = $.trim($('#search_kanban').val());
		
		$('.draggable-area').unhighlight();
		
		if (search == '') {
			$('.portlet .portlet-content').hide();
			$('.portlet').hide();
			$('.portlet'+filter).show();
		}
		else {
			$('.portlet:visible').hide();
			
			$('.draggable-area').highlight(search);

			var divs = $(".draggable-area span.highlight").parents('div'+filter);
			divs.show();
			$.each(divs, function(index, value) {
				$(value).find('.portlet-content').show();
			});
		}
		
		elgg.kanban.checkWip();
		
	}

	elgg.kanban.keywordSearch = function() {      
		//Buscador por Keyword
//		$('#tickets_jump').attr('disabled', 'disabled');
		$('#search_kanban').keyup(function(){

//			var search = $.trim($(this).val());
//			if(search.substring(0, 1) == '#'){
//				$('#tickets_jump').attr('disabled', '');
//			}

//			if(search == ''){
				//$('.draggable-area *').parents('div').show();
				//$('.draggable-area *').show();
//				$('.portlet').show();
//				$('.portlet .portlet-content').hide();   
//			}else{
				//$('.draggable-area *').hide();
				//$('.draggable-area *').parents('div').hide();
//				$('.portlet:visible').hide();
//			}
			
			elgg.kanban.kanbanFilter();
			
//			$('.draggable-area').unhighlight();
//			$('.draggable-area').highlight(search);
			
//			$(".draggable-area span.highlight").parents('div').show();
		});
	}

	elgg.kanban.checkWip = function(){
		var selects = $('.max_tasks');
		$.each(selects, function(){
			obj = $(this);
			var wip = parseInt(obj.val());
			var elements = obj.parents('.column').find('.portlet:visible').length;
			if (elements > wip) {
				obj.parents('.column').addClass('overload');
			} else {
				obj.parents('.column').removeClass('overload');
			}
		});
	}



	elgg.register_hook_handler('init', 'system', elgg.kanban.init);
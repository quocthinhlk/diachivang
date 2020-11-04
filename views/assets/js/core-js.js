jQuery(document).ready(function ($) {
	"use strict";
	
	// Ingredient
	$('.add-ingredient').on( 'click', function(e) {
		e.preventDefault();

		$(".ingredient-sorting .ingredient-item:last-child").after(
			'<li'
			+ ' class="'
			+ ' ingredient-item">'
			+ '<div class="item-sort" >'
			+ '<i class="fa fa-arrows-alt"></i>'
			+ '</div>'
			+ '<div class="ingredient-field">'			
			+ '<input type="text" placeholder="Ingredient Name" class="form-control" name="ingredient_item[]">'
			+ '<input type="text" placeholder="Quantity" class="form-control" name="ingredient_quantity[]">'
			+ '<input type="text" placeholder="Unit" class="form-control" name="ingredient_unit[]">'
			+ '</div>'
			+ '<div class="item-sort remove-section">'
			+ '<i class="fa fa-times" aria-hidden="true"></i>'
			+ '</div>'
			+ '</li>');
			
			$( ".ingredient-sorting" ).sortable();
			$( ".ingredient-sorting" ).disableSelection();
	});
	
	// Nutrition
	$('.add-nutrition').on( 'click', function(e) {
		e.preventDefault();

		$(".nutrition-sorting .nutrition-item:last-child").after(
			'<li'
			+ ' class="ui-state-default'
			+ ' nutrition-item">'
			+ '<div class="item-sort" >'
			+ '<i class="fa fa-arrows-alt"></i>'
			+ '</div>'
			+ '<div class="nutrition-field">'
			+ '<input type="text" placeholder="Nutrition Item" class="form-control" name="nutrition_item[]">'
			+ '<input type="text" placeholder="% of Daily Value" class="form-control" name="nutrition_daily_value[]">'
			+ '</div>'
			+ '<div class="item-sort remove-section">'
			+ '<i class="fa fa-times" aria-hidden="true"></i>'
			+ '</div>'
			+ '</li>');			
			
			$( ".nutrition-sorting" ).sortable();
			$( ".nutrition-sorting" ).disableSelection();
	});
	
	// Direction
	$('.add-direction').on( 'click', function(e) {
		e.preventDefault();

		$(".direction-sorting .direction-item:last-child").after(
			'<li'
			+ ' class="ui-state-default'
			+ ' direction-item">'
			+ '<div class="item-sort" >'
			+ '<i class="fa fa-arrows-alt"></i>'
			+ '</div>'
			+ '<div class="direction-field">'			
			+ '<input type="file"  id="recipe_direction_image" class="form-control" name="recipe_direction_image[]" >'	
			+ '<textarea name="recipe_direction[]" class="form-control" ></textarea>'
			+ '</div>'
			+ '<div class="item-sort remove-section">'
			+ '<i class="fa fa-times" aria-hidden="true"></i>'
			+ '</div>'
			+ '</li>');
			
			$( ".direction-sorting" ).sortable();
			$( ".direction-sorting" ).disableSelection();
	});

	// Remove parent of 'remove' link when link is clicked.
	$('.project_images').on('click', '.remove_project_file', function(e) {
		
		e.preventDefault();

		$(this).parent().remove();
	});
	
	/*recipe */
	var _URL = window.URL || window.webkitURL;

	$('#recipe_feature_image').change(function () {
				
		var file = $(this)[0].files[0];
		console.log(file);
		var img = new Image();
		
		var imgwidth = 0;
		var imgheight = 0;
		var maxwidth = 1210;
		var maxheight = 700;

		img.src = _URL.createObjectURL(file);
		img.onload = function() {
			imgwidth = this.width;
			imgheight = this.height;
			
			if( imgwidth <= maxwidth && imgheight <= maxheight ){			
				$("#response").text("Image must not be subjected to Copyright"); // localize this text
			} else {
				$("#response").text("Best image size "+maxwidth+"X"+maxheight); // localize this text
			}
		};
		img.onerror = function() {

			$("#response").text("not a valid file: " + file.type);
		}

	});	
	
	/*Login Ajax*/
    $('a#show_login').on('click', function(e){
        $('body').prepend('<div class="login_overlay"></div>');
        $('form#login').fadeIn(500);
        $('div.login_overlay, form#login a.close').on('click', function(){
            $('div.login_overlay').remove();
            $('form#login').hide();
        });
        e.preventDefault();
    });

    // Perform AJAX login on form submit
    $('form#login').on('submit', function(e){
        $('form#login p.status').show().text(ajax_login_object.loadingmessage);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_login_object.ajaxurl,
            data: { 
                'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
                'username': $('form#login #username').val(), 
                'password': $('form#login #password').val(), 
                'security': $('form#login #security').val() },
            success: function(data){
                $('form#login p.status').text(data.message);
                if (data.loggedin == true){
                    document.location.href = ajax_login_object.redirecturl;
                }
            }
        });
        e.preventDefault();
    });
	
	/*remove the elements - mahbub*/
	$(document).on( 'click', '.remove-section i', function(e) {		  
        $(this).parents('li').remove();
	});
	
});
//javascipt functions
//the following was changed from $ to jQuery, with the $ put in a function to be used 
//again in the document to avoid conflix
jQuery(document).ready(function($){		//this is for search item functionality

		$(document).on('click','.open-search a', function(e){
		e.preventDefault();   
		//console.log('Check it Ya');
		$('.search-form-container').slideToggle(300);//slideTog - togglez open/close 300 millisecondz
	});

});												
jQuery(document).ready(readyDoc);

function readyDoc() {
	jQuery("#tez_block_mini").click(function(){
		jQuery("html,body").animate({scrollTop: '0px'}, 300);   
		jQuery("html, body").css("overflow","hidden");
		jQuery("#tez_block_bg, #tez_block_max").fadeIn(300);
		jQuery("#tez_block #word").focus();
	});

	jQuery("div#tez_block_bg, #close_tezaurus").click(function(){
		jQuery("html, body").css("overflow","");
		jQuery("#tez_block_bg,#tez_block_max").fadeOut(300);	
	});
}


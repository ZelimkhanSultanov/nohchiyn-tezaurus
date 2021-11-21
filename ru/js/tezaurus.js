jQuery(document).ready(readyDoc);

function readyDoc() {
	jQuery("#tez_btn").click(function(){
		tezaurus();
		sinSin();
	});
	jQuery("#word").keyup(function(e){
		if (e.keyCode==13) {
			tezaurus();
			sinSin();
		}
	});
 
	jQuery("#word").focus();
	footerHeight();
}

function tezaurus() {
	// jQuery("#result").hide();
	jQuery("#error_no_word, #error_empty_word, #result").fadeOut(200);	
	jQuery("#word").keydown(function(){	
			jQuery("#error_no_word").fadeOut(200);	
		});
	var word = jQuery("#word").val().trim();
	
	if (word == '') {
		jQuery("#word").val('');
		jQuery("#result").fadeOut(200);
		jQuery("#error_empty_word").fadeOut(200);
		jQuery("#error_empty_word").show(100);
		jQuery("#word").focus();
		jQuery("#word").keydown(function(){	
			jQuery("#error_empty_word, #error_no_word").fadeOut(200);	
		});
	}
	else {
	jQuery.ajax({
 			type: "POST",
 			url: "../tezaurus.php",
 			data: {word:word},
 			beforeSend: function() {
 				jQuery("#result").html(" \
 					<div style='width:160px;margin:auto;padding:50px;'> \
 					<img src='../images/preload.gif' /> \
 					</div>").show();
 			},

 			success: function(data) {
 				jQuery("#result").html('');
 				if (data == "no_sinonim") {
 					jQuery("#result").append('<span class="no_sinonim">К введенному слову синонимов не найдено!</span>').slideDown(200);
 				}
 				else if (data == "no_word") {
 					jQuery("#result").hide();
 					jQuery("#error_no_word").fadeIn();
 					jQuery("#word").focus();
 				}
 				else {
 					var mass = JSON.parse(data);
 					// if (mass.length > 1) var sinLength = "Синонимы";
 					// else sinLength = "Синоним";
 					word = word.replace('1','Ӏ');
 					for (var j = 0; j < mass.length; j++) {
 						jQuery("#result").append('<h3 class="zag_sin">"<span class="word_sin">'+word+'</span>"</h3>');
 						for (var i = 0; i < mass[j].length; i++) {
	 						var slovo = mass[j][i]['word'];
	 						var sinonimy = mass[j][i]['sinonimy'];
	 						if (sinonimy != null) {
	 							slovo = '<a href=javascript:void(0) id="slovo'+i+'" title="Кликните, чтобы посмотреть синонимы для этого слова.">'+slovo+'</a>';
	 						}
	 						jQuery("#result").append('<div class="slovo">'+slovo+'</div>').slideDown(200);	
	 					}
 					}
 					
 				}
 				
 				
 			}
 	});
	}
}

function sinSin() {
	jQuery(".slovo a").die('click');
	jQuery(".slovo a").live('click', function(){
		var new_val = jQuery(this).text();
 		jQuery("#word").val(new_val);
 		tezaurus();
 	});

}

function footerHeight() {
	var footerH = $('footer').height() + 10;
	$('#result').css('marginBottom', footerH+'px');
}

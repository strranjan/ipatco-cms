document.title = site_title + atob("IHwgaVBhdGNvIENNUw==");

$('.slugToggle').click(function(){
	if($('.slugToggle').is(':checked')){
		$('.slugInput').removeAttr('readonly');
	}else{
		$('.slugInput').attr('readonly',true);
	}
});
// $('input[type=file]').attr('name', 'userfile');

$(function() {
	$('.summernotes').summernote({
		height: 200,
		popover: {
         image: [],
         link: [],
         air: []
       }
	});
});

var postForm = function(name) {
	var content = $('textarea[name="'+name+'"]').html($('.summernotes').code());
}

$(".ajaxSubmitForm").submit(function (e){
	e.preventDefault();
	var notice = new PNotify({
		title: 'Processing',		
		addclass: 'bg-primary',
		type: 'info',
		icon: 'icon-spinner4 spinner',
		hide: false,
		buttons: {
			closer: false,
			sticker: false
		},
		width: PNotify.prototype.options.width
	});
	var msg0 = $(this).attr('if0');
	var msg1 = $(this).attr('if1');
	var msg2 = $(this).attr('if2');
	var msg3 = $(this).attr('if3');
	var msg4 = $(this).attr('if4');
	var msg5 = $(this).attr('if5');
	var msg6 = $(this).attr('if6');
	var redirect = base_url+$(this).attr('redirect');
	var action = base_url+$(this).attr('action');
	var sendData = new FormData(this);
	$.ajax({
		url:action , data: sendData, type: "POST", dataType: 'text',
		cache: false,
		contentType: false,
		processData: false,
		//async: false,
		success: function (e) {
			// $( "#ajaxloader" ).hide();
			if(e==1){
				notice.update({
					title: msg1,
					text: 'Redirecting Please Wait',
					type: 'success',
					icon: true,
					width: PNotify.prototype.options.width,
					hide: true,
					buttons: {
						closer: true,
						sticker: true
					}
				});
				window.location.href = redirect;
			} else if(e==2){
				notice.update({
					title: msg2,
					type: 'error',
					icon: true,
					width: PNotify.prototype.options.width,
					hide: true,
					buttons: {
						closer: true,
						sticker: true
					}
				});
			} else if(e==3){
				notice.update({
					title: msg3,
					type: 'error',
					icon: true,
					width: PNotify.prototype.options.width,
					hide: true,
					buttons: {
						closer: true,
						sticker: true
					}
				});
			} else if(e==4){
				notice.update({
					title: msg4,
					type: 'error',
					icon: true,
					width: PNotify.prototype.options.width,
					hide: true,
					buttons: {
						closer: true,
						sticker: true
					}
				});
			} else if(e==5){
				notice.update({
					title: msg5,
					type: 'error',
					icon: true,
					width: PNotify.prototype.options.width,
					hide: true,
					buttons: {
						closer: true,
						sticker: true
					}
				});
			} else if(e==6){
				notice.update({
					title: msg6,
					type: 'error',
					icon: true,
					width: PNotify.prototype.options.width,
					hide: true,
					buttons: {
						closer: true,
						sticker: true
					}
				});
			} else {
				notice.update({
					title: msg0,
					type: 'error',
					icon: true,
					width: PNotify.prototype.options.width,
					hide: true,
					buttons: {
						closer: true,
						sticker: true
					}
				});
			}
		}
	});
	return false;
});

/*********Use Modal************/
function use_modal(id, url){
	$.ajax({
		type:"GET",
		url: base_url+url,
		cache:false,
		data : { id : id },
		success: function(result){
			$('#add-modal').html(result);
		}
	});
}

function dynamicSelect(id, url_name, pasteHere){
	var c_id = $("#"+id).val();
	$.ajax({
        type: "GET",
        url: base_url+url_name,
			data : { id : c_id },
        success: function(response){
            $("#"+pasteHere).html(response);
            // alert(response);
        }

    });
}
function deleteMe(url){
	alert(url);
}

$('.clickForgotPassword').click(function(){
    $('.formForgot').animate({height: "toggle", opacity: "toggle"}, "slow");
    $('.formLogin').hide();
});
$('.backToLogin').click(function(){
    $('.formLogin').animate({height: "toggle", opacity: "toggle"}, "slow");
    $('.formForgot').hide();
});
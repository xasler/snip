$(document).ready(function () {
	function windowSize(){
    if ($(window).width() <= '995'){

$('#slide2').css({"opacity":"1"});
		

  
    } else {
$('#slide2').waypoint({
        handler: function(direction){
		setTimeout(function(){ $(".weare").addClass("fadeInLeft"); }, 600);
        },
        triggerOnce: true,
        offset: 'bottom-in-view'
    });

		 $(window).stellar();
    }
}
	
	
	
	
		$(window).on('load', function () {
    var $preloader = $('#page-preloader'),
        $spinner   = $preloader.find('.spinner');
    $spinner.fadeOut();
    $preloader.fadeOut('slow');
});

	
	
	(function() {
			
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();

$(function (){
		// прячем кнопку #back-top
		$("#back-top").hide();
	
		$(window).scroll(function (){
			if ($(this).scrollTop() > 100){
				$("#back-top").fadeIn();
			} else{
				$("#back-top").fadeOut();
			}
		});

		// при клике на ссылку плавно поднимаемся вверх
		$("#back-top a").click(function (){
			$("body,html").animate({
				scrollTop:0
			}, 800);
			return false;
		});
	});
  
  
var config = {
  reset:  true
}

window.sr = new scrollReveal( config );

  
  
 var myconainer = ".oredermorder";
	$(myconainer+" a").fancybox({ 
	closeBtn : false ,
	wrapCSS    : 'withoutbg',
			helpers : {
		
			title  : { type : 'inside' },
			thumbs : {
				width  : 50,
				height : 50,
			},
			overlay: { locked: false 
			},
		
		}
		});

 $("#submit").on('click', function() { //устанавливаем событие отправки для формы с id=form
            var form_data = $("#contact").serialize(); //собераем все данные из формы
            var user_name = $("#name").val();
			var email = $("#email").val();
			var message = $("#message").val();
		  if(message != ''){
		  $.ajax({
            type: "POST", //Метод отправки
            url: "send.php", //путь до php фаила отправителя
            data: form_data,
            success: function() {
                   //код в этом блоке выполняется при успешной отправке сообщения
                $("#successcontact").fadeIn(300);
				$(".my_overlay").fadeIn(300);
				
           }, });
		   
		
		}
		else{
		$('#message').css( "background", "#e74c3c" );
		$("#message").attr("placeholder", "Ввидетие телефон");
		$('#message').click(function(){ $(this).css("background", "#fff") });
		}
		
	
    });

	
	
	 $("#submit2").on('click', function() { //устанавливаем событие отправки для формы с id=form
            var form_data = $("#contact2").serialize(); //собераем все данные из формы
            var user_name = $("#name2").val();
			var email = $("#email2").val();
			var message = $("#message2").val();
  
		  if(message != ''){
		  $.ajax({
            type: "POST", //Метод отправки
            url: "send.php", //путь до php фаила отправителя
            data: form_data,
            success: function() {
                   //код в этом блоке выполняется при успешной отправке сообщения
                $("#successcontact").fadeIn(300);
				$(".my_overlay").fadeIn(300);
				
           }, });
		   
		
		}
		else{
		$('#message2').css( "background", "#e74c3c" );
		$("#message2").attr("placeholder", "Ввидетие телефон");
		$('#message2').click(function(){ $(this).css("background", "#fff") });
		}
		
	
    });
	

	
	
	
	
	 $("#newsender, #elsesender").on('click', function() { //устанавливаем событие отправки для формы с id=form
    

		  var form_data = $("#caller").serialize(); //собераем все данные из формы
    var tel = $("#tel").val();
	    var name = $("#callname").val();
   if(tel != ''){
	   
	   		 $(".operation .fa-exclamation").hide().stop(true,true);
	   
     $(".operation .fa-envelope-o").stop(true,true).fadeOut(
	 300,
       
        function(){
           $(".operation img").delay(300).fadeIn(300).delay(1000).fadeOut(300,
		       function(){
				     $(".fade").fadeOut(300,
				function(){	 $(".fadein").fadeIn(300);
$("#callname, .sender_wrap, .tel").fadeOut(300,
	function(){
		
		$(".formtext").html("Ваши контактные данные успешно отправлены. Мы свяжемся с Вами в ближайшее рабочее время. Вы так же можете позвонить по номеру +7 (917) 916-14-16. Если Вы уже оставили Вашу заявку и мы Вам не перезвонили, пожалуйста, оставьте заявку повторно.");
		$(".youaresend").html("Уважаемый "+name+", Вы оставили заявку на звонок по номеру "+tel+", спасибо.");
		$(".youaresend").fadeIn(300);
		
		}
);
				}
					); 
				   	$(".operation .fa-check-circle").fadeIn(300).stop(true,true).delay(1000).fadeOut(300,
					function(){
						 $(".operation .fa-envelope-o").fadeIn(300).stop(true,true);
							
					  }
					);
				   }
		   );
        } 
    );

		 

		  $.ajax({
            type: "POST", //Метод отправки
            url: "callorder.php", //путь до php фаила отправителя
            data: form_data,
            success: function() {
                   //код в этом блоке выполняется при успешной отправке сообщения
              	$('#tel').val("");
				$('#callname').val('');
			
				
				
           }, });
		}
		else{
			$(".operation i, .operation img").stop(true,true).hide(
					function(){
						 $(".operation .fa-exclamation").delay(300).fadeIn(300);
						
					  }
					);
			
		
		$('#tel').css( "background", "#F1A9A0" );
		$("#tel").attr("placeholder", "Введите телефон");
		$('#tel').click(function(){ $(this).css("background", "#fff") });
		}
	
    });
	
	
 $(".thisend, .my_overlay").on('click', function() {
 $("#successcontact").fadeOut(300);
 		$(".my_overlay").fadeOut(300);
 });

var myconainer = ".mcont";
	$(myconainer+" a").fancybox({ 
			helpers : {
		
			title  : { type : 'inside' },
			thumbs : {
				width  : 50,
				height : 50,
			},
			overlay: { locked: false 
			},
		
		}
		});


  
  
	$('.multiple-items').slick({
		 dots: true,
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
});
		
	});
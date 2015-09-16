$(document).ready(function () {

	
	 $("#letsend").on('click', function() { //устанавливаем событие отправки для формы с id=form
            var form_data = $("#megaform").serialize(); //собераем все данные из формы
       
	   $(".operation .fa-envelope-o").stop(true,true).fadeOut(
	 300,
       
        function(){
           $(".operation .fa-check-circle").fadeIn(300).delay(1000).fadeOut(300,
		     function(){
				 
				   $(".operation .fa-envelope-o").fadeIn(300);
		     } 
		   );
        } 
    );

		  $.ajax({
            type: "POST", //Метод отправки
            url: "/admin/upindex.php", //путь до php фаила отправителя
            data: form_data,
            success: function() {
                   //код в этом блоке выполняется при успешной отправке сообщения
               //  $(".doing").fadeIn(300).delay(800).fadeOut(300);
		
           }, });

		
	
    });
	
	
		 $("#loginsend").on('click', function() { //устанавливаем событие отправки для формы с id=form
            var form_data = $("#loginform").serialize(); //собераем все данные из формы
			var name = $("#name").val();
			var pass = $("#pass").val();
			if(pass != '') {
			
	   $(".operation .fa-user").stop(true,true).fadeOut(
	 300,
       
        function(){
           $(".operation img").fadeIn(300).delay(1000).fadeOut(300,
		     function(){
				 
				   $(".operation .fa-user").fadeIn(300);
		     } 
		   );
        } 
    );

		  $.ajax({
            type: "POST", //Метод отправки
            url: "/admin/testreg.php", //путь до php фаила отправителя
            data: form_data,
            success: function() {
                   //код в этом блоке выполняется при успешной отправке сообщения
               //  $(".doing").fadeIn(300).delay(800).fadeOut(300);
				setTimeout("location.href='/admin/index.php'", 1);
           }, });

		}
	
    });
	
	
	
		
	});
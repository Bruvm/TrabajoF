$(document).ready(function(){
	$("#form").submit(function(){
		var boton = $('#submit_buttom');
		var html = "<div class='contentSpiner' style='width: 70.34px; height: 24px;'>"
            html += "<span style='display: inline-block; width: 1.5rem; height: 1.5rem; -webkit-animation: spinner-border 1s linear infinite; animation: spinner-border 1s infinite; border-color: #fff; border-right-color: transparent;' class='spinner-border spinner-borde-sm;' role='status' aria-hidden='true'> </span>"
            html += "</div>"
            boton.each(function () {
            this.prop("disabled", true);
            this.html("hola");
        	}
				var url = "forms/contact.php";
				$.ajax({
					type: "POST",
					url: url,
					data: $("#form").serialize(),
					success: function(data){
						$("#resultado").html(data);
						$('#form')[0].reset();

						$('#submit_buttom').html("Buscar");
                        $("#submit_buttom").prop("disabled", false);
						$('contentResult').addClass("enviado");
					
					},
					error: function(){
						$('#submit_buttom').html("Buscar");
                        $("#submit_buttom").prop("disabled", false);
                        $('contentResult').addClass("error");
					}

				});
				return false;
			});
})
		
			
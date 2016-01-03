jQuery(document).ready(function () {
	$(document).on('click','.j-save-jenis', function(){
		var url = $(this).attr("data-url");
		var homeurl = $(this).attr("data-homeurl");
		var namajenis = $("#namajenis").val();
		$.ajax({
			url : url,
			type : 'POST',
			data : {namajenis : namajenis,},
			dataType : 'JSON',
			success : function(data){
				if(data.status === true){					
					alert(data.msg);
					window.location.href = homeurl;
				}else{
					alert(data.msg);
				}
			}
		});
	});
});

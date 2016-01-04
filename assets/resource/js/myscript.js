jQuery(document).ready(function () {
	//simpan data merk
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

	//simpan data model
	$(document).on('click','.j-save-model', function(){
		var url = $(this).attr("data-url");
		var homeurl = $(this).attr("data-homeurl");
		var idmerk = $("#idmerk").val();
		var namamodel = $("#namamodel").val();
		$.ajax({
			url : url,
			type : 'POST',
			data : {idmerk : idmerk, namamodel : namamodel,},
			dataType : 'JSON',
			success : function(data){
				console.log(data.status);
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
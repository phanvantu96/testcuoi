function kiemtra() {
				 	// Kiểm tra tên khác rỗng
            var name = document.form_lh.name.value;  // Lấy giá trị của txtten
			var sex = document.form_lh.sex.value;
			var date = document.form_lh.date.value;
			var file = document.form_lh.file.value;
			
			if( name == ""){
					document.getElementById("name").innerHTML = "Bạn chưa nhập tên !";
					document.getElementById("name").style.color="red";	
					return false;
				}
			else{

				document.getElementById("name").innerHTML = "";


				}
				


				
			if( sex == ""){
					document.getElementById("sex").innerHTML = "Bạn chưa chọn giới tính ! !";
					document.getElementById("sex").style.color="red";
					return false;
				}
			else{
				document.getElementById("sex").innerHTML = "";
				}
			if( date == ""){
					document.getElementById("date").innerHTML = "Bạn chưa nhập năm sinh !";
					document.getElementById("date").style.color="red";
					return false;
				}
			else{
				document.getElementById("date").innerHTML = "";
				}
			if( file == ""){
					document.getElementById("file").innerHTML = "Bạn chưa chọn hình ảnh !";
					document.getElementById("file").style.color="red";
					return false;
				}	
			else{
				document.getElementById("file").innerHTML = "";
				}
			
			
		 }
		 
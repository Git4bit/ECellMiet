function loginBtn(){

	var loginBTn = "loginBtn";
	var uName = $("#uName").val();
	var pwd = $("#pwd").val();

	$("#errorMsg").html("");
	$("#loginBTN").html("Processing...");
	$("#loginBTN").attr("disabled","disabled");

	if (uName !== "" && pwd !== "") {

		$.ajax({
			type: "POST",
			url: "http://localhost/admin-login/include/function.php",
			data:{loginBTn:loginBTn,uName:uName,pwd:pwd,},
			success:function(result){
				if (result=="loggedIn") {
					window.location="index.php";
				}
				if (result=="wrong") {
					$("#errorMsg").html("<font color='red'>Wrong Crendentials</font>");
					$("#loginBTN").html("LOGIN");
					$("#loginBTN").removeAttr("disabled");
				}
			}
		});

	}else{
		$("#errorMsg").html("<font color='red'>All fields are required</font>");
		$("#loginBTN").html("LOGIN");
		$("#loginBTN").removeAttr("disabled");
	}

}


function logoutBTN(){

	var logoutBTN = "logoutBTN";

	$.ajax({
			type: "post",
			url: "include/function.php",
			data:{logoutBTN:logoutBTN,},
			success:function(result){
				if (result=="logoutSuccess") {
					window.location="login.php";
				}
				if (result=="logoutFailed") {
					$("#errorMsg").html("<font color='red'>Try again</font>");
					$("#loginBTN").html("LOGIN");
					$("#loginBTN").removeAttr("disabled");
				}
			}
		});



}

<!DOCTYPE html>
<html>
<head>
	<title>Password Generator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">

  	body{
  		background-image: url('car1.jpg');
  		background-repeat: no-repeat;
  		background-size: cover;
  	}
  	#generated_password{
  		background-color: lightgrey;
  		max-height: 100px;
  		height: 100px;
  		width: auto;
  		padding: 5px;
  		font-size: 22px;
  		text-align: center;
  		color: black;
  		border-radius: 15px;
  		margin-bottom: 5px;
  		word-break: break-all;
  		word-wrap: break-word;
  		scroll-behavior:smooth;
  		margin-bottom: 15px;
  	}

  	img{
  		margin-left: auto;
  		margin-right: auto;
  		display: block;
  	}

  	#password_gen_div{
  		background-color: rgba(0,0,0,0.6);
  		margin-top: 5px;
  		color: white;
  		border-radius: 15px;
  	}
  	input{
  		margin-left: 3px;
  	}

  	.progress {
    display: -ms-flexbox;
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: .75rem;
    background-color: #e9ecef;
    border-radius: .25rem;
    margin-top: 45px!important;
    margin-bottom: 10px!important;
    

}

  </style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto" id="password_gen_div">
				<h3 class="text-center text-white">Password Generator</h3>
				<img src="pg.png" height="100" width="auto">
				<div id="generated_password"></div>
				<br>
				<form action="generate_random_password.php" method="POST" >
				<div class="form-group">
					<input type="checkbox" name="all" value="all" onchange="return generate_pw();"> All
				</div>
				<div class="form-group">
					<input type="checkbox" name="only_alphabet" value="only_alphabet" onchange="return generate_pw();"> Alphabet Only
				</div>
				<div class="form-group">
					<input type="checkbox" name="only_numbers" value="only_numbers" onchange="return generate_pw();"> Numbers Only
				</div>
				<div class="form-group">
					<input type="checkbox" name="only_specialcharacters" value="only_specialcharacters" onchange="return generate_pw();"> Special Characters Only
				</div>
				<div class="form-group">
					<label>Length:<span class="text-info">(*By Default Length will be 30.)</span></label>
					<input type="number" name="length" id="length" class="form-control" onkeyup="return generate_pw(this.value);" placeholder="Default value is 30">
				</div>
				
				</form>
			</div>
		</div>
	</div>

</body>
</html>
<script type="text/javascript">
	/*$(document).ready(function(){
		$(document).on("click","#generate",function(){
			var all = $('input[name="all"]:checked').val();
			if($('input[name="all"]:checked')){
				$('input[name="only_alphabet"]').prop("disabled",true);
				$('input[name="only_numbers"]').prop("disabled",true);
				$('input[name="only_specialcharacters"]').prop("disabled",true);


			}
			else{
				$('input[name="only_alphabet"]').prop("disabled",false);
				$('input[name="only_numbers"]').prop("disabled",false);
				$('input[name="only_specialcharacters"]').prop("disabled",false);

			}

			var only_alphabet = $('input[name="only_alphabet"]:checked').val();
			var only_numbers = $('input[name="only_numbers"]:checked').val();
			var only_specialcharacters = $('input[name="only_specialcharacters"]:checked').val();
			
			var length = $("#length").val();
			//alert(length);
			var data = {

				"all":all,
				"only_alphabet":only_alphabet,
				"only_numbers":only_numbers,
				
				"only_specialcharacters":only_specialcharacters,
				"length":length

			}

			$.ajax({
				type:'POST',
				url:'generate_random_password.php',
				data:data,
				success:function(res){
					//alert(res);
					$("#generated_password").html(res);

				}
			});



		});
	});
*/

	function generate_pw($len){

		//alert($len);

		var all = $('input[name="all"]:checked').val();
		var only_alphabet = $('input[name="only_alphabet"]:checked').val();
			var only_numbers = $('input[name="only_numbers"]:checked').val();
			var only_specialcharacters = $('input[name="only_specialcharacters"]:checked').val();
			
			var length = $len;
			//alert(length);
			var data = {

				"all":all,
				"only_alphabet":only_alphabet,
				"only_numbers":only_numbers,
				
				"only_specialcharacters":only_specialcharacters,
				"length":length

			}
		$.ajax({
				type:'POST',
				url:'generate_random_password.php',
				data:data,
				success:function(res){
					//alert(res);
					$("#generated_password").html(res);

				}
			});


	}


	function get_progress_bar(){

	}
</script>
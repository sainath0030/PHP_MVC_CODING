
<?php

$winner = '';

if(isset($_GET['winner'])){
	$winner = $_GET['winner'];
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Interview </title>
  </head>
  <body>
    

    <div class="container-fluid">

    	<div class="row mt-5">
    		<div class="col-12 text-center">
    			<h1>Work me out!</h1>
    		</div>
    	</div>

    	<div class="row mt-2">
    		<div class="col-4">
    		</div>
    		<div class="col-4">

			    <form id="testForm">

			    	<input type="hidden" id="winner" name="winner" value="<?php echo $winner; ?>">

			    	<div class="form-group">
					    <label for="input1">Input 1</label>
					    <input type="text" class="form-control" id="input1" name="input1" aria-describedby="input1">
					</div>
					<div class="form-group">
					    <label for="input2">Input 2</label>
					    <input type="text" class="form-control" id="input2" name="input2" aria-describedby="input2">
					</div>
					
					<button class="btn btn-primary submit-data">Enter</button>
				</form>

				<div class="row mt-5">
					<div class="col-12">
						<div class="critical-thinker">
						</div>
					</div>
				</div>

			</div>
			<div class="col-4">
    		</div>
		</div>

	</div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script>

    	function submit(){

    		$(document).on('click', '.submit-data', function(e) {

    			//something missing from here
                e.preventDefault();

    			var postData = $('#testForm').serialize();
                console.log(postData);
				$.ajax({
			        url: "server.php",
			        beforeSend: function () {
			            
			        },
			        type: "post",
			        timeout: 7000,
			        data: postData,

			        success: function(data) {

			            var response = JSON.parse(data);

			            if(response.error === false){

			            	$('.critical-thinker').text("The winner is: "+response.result);
			            	
			            }else{

			            	$('.critical-thinker').text(response.error);
                            $('.critical-thinker').addClass('text-danger');
			            }

			        },
			        error: function () {
			            console.log("There is an error");
			        }
			    });			
			});
        }

  		$(document).ready(function() {

  			submit();

  		});

  	</script>

  </body>
</html>



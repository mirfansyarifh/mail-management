<html>
	<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="<?php echo base_url('assets/upload/konfigurasi/'.$konfigurasi->icon)?> " />
        <title><?php echo $title ?></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <meta name="csrf-param" content="_csrf-frontend">
        <meta name="csrf-token" content="weDjSL7qwKa0t6xOZHxwLw0wikCtLoxah1o88I0QIcislqI81N21lvjV6n0rGhJqbHHGFZtF7yvsA2q_1WkSiw==">
        <link href="<?php base_url() ?>assets/frontend/index/ca0f706a/css/bootstrap.css" rel="stylesheet">
        <link href="<?php base_url() ?>assets/frontend/index/Article-List.css" rel="stylesheet">
        <link href="<?php base_url() ?>assets/frontend/index/fonts/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
        <div class="article-list">
            <nav id="navbar" class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <a id="brand" class="navbar-brand" href="#">
                                <img id="img-brand" class="img-responsive" alt=""
                                    src="<?php echo base_url('assets/upload/konfigurasi/'.$konfigurasi->logo)?> "></img>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="wrapper">
                <div class="container">
                    <div class="intro">
                    <br><br>
                    <img class="img-responsive" style="margin-left: auto; margin-right: auto; width: 30%;"
                                    src="<?php echo base_url('assets/upload/konfigurasi/'.$konfigurasi->logo)?> "></img>
                        <h1 class="text-center"><?php echo $konfigurasi->namaweb; ?></h1>
                        <br>
                        <input name="search_text" id="search_text" class="search__input" type="text" placeholder="Search">
                    </div>
                    <div class="container">
                        <div id="result"></div>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>


<script>
$(document).ready(function(){

	load_data();

	function load_data(query)
	{
		$.ajax({
			url:"<?php echo base_url(); ?>dashboard/fetch",
			method:"POST",
			data:{query:query},
			success:function(data){
				$('#result').html(data);
			}
		})
	}

	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
	});
});
</script>
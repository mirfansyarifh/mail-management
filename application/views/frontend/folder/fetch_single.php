<?php 
if(isset($_GET["id"]))
		{
			$query = "SELECT * FROM file WHERE file_id = '".$_GET["id"]."'";

			$statement = $connect->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll();
			$output = '<div class="row">';
			foreach($result as $row)
			{
			$output .= '
			<div class="col-md-3">
			<br />
			'.$images.'
			</div>
			<div class="col-md-9">
			<br />
			<p><label>Name :&nbsp;</label>'.$row["file_name"].'</p>
			<p><label>Address :&nbsp;</label>'.$row["file_code"].'</p>
			</div>
			</div><br />
			';
			}
			echo $output;
        }
        ?>
<?php
if($_GET['q']!==''){
    $con = mysqli_connect("localhost","root","","search");
}
    


?>
<html>
<head>
	<title>Search Bar</title>
	<link rel="stylesheet" href="search.css"/>
	<script type="text/javascript">
		function active(){
			var searchBar=document.getElementById('searchBar');

            if(searchBar.value =='Search...'){
            	searchBar.value=''
            	searchBar.placeholder='Search...'

            }
		}
		function inactive(){
			var searchBar=document.getElementById('searchBar');

            if(searchBar.value ==''){
            	searchBar.value='Search...'
            	searchBar.placeholder=''

            }
		}
	</script>
</head>
<body>
	<form action="search.php" method="GET" id="searchForm">
		<input type="text" name="q" id="searchBox" placeholder="" value="Search..." maxlength="25" autocomplete="off" onmousedown="active();" onblur="inactive();"/><input type="submit" id="searchBtn" value="Go!"/> 
	</form>
	<?php
	     $query=mysqli_query("SELECT * FROM search-bar" WHERE title LIKE '$q.' OR description LIKE '$q.');
	     $num_rows=mysqli_num_rows($query);
	     
	     while($row =mysqli_fetch_assoc($query)){
	     	$id=$row['id'];
	     	$title=$row['title'];
	     	$desc=$row['description'];

	     	echo $id '<h3>'. $title . '</h3><p>' .$desc. '</p><br/>';
	     }


	?>
</body>
</html>






<?php
    include_once 'header.php';
?>
        
                <div id="container">
                    <div id="main">
                    	<?php
                    		if(isset($_SESSION['u_id'])){
                    			echo "hello you are logged in";
                    		}

                    	?>
                        Content stuff
                        <img src="Images/Untitled.ico" alt="Logo">
                    </div>
                </div>
  
<?php
    include_once 'footer.php';
?>
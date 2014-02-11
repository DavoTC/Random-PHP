<!DOCTYPE html>
<html>
    <head>
		<title>A loop of your own</title>
        <link type='text/css' rel='stylesheet' href='style.css'/>
	</head>
	<body>
    <?php
	$contador=0;
	while($contador<3)
	{
	    $estado=rand(0,1);
	    if($estado)
	    {
	        echo "<div class=\"coin\">SI</div>";
	        $contador=0;
	    }
	    else
	    {
	        echo "<div class=\"coin\">NO</div>";
	        $contador+=1;
	    }
	}
    
    ?>
    </body>
</html>

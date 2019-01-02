<?php
		session_start();
	?>
<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<head>
	
	<title></title>
</head>
<body>
	<?php
		$array = array();
		$nbr_c = $_SESSION["nbr_c"];
		$nbr_p = $_SESSION["nbr_p"];
		for($i=1;$i<=$nbr_p;$i++)
		{
			$somme_pond = 0;
			for($j=1;$j<=$nbr_c;$j++)
		{
			$somme_pond+=$_POST["cr".$i."_pj".$j]*$_POST["cr".$j];
		}
		echo "somme pond : ".$i." = ".$somme_pond."\n";
		array_push($array,$somme_pond);
		}
?>
<canvas id="bar-chart" width="800" height="200"></canvas>
</body>
<script type="text/javascript">
	
	var chart = new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: [
      <?php 
      for($i=1;$i<=$nbr_p;$i++)
		{
			echo "'Projet ".$i."'";
			if($i!=$nbr_p)
				echo ",";
		}?>
	],
      datasets: [
        {
          label: "Somme Pondérée",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [
          <?php
          	for ($i = 0; $i < count($array); $i++) {
		    echo "'".$array[$i]."'";
		    if($i<count($array)-1)
		    	echo ",";
}
          ?>

          ]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Charte Des Sommes Pondérées'
      }
    }
});

		
</script>
</html>


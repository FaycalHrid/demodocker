<?php
		session_start();
	?>
<html>
<form method="post" action="calculer.php">
	
<table>
	<?php
		$nbr_c = $_POST["nbr_crtrs"];
		$nbr_p = $_POST["nbr_prjts"];
		$_SESSION["nbr_c"] = $nbr_c;
		$_SESSION["nbr_p"] = $nbr_p;
		echo "<tr>";
		for($i=1;$i<=$nbr_c;$i++)
		{
			echo "<td>Critere".$i."</td>";
		}
		echo "</tr>";
		echo "<tr>";
		for($i=1;$i<=$nbr_c;$i++)
		{
			echo "<td><input type='text' name='cr".$i."'/></td>";
		}
		echo "</tr>";
	?>
	
		
</table>
<table>
	<?php
		for($i=1;$i<=$nbr_p;$i++)
		{
			echo "<tr>";
			echo "<td>Projet ".$i."</td>";
			for($j=1;$j<=$nbr_c;$j++)
		{
			echo "<td><input type='text' name='cr".$i."_pj".$j."'/></td>";
		}
			echo "</tr><br>";
		}
	?>
</table>
<input type="submit" value ="calculer"/>
</form>

</html>	
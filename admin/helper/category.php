<?php
require_once('../includes/control.php');
			$r = '<option value="">-Category-</option>';
			$q = "select * from categories where status = 'Y' and brand_id=".$_POST['brand'];
			$rec = mysql_query($q);
			
			while($res = mysql_fetch_assoc($rec))
			{
						
				$r .= '<option value="'.$res['id'].'">'.$res['category_name'].'</option>';	
			}
			
			echo $r;
			die;	
?>
<?PHP

function ft_split($str)
{
	$tab = array_filter(explode(" ", $str));
	sort($tab);
	return ($tab);
	
}
?>


<ul>
<?php

foreach ($navItems as $item) {
	echo "<li><a href=\"$item[slug]\"></a>$item[title]</li>";
}


?>

</ul>
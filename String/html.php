<?php

echo "My String is ".$str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;<br>';

echo html_entity_decode($str);

echo "<br>====================<br>";

echo $str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str);
echo "<br>====================<br>";

echo $str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
echo "<br><b>Bold</b><br>";
echo htmlspecialchars_decode($str);

echo "<br>====================<br>";



$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr);
echo "<br>====================<br>";

?>
&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;
<a href="#">Click Here</a>

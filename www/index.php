
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="http://<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<!-- R-Forge Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="http://r-forge.r-project.org/"><img src="http://<?php echo $themeroot; ?>/imagesrf/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>

<!-- end of project description -->

<p>
kOO
===

R package: kOO project

- start of the project 24/05/2012 -

The R package to be built aims at implementing what I did in a few scripts 
for the preparation of the papers I published in CaGEO and TGIS (see below).
Basically this is related to the computation of the distribution of k co-occurrences of spatial events 
(generalising the contiguity distributions - 2 co-occurrences at distance 0) to derive 
spatial clustering statistics (mainly using the Shannon entropy, then called the k-spatial entropy) 
and methods linked to this: SOOk, SelSOOk (see caGEO paper) and scankOO (see TGIS).
Another method (CAkOO) performing a k-Correspondence Analysis (i.e. on a multiway table with k entries) on 
the contingencies of co-occurrenceshas been already "published in my JSS paper about another R package: PTAk.

- At the moment the basic scripts I have are based on points and use the R package spatstat, but I would like also 
to extend to any geometry type.

Interested to collaborate on this?
===

Some details in: 
===

Leibovici, D.G. Bastin, L. Anand, S. Hobona, G. and Jackson, M (2011) "Spatially Clustered Associations in Health 
            related geospatial data". Transactions in GIS, 15(3): 347-364 (June-July 2011)
            
Leibovici D.G. Bastin L,. and Jackson M. (2011) " Higher-Order Co-occurrences for Exploratory Point Pattern Analysis 
          and Decision Tree Clustering on Spatial Data." Computers & Geosciences: 37(3): 382-389 
          
Leibovici, D.G. (2010) "Spatio-temporal Multiway Decomposition using Principal Tensor Analysis on k-modes: the 
          R package PTAk." Journal of Statistical Software, 34(10), 1-34
 </p>

<p> The <strong>project summary page</strong> you can find <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>.</p>

</body>
</html>

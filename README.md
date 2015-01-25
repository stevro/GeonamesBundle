## 1. Installation:

## 2. Usage

/* @var $search \Geonames\Geonames */
$geonames = $this-get('stev.geonames')-getGeonames();
	$result = $geonames-findNearbyPostalCodes(array(
	'postalcode' = 712122
));
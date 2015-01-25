## 1. Installation:
<pre><code>
"stev/geonames-bundle": "0.1.*@dev"
</code></pre>
## 2. Usage
<pre><code>
/* @var $geonames \Geonames\Geonames */
$geonames = $this->get('stev.geonames')->getGeonames();
	$result = $geonames->findNearbyPostalCodes(array(
	'postalcode' = 712122
));
</code></pre>

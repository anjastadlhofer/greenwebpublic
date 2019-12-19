 <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="explore">
      <div class="w-100">
        <h2 class="mb-5">Explore</h2>
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            
            <h3 class="mb-0">Ein Websitenaufruf, so viele Server ... </h3>
            <div class="subheading mb-3"></div>
            <p>
                <div id="lb" >
                  <div id="lb-title">
				  Beim Besuch einer einzigen Website werden von vielen anderen Servern auch Daten geladen. <br>
                      Hier kannst du sehen wie viele Server bei dem Aufruf involviert sind und woher die Daten kommen.



                  </div>
				  <div id="lb-text">
				   <br>
				   <button type="button" class="buttonstart" id="btn-wiki" onClick="map_wikipedia()"> Einmal nachlesen auf Wikipedia (www.wikipedia.org)  </button>
				   
				   <button type="button" class="buttonstart" id="btn-amazon" onClick="map_amazon()"> Let's shop on Amazon (www.amazon.de) </button> 
				   
				   <button type="button" class="buttonstart" id="btn-krone" onClick="map_krone()"> Was gibt es neues? (www.krone.at)  </button> 
				   

				   <div id="lb-text-map" style="display:none;">  </div>

				   <p>

                  </div>
				  <div id="chartdiv" >  </div>
				  
				  
				  <!-- Styles hier die größe der Karte eintragen-->
<style>
#chartdiv { 
  width: 150%;
  height: 400px;
}

.buttonstart{
	display:inline-block;
	margin:20px;
	text-decoration:none;
	font-family:Arial;
	font-size:16px;
	border:2px solid #5BBB2B;
	border-bottom:1px solid #5BBB2B;
	border-right:1px solid #5BBB2B;
	border-radius:15px 5px;
	color:#5BBB2B;
	background-color:#C0E9B5;
	padding:5px 10px;
}
.buttonstart:hover{
	border-color:#4A9824;
	color:#4A9824;
	border-radius:5px 15px;
}
button:focus
{outline:0 !important;}

</style>
<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/maps.js"></script>
<script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/dataviz.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
<!-- Chart code -->


<script>
//---------------- START MAP MIT WIKIPEDIA, insgesamt 3
function map_wikipedia() {
am4core.ready(function() {

var x = document.getElementById("lb-text-map");
x.style.display = "block";
x.innerHTML = "Bei einem Aufruf eines Wikipediaartikel werden von drei Server Daten empfangen. Hier sieht man wo die sich befinden:";

// Themes begin
am4core.useTheme(am4themes_dataviz);
am4core.useTheme(am4themes_animated);
// Themes end

// Define marker path
var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";

// Create map instance
var chart = am4core.create("chartdiv", am4maps.MapChart);
var interfaceColors = new am4core.InterfaceColorSet();

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Mercator();

// Add zoom control
chart.zoomControl = new am4maps.ZoomControl();

// Set initial zoom
chart.homeZoomLevel = 8;
chart.homeGeoPoint = {
  latitude: 51,
  longitude: 5
};

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
polygonSeries.exclude = ["AQ"];
polygonSeries.useGeodata = true;
polygonSeries.mapPolygons.template.nonScalingStroke = true;

// Add images
var imageSeries = chart.series.push(new am4maps.MapImageSeries());
var imageTemplate = imageSeries.mapImages.template;
imageTemplate.tooltipText = "{title}";
imageTemplate.nonScaling = true;

var marker = imageTemplate.createChild(am4core.Sprite);
marker.path = targetSVG;
marker.horizontalCenter = "middle";
marker.verticalCenter = "middle";
marker.scale = 0.7;
marker.fill = interfaceColors.getFor("alternativeBackground");

imageTemplate.propertyFields.latitude = "latitude";
imageTemplate.propertyFields.longitude = "longitude";
imageSeries.data = [ {
  "id": "fh_joanneum",
  "svgPath": targetSVG,
  "title": "FH Joanneum",
  "latitude": 47.069,
  "longitude": 15.406,
  "scale": 1
}, { //erster Punkt NL Wiki
  "id": "91.198.174.192",
  "svgPath": targetSVG,
  "title": "de.wikipedia.org, Amsterdam",
  "latitude": 52.382,
  "longitude": 4.799,
  "scale": 0.5
}, { //zweiter Punkt NL Wiki
  "id": "91.198.174.208",
  "svgPath": targetSVG,
  "title": "upload.wikimedia.org, Amsterdam",
  "latitude": 52.182,
  "longitude": 4.999,
  "scale": 0.5
}, { //dritter Punkt NL Wiki Startseite   insgesamt 3 server
  "id": "91.198.174.208",
  "svgPath": targetSVG,
  "title": "meta.wikimedia.org",
  "latitude": 52.382,
  "longitude": 5.199,
  "scale": 0.5
}];

// Add lines
var lineSeries = chart.series.push(new am4maps.MapLineSeries());
lineSeries.dataFields.multiGeoLine = "multiGeoLine";

var lineTemplate = lineSeries.mapLines.template;
lineTemplate.nonScalingStroke = true;
lineTemplate.strokeWidth = 2.5;
lineTemplate.arrow.nonScaling = true;
lineTemplate.arrow.width = 6;
lineTemplate.arrow.height = 8;
lineTemplate.stroke = interfaceColors.getFor("alternativeBackground");
lineTemplate.fill = interfaceColors.getFor("alternativeBackground");
lineTemplate.line.strokeOpacity = 0.4;

lineSeries.data = [{
  "multiGeoLine": [
    [
      { "latitude": 52.382, "longitude": 5.199 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude": 52.382, "longitude": 4.799 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude": 52.182, "longitude": 4.999 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
}];

})}; // end am4core.ready()		
//---------------- ENDE MAP MIT WIKIPEDIA
//---------------- START MAP MIT AMAZONE insgesamt 14
function map_amazon() {
am4core.ready(function() {

var x = document.getElementById("lb-text-map");
x.style.display = "block";
x.innerHTML = "Beim Shoppen auf Amazon werden von 14 Server Daten empfangen,. Hier sieht man wo die sich befinden:";

// Themes begin
am4core.useTheme(am4themes_dataviz);
am4core.useTheme(am4themes_animated);
// Themes end

// Define marker path
var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";

// Create map instance
var chart = am4core.create("chartdiv", am4maps.MapChart);
var interfaceColors = new am4core.InterfaceColorSet();

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Mercator();

// Add zoom control
chart.zoomControl = new am4maps.ZoomControl();

// Set initial zoom
chart.homeZoomLevel = 8;
chart.homeGeoPoint = {
  latitude: 51,
  longitude: 5
};

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
polygonSeries.exclude = ["AQ"];
polygonSeries.useGeodata = true;
polygonSeries.mapPolygons.template.nonScalingStroke = true;

// Add images
var imageSeries = chart.series.push(new am4maps.MapImageSeries());
var imageTemplate = imageSeries.mapImages.template;
imageTemplate.tooltipText = "{title}";
imageTemplate.nonScaling = true;

var marker = imageTemplate.createChild(am4core.Sprite);
marker.path = targetSVG;
marker.horizontalCenter = "middle";
marker.verticalCenter = "middle";
marker.scale = 0.7;
marker.fill = interfaceColors.getFor("alternativeBackground");

imageTemplate.propertyFields.latitude = "latitude";
imageTemplate.propertyFields.longitude = "longitude";
imageSeries.data = [ {
  "id": "fh_joanneum",
  "svgPath": targetSVG,
  "title": "FH Joanneum",
  "latitude": 47.069,
  "longitude": 15.406,
  "scale": 1
}, { //usa 
  "id": "143.204.96.127",
  "svgPath": targetSVG,
  "title": "images-na.ssl-images-amazon.com, US",
  "latitude": 39.735,
  "longitude": -75.668,
  "scale": 0.5
} , { //usa 
  "id": "13.224.199.33",
  "svgPath": targetSVG,
  "title": "images-eu.ssl-images-amazon.com, US",
  "latitude": 41.127,
  "longitude": -73.441,
  "scale": 0.5
} , { //usa 
  "id": "13.35.250.160",
  "svgPath": targetSVG,
  "title": "m.media-amazon.com, US",
  "latitude": 47.634,
  "longitude": -122.342,
  "scale": 0.5
} , { //Irland Dublin 
  "id": "52.95.122.126",
  "svgPath": targetSVG,
  "title": "assoc-eu.associates-amazon.com, IRL",
  "latitude": 53.338,
  "longitude":  -6.259,
  "scale": 0.5
}, { //Frankfurt DEU
  "id": "52.59.13.16",
  "svgPath": targetSVG,
  "title": "x.bidswitch.net, DEU",
  "latitude": 50.116,
  "longitude":  8.683,
  "scale": 0.5
}, { //Frankfurt DEU 2
  "id": "35.157.249.39",
  "svgPath": targetSVG,
  "title": "pixel.advertising.com, DEU",
  "latitude": 50.416,
  "longitude":  8.683,
  "scale": 0.5
}, { //Niederlande Amsterdam
  "id": "185.94.180.125",
  "svgPath": targetSVG,
  "title": "sync.search.spotxchange.com, NL",
  "latitude": 52.382,
  "longitude":  4.899,
  "scale": 0.5
}, { //Dänemark
  "id": "37.157.6.253",
  "svgPath": targetSVG,
  "title": "c1.adform.net, DK",
  "latitude": 55.712,
  "longitude":  12.056,
  "scale": 0.5
}, { //Großbritannien 
  "id": "185.64.190.78",
  "svgPath": targetSVG,
  "title": "image6.pubmatic.com, GB",
  "latitude": 51.496,
  "longitude":  -0.122,
  "scale": 0.5
}, { //Irland Dublin 2
  "id": "52.50.81.152",
  "svgPath": targetSVG,
  "title": "dpm.demdex.net, IRL",
  "latitude": 53.038,
  "longitude":  -6.259,
  "scale": 0.5
}, { // Frankfurt DEU 3
  "id": "185.59.220.29",
  "svgPath": targetSVG,
  "title": " load77.exelator.com, DEU",
  "latitude":50.253,
  "longitude":   8.711,
  "scale": 0.5
}, { // Irland Dublin 3
  "id": "52.17.139.14",
  "svgPath": targetSVG,
  "title": " beacon.krxd.net , IRL",
  "latitude": 53.338,
  "longitude":  -6.000,
  "scale": 0.5
}, { // USA
  "id": "216.58.207.35",
  "svgPath": targetSVG,
  "title": " www.google.at, USA",
  "latitude": 37.419,
  "longitude":   -122.057,
  "scale": 0.5
}, { // USA Startseite   insgesamt 14
  "id": "13.225.77.75",
  "svgPath": targetSVG,
  "title": "www.amazon.de",
  "latitude":  41.127,
  "longitude":    -73.141,
  "scale": 0.5
}];

// Add lines
var lineSeries = chart.series.push(new am4maps.MapLineSeries());
lineSeries.dataFields.multiGeoLine = "multiGeoLine";

var lineTemplate = lineSeries.mapLines.template;
lineTemplate.nonScalingStroke = true;
lineTemplate.strokeWidth = 2.5;
lineTemplate.arrow.nonScaling = true;
lineTemplate.arrow.width = 6;
lineTemplate.arrow.height = 8;
lineTemplate.stroke = interfaceColors.getFor("alternativeBackground");
lineTemplate.fill = interfaceColors.getFor("alternativeBackground");
lineTemplate.line.strokeOpacity = 0.4;

lineSeries.data = [{
  "multiGeoLine": [
    [
	  { "latitude": 39.735, "longitude":-75.668 },
      { "latitude": 47.069, "longitude": 15.406 } 
    ]
  ]
},{
  "multiGeoLine": [
    [
	  { "latitude": 41.127, "longitude":-73.441 },
      { "latitude": 47.069, "longitude": 15.406 } 
    ]
  ]
},{
  "multiGeoLine": [
    [
	  { "latitude": 47.634, "longitude":-122.342 }, 
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
	  { "latitude": 53.338, "longitude":-6.259 }, 
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
	  { "latitude": 50.116, "longitude":8.683 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
	  { "latitude": 50.416, "longitude": 8.683 },
      { "latitude": 47.069, "longitude": 15.406 }

    ]
  ]
},{
  "multiGeoLine": [
    [
	  { "latitude":  52.382, "longitude":  4.899 },
      { "latitude": 47.069, "longitude": 15.406 }

    ]
  ]
},{
  "multiGeoLine": [
    [
	  { "latitude": 55.712, "longitude": 12.056 },
      { "latitude": 47.069, "longitude": 15.406 }

	  

    ]
  ]
},{
  "multiGeoLine": [
    [
	  { "latitude": 51.496, "longitude": -0.122 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
	  { "latitude": 53.038, "longitude": -6.259 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
	  { "latitude": 50.253, "longitude": 8.711 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
	  { "latitude": 53.338, "longitude": -6.000 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
	  { "latitude": 37.419, "longitude": -122.057 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
	  { "latitude":  41.127, "longitude": -73.141 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
}];

})}; // end am4core.ready()		
//---------------- ENDE MAP MIT AMAZONE


//---------------- START MAP MIT KRONE, insgesamt 42
function map_krone() {
am4core.ready(function() {

var x = document.getElementById("lb-text-map");
x.style.display = "block";
x.innerHTML = "Beim Aufruf der Startseite von der Krone von 42 verschiedenen Server Daten empfangen. Hier sieht man wo die sich befinden:";

// Themes begin
am4core.useTheme(am4themes_dataviz);
am4core.useTheme(am4themes_animated);
// Themes end

// Define marker path
var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";

// Create map instance
var chart = am4core.create("chartdiv", am4maps.MapChart);
var interfaceColors = new am4core.InterfaceColorSet();

// Set map definition
chart.geodata = am4geodata_worldLow;

// Set projection
chart.projection = new am4maps.projections.Mercator();

// Add zoom control
chart.zoomControl = new am4maps.ZoomControl();

// Set initial zoom
chart.homeZoomLevel = 8;
chart.homeGeoPoint = {
  latitude: 51,
  longitude: 5
};

// Create map polygon series
var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
polygonSeries.exclude = ["AQ"];
polygonSeries.useGeodata = true;
polygonSeries.mapPolygons.template.nonScalingStroke = true;

// Add images
var imageSeries = chart.series.push(new am4maps.MapImageSeries());
var imageTemplate = imageSeries.mapImages.template;
imageTemplate.tooltipText = "{title}";
imageTemplate.nonScaling = true;

var marker = imageTemplate.createChild(am4core.Sprite);
marker.path = targetSVG;
marker.horizontalCenter = "middle";
marker.verticalCenter = "middle";
marker.scale = 0.7;
marker.fill = interfaceColors.getFor("alternativeBackground");

imageTemplate.propertyFields.latitude = "latitude";
imageTemplate.propertyFields.longitude = "longitude";
imageSeries.data = [ {
  "id": "fh_joanneum",
  "svgPath": targetSVG,
  "title": "FH Joanneum",
  "latitude": 47.069,
  "longitude": 15.406,
  "scale": 1
}, { // Deutschland 1
  "id": "91.215.103.50",
  "svgPath": targetSVG,
  "title": "script-at.iocnt.net, DEU",
  "latitude": 51.299,
  "longitude": 9.491,
  "scale": 0.5
}, { // usa 1
  "id": "216.58.207.42",
  "svgPath": targetSVG,
  "title": "fonts.googleapis.com, USA",
  "latitude": 37.419,
  "longitude": -122.057,
  "scale": 0.5
}, { // Niederlande 1
  "id": "23.14.94.47",
  "svgPath": targetSVG,
  "title": "imgl.krone.at, NL",
  "latitude": 52.349,
  "longitude":  4.9166,
  "scale": 0.5
}, { // Deutschland 2
  "id": "91.215.103.50",
  "svgPath": targetSVG,
  "title": "at.iocnt.net, DEU",
  "latitude": 51.299,
  "longitude":  9.251,
  "scale": 0.5
}, { // Deutschland
  "id": "193.46.63.75",
  "svgPath": targetSVG,
  "title": "irqs.iocnt.net, DEU",
  "latitude": 50.743,
  "longitude":  7.059,
  "scale": 0.5
}, { // Österreich
  "id": "156.58.253.15",
  "svgPath": targetSVG,
  "title": " atlas1.krone.at, AUT",
  "latitude": 48.299,
  "longitude":  16.350,
  "scale": 0.5
}, { // usa 2
  "id": "156.58.253.15",
  "svgPath": targetSVG,
  "title": "www.googletagmanager.com, USA",
  "latitude":37.419,
  "longitude":  -122.357,
  "scale": 0.5
}, { // usa 3
  "id": "172.217.21.195",
  "svgPath": targetSVG,
  "title": " fonts.gstatic.com , USA",
  "latitude":37.119,
  "longitude":  -122.057,
  "scale": 0.5
}, { // Niederlande 2
  "id": "184.30.223.226",
  "svgPath": targetSVG,
  "title": "  s.go-mpulse.net  , NL",
  "latitude": 52.149,
  "longitude":   4.916,
  "scale": 0.5
}, { // Niederlande 3
  "id": "23.14.94.47",
  "svgPath": targetSVG,
  "title": "www.aka.willi.kmm.at, NL",
  "latitude": 52.349,
  "longitude":   4.716,
  "scale": 0.5
}, { // Irland 1
  "id": "52.51.226.67 ",
  "svgPath": targetSVG,
  "title": "api.willi.krone.at, IRL",
  "latitude": 53.338,
  "longitude":  -6.259,
  "scale": 0.5
}, { // schweiz
  "id": "2.16.181.32",
  "svgPath": targetSVG,
  "title": "www.willi.aka.krone.at, CH",
  "latitude": 47,
  "longitude":  8,
  "scale": 0.5
}, { // usa 4
  "id": "172.217.22.46",
  "svgPath": targetSVG,
  "title": "www.google-analytics.com, USA",
  "latitude":  37.269,
  "longitude":  -122.057,
  "scale": 0.5
}, { // usa 5
  "id": "172.217.18.174",
  "svgPath": targetSVG,
  "title": "ampcid.google.com, USA",
  "latitude":  37.269,
  "longitude":  -122.257,
  "scale": 0.5
}, { // usa 6
  "id": "216.58.205.238",
  "svgPath": targetSVG,
  "title": "ampcid.google.at, USA",
  "latitude":  37.419,
  "longitude":  -122.207,
  "scale": 0.5
}, { // schweiz 2
  "id": "2.16.186.243",
  "svgPath": targetSVG,
  "title": " api.krone.at , CH",
  "latitude":  47.2,
  "longitude":  8,
  "scale": 0.5
}, { // usa neu
  "id": "173.194.76.156",
  "svgPath": targetSVG,
  "title": " stats.g.doubleclick.net , USA",
  "latitude":  43.577,
  "longitude":  -89.482,
  "scale": 0.5
}, { // usa 7 
  "id": "172.217.16.196",
  "svgPath": targetSVG,
  "title": " www.google.com , USA",
  "latitude":  37.559,
  "longitude":  -122.057,
  "scale": 0.5
}, { // usa 8
  "id": "216.58.205.234",
  "svgPath": targetSVG,
  "title": " imasdk.googleapis.com , USA",
  "latitude":  37.559,
  "longitude":  -122.207,
  "scale": 0.5
}, { // Niederlande 4
  "id": "104.111.214.229",
  "svgPath": targetSVG,
  "title": "c.go-mpulse.net  , NL",
  "latitude":  52.459,
  "longitude":  4.816,
  "scale": 0.5
}, { // usa 9
  "id": "172.217.23.163",
  "svgPath": targetSVG,
  "title": "www.gstatic.com  , USA",
  "latitude": 37.559,
  "longitude":  -122.357,
  "scale": 0.5
}, { // usa 10
  "id": "157.240.20.19",
  "svgPath": targetSVG,
  "title": "connect.facebook.net  , USA",
  "latitude": 37.559,
  "longitude":  -121.878,
  "scale": 0.5
}, { // Niederlande 5
  "id": "104.111.214.229",
  "svgPath": targetSVG,
  "title": "684dd304.akstat.io , NL",
  "latitude": 52.259,
  "longitude":   4.816,
  "scale": 0.5
}, { //  usa 11
  "id": "172.217.16.130",
  "svgPath": targetSVG,
  "title": "securepubads.g.doubleclick.net , USA",
  "latitude": 37.419,
  "longitude":   -121.878,
  "scale": 0.5
}, { //  usa ny
  "id": "143.204.90.242",
  "svgPath": targetSVG,
  "title": "c.amazon-adsystem.com , USA",
  "latitude": 39.735,
  "longitude":  -75.668,
  "scale": 0.5
}, { //  usa 12
  "id": "172.217.16.130",
  "svgPath": targetSVG,
  "title": "adservice.google.at , USA",
  "latitude":  37.269,
  "longitude":   -121.878,
  "scale": 0.5
}, { // usa 13
  "id": "172.217.22.66",
  "svgPath": targetSVG,
  "title": "adservice.google.com , USA",
  "latitude":37.119,
  "longitude":   -121.878,
  "scale": 0.5
}, { // usa 14
  "id": "172.217.16.129 ",
  "svgPath": targetSVG,
  "title": "tpc.googlesyndication.com, USA",
  "latitude":36.979,
  "longitude":   -121.878,
  "scale": 0.5
}, { // usa 15
  "id": "172.217.22.34 ",
  "svgPath": targetSVG,
  "title": "www.googletagservices.com, USA",
  "latitude":36.979,
  "longitude":   -122.057,
  "scale": 0.5
}, { // usa 16
  "id": "172.217.22.34 ",
  "svgPath": targetSVG,
  "title": "cdn.ampproject.org, USA",
  "latitude": 37.709,
  "longitude":  -121.878,
  "scale": 0.5
}, { // usa phönix
  "id": "205.185.216.42 ",
  "svgPath": targetSVG,
  "title": "servedby.flashtalking.com, USA",
  "latitude": 33.508,
  "longitude":   -112.071,
  "scale": 0.5
}, { // schweiz 3
  "id": "2.18.232.99 ",
  "svgPath": targetSVG,
  "title": "cdn.flashtalking.com, CH",
  "latitude": 47.1,
  "longitude":   8.1,
  "scale": 0.5
}, { // usa 17
  "id": "172.217.18.98 ",
  "svgPath": targetSVG,
  "title": "pagead2.googlesyndication.com, USA",
  "latitude": 37.709,
  "longitude":  -122.257,
  "scale": 0.5
}, { // schweiz 4
  "id": "2.18.232.99 ",
  "svgPath": targetSVG,
  "title": "stat.flashtalking.com, CH",
  "latitude": 47.1,
  "longitude":   7.9,
  "scale": 0.5
}, { // usa 18
  "id": "157.240.20.19",
  "svgPath": targetSVG,
  "title": "staticxx.facebook.com , USA",
  "latitude": 37.709,
  "longitude":  -122.357,
  "scale": 0.5
}, { // Irland 2
  "id": "52.94.220.16",
  "svgPath": targetSVG,
  "title": "aax-eu.amazon-adsystem.com , IRL",
  "latitude": 53.338,
  "longitude":  -6.059,
  "scale": 0.5
}, { // schweiz 5
  "id": "2.16.106.58",
  "svgPath": targetSVG,
  "title": "lpstt4gbvkgeoxphzp7q-p39uei-631ee0127-clientnsv4-s.akamaihd.net , CH",
  "latitude": 47.2,
  "longitude":   7.8,
  "scale": 0.5
}, { // Irland 3
  "id": "31.13.92.36",
  "svgPath": targetSVG,
  "title": "www.facebook.com , IRL",
  "latitude": 53.538,
  "longitude":  -6.159,
  "scale": 0.5
}, { // schweiz 6
  "id": "2.16.106.58",
  "svgPath": targetSVG,
  "title": "a.teads.tv , CH",
  "latitude": 46.9,
  "longitude":   7.8,
  "scale": 0.5
}, { // Niederlande 6
  "id": "23.210.248.12",
  "svgPath": targetSVG,
  "title": " t.teads.tv , NL",
  "latitude": 52.249,
  "longitude":  4.586,
  "scale": 0.5
}, { // usa 
  "id": "23.11.238.95 ",
  "svgPath": targetSVG,
  "title": " sb.scorecardresearch.com, USA",
  "latitude": 42.362,
  "longitude": -71.084,
  "scale": 0.5
}, { // Niederlande 7 startseite   insgesamt 42 Server
  "id": "2.16.181.32",
  "svgPath": targetSVG,
  "title": "www.krone.at Startseite , NL",
  "latitude": 52.549,
  "longitude":  4.886,
  "scale": 0.5
}];

// Add lines
var lineSeries = chart.series.push(new am4maps.MapLineSeries());
lineSeries.dataFields.multiGeoLine = "multiGeoLine";

var lineTemplate = lineSeries.mapLines.template;
lineTemplate.nonScalingStroke = true;
lineTemplate.strokeWidth = 2.5;
lineTemplate.arrow.nonScaling = true;
lineTemplate.arrow.width = 6;
lineTemplate.arrow.height = 8;
lineTemplate.stroke = interfaceColors.getFor("alternativeBackground");
lineTemplate.fill = interfaceColors.getFor("alternativeBackground");
lineTemplate.line.strokeOpacity = 0.4;

lineSeries.data = [{
  "multiGeoLine": [
    [
      { "latitude": 51.299, "longitude": 9.491 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude": 37.419, "longitude": -122.057 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude": 52.349, "longitude": 4.9166 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude": 51.299, "longitude": 9.251 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":  50.743, "longitude": 7.059 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":  48.299, "longitude":  16.350 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":  37.419, "longitude":  -122.357 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude": 37.119, "longitude":  -122.057 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":  52.149, "longitude":   4.916 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":  52.349, "longitude":   4.716 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":  53.338, "longitude":  -6.259 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude": 47, "longitude":  8 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude": 37.269, "longitude":  -122.057 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":  37.419, "longitude":  -122.207 },
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":  37.269, "longitude":  -122.257},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":  47.2, "longitude":  8},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":  43.577, "longitude":   -89.482},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":  37.559, "longitude":   -122.207},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":  52.459, "longitude":    4.816},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":  37.559, "longitude":-122.357},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude": 37.559, "longitude":-121.878},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude": 52.259, "longitude":4.816},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":37.419, "longitude":-121.878},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":39.735, "longitude":-75.668},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude": 37.269, "longitude":-121.878},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude": 37.119, "longitude":-121.878},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude": 36.979, "longitude":-121.878},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude": 36.979, "longitude":-122.057},
      { "latitude": 47.069, "longitude": 15.406 }


    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":37.709, "longitude":-121.878},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":33.508, "longitude":-112.071},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":47.1, "longitude":8.1},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":37.709, "longitude":-122.257},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":47.1, "longitude": 7.9},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":37.709, "longitude":-122.357},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":53.338, "longitude":-6.059},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":47.2, "longitude":7.8},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":53.538, "longitude":-6.159},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":46.9, "longitude":7.8},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":52.249, "longitude":4.586},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":42.362, "longitude":-71.084},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
},{
  "multiGeoLine": [
    [
      { "latitude":52.549, "longitude":4.886},
      { "latitude": 47.069, "longitude": 15.406 }
    ]
  ]
}];

})}; // end am4core.ready()		
//---------------- ENDE MAP MIT KRONE



</script>

                  </div>


              </div>

              </p>
          </div>
          
        </div>
      </div>
    </section>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Embed Google Map | Generate Responsive Map HTML Code For Free</title>
	<meta name="description" content="Google map generator to generate and embed google map on your website. Just select the options and get the google map code with the click of a button." />
	<meta name="keywords" content="embed google map, google map generator, google maps iframe, google map html, add google map to website, google maps embed code, embed google map iframe, embed google maps in website" />
	<meta name="author" content="embed google maps" />
	<link rel="canonical" href="https://embed-google-maps.com/" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="https://embed-google-maps.com/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://embed-google-maps.com/css/bootstrap-slider.min.css" integrity="sha512-3q8fi8M0VS+X/3n64Ndpp6Bit7oXSiyCnzmlx6IDBLGlY5euFySyJ46RUlqIVs0DPCGOypqP8IRk/EyPvU28mQ==" crossorigin="anonymous" />
	<!-- Custom CSS -->
	<link href="https://embed-google-maps.com/css/custom.min.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css" integrity="sha512-kJ30H6g4NGhWopgdseRb8wTsyllFUYIx3hiUwmGAkgA9B/JbzUBDQVr2VVlWGde6sdBVOG7oU8AL35ORDuMm8g==" crossorigin="anonymous" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
	<script type="text/javascript">
	window.onload = function() {
		const queryString = window.location.search;
		const urlParams = new URLSearchParams(queryString);
		if (urlParams.has('addr')) {
			const addr = urlParams.get('addr');
			document.getElementById("address").value = addr;
			document.getElementById("sAddress").value = addr;
			document.getElementById("dAddress").value = 'restaurant';
			refreshMap('address');
		}
	};
	</script>
	<script type="application/ld+json">
    [{
      "@context": "https://schema.org",
      "@type": "WebSite",
      "url": "https://embed-google-maps.com/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://embed-google-maps.com/?addr={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
	{
      "@context": "http://schema.org",
      "@type": "HowTo",
      "name": "How to Embed Google Map in Website?",
      "description": "Follow the steps below to generate Google map iframe code and embed Google map on your website for free.",
      "image": {
        "@type": "ImageObject",
        "url": "https://embed-google-maps.com/img/embedimage.png",
        "height": "406",
        "width": "305"
      },
      "step": [
        {
          "@type": "HowToStep",
          "name": "Type your address",
          "itemListElement": {
            "@type": "HowToDirection",
            "text": "Go to site, 'embed-google-maps.com' and type in the map location on the address field."
          }
        }, {
          "@type": "HowToStep",
          "name": "Set Map Width & Height",
          "itemListElement": {
            "@type": "HowToDirection",
            "text": "Set the required width and height values for your map using the slider provided."
          }
        }, {
          "@type": "HowToStep",
          "name": "Select Map Type & Zoom Distance",
          "itemListElement": {
            "@type": "HowToDirection",
            "text": "Then select map type from one of the options, 'Roadmap', 'Satellite', 'Satellite with street names', or 'Terrain' with preferred zoom distance."
          }
        }, {
          "@type": "HowToStep",
          "name": "Generate Map Code",
          "itemListElement": {
            "@type": "HowToDirection",
            "text": "Click the button to generate Google map code, which can then be easily copied to your website."
          }
        }, {
          "@type": "HowToStep",
          "name": "Embed Map to Your Website",
          "itemListElement": {
            "@type": "HowToDirection",
            "text": "Finally paste the copied Google map code into the HTML body of your website."
          }
        }
      ]
    },
	{
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "Can You Embed Google Maps into Website?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You can embed Google maps showing your preferred location into your website using the Google maps embed code."
        }
      }, {
        "@type": "Question",
        "name": "Is Google Maps Free to Embed?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, Google maps are free to embed. If you want more control over the map for your business needs, you may have to pay and get the Google maps API."
        }
      }, {
        "@type": "Question",
        "name": "How Do I Embed a Google Map?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "First, generate the map code using our online tool. Then copy-paste the generated Google map embed code into the <body> section of your web page's HTML."
        }
      }, {
        "@type": "Question",
        "name": "How Do I Embed a Responsive Google Map?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "If you are using our Google map code generator, you have the option to generate a responsive map code. With this option enabled, you can embed a responsive Google map on your website."
        }
      }, {
        "@type": "Question",
        "name": "How Do I Embed a Google Map in Bootstrap?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Map codes generated using our website are Bootstrap ready. So you can directly use our map code on any Bootstrap enabled websites."
		}
        }, {
        "@type": "Question",
        "name": "How Can I Add Google Map API to my Website?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"We are not using Google map API to generate the map code. Also, It is not required for you to obtain Maps API to embed the Google map code generated by our tool on your website."
		}
        }]
    }]
    </script>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NGM4LB7M62"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NGM4LB7M62');
</script>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NFMC75P');</script>
<!-- End Google Tag Manager -->
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NFMC75P"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div class="container custom-shadow">
		<div class="row">
			<div class="col-lg-12" style="padding-right:0px;padding-left:0px;">
				<div class="box" id="generate_map">
					<div class="row">
						<div class="col-lg-4">
							<div class="w-100 p-3">
								<div class="card">
									<div class="card-body">
<svg class="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2017 1816"><path d="M831 909.9c37.9 47.4 76.5 107 96.7 143 24.6 46.8 34.8 78.4 53.1 135 10.7 31 20.9 40.4 42.3 40.4 23.4 0 34.1-15.8 42.3-40.4 17.1-53.1 30.3-93.5 51.2-132 80.6-152 212-260 286-408 0 0 48.7-90.4 48.7-217 0-118-48-200-48-200l-572 680z" fill="#34a853"></path><path d="M637 631.9c46.1 105 134 197 194 278l318-377s-44.9 58.8-126 58.8c-90.4 0-164-72-164-163 0-62.6 37.3-106 37.3-106-234 34.8-221 91.5-260 309z" fill="#fbbc04"></path><path d="M1153 19.6c106 34.1 196 106 250 211l-254 303s37.3-43.6 37.3-106c0-92.9-78.4-163-163-163-80.3 0-126 58.1-126 58.1 19.5-44.4 221-288 256-303z" fill="#4285f4"></path><path d="M695 152.9c63.2-75.2 174-153 327-153 73.9 0 130 19.6 130 19.6l-255 303c-17.2-9.33-185-140-202-170z" fill="#1a73e8"></path><path d="M637 631.9s-41.7-82.8-41.7-202c0-113 44.2-212 100-276l202 170-260 308z" fill="#ea4335"></path></svg> <div style="position:absolute;left: 55px;top: 27px;font-weight: 500;font-size: 20px;">Embed Google Map <br>(No API Needed)</div>
										<div id="locationConf">
											<div class="form-group">
												<label class="font-weight-bold" for="address">Type Your Address</label>
												<input type="text" class="form-control" id="address" value="University of Oxford" onkeyup="refreshMap(chosenMapKind)">
											</div>
										</div>
										<div id="directionConf" style="display:none;">
											<div class="form-group">
												<label class="font-weight-bold" for="sAddress">Start Address</label>
												<input type="text" class="form-control" id="sAddress" value="Oxford International Airport" onkeyup="refreshMap(chosenMapKind)">
											</div>
											<div class="form-group">
												<label class="font-weight-bold" for="dAddress">Destination Address</label>
												<input type="text" class="form-control" id="dAddress" value="University of Oxford" onkeyup="refreshMap(chosenMapKind)">
											</div>
										</div>
										<div class="form-group">
											<label class="font-weight-bold" for="map_type">Map Type</label>
											<select id="map_type" class="custom-select" onchange="refreshMap(chosenMapKind)">
												<option value="" selected> Roadmap </option>
												<option value="k"> Satellite </option>
												<option value="h"> Satellite with street names </option>
												<option value="p"> Terrain </option>
											</select>
										</div>
										<div class="form-group">
											<label class="font-weight-bold" for="zoomSlider">Zoom Distance</label>
											<input id="mapZoom" style="width:100%;" data-slider-id='zoomSlider' type="text" data-slider-min="1" data-slider-max="20" data-slider-step="1" data-slider-value="14" onchange="refreshMap(chosenMapKind)" />
											<div id="zoomValue"></div>
										</div>
										<div class="row">
											<div class="col-lg-6">
												<div class="form-group">
													<label class="font-weight-bold" for="widthSlider">Width</label>
													<br />
													<input id="mapWidth" style="width:100%;" data-slider-id='widthSlider' type="text" data-slider-min="1" data-slider-max="2048" data-slider-step="1" data-slider-value="600" onchange="mapCanvas(this.id)" />
													<div class="input-group">
														<input id="widthValue" type="number" class="form-control" value="600" min="1" aria-describedby="addon1" onkeyup="isNumber(event);setSliderVal(this.id);mapCanvas(this.id);">
														<div class="input-group-append"> <span class="input-group-text" id="addon1">px</span> </div>
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="form-group">
													<label class="font-weight-bold" for="heightSlider">Height</label>
													<br />
													<input id="mapHeight" style="width:100%;" data-slider-id='heightSlider' type="text" data-slider-min="1" data-slider-max="2048" data-slider-step="1" data-slider-value="400" onchange="mapCanvas(this.id)" />
													<div class="input-group">
														<input id="heightValue" type="number" class="form-control" value="400" min="1" aria-describedby="addon2" onkeyup="isNumber(event);setSliderVal(this.id);mapCanvas(this.id);">
														<div class="input-group-append"> <span class="input-group-text" id="addon2">px</span> </div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group custom-control custom-switch">
											<input type="checkbox" class="custom-control-input" id="isResponsive">
											<label class="custom-control-label font-weight-bold" for="isResponsive">Make Map Responsive</label>
										</div>
										<button type="button" class="btn btn-lg btn-block btn-success font-weight-bold" onclick="generateCode()" data-toggle="modal" data-target="#codeView" onclick="return gtag_report_conversion('generateCode()')">Generate HTML Code</button>
										<div class="modal fade" id="codeView" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title map-code" id="modalLongTitle">Map Code</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
													</div>
													<div class="modal-body">
														<p class="text-center" style="font-size:14px;">Copy and paste the below code within the <code>&lt;body&gt;</code> of the web page where you would like to embed google map.</p>
														<textarea class="form-control" style="font-family: 'Lucida Console', Courier, monospace; font-size:10px;" id="codeOutput" rows="2" onclick="this.focus();this.select()" readonly></textarea>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-success font-weight-bold" id="copyToClip" onclick="copyToClip()">Copy code to clipboard</button>
														<button type="button" class="btn btn-secondary font-weight-bold" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
			
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-8" style="padding-right:30px;">
							<div class="w-100 p-3 overflow-auto">
																<div id="map-container">
									<iframe class="custom-shadow" id="map-canvas" width="650" height="555" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
<div style="height:0;overflow:hidden;">
  <a href="https://piratebay-proxys.com/">Piratebay</a>
  <a href="https://theproxypiratebay.com/">Pirate Proxy</a>
  <a href="https://embed-google-maps.com/">Embed Google Map</a>
  </div>
								</div>
								<div id="directionNote" style="display:none;padding-top:15px;">
									<p><span class="text-danger font-weight-bold">Note:</span> Adjust <span class="font-weight-bold">Zoom Distance</span> if route is not visible</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
		
			    
			 <h2 style="text-align: justify;">Adding Google Maps to Site</h2>
<p>You can easily add google map to your site with this tool, Just follow the step below to successfully add you business location or google marker address in your html or wordpress website without google api. Its totally free and easy to use</p>
<ul>
    <li>Paste you business name or location in search bar</li>
    <li>Our tool will search and find you the exact location or place</li>
    <li>Verify your location and Click Generate Code button</li>
    <li>Just copy the code in popup and paste in your wordpress or html website.</li>
    <li>Job Done !!! Now your visitors can find your business location.</li>
</ul>
<p style="text-align: justify;"><br></p>
<p style="text-align: center;"><img src="embed-google-map.png" alt="embed google map" width="50%"></p>
<p style="text-align: justify;"><br></p>
<h3 style="text-align: justify;">How to add Google Maps to a website</h3>
<p style="text-align: justify;">There are many apps and software with which you can create maps, but not all have the same capabilities. &nbsp;&quot;Expedition&quot; was developed by Lars and Jens Rasmussen as a mapping software program for C++. Google bought the company in an effort to participate in the development of what would lead to Google Maps. The catalyst for Google&apos;s interest in Expedition was the application&apos;s ability to use AJAX, which allowed users to add pins on the map and &quot;geolocation&quot;. AJAX is responsible both for allowing easy pin placement, as well as the inclusion of traffic analysis and geospatial layers. It wasn&apos;t long before Expedition turned into Google Maps, launching in 2005. Users share their information with Google Maps, making it relevant and up-to-date with a plethora of data that essentially creates its own narrative every day because it is always changing based on new inputs.</p>
<p style="text-align: justify;"><br></p>
<h3 style="text-align: justify;">Google Maps, Earth and Satellite: What&rsquo;s The Difference?</h3>
<p style="text-align: justify;">Google Earth and Maps are both helpful tools for exploring the world, but they serve different purposes. Google maps is great if you need directions somewhere, whereas Google Earth is best if you&apos;re looking to analyze erosion of a desert based on water and wind patterns.</p>
<p style="text-align: justify;"><br></p>
<h3 style="text-align: justify;">Four different ways that Google Maps can be added to your site</h3>
<p style="text-align: justify;">Wikipedia is one of the most recent changes to Google Maps. It had been removed from maps because of low use, but replaced with &apos;Places&apos;, user-review driven information snippets. Wikipedia has remained on in Google Earth, which makes sense because it was created to plot and analyze the earth. Rarely have I looked up directions for a building, and needed to know the date it was build and historical significance. There are people who would like that information, and that is why there are different apps with those features, like Google Earth.</p>
<p style="text-align: justify;"><br></p>
<h3 style="text-align: justify;">Learn about the driving directions and bike trails available with Google Maps</h3>
<p style="text-align: justify;">Maps has been great for everyone and is a global navigation system. We use them to get quickly to work and pick up groceries. Maps can also be used to locate a paved bike trail near you to learn how to ride a bike without worry of getting hit by a car. Maps has an entire community of people that uses it for social media and connections, not just directions.</p>
<p style="text-align: justify;"><br></p>
<h3 style="text-align: justify;">Mapping and Google Maps APIs</h3>
<p style="text-align: justify;">One application comes with a C++ back end, which provides directions for most of the world. This lets you add APIs so you can design programs around Maps, like draw on the map or designate locations. You can also geocode an address to convert it to longitude and latitude coordinates.</p>
<p style="text-align: justify;"><br></p>
<h3 style="text-align: justify;">Learn how to embed Google Maps on your website</h3>
<p style="text-align: justify;">Route planning is made on algorithms, with many other layers of influence. The most important thing to consider when using an algorithm is whether a particular AI routing system offers customization, or chooses the roads for you. The different layers of influence are the reason why one route may take longer than another, such as traffic congestion and accidents.</p>
<p style="text-align: justify;">A good AI algorithm needs to be customized with other math and physics equations. When you move your finger on a map, the white squares may appear because that AI is using several equations at once, including the one to plot your optimal route.</p>
<p style="text-align: justify;">Google uses crowd sourcing to include reviews of locations within the reviews system. It also offers prizes in exchange for editing and adding reviews. Previously, Wikipedia was the place people went when they needed to edit information about locations.</p>
<p style="text-align: justify;">Public transit route planning came out in December 2005 in Google Labs, which is the test environment for apps that might become a part of the popular &apos;priority&apos; apps. The first system was mapped out in Portland, Oregon but now has maps with hundreds of cities and transit systems included. It can tell you what time will be best to travel by car or public transportation allowing you to make better time decisions. In 2007, it was integrated into Google Maps and now has updates provided in real-time. This is possible because of the good work done by normal people who want Google Maps to be user-friendly and partner with new ideas or transit companies.</p>
<p style="text-align: justify;"><br></p>
<h3 style="text-align: justify;">Autocomplete Address Magic, an Add-on for Google Maps</h3>
<p style="text-align: justify;">One of the best features of Maps is that it contains a library API and can provide informational snippets about locations and things of note on your website. Aerial views are also available as well as images used with Google Earth. With the acquisition of Waze in 2013, Points was redesigned to have even more information.</p>
<p style="text-align: justify;">One of the most interesting APIs is AutoComplete, which has been around since 2008. Tied directly to Google Places, within 12 keystrokes you are able to find the address that you&apos;re looking for, which is just handy tool to use. You don&apos;t think about how much faster and more accurate typing on that little screen is when 30+ keystrokes are not needed. The auto complete service is personalized to the user and relies on a number of layers of information provided by all devices logged into your personal Google account.</p>
<p><br></p>
			    
				<div class="box">    
				<div class="col-lg-12">
			<h2 id="faq">FAQs - Embed Google Map</h2>
					<h3>Do I need API?</h3>
					<p>No, You don't need Google Maps API to embed Google map on your website. EmbedMyMap works without API. </p>
					<h3>How I Can Get Google Maps Embed Code?</h3>
					<p>You can get Google Maps Embed code by filling your address in Enter your Address field. After that click 'Generate Code' button.</p>
					<h3>How Do I Make Google Map Responsive?</h3>
					<p>You can make Google Maps Responsive by turning on "Make Map Responsive" button. After that your Google Map Embed code will be responsive. </p>
							<hr>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="copyright">2022 &copy; <a href="https://embed-google-maps.com/">Embed Google Maps</a></div>
				</div>
			</div>
		</div>
	</footer>
	<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha512-8qmis31OQi6hIRgvkht0s6mCOittjMa9GMqtK9hes5iEQBQE/Ca6yGE5FsW36vyipGoWQswBj/QBm2JR086Rkw==" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js" integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA==" crossorigin="anonymous"></script>
	<script src="https://embed-google-maps.com/js/custom.min.js"></script>

</body>

</html>
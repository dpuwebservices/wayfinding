	$(document).ready(function(e) {
	    $('img[usemap]').rwdImageMaps();
	});

//first floor
    var $scholarsLabText      = "<p><strong>Scholar's Lab</strong><p><strong>About:</strong><br>The Scholar's Lab is available for use as an open, informal or formal meeting and workshop space by the following members of the DePaul Community.<br><br><strong>Equipment:</strong><br><strong>Media:scape Collaboration Table</strong><br>The Scholar's Lab is equipped with 6 media:scape tables designed to facilitate collaborative research and learning. \n\ Each media:scape collaboration table in the Scholar's Lab offers the following:<ul><li>Up to 5 seats per table with a single 42'' monitor for shared viewing<li>2 high-powered resident computers, one Windows OS and one Mac OS<li>Users may plug in their own devices to the tables such as laptops and tablets, up to 5 devices at a time<li>An overhead projector, screen, and instructor's podium with computer or laptop plugin is also available for large group learning purposes</ul><p><strong>Print-Scan</strong><ul><li>6 oversized, full color Epson 11000xl scanners for graphic arts and digitization work are attached to Mac computers in the Scholar's Lab</ul>";
    var $groupWorkTablesText  = "<p><strong>Group Work Tables</strong><br><br><strong>About:</strong><br>These tables seat from 6 to 8 people and exist in open areas of the Richardson Library. Powered by media:scape technology, the tables allow users plug in computers and other devices and share content on single or double screens. Reservable by current students, staff and faculty from <strong><strong>libcal.depaul.edu</strong></strong><p><strong>Equipment:</strong><br><strong>Media:scape Collaboration Table</strong><br>Each area is equipped with a media:scape table designed to facilitate collaborative research and learning. Each media:scape collaboration table offers the following:<ul><li>Up to 5 seats per table with a single 42'' monitor for shared viewing<li>2 high-powered resident computers, one Windows OS and one Mac OS<li>Users may plug in their own devices to the tables such as laptops and tablets, up to 5 devices at a time</ul>";
    var $instructionText      = "<b>Library Instruction</b><br/><br/>Library Instruction works with faculty to create customized research instruction sessions based on the needs of courses and assignments. The goal of the instruction program is to help students develop the critical thinking and information literacy skills necessary to conduct effective library research.";
    var $geniusSquadText      = "<b>Genius Squad</b><br/><br/><b>About:</b><br/>Staffed by current DePaul students, the Genius Squad can assist with:<br/><ul><li>Wireless setup</li><li>Virus and malware removal</li><li>Hardware repair</li><li>RAM upgrades</li><li>Phone configuration for access to e-mail</li><li>A variety of other technical services</li></ul>";
    var $accessServicesText   = "<b>Access Services</b><br/><br/><b>About:</b><br/>Patrons can check-out and renew books here.";
    var $researchHelpText     = "<b>Research Help Desk</b><br/><br/><b>About:</b><br/>Research Librarians and Peer Research Tutors help you explore your topic and show you how to search effectively for books, articles and other information (like statistics) in library databases and the web. Researchers can ask for in-depth help, or just get assistance finding a single item.";
    var $learningCommonsText  = "<b>Learning Commons</b><br/><br/><b>About:</b><br/>The Learning Commons is a student-centered learning environment that provides collaborative peer-education in a central location surrounded by academic resources.<br/><br/><b>Services Offered:</b><br/><ul><li>Tutoring in Chemistry, Math, Psychology, and Languages (Arabic, Chinese, French, Italian, Japanese, Ancient Greek, Russian, and Spanish)</li><li>Study Jams via OMSS<br/><li>Resume, Internship & Job Help through the Career Center</li><li>Supplemental Instruction</li><li>Workshops</li></ul>";
    var $adminText            = "<b>Administrative Offices</b><br/><br/><b>About:</b><br/>The Administrative Office supports the daily operations of the Richardson and Loop libraries.";
    var $richardsonGalleryText= "<b>Richardson Gallery</b><br/><br/><b>About:</b><br/>Formerly called the Program Room, this space is currently being developed into a space for student art exhibitions.";
    var $206Text              = "<b>JTR 206</b><br/><br/>This is a small group brainstorming/ideation equipped with laptops, digital panel, whiteboards, Legos, papercrafting tools and other supplies to help groups come together to discuss problems and sketch potential solutions.";
    var $207Text              = "<b>JTR 207</b><br/><br/>This is a community event, teaching, and workshop space on topics such as digital mapping, text and data mining, 3-D modelling, and data visualization.  Seats up to 30 people and tables may be reconfigured. Includes laptop cart, surround sound, and high-resolution, oversized digitized panel.";
    var $studioXText          = "<b>Studio χ</b><br/><br/>This is a Center for faculty development to foster and support research at the intersection between humanities and computing. Also known as Studio Chi.";
    var $makerHubText         = "<b>Maker Hub and Media Studios</b><br/><br/><b>Maker Hub</b><br/>(also known as Studio A) group, seminar, and independent work space with 3D printers, scanners, laser cutter, soldering station, and sewing machine.<br/><br/><b>Studios B - F</b><br/>All include MacPros with single or double screens conducive to video and sound editing.  Microphones, cameras, keyboards, analog media players and other hardware can be attached to workstations to serve different purposes such as sound or video recording, presentation practice, podcasting, digitization, and digital preservation.<br/><br/><b>Usability Studio</b><br/>(also known as Studio E) for observation/recording of up to 3 people interacting with computers in a controlled environment.<br/><br/><b>Studio G</b><br/>Production space with professional, pre-set light system and green screen";
    var $forumText            = "<b>The Forum</b><br/><br/>Public event and learning area with mixture of comfortable and work table seating near visualization wall.  Visualization Wall functionalities & specs are currently based on similar installations at Indiana, Montana State, and UNC.";
    var $groupStudyText       = "<b>Group Study Rooms</b><br/><br/><b>Instructions:</b><br/>Reservable for up to 60 minutes. Visit library.depaul.edu/services/Pages/Room-Reservations to make a room reservation, or talk to a library staff member for assistance.<br/><br/><b>Max Capacity:</b><br/>10 People<br/><br/><b>Equipment:</b><br/>Screen - No projector";
    var $rosatiText           = "<b>Rosati Room</b><br/><br/><b>Instructions:</b><br/>Reservable for up to 60 minutes. Visit library.depaul.edu/services/Pages/Room-Reservations to make a room reservation, or talk to a library staff member for assistance.<br/><br/><b>Max Capacity:</b><br/>40 People<br/><br/><b>Equipment:</b><br/>Screen – with Projector<br/>Podium<br/>PC";
    var $spcaText             = "<b>Special Collections</b><br/><br/>DePaul Special Collections and Archives collects, preserves, and shares rich primary source materials in support of engaged teaching, active student learning, and scholarly and community research.";
    var $stVincentText        = "<p><strong>St. Vincent de Paul Room</strong><br /><br />The St. Vincent de Paul room is reserved for Special Collections and Archives instruction sessions.</p>";
      
    
    
            
	// Hide the info-panel and overlay images on page load.
  $("#info-panel").hide();
  $("#one .mapoverlay").hide();
  $("#two .mapoverlay").hide();
  $("#three .mapoverlay").hide();
  $("#four .mapoverlay").hide();

    // This is a mapping of element id to the displayed text.
    // To change what text is displayed, edit or add it here.
	info_map={
		"1_accessservices": [$accessServicesText, ["1_accessservices.png"]],
    "1_admin":          [$adminText, ["1_admin.png"]],
    "1_chicago":      	["", ["1_chicago.png"]],
		"1_geniussquad":    [$geniusSquadText, ["1_geniussquad.png"]],
		"1_groupworktables":[$groupWorkTablesText, ["1_groupworktables.png"]],
    "1_instruction":    [$instructionText, ["1_instruction.png"]],
		"1_learningcommons":[$learningCommonsText, ["1_learningcommons.png"]],
    "1_richardsongallery":[$richardsonGalleryText, ["1_richardsongallery.png"]],
    "1_researchhelpdesk":[$researchHelpText, ["1_researchhelpdesk.png"]],
		"1_scholars":        [$scholarsLabText, ["1_scholars.png"]],

    "2_206":            [$206Text, ["2_206.png"]],
    "2_207":            [$207Text, ["2_207.png"]],
    "2_groupworktables":[$groupWorkTablesText, ["2_groupworktables.png"]],
    "2_studiox": 		    [$studioXText, ["2_studiox.png"]],
    "2_makerhub": 		  [$makerHubText, ["2_makerhub.png"]],
    "2_forum":          [$forumText, ["2_forum.png"]],

    "3_rosatiroom": 		[$rosatiText, ["3_rosatiroom.png"]],
    "3_specialcollections": [$spcaText, ["3_specialcollections.png"]],

    "groupstudyrooms": 		[$groupStudyText, ["3_groupstudyrooms.png", "4_groupstudyrooms.png"]],

    "4_stvincent": 			[$stVincentText, ["4_stvincent.png"]],


    "bathrooms": 			["", ["1_bathrooms.png", "2_bathrooms.png", "3_bathrooms.png", "4_bathrooms.png"]],
    "computers": 			["", ["1_computers.png", "2_computerlabs.png"]],
    "copycenters": 		    ["", ["1_copycenter.png", "2_copycenter.png"]],
    "groupstudyzones": 		["", ["1_groupstudyzone.png", "2_groupstudy.png"]],
    "printers":				["", ["1_printcenter.png", "2_printcenter.png"]],
    "quietstudyzones": 		["", ["3_quietstudyzone.png", "4_quietstudyzone.png"]],
    "1_facultypublications": ["", ["1_facultypublications.png"]],
    "1_graphicnovels": 		["", ["1_graphicnovels.png"]],
    "guestcomputers":		["", ["1_guestcomputers.png", "3_guestcomputers.png", "4_guestcomputers.png"]],
        "1_laptoplockers": 		["", ["1_laptoplockers.png"]],
        "1_recreational": 		["", ["1_recreational.png"]],
    "1_readyreference":		["", ["1_readyreference.png"]],
    "2_chicago": 			["", ["2_chicago.png"]],
    "2_circulationdesk": 	["", ["2_circulationdesk.png"]],
        "2_core": 			    ["<b>CoRE - Collaborative Research Enviroment</b><br/><br/><br/>Open plan computing with high-powered, dedicated computer workstations (Mac & PC) conducive to digital mapping, text and data mining, 3-D modelling, and data visualization by single users or small groups.  Includes double, high-solution screens and Cintiq screens.", ["2_core.png"]],
    "2_copycenter": 		["<b>Microform Equipment (Microfilm)</b><br/><br/><b>About:</b><br/>Microfilm preserves fragile documents such as rare books, newspapers and other periodicals by using micro-photography to reduce am image onto a roll of plastic film. Microfiche serves the same purpose but the format is a 4x6'' plastic card.<br/><br/><b>Instructions:</b><br/>Lenses for the microfilm readers are available for check-out at the Access Services desk on the 1st floor, and microfilm and microfiche are located in the cabinets adjacent to room 207.<br/><br/>Ask a library staff member for assistance.", ["2_copycenter.png"]],
    "2_curriculummaterials": ["", ["2_curriculummaterials.png"]],
    "2_geniussquad": 		["", ["2_geniussquad.png"]],
    "2_periodicals": 		["", ["2_periodicals.png"]],
        "2_audiovisual": 		["", ["2_audiovisual.png"]],
    "2_printcenter": 		["", ["2_printcenter.png"]],
    "2_recreational": 		["", ["2_recreational.png"]],
    "2_reference": 			["", ["2_reference.png"]],
    "2_researchinformation":["<b>Research & Instruction Services</b><br/><br/>Research and Instruction Librarians help researchers explore their topics. Research and Instruction librarians also work directly with faculty and students in classes with assignments which require locating and using information in books, articles and other formats. The best way to reach them is at the Research Help Desk, online via chat/IM (“Ask a Librarian”) and by appointment.", ["2_researchinformation.png"]],
    "3_callnumbers0699": 	["", ["3_callnumbers0699.png"]],
    "3_instruction": 		["", ["3_instruction.png"]],
    "4_audiovideo": 	    ["", ["4_audiovideo.png"]],
        "4_callnumbers700999": 	["", ["4_callnumbers700999.png"]],
    "4_imagecollections": 	["", ["4_imagecollections.png"]],
        "4_musicscores": 		["", ["4_musicscores.png"]]
	};

	// Note that in order for this to work, the id of each image map location MUST match
	// the name of the image file. For example, 1_scholars.png
	function show_overlays(images){
		// First hide any overlays
		$("#one .mapoverlay").hide();
	    $("#two .mapoverlay").hide();
	    $("#three .mapoverlay").hide();
	    $("#four .mapoverlay").hide();

	    var i;
	    for(i = 0; i < images.length; i ++) {
	    	// Get the element's floor by looking at the first character of its id.
			var floor = images[i].substring(0, 1);
			if(floor == "1") {
				var overlay = $("#one .mapoverlay");
				var overlay_image = "images/maps/" + images[i];
				overlay.attr("src", overlay_image);
				overlay.show();
			} else if(floor == "2") {
				var overlay = $("#two .mapoverlay");
				var overlay_image = "images/maps/" + images[i];
				overlay.attr("src", overlay_image);
				overlay.show();
			} else if(floor == "3") {
				var overlay = $("#three .mapoverlay");
				var overlay_image = "images/maps/" + images[i];
				overlay.attr("src", overlay_image);
				overlay.show();
			} else if(floor == "4") {
				var overlay = $("#four .mapoverlay");
				var overlay_image = "images/maps/" + images[i];
				overlay.attr("src", overlay_image);
				overlay.show();
			}
	    }
	}

		function show_info_panel(id) {
		var mapping = info_map[id];
		if(mapping[0] != "") {
			var info_panel_text = $("#info-panel #info-text");
			// Changed from .text to .html in order to edit formatting
			info_panel_text.html(mapping[0]);
			$("#info-panel").show();
			$("#directory-container").hide();
		}
		show_overlays(mapping[1]);
	}

	function map_listener(ev) {
		var target = $(ev.target);
		var targetId = target.attr('id');
		show_info_panel(targetId);
		// We should stop propagating after this function is called
		// so that we don't hit the document listener.
		ev.stopPropagation();
	}

	function hide_info_panel_overlays(ev) {
		$("#info-panel").hide();
	    $("#one .mapoverlay").hide();
	    $("#two .mapoverlay").hide();
	    $("#three .mapoverlay").hide();
	    $("#four .mapoverlay").hide();
			$("#directory-container").show();
	}


	$("map#first").click(map_listener);
	$("map#second").click(map_listener);
	$("map#third").click(map_listener);
	$("map#fourth").click(map_listener);

	// The purpose of this listener is to detect clicks outside
	// a map element. e.g. if the info panel is open and the user
	// clicks outside a possible map area then close the panel.
	$(document).click(function(event) {
		// If one of the overlays is visible...
		if($("#one .mapoverlay").is(":visible") || $("#two .mapoverlay").is(":visible")
			|| $("#three .mapoverlay").is(":visible") || $("#four .mapoverlay").is(":visible")){
			// If the clicked element is not a child of a mapoverlay or the directory...
			if(!$(event.target).closest('.mapoverlay').length && !$(event.target).closest('#directory')('#info-by-floor').length) {
				hide_info_panel_overlays();
	    	}
		}

	});
  
  

	// Listener for info panel close image.
	$("#close-img").click(function(ev){
	    hide_info_panel_overlays();
	});


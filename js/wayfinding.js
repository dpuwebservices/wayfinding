	$(document).ready(function(e) {
	    $('img[usemap]').rwdImageMaps();
	});

	// Hide the info-panel and overlay images on page load.
	$("#info-panel").hide();
	$("#one .mapoverlay").hide();
    $("#two .mapoverlay").hide();
    $("#three .mapoverlay").hide();
    $("#four .mapoverlay").hide();

    // This is a mapping of element id to the displayed text.
    // To change what text is displayed, edit or add it here.
	info_map={
		"bathrooms": 			["", ["1_bathrooms.png", "2_bathrooms.png", "3_bathrooms.png", "4_bathrooms.png"]],
		"computers": 			["", ["1_computers.png", "2_computerlabs.png"]],
		"copycenters": 		    ["", ["1_copycenter.png", "2_copycenter.png"]],
		"groupstudyzones": 		["<p><strong>Collaborative Areas </strong></p> <p>Talking and group work are permitted on on the first and second floors. The third and fourth floors are for quiet study, with the exception of the group study rooms.", ["1_groupstudyzone.png", "2_groupstudyzone.png"]],
        "1_assistivetechnology": 	["", ["1_assistivetechnology.png"]],
		"groupstudyrooms": ["<b>Group Study Rooms and Work Tables</b><br/><br/>The DePaul Library supports group study by providing a variety of spaces and technologies. Your group can reserve a room for studying in a group, or collaborate on a project by sharing share computer screens at one of our group work tables. <br> <br><b>Instructions:</b><br/>Reservable for up to two hours. To make a reservation, scan below, go to <span class=\"highlight\">libcal.depaul.edu</span>, or talk to a library staff member for assistance.<br/><br/><b>Max Capacity:</b><br/>10 People<br/><br/><br><br> <img src=\"http://libservices.org/wayfinding/images/group-study-qr-code.png\" width=\"200\" height=\"200\">", ["1_groupstudy.png", "2_groupstudy.png", "3_groupstudy.png", "4_groupstudy.png"]],
		"onlineclass": 		["<strong>Online Class Zones</strong><br/><br/>Both the first and second floors are considered \"Zoom-Friendly.\" Students may attend online classes here using headsets (available for checkout from Access Services).", ["1_onlineclass.png", "2_onlineclass.png"]],
		"printers":				["", ["1_printcenter.png", "2_printcenter.png"]],
		"reference":				["", ["1_reference.png", "2_reference.png"]],
		"quietstudyzones": 		["<strong>Quiet Study Zones</strong><br/><br/>The third and fourth floors are for quiet study.  Whispering only--talking and group work are not permitted. ", ["3_quietstudyzone.png", "4_quietstudyzone.png"]],
		"1_admin": 			["", ["1_admin.png"]],
		"1_gallery": 	["<b>Richardson Art Gallery</b><br/><br/>The gallery showcases student and faculty work from The Art School at DePaul.", ["1_gallery.png"]],
		"1_103": 			["", ["1_103.png"]],
		"1_109": 			["", ["1_109.png"]],
		"1_110": 			["", ["1_110.png"]],
		"1_111": 			["", ["1_111.png"]],
        "1_chicago": 			["", ["1_chicago.png"]],
		"1_circulationdesk": 	["<b>Access Services</b><br/><br/>Come to Access Services to check out your items, pay a fine, or access a book on reserve for your class. We also have phone chargers, calculators, video games and consoles and more available to check out with your DePaul ID card.", ["1_circulationdesk.png"]],
		"1_facultypublications": ["", ["1_facultypublications.png"]],

		"1_graphicnovels": 		["", ["1_graphicnovels.png"]],
		"guestcomputers":		["", ["1_guestcomputers.png","2_guestcomputers.png", "3_guestcomputers.png", "4_guestcomputers.png"]],
        "1_instruction": 		["<p><strong>Library Instruction</strong><br /><br />Library Instruction works with faculty to create customized research instruction sessions based on the needs of courses and assignments. The goal of the instruction program is to help students develop the critical thinking and information literacy skills necessary to conduct effective library research.</p>", ["1_instruction.png"]],
        "1_laptoplockers": 		["", ["1_laptoplockers.png"]],
        "1_recreational": 		["", ["1_recreational.png"]],
        "1_researchhelpdesk": 		["<b>Research Help Desk</b><br/><br/>Research Librarians and Peer Research Tutors help you explore your topic and show you how to search effectively for books, articles and other information (like statistics) in library databases and the web. <br><br>Researchers can ask for in-depth help, or just get assistance finding a single item.", ["1_researchhelpdesk.png"]],
		"1_supplemental": ["<p><strong>Supplemental Instruction</strong><br><br>Supplemental Instruction aims to help students successfully complete historically difficult classes through weekly&nbsp;peer-assisted&nbsp;study sessions. It is offered free program offered by the Center for Teaching and Learning.</p>", ["1_supplemental.png"]],
        "1_videogames": 		["<p><strong>Video Games &amp; Consoles</strong><br /><br />We have a number of gaming consoles and video games available for checkout at both the Richardson and Loop Libraries. Visit the catalog to see the current list of all consoles, video games, and their availability.</p>", ["1_videogames.png"]],		
		"2_bathroomgn": 			["", ["2_bathroomgn.png"]],
		"2_chicago": 			["", ["2_chicago.png"]],
		"2_circulationdesk": 	["", ["2_circulationdesk.png"]],
        "2_core": 			    ["<b>CoRE - Collaborative Research Enviroment</b><br/><br/><br/>Open plan computing with high-powered, dedicated computer workstations (Mac & PC) conducive to digital mapping, text and data mining, 3-D modelling, and data visualization by single users or small groups.  Includes double, high-solution screens and Cintiq screens.", ["2_core.png"]],
		"2_copycenter": 		["<b>Microform Equipment (Microfilm)</b><br/><br/><b>About:</b><br/>Microfilm preserves fragile documents such as rare books, newspapers and other periodicals by using micro-photography to reduce am image onto a roll of plastic film. Microfiche serves the same purpose but the format is a 4x6'' plastic card.<br/><br/><b>Instructions:</b><br/>Lenses for the microfilm readers are available for check-out at the Access Services desk on the 1st floor, and microfilm and microfiche are located in the cabinets adjacent to room 207.<br/><br/>Ask a library staff member for assistance.", ["2_copycenter.png"]],
		"2_curriculummaterials": ["", ["2_curriculummaterials.png"]],
		"2_geniussquad": 		["", ["2_geniussquad.png"]],
        "2_206": 		    ["<b>Room 206</b><br/><br/>Small group brainstorming/ideation equipped with laptops, digital panel, whiteboards, Legos, papercrafting tools and other supplies to help groups come together to discuss problems and sketch potential solutions.<br><br><p><strong>Instructions:</strong><br />Reservable by faculty and staff only. To make a reservation, scan below, go to <span class=\"highlight\">libcal.depaul.edu</span>, or talk to a library staff member for assistance.<br><br> <img src=\"http://libservices.org/wayfinding/images/group-study-qr-code.png\" width=\"200\" height=\"200\">", ["2_206.png"]],
        "2_207": 		    ["<b>Room 207</b><br/><br/>Community event, teaching, and workshop space on topics such as digital mapping, text and data mining, 3-D modelling, and data visualization.  Seats up to 30 people and tables may be reconfigured. Includes laptop cart, surround sound, and high-resolution, oversized digitized panel.<br><br><p><strong>Instructions:</strong><br />Reservable by faculty and staff only. To make a reservation, scan below, go to <span class=\"highlight\">libcal.depaul.edu</span>, or talk to a library staff member for assistance.<br><br> <img src=\"http://libservices.org/wayfinding/images/group-study-qr-code.png\" width=\"200\" height=\"200\">", ["2_207.png"]],
		"2_periodicals": 		["", ["2_periodicals.png"]],
        "2_audiovisual": 		["", ["2_audiovisual.png"]],
		"2_printcenter": 		["", ["2_printcenter.png"]],
		"2_recreational": 		["", ["2_recreational.png"]],
        "1_selfcheckout": 		["", ["1_selfcheckout.png"]],
		"2_reference": 			["", ["2_reference.png"]],
		"2_researchinformation":["<b>Research & Instruction Services</b><br/><br/>Research and Instruction Librarians help researchers explore their topics. Research and Instruction librarians also work directly with faculty and students in classes with assignments which require locating and using information in books, articles and other formats. The best way to reach them is at the Research Help Desk, online via chat/IM (“Ask a Librarian”) and by appointment.", ["2_211.png"]],
        "2_studios": 		    ["<b>Maker Hub and Media Studios</b><br/><br/><b>Maker Hub</b><br/>A group, seminar, and independent work space with 3D printers, scanners, laser cutter, soldering station, and sewing machine.<br/><br/><b>Studios B - F</b><br/>All include MacPros with single or double screens conducive to video and sound editing.  Microphones, cameras, keyboards, analog media players and other hardware can be attached to workstations to serve different purposes such as sound or video recording, presentation practice, podcasting, digitization, and digital preservation.<br/><br/><b>Usability Studio</b><br/>(also known as Studio E) for observation/recording of up to 3 people interacting with computers in a controlled environment.<br/><br/><b>Studio G (Green Screen)</b><br/>Production space with professional, pre-set light system and green screen.  <br> <br><b>Instructions:</b><br/>To reserve a media studio: scan below, go to <span class=\"highlight\">libcal.depaul.edu</span>, or talk to a library staff member for assistance.<br><br> <img src=\"http://libservices.org/wayfinding/images/group-study-qr-code.png\" width=\"200\" height=\"200\">", ["2_makerhub.png"]],
        "2_studiox": 		    ["<b>Studio χ</b><br/><br/>This is a Center for faculty development to foster and support research at the intersection between humanities and computing. Also known as Studio Chi.", ["2_studiox.png"]],
        "2_theforum": 		    ["<b>The Forum</b><br/><br/>Public event and learning area with mixture of comfortable and work table seating near visualization wall.  Visualization Wall functionalities & specs are currently based on similar installations at Indiana, Montana State, and UNC.", ["2_forum.png"]],
		"3_callnumbers0699": 	["", ["3_callnumbers0699.png"]],
		"3_300room": 		["<p><strong>Room 300</strong></p><p>A large room with projector screen and PC. Reservable by student organizations, staff and faculty (Not reservable for student study groups).<br /><br /><strong>Max Capacity:</strong><br />40 People<br /><br /><p><strong>Instructions:</strong><br />To make a reservation, scan below, go to <span class=\"highlight\">libcal.depaul.edu</span>, or talk to a library staff member for assistance.<br><br> <img src=\"http://libservices.org/wayfinding/images/group-study-qr-code.png\" width=\"200\" height=\"200\">", ["3_300room.png"]],
		"3_specialcollections": ["<b>Special Collections</b><br/><br/>DePaul Special Collections and Archives collects, preserves, and shares rich primary source materials in support of engaged teaching, active student learning, and scholarly and community research.  Students, faculty, and community members are welcome to consult our rare books and archival collections in our Reading Room. <br/><br/>Instruction sessions with Special Collections and Archives are usually scheduled one floor above, in the St. Vincent de Paul Room, 417.", ["3_specialcollections.png"]],
		"4_audiovideo": 	    ["<b>Media Room</b><br/><br/>Need to listen to a record, watch a Blu-Ray, DVD or even a VHS tape? Ask an Access Services staff member to let you into the media room.", ["4_audiovideo.png"]],
        "4_callnumbers700999": 	["", ["4_callnumbers700999.png"]],
		"4_imagecollections": 	["", ["4_imagecollections.png"]],
        "4_musicscores": 		["", ["4_musicscores.png"]],
		"4_stvincent": 			["<b>St. Vincent de Paul Room</b><br/><br/><!--<img src='images/image.jpg' width='100%' height='auto' />-->The St. Vincent de Paul room is reserved for Special Collections and Archives instruction sessions.", ["4_stvincent.png"]]
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

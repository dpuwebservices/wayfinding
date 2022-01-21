<?php 
include ("includes/head.html");
?>

<body>
<!--     
<div id="status-bar">
    <div class="date">
        <script src="js/date.js"></script> 
    </div>
    <form name="clockForm" class="time">
        <input type="button" name="clockButton" value="" disabled />
    </form>
    <div id="weather"></div>
</div>
 -->
    
<div class="container nav-lg-title">
    <div class="title-header">
       <h1>INTERACTIVE DIRECTORY</h1>
	   <h2>D<i>e</i>Paul University Richardson Library</h2>
     <div class="datetime">
      <script src="js/date.js"></script> 
    </div>
    </div>

    <div class="navbar navbar-default clearfix">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#/">DePaul University Richardson Library</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <!-- <li class="nonactive"><a class="nonactive start" href="get-started.html"><i></i>Get Started</a></li>
                  <li class="nonactive"><a class="nonactive hours" href="hours.html"><i></i>Hours</a></li>                    
                    <li class="activated"><a class="activated maps" href="maps.html"><i></i>Maps</a></li>
                    <li class="nonactive"><a class="nonactive events" href="events.html"><i></i>Events</a></li>
                    <li class="nonactive"><a class="nonactive classes" href="classes.html"><i></i>Classes</a></li> -->

                    <li class="nonactive"><a class="nonactive start" href="get-started.html">Get Started</a></li>
                    <li class="nonactive"><a class="nonactive hours" href="hours.html">Hours</a></li>                    
                      <li class="activated"><a class="activated maps" href="maps.html">Maps</a></li>
                      <li class="nonactive"><a class="nonactive events" href="events.html">Events</a></li>
                      <li class="nonactive"><a class="nonactive classes" href="classes.html">Classes</a></li>
                                          
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container col-lg-12 container-margin">
	<div class="col-lg-9">
			<!--Image map tutorial. http://jquer.in/responsive/rwdimagemaps/
			Tool for image mapping. http://imagemap-generator.dariodomi.de/-->
		<div class="row maps-center">
			<div class="col-lg-6 nopadding max-maps" id="one">
				<img src="images/maps/firstfloor.png" width="1500" height="1000" usemap="#first" class="max-maps">
				<img class="mapoverlay" width="1500" height="1000">

          <map name="first" id="first">
            <area shape="rect" coords="1084,41,1231,139" href="#/" title="supplimentalinstruction" alt="Supplimental Instruction" id="1_supplemental">
            <area shape="rect" coords="990,665,1136,848" href="#/" title="room 111" alt="Supplimental Instruction Room 111" id="1_supplemental">
            <area shape="rect" coords="65,30,282,148" href="#/" title="room103" alt="Instruction Room 103" id="1_instruction">
            <area shape="rect" coords="1169,679,1431,840"  href="#/" title="rooms 109-11" alt="Instruction Rooms 109-110" id="1_instruction">
            <area shape="rect" coords="151,310,385,445"  href="#/" title="accessservices" alt="Access Services" id="1_circulationdesk">
            <area shape="rect" coords="220,181,428,289" href="#/" title="researchhelp" alt="Research Help Desk" id="1_researchhelpdesk">
            <area shape="rect" coords="384,38,510,121" href="#/" title="researchhelp" alt="Research Help Desk" id="1_researchhelpdesk">
            <area shape="rect" coords="542,35,992,121" href="#/" title="groupstudy1" alt="Group Study Tables" id="groupstudyrooms">
            <area shape="rect" coords="461,449,667,609" href="#/" title="group study west" alt="Group Study Zone" 
            id="groupstudyzones">            
            <area shape="rect" coords="653,216,874,390" href="#/" title="group study center" alt="Group Study Zone" id="groupstudyzones">            
            <area shape="rect" coords="1193,306,1406,639" href="#/" title="group study east" alt="Group Study Zone" id="groupstudyzones">            
            
        </map>

			</div>

			<div class="col-lg-6 nopadding max-maps" id="two">
				<img src="images/maps/secondfloor.png" width="1500" height="1000" usemap="#second" class="max-maps">
				<img class="mapoverlay" width="1500" height="1000">
				<map name="second" id="second">
                    <area shape="rect" coords="511,195,971,642" href="#/" title="core" alt="CoRE – Collaborative Research Environment" id="2_core">
                    <area shape="rect" coords="54,270,146,575" href="#/" title="studios" alt="Studios A-G" id="2_studios">
                    <area shape="rect" coords="153,33,242,159" href="#/" title="206" alt="Room 206" id="2_206">
                    <area shape="rect" coords="254,29,470,166" href="#/" title="207" alt="IRoom 207" id="2_207">
                    <area shape="rect" coords="1360,195,1428,610" href="#/" title="researchinformation" alt="Research & Instruction Services" id="2_researchinformation">
                    <area shape="rect" coords="185,191,470,339" href="#/" title="theforum" alt="The Forum" id="2_theforum">
                    <area shape="rect" coords="576,33,979,111" href="#/" title="groupstudy2" alt="Group Study Tables" id="groupstudyrooms">
                    <area shape="rect" coords="47,669,265,842" href="#/" title="group study west" alt="Group Study Zone" id="groupstudyzones">                      
                </map>
			</div>
		</div>

		<div class="row maps-center">
			<div class="col-lg-6 nopadding max-maps" id="three">
				<img src="images/maps/thirdfloor.png" width="1500" height="1000" usemap="#third" class="max-maps">
				<img class="mapoverlay" width="1500" height="1000">
          <map name="third" id="third">
            <area shape="rect" coords="58,745,248,842" href="#/" title="jtr300" alt="Room 300" id="3_300room">
            <area shape="rect" coords="958,116,1096,607" href="#/" title="zoom area" alt="Room 300" id="3_zoom">
            <area shape="rect" coords="1246,749,1436,844" href="#/" title="specialcollections" alt="Special Collections" id="3_specialcollections">
            <area shape="rect" coords="1225,210,1438,366" href="#/" title="groupstudy3" alt="Group Study Rooms" id="groupstudyrooms">
            <area shape="rect" coords="461,742,1037,844" href="#/" title="O'Neil Reading Room" alt="O'Neil Reading Room" id="quietstudyzones">
          </map>
			</div>

			<div class="col-lg-6 nopadding max-maps" id="four">
				<img src="images/maps/fourthfloor.png" width="1500" height="1000" usemap="#fourth" class="max-maps">
				<img class="mapoverlay" width="1500" height="1000">
                <map name="fourth" id="fourth">
					<area shape="rect" coords="59,304,125,371" href="#/" title="groupstudy4" alt="Group Study Rooms" id="groupstudyrooms">
                    <area shape="rect" coords="58,391,123,457" href="#/" title="groupstudy4" alt="Group Study Rooms" id="groupstudyrooms">
                    <area shape="rect" coords="1363,392,1433,550" href="#/" title="groupstudy4" alt="Group Study Rooms" id="groupstudyrooms">                    
                    <area shape="rect" coords="1363,705,1432,805" href="#/" title="4_stvincent" alt="St Vincent de Paul Room" id="4_stvincent">
                    <area shape="rect" coords="492,766,985,861" href="#/" title="Balconies" alt="Balconies" id="quietstudyzones">                    
                </map>
			</div>
		</div>
	</div> <!--End of maps-->

	<div class="col-lg-3" id="mapLinks">
		<div id="info-panel">
			<img id="close-img" class="close-image" src="images/maps/close-icon.png"/>
			<p id="info-text"></p>
		</div>

		<div id="directory-container">

			<ul class="nav nav-tabs">
				<li class="active"><a href="#directory" data-toggle="tab">Directory</a></li>
                <li><a href="#info-by-floor" data-toggle="tab">Information By Floor</a></li>
			</ul>

			<div class="tab-content">

				<div id="directory" class="tab-pane active">
                    <div class="panel-group" id="accordion-dir">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion-dir" href="#collapseSpaces">
                              Spaces</a>
                            </h4>
                          </div>
                          <div id="collapseSpaces" class="panel-collapse collapse in">
							<ul>
								<li class="li"><a href="#/" onClick="show_info_panel('1_admin');">Administrative Offices</a></li>
								<li class="li"><a href="#/" onClick="show_info_panel('4_audiovideo');">Audio-Video Viewing & Listening</a></li>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_core');">Collaborative Research Enviroment</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_theforum');">(the) Forum</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('groupstudyrooms');">Group Study Areas (reservable)</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('groupstudyzones');">Group Study Zones</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_studios');">Maker Hub & Media Studios</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('3_zoom');">Online Class Zone</a></li>
								<li class="li"><a href="#/" onClick="show_info_panel('quietstudyzones');">Quiet Study Zones</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_researchinformation');">Research & Instruction Services (Room 211)</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_bathroomgn');">Restroom - Gender Neutral</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('bathrooms');">Restrooms</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('1_gallery');">Richrdson Art Gallery</a></li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_103');">Room 103</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_109');">Room 109</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_110');">Room 110</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_111');">Room 111</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_206');">Room 206</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_207');">Room 207</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('3_300room');">Room 300</a></li>
								<li class="li"><a href="#/" onClick="show_info_panel('4_stvincent');">St. Vincent DePaul Room (Room 417)</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('3_zoom');">"Zoom-Friendly" Zone</a></li>

							</ul>

                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion-dir" href="#collapseServices">
                              Services</a>
                            </h4>
                          </div>
                          <div id="collapseServices" class="panel-collapse collapse">
							<ul>
								<li class="li"><a href="#/" onClick="show_info_panel('1_circulationdesk');">Access Services</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_assistivetechnology');">Assistive Technology Workstation</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('computers');">Computers</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('copycenters');">Copy Centers</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('guestcomputers');">Guest Computers</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('1_laptoplockers');">Laptop Lockers</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('1_instruction');">Library Instruction</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('printers');">Printers</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('1_researchhelpdesk');">Research Help Desk</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_selfcheckout');">Self Checkout Station</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_supplemental');">Supplemental Instruction</a> </li>                                
							</ul>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion-dir" href="#collapseCollectons">
                              Collections</a>
                            </h4>
                          </div>
                          <div id="collapseCollectons" class="panel-collapse collapse">
							<ul>
								<li class="li"><a href="#/" onClick="show_info_panel('3_callnumbers0699');">Books (Call Numbers 0-699)</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('4_callnumbers700999');">Books (Call Numbers 700-999)</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('1_chicago');">Chicago Collection</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('2_curriculummaterials');">Curriculum Materials</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('1_facultypublications');">Faculty Publications</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('1_graphicnovels');">Graphic Novels</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('4_imagecollections');">Image Collections</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_audiovisual');">Media (CDs, Videos, Microforms)</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('4_musicscores');">Music Scores</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('2_periodicals');">Periodicals</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_readyreference');">Reference Desk</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('reference');">Reference Collection</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('3_specialcollections');">Special Collections</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_recreational');">Unwind the Mind (Popular Reading)</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_videogames');">Video Games & Consoles</a> </li>                

							</ul>
                          </div>
                        </div>
                      </div>
				</div>                
                
                <div id="info-by-floor" class="tab-pane">
                    <div class="panel-group" id="accordion-floor">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion-floor" href="#collapse1">
                            1st Floor</a>
                          </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                          <ul>
								<li class="li"><a href="#/" onClick="show_info_panel('1_circulationdesk');">Access Services</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('1_admin');">Administrative Offices</a></li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_assistivetechnology');">Assistive Technology Workstation</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('1_chicago');">Chicago Collection</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('computers');">Computers</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('copycenters');">Copy Centers</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_facultypublications');">Faculty Publications</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_graphicnovels');">Graphic Novels</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('groupstudyzones');">Group Study Zones</a> </li>
				                <li class="li"><a href="#/" onClick="show_info_panel('groupstudyrooms');">Group Work Tables (reservable)</a> </li>                                
                                <li class="li"><a href="#/" onClick="show_info_panel('guestcomputers');">Guest Computers</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_laptoplockers');">Laptop Lockers</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('1_instruction');">Library Instruction</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('printers');">Printers</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('1_gallery');">Richrdson Art Gallery</a></li>
                                <li class="li"><a href="#/" onClick="show_info_panel('reference');">Reference Collection</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_researchhelpdesk');">Research Help Desk</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('bathrooms');">Restrooms</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_selfcheckout');">Self Checkout Station</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_supplemental');">Supplemental Instruction</a> </li>  
                                <li class="li"><a href="#/" onClick="show_info_panel('1_recreational');">Unwind the Mind (Popular Reading)</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('1_videogames');">Video Games and Consoles</a> </li>                                
							</ul>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion-floor" href="#collapse2">
                            2nd Floor</a>
                          </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                          <ul>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_core');">Collaborative Research Enviroment</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('computers');">Computers</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('copycenters');">Copy Centers</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_curriculummaterials');">Curriculum Materials</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_theforum');">The Forum</a> </li>
				                <li class="li"><a href="#/" onClick="show_info_panel('groupstudyzones');">Group Study Zones</a> </li>
				                <li class="li"><a href="#/" onClick="show_info_panel('groupstudyrooms');">Group Work Tables (reservable)</a> </li>
                        <li class="li"><a href="#/" onClick="show_info_panel('guestcomputers');">Guest Computer</a> </li>

                                <li class="li"><a href="#/" onClick="show_info_panel('2_studios');">Maker Hub</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_audiovisual');">Media (CDs, Videos, Microforms)</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('2_periodicals');">Periodicals</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('printers');">Printers</a> </li>
								<li class="li"><a href="#/" onClick="show_info_panel('reference');">Reference Collection</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_researchinformation');">Research & Instruction Services</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_bathroomgn');">Restroom - Gender Neutral</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('bathrooms');">Restrooms</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_206');">Room 206</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_207');">Room 207</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('2_studios');">Studios A-G</a> </li>
							</ul>
                        </div>
                      </div>
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion-floor" href="#collapse3">
                            3rd Floor</a>
                          </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                          <ul>
								<li class="li"><a href="#/" onClick="show_info_panel('3_callnumbers0699');">Books (Call Numbers 0-699)</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('guestcomputers');">Guest Computer</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('groupstudyrooms');">Group Study Rooms</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('3_zoom');">Online Class Zone</a></li>
                                <li class="li"><a href="#/" onClick="show_info_panel('quietstudyzones');">Quiet Study Zones</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('bathrooms');">Restrooms</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('3_300room');">Room 300</a></li>
                                <li class="li"><a href="#/" onClick="show_info_panel('3_specialcollections');">Special Collections</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('3_zoom');">Zoom Friendly Zone</a></li>

							</ul>
                        </div>
                      </div>
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion-floor" href="#collapse4">
                            4th Floor</a>
                          </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                          <ul>
								<li class="li"><a href="#/" onClick="show_info_panel('4_audiovideo');">Audio-Video Viewing & Listening</a></li>
                                <li class="li"><a href="#/" onClick="show_info_panel('4_callnumbers700999');">Books (Call Numbers 700-999)</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('groupstudyrooms');">Group Study Rooms</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('guestcomputers');">Guest Computer</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('4_musicscores');">Music Scores</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('quietstudyzones');">Quiet Study Zones</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('bathrooms');">Restrooms</a> </li>
                                <li class="li"><a href="#/" onClick="show_info_panel('4_stvincent');">St. Vincent DePaul Room</a> </li>
							</ul>
                        </div>
                      </div>
                    </div>
                </div>
			</div>
		</div>

	</div> <!--End of panel-->
</div> <!--/close container-->
<script src="js/wayfinding.js"></script>
</body>
</html>

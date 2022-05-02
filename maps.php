<?php 
  include ("./includes/head.html");
?>

<body>

<?php 
  include ("./includes/mainnav.html");
?>

<div class="container col-lg-12 container-margin">
	<div class="col-lg-9">
			<!--Image map tutorial. http://jquer.in/responsive/rwdimagemaps/
			Tool for image mapping. https://imagemap.org/-->
		<div class="row maps-center">
			<div class="col-lg-6 nopadding max-maps" id="one">
				<img src="images/maps/firstfloor.png" width="1500" height="1062" usemap="#first" class="max-maps">
				<img class="mapoverlay" width="1500" height="1062">

          <map name="first" id="first">
            <area shape="rect" coords="1084,41,1231,139" href="#/" title="supplimentalinstruction" alt="Supplimental Instruction" id="1_supplemental">
            <area shape="rect" coords="1016,715,1157,854" href="#/" title="room 111" alt="Supplimental Instruction Room 111" id="1_supplemental">
            <area shape="rect" coords="65,30,282,148" href="#/" title="room103" alt="Instruction Room 103" id="1_instruction">
            <area shape="rect" coords="1172,636,1444,802"  href="#/" title="rooms 109-11" alt="Instruction Rooms 109-110" id="1_instruction">          
            <area shape="rect" coords="151,310,385,445"  href="#/" title="accessservices" alt="Access Services" id="1_circulationdesk">
            <area shape="rect" coords="913,542,1078,648" href="#/" title="popup" alt="Pop Up Desk" id="1_popup">
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
				<img src="images/maps/secondfloor.png" width="1500" height="1016" usemap="#second" class="max-maps">
				<img class="mapoverlay" width="1500" height="1016">
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
				<img src="images/maps/thirdfloor.png" width="1500" height="1016" usemap="#third" class="max-maps">
				<img class="mapoverlay" width="1500" height="1016">
          <map name="third" id="third">
            <area shape="rect" coords="58,745,248,842" href="#/" title="jtr300" alt="Room 300" id="3_300room">
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
            <area shape="rect" coords="49,220,261,289" href="#/" title="4_audiovideo" alt="Media Room" id="4_audiovideo">
                    <area shape="rect" coords="58,391,123,457" href="#/" title="groupstudy4" alt="Group Study Rooms" id="groupstudyrooms">
                    <area shape="rect" coords="1363,392,1433,550" href="#/" title="groupstudy4" alt="Group Study Rooms" id="groupstudyrooms">                    
                    <area shape="rect" coords="1363,705,1432,805" href="#/" title="4_stvincent" alt="St Vincent de Paul Room" id="4_stvincent">
                    <area shape="rect" coords="492,766,985,861" href="#/" title="Balconies" alt="Balconies" id="quietstudyzones">                    
                </map>
			</div>
		</div>
	</div> <!--End of maps-->

<?php 
  include ("./includes/infopanel.php");
?>

</div> <!--/close container-->
<script src="js/wayfinding.js"></script>
<script>
    $(document).ready(function(){
        $("#navBar a").each(function(){
            $( this ).removeClass("activated");
            $( this ).addClass("nonactive");
        });

        $("#navBar .maps").removeClass("nonactive").addClass("activated");

    });

</script>
</body>
</html>

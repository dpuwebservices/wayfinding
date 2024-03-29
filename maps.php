<?php 
  include ("./includes/head.html");
?>

<body>

<?php 
  include ("./includes/mainnav.html");
?>

<div class="container col-lg-12 container-margin">
	<div class="col-lg-8">
			<!--Image map tutorial. http://jquer.in/responsive/rwdimagemaps/
			Tool for image mapping. https://imagemap.org/-->
		<div class="row maps-center">
			<div class="col-lg-6 nopadding max-maps" id="one">
				<img src="images/firstfloor.png" width="1500" height="1062" usemap="#first" class="max-maps">
				<img class="mapoverlay" width="1500" height="1062">

          <map name="first" id="first">
            <area shape="rect" coords="1083,19,1229,120" href="#/" title="supplimentalinstruction" alt="Supplimental Instruction" id="1_supplemental">
            <area shape="rect" coords="1019,730,1156,845" href="#/" title="room 111" alt="Supplimental Instruction Room 111" id="1_supplemental">
            <area shape="rect" coords="65,30,282,148" href="#/" title="room103" alt="Instruction Room 103" id="1_103">
            <area shape="rect" coords="1172,636,1444,802"  href="#/" title="rooms 109-11" alt="Instruction Rooms 109-110" id="1_instruction">          
            <area shape="rect" coords="151,310,385,445"  href="#/" title="accessservices" alt="Access Services" id="1_circulationdesk">
            <area shape="rect" coords="913,542,1078,648" href="#/" title="popup" alt="Pop Up Desk" id="1_popup">
            <area shape="rect" coords="220,181,428,289" href="#/" title="researchhelp" alt="Research Help Desk" id="1_researchhelpdesk">
            <area shape="rect" coords="363,22,996,104" href="#/" title="groupstudy1" alt="Group Study Tables" id="groupstudyrooms">
            <area shape="rect" coords="461,449,667,609" href="#/" title="group study west" alt="Group Study Zone" 
            id="groupstudyzones">            
            <area shape="rect" coords="653,216,874,390" href="#/" title="computer lab" alt="Computer Lab" id="computers">            
            <area shape="rect" coords="1193,306,1406,639" href="#/" title="computer lab" alt="Computer Lab" id="computers">            
            <area shape="rect" coords="1348,905,1428,1034" href="#/" title="gallery" alt="Richardson Art Gallery" id="1_gallery">                 
        </map>

			</div>

			<div class="col-lg-6 nopadding max-maps" id="two">
				<img src="images/secondfloor.png" width="1500" height="1016" usemap="#second" class="max-maps">
				<img class="mapoverlay" width="1500" height="1016">
				<map name="second" id="second">
                    <area shape="rect" coords="511,195,971,642" href="#/" title="core" alt="CoRE – Collaborative Research Environment" id="2_core">
                    <area shape="rect" coords="998,722,1162,832" href="#/" title="computers" alt="Computer Lab" id="computers">
                    <area shape="rect" coords="57,455,154,539" href="#/" title="makerhub" alt="Maker Hub" id="2_makerhub">
                    <area shape="rect" coords="56,292,150,450" href="#/" title="studios" alt="Media Studios" id="2_studios">
                    <area shape="rect" coords="153,33,242,159" href="#/" title="206" alt="Room 206" id="2_206">
                    <area shape="rect" coords="254,29,470,166" href="#/" title="207" alt="IRoom 207" id="2_207">
                    <area shape="rect" coords="1360,195,1428,610" href="#/" title="riae" alt="Research & Instruction Services" id="2_riae">
                    <area shape="rect" coords="523,659,635,723" href="#/" title="solobooths" alt="Solo Booths" id="2_solobooths">
                    <area shape="rect" coords="185,191,470,339" href="#/" title="theforum" alt="The Forum" id="2_theforum">
                    <area shape="rect" coords="57,208,156,282" href="#/" title="provost" alt="Provost office" id="2_provost">
                    <area shape="rect" coords="576,33,979,111" href="#/" title="groupstudy2" alt="Group Study Tables" id="groupstudyrooms">
                    <area shape="rect" coords="47,669,265,842" href="#/" title="group study west" alt="Group Study Zone" id="groupstudyzones">                      
                </map>
			</div>
		</div>

		<div class="row maps-center">
			<div class="col-lg-6 nopadding max-maps" id="three">
				<img src="images/thirdfloor.png" width="1500" height="1016" usemap="#third" class="max-maps">
				<img class="mapoverlay" width="1500" height="1016">
          <map name="third" id="third">
            <area shape="rect" coords="58,745,248,842" href="#/" title="jtr300" alt="Room 300" id="3_300room">
            <area shape="rect" coords="1246,749,1436,844" href="#/" title="specialcollections" alt="Special Collections" id="3_specialcollections">
            <area shape="rect" coords="1225,210,1438,366" href="#/" title="groupstudy3" alt="Group Study Rooms" id="groupstudyrooms">
            <area shape="rect" coords="461,742,1037,844" href="#/" title="O'Neil Reading Room" alt="O'Neil Reading Room" id="quietstudyzones">
          </map>
			</div>

			<div class="col-lg-6 nopadding max-maps" id="four">
				<img src="images/fourthfloor.png" width="1500" height="1000" usemap="#fourth" class="max-maps">
				<img class="mapoverlay" width="1500" height="1000">
                <map name="fourth" id="fourth">
                  <area shape="rect" coords="49,220,261,289" href="#/" title="4_audiovideo" alt="Media Room" id="4_audiovideo">
                  <area shape="rect" coords="1316,213,1444,552" href="#/" title="groupstudy4" alt="Group Study Rooms" id="groupstudyrooms">
                  <area shape="rect" coords="48,302,215,461" href="#/" title="groupstudy4" alt="Group Study Rooms" id="groupstudyrooms">
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

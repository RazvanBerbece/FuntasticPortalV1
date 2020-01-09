<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Fun...Tastic Portal</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/mdb.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<link rel="shortcut icon" type="image/x-icon" href="img/other/Logo.png">

	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>

<body>
	<div id="lockscreen" style=" background: rgb(118,9,121); background: linear-gradient(10deg, rgba(118,9,121,1) 50%, rgba(244,0,255,1) 100%); z-index: 999; position: absolute; height: 275vh; overflow: hidden !important; position: fixed; ">
    <div class="lockContent">

    <form class="lockForm" method="POST" target="formRedirect">

        <input type="password" id="locktext" style=" color: white; width: 70%; height: 8vh; background-color: #80808087; " name="pass"></input>
        <button type="submit" class="btn btn-purple lockbutton" style=" height: 8vh; width: 10%; font-size: 85%; margin-top: -0.05%; "><i class="fas fa-key"></i>
        </button>

    </form>

    </div>
    <div class="lockWelcomeCont">
        <h2 class="text-uppercase lockWelcome" style=" font-size: 135%; "> Gain access by entering the password in the field below.</h2>
    </div>
    <div class="lockHintCont">
        <h4 class="text-uppercase lockHint" style=" margin-top: 2%; font-size: 14px; color: #ffffff; font-weight: 700; "> * The password is case sensitive.</h4>
    </div>

</div>
	<nav class="navbar navbar-expand-lg navbar-dark indigo"> <a class="navbar-brand Home" href="#">The Fun...Tastic Portal</a> 
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> 
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item li1"> <a class="nav-link Home" href="#">Home &nbsp;<span><i class="fas fa-home"></i></span></a>
				</li>
				<li class="nav-item li2"> <a class="nav-link WS" href="#">Worskheets &nbsp;<span><i class="fas fa-file"></i></span></a>
				</li>
				<li class="nav-item li3"> <a class="nav-link SU" href="#">Contest Sign-Ups &nbsp;<span><i class="far fa-address-book"></i></span></a>
				</li>
				<li class="nav-item li4"> <a class="nav-link Contact" href="#">Staff &nbsp;<span><i class="fas fa-phone"></i></span></a>
				</li>
			</ul> <span class="navbar-text white-text" style="opacity: 0.5"> <i class="fas fa-wrench"></i>&nbsp; V1.5 </span>
		</div>
	</nav>
	<div class="Slideshow" style=" position: relative; ">
		<div class="frontIMG">
			<button style=" position: absolute; top: 35%; left: 33.5%; width: 35%; height: 7%; border-radius: 15%; " type="button" class="btn btn-secondary jumboBtn">Our Staff</button>
			<img style="width: 100%;" class="mySlides" src="http://andreeasclub.ro/wp-content/uploads/2018/03/IMG_0327-1.jpg">
			<img style="width: 100%;" class="mySlides" src="http://andreeasclub.ro/wp-content/uploads/2015/03/10592969_687435951334378_6647580575002264418_n.jpg">
			<img style="width: 100%;" class="mySlides" src="http://andreeasclub.ro/wp-content/uploads/2015/03/10624626_687432014668105_4859185600929723537_n.jpg">
		</div>
	</div>
	<div class="wrapper-content">
		<div class="container-fluid">
			<div class="row">
				<div style=" height: 100vh; border: 1px solid #9c7fa561; " class="col-lg-6 col-md-6 C1">
					<div class="contentHome_1" style="height: 90%;">
						<h2 class="pageTitle"> Home</h2>
						<h2 style=" font-weight: 700; float: right; margin-top: -45px;">Welcome !</h2>
						<div class="HomePContainer" style=" height: 93%; ">
							<p class="pageParagraphHome">
								<br>
								<br>The Funtastic Portal was made to aid the teachers and the supervisors in the camp with the sign-ups for the various contests that we have, with choosing the worksheets and so on.
								<br>
								<br>In addition to these things, there is also a list of the supervisors, with photos and specific descriptions, phone numbers etc. .
								<br>
								<br>The Funtastic Portal couldn't have been made without the help and without the ideas of the whole staff.
								<br>
								<br>Important Note: The website isn't finished, some features aren't fully working and perhaps some things might look weird on specific screen resolutions.</p>
						</div>
					</div>
					<div class="contentWS_1">
						<h2 class="pageTitle"> Worksheets</h2>

						<!-- 
							!!! IMPORTANT !!!
						
						In order for this to work, this is how it should be (RE)done:

						1) Load all the bible pages on a cloud/driver server;

						2) Get the links for all the files;

						3) Display a picture of every worksheet in a manual carousel;

						4) On click, browser opens a new tab on the image's address on the online storage server;

						5) From there, people can either:
							-print it by printing the page (manual);
							-print it automatically; 

						>> (https://stackoverflow.com/questions/12276416/how-to-open-a-link-new-tab-with-print-command);

						6) PROFIT $$$ .

						-->

						<p class="pageParagraph">Choose your worksheet's category here. (Work in Progress ...)</p>
						<div class="WS_Categories">
							<div class="col-lg-6">
								<h4 class="text-uppercase Food Cat">Food</h4>
								<h4 class="text-uppercase Bingo Cat">Bingo</h4>
								<h4 class="text-uppercase Travel Cat">Travelling</h4>
								<h4 class="text-uppercase Anim Cat">Animals</h4>
							</div>
							<div class="col-lg-6">
								<h4 class="text-uppercase Wet Cat">Weather</h4>
								<h4 class="text-uppercase Nat Cat">Nations</h4>
								<h4 class="text-uppercase Gramm Cat">Grammar</h4>
								<h4 class="text-uppercase Search Cat">Search</h4>
							</div>
						</div>
					</div>
					<div class="contentSU_1">
						<h2 class="pageTitle"> Contest Sign-Ups</h2>
						<p class="pageParagraph">Sign Up your students here for the camp's contests.</p>
						<div class="ContestTypes" style="display: block;">
							<h1 class="text-uppercase ContestT Dance" style="text-align: center;"> <i class="fas fa-shoe-prints"></i> Dance Contest</h1>
							<h1 class="text-uppercase ContestT Kara" style="text-align: center;"> <i class="fas fa-microphone"></i> Karaoke Contest</h1>
							<h1 class="text-uppercase ContestT MM" style="text-align: center;"> <i class="fas fa-crown"></i> Miss & Mister Contest</h1>
						</div>
					</div>
					<div class="contentContact_1">
						<h2 class="pageTitle"> The Staff</h2>
						<p class="pageParagraph">Meet our staff here ! (Work in Progress ...)</p>
						<div class="StaffList">
							<div class="col-lg-12 L">
									<h4 class="text-uppercase Cat StaffText S1" onclick="StaffChange('img/staff/emi.jpg', 'Emi El Coordonatores Costin', 'Faceti loc ca vine nasu, naaasu, naaasu')"> Emi "El Coordonatores" Costin</h4>
									<h4 class="text-uppercase Cat StaffText S2" onclick="StaffChange('img/staff/berb.jpg','Antonio the DJ', 'Cand eram mic credeam ca ma cheama taci din gura')">Antonio</h4>
									<h4 class="text-uppercase Cat StaffText S3" onclick="StaffChange('img/staff/tomi.jpg', 'Tomi The Dog Whisperer', 'Io dresez')">Tomi</h4>
									<h4 class="text-uppercase Cat StaffText S4" onclick="StaffChange('img/staff/virga.jpg', 'Virga the DVD Maker', 'Mare designer Fun...Tastic')">Virga</h4>
									<h4 class="text-uppercase Cat StaffText S5" onclick="StaffChange('img/staff/stef.jpg', 'Ioana Stefanescu', '<3')">Ioana</h4>
									<h4 class="text-uppercase Cat StaffText S24" onclick="StaffChange('img/staff/andreu.jpg', 'Andreu Vasl *ehm ehm* Coventry', '???')">Andreu</h4>
								</div>

								<div class="col-lg-12 L">
									<h4 class="text-uppercase Cat StaffText S6">Max</h4>
									<h4 class="text-uppercase Cat StaffText S7">Zloti</h4>
									<h4 class="text-uppercase Cat StaffText S8">Bindi</h4>
									<h4 class="text-uppercase Cat StaffText S9">Bobo</h4>
									<h4 class="text-uppercase Cat StaffText S10">Nede</h4>
									<h4 class="text-uppercase Cat StaffText S11">Didi</h4>
								</div>

								<div class="col-lg-12 L">
									<h4 class="text-uppercase Cat StaffText S12">Victor</h4>
									<h4 class="text-uppercase Cat StaffText S13">Sofro</h4>
									<h4 class="text-uppercase Cat StaffText S14">Burduja</h4>
									<h4 class="text-uppercase Cat StaffText S15">Rafa</h4>
									<h4 class="text-uppercase Cat StaffText S16">Larisa</h4>
									<h4 class="text-uppercase Cat StaffText S17">Juliah</h4>
								</div>

								<div class="col-lg-12 L">
									<h4 class="text-uppercase Cat StaffText S18">Octav</h4>
									<h4 class="text-uppercase Cat StaffText S19">Mara</h4>
									<h4 class="text-uppercase Cat StaffText S20">Dinu</h4>
									<h4 class="text-uppercase Cat StaffText S21">Andi</h4>
									<h4 class="text-uppercase Cat StaffText S22">Maco</h4>
									<h4 class="text-uppercase Cat StaffText S23">Mara Suditu</h4>
								</div>
							<div class="StaffList_Buttons">
								<button type="button" class="btn btn-secondary Prev" onclick="ListChange(-1)">
									<-- </button>
										<button type="button" class="btn btn-secondary Next" onclick="ListChange(+1)">--></button>
							</div>
							<script type="text/javascript">
								var slideIndex=1;
								showDivs(slideIndex);

								function ListChange(n){
									showDivs(slideIndex+=n);
								} 

									function showDivs(n){
										var i;
										var x=document.getElementsByClassName("L");
										if(n>x.length){slideIndex=1;} 
										if(n<1){slideIndex=x.length;} 
										for(i=0;i<x.length;i++)
										{
											x[i].style.display="none";
										} 
										x[slideIndex-1].style.display="block";
									} 

										function StaffChange(mysource,myname,mytext){var StaffPhoto=$(".StaffPhoto");var StaffName=$(".StaffName");var StaffDesc=$(".StaffP");StaffPhoto.fadeOut(1);StaffName.fadeOut(1);StaffDesc.fadeOut(1);StaffPhoto.attr("src",mysource);StaffName.text(myname);StaffDesc.text(mytext);StaffPhoto.fadeIn(750);StaffName.fadeIn(750);StaffDesc.fadeIn(750);}
							</script>
						</div>
					</div>
				</div>
				<div style=" height: 100vh; border: 1px solid #9c7fa561; " class="col-lg-6 col-md-6 C2">
					<div class="contentHome_2">
						<div class="DoneList">
							<ul class="UtilityList">
								<li><i class="fas fa-check" style="color: green"></i>&nbsp;&nbsp;Available only for supervisors/teachers</li>
								<li><i class="fas fa-times" style="color: red"></i>&nbsp;&nbsp;Worksheet Picker</li>
								<li><i class="fas fa-check" style="color: green"></i>&nbsp;&nbsp;Contest Sign-Ups</li>
								<li><i class="fas fa-times" style="color: red"></i>&nbsp;&nbsp;Staff List</li>
							</ul>
							<div class="TechCont" style=" margin-top: 13vh; ">
								<div class="ProgTextCont">
									<h2 class="ProgText"> Built using :</h2>
								</div>
								<div class="ListCont">
									<div class="ProgList"><i class="fab fa-html5" style="color: #22b8cf"></i>  <i class="fab fa-css3-alt" style="color: #5c7cfa"></i>  <i class="fab fa-js" style="color: #ff922b"></i>  <i class="fab fa-php" style="color: yellow"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="contentWS_2">
						<p class="pageParagraph">Choose your worksheet here.</p>
						<div class="Food_Worksheets">
							<img src="https://ecdn.teacherspayteachers.com/thumbitem/FREE-Vowel-Combinations-Worksheet-oo-ea-ai-ou--1305381-1493997120/original-1305381-1.jpg" class="Slides_Food SlideSheet 1" alt="Sheet 1" onclick="printPage(1)"></img>
							<img src="https://s.twistynoodle.com/img/r/color-the-e-words/color-the-e-words/color-the-e-words_worksheet_png_468x609_q85.jpg?ctok=20150930114641" class="Slides_Food SlideSheet 2" alt="Sheet 2" onclick="printPage(2)"></img>
							<img src="http://englishlinx.com/images/Write-the-Antonym-Worksheet.png" class="Slides_Food SlideSheet 3" alt="Sheet 3" onclick="printPage(3)"></img>
							<img src="http://englishlinx.com/images/Points-of-View-Worksheet.png" class="Slides_Food SlideSheet 4" alt="Sheet 4" onclick="printPage(4)"></img>
						</div>
						<div class="Bingo_Worksheets">
							<img src="https://www.havefunteaching.com/wp-content/uploads/2014/08/a-an-worksheet.jpg" class="Slides_Food SlideSheet" alt="Sheet 1"></img>
							<img src="https://www.havefunteaching.com/wp-content/uploads/2014/08/a-an-worksheet.jpg" class="Slides_Food SlideSheet" alt="Sheet 2"></img>
							<img src="https://www.havefunteaching.com/wp-content/uploads/2014/08/a-an-worksheet.jpg" class="Slides_Food SlideSheet" alt="Sheet 3"></img>
							<img src="https://www.havefunteaching.com/wp-content/uploads/2014/08/a-an-worksheet.jpg" class="Slides_Food SlideSheet" alt="Sheet 4"></img>
						</div>
						<div class="Travel_Worksheets">
							<img src="https://ecdn.teacherspayteachers.com/thumbitem/FREE-Vowel-Combinations-Worksheet-oo-ea-ai-ou--1305381-1493997120/original-1305381-1.jpg" class="Slides_Food SlideSheet" alt="Sheet 1"></img>
							<img src="https://s.twistynoodle.com/img/r/color-the-e-words/color-the-e-words/color-the-e-words_worksheet_png_468x609_q85.jpg?ctok=20150930114641" class="Slides_Food SlideSheet" alt="Sheet 2"></img>
							<img src="http://englishlinx.com/images/Write-the-Antonym-Worksheet.png" class="Slides_Food SlideSheet" alt="Sheet 3"></img>
							<img src="http://englishlinx.com/images/Points-of-View-Worksheet.png" class="Slides_Food SlideSheet" alt="Sheet 4"></img>
						</div>
						<div class="Anim_Worksheets">
							<img src="https://ecdn.teacherspayteachers.com/thumbitem/FREE-Vowel-Combinations-Worksheet-oo-ea-ai-ou--1305381-1493997120/original-1305381-1.jpg" class="Slides_Food SlideSheet" alt="Sheet 1"></img>
							<img src="https://s.twistynoodle.com/img/r/color-the-e-words/color-the-e-words/color-the-e-words_worksheet_png_468x609_q85.jpg?ctok=20150930114641" class="Slides_Food SlideSheet" alt="Sheet 2"></img>
							<img src="http://englishlinx.com/images/Write-the-Antonym-Worksheet.png" class="Slides_Food SlideSheet" alt="Sheet 3"></img>
							<img src="http://englishlinx.com/images/Points-of-View-Worksheet.png" class="Slides_Food SlideSheet" alt="Sheet 4"></img>
						</div>
						<div class="Wet_Worksheets">
							<img src="https://ecdn.teacherspayteachers.com/thumbitem/FREE-Vowel-Combinations-Worksheet-oo-ea-ai-ou--1305381-1493997120/original-1305381-1.jpg" class="Slides_Food SlideSheet" alt="Sheet 1"></img>
							<img src="https://s.twistynoodle.com/img/r/color-the-e-words/color-the-e-words/color-the-e-words_worksheet_png_468x609_q85.jpg?ctok=20150930114641" class="Slides_Food SlideSheet" alt="Sheet 2"></img>
							<img src="http://englishlinx.com/images/Write-the-Antonym-Worksheet.png" class="Slides_Food SlideSheet" alt="Sheet 3"></img>
							<img src="http://englishlinx.com/images/Points-of-View-Worksheet.png" class="Slides_Food SlideSheet" alt="Sheet 4"></img>
						</div>
						<div class="Nat_Worksheets">
							<img src="https://ecdn.teacherspayteachers.com/thumbitem/FREE-Vowel-Combinations-Worksheet-oo-ea-ai-ou--1305381-1493997120/original-1305381-1.jpg" class="Slides_Food SlideSheet" alt="Sheet 1"></img>
							<img src="https://s.twistynoodle.com/img/r/color-the-e-words/color-the-e-words/color-the-e-words_worksheet_png_468x609_q85.jpg?ctok=20150930114641" class="Slides_Food SlideSheet" class="Slides_Food SlideSheet" alt="Sheet 2"></img>
							<img src="http://englishlinx.com/images/Write-the-Antonym-Worksheet.png" class="Slides_Food SlideSheet" class="Slides_Food SlideSheet" alt="Sheet 3"></img>
							<img src="http://englishlinx.com/images/Points-of-View-Worksheet.png" class="Slides_Food SlideSheet" class="Slides_Food SlideSheet" alt="Sheet 4"></img>
						</div>
						<div class="Gramm_Worksheets">
							<img src="https://ecdn.teacherspayteachers.com/thumbitem/FREE-Vowel-Combinations-Worksheet-oo-ea-ai-ou--1305381-1493997120/original-1305381-1.jpg" class="Slides_Food SlideSheet" alt="Sheet 1"></img>
							<img src="https://s.twistynoodle.com/img/r/color-the-e-words/color-the-e-words/color-the-e-words_worksheet_png_468x609_q85.jpg?ctok=20150930114641" class="Slides_Food SlideSheet" alt="Sheet 2"></img>
							<img src="http://englishlinx.com/images/Write-the-Antonym-Worksheet.png" class="Slides_Food SlideSheet" alt="Sheet 3"></img>
							<img src="http://englishlinx.com/images/Points-of-View-Worksheet.png" class="Slides_Food SlideSheet" alt="Sheet 4"></img>
						</div>
						<div class="Search_Worksheets">
							<img src="https://ecdn.teacherspayteachers.com/thumbitem/FREE-Vowel-Combinations-Worksheet-oo-ea-ai-ou--1305381-1493997120/original-1305381-1.jpg" class="Slides_Food SlideSheet" alt="Sheet 1"></img>
							<img src="https://s.twistynoodle.com/img/r/color-the-e-words/color-the-e-words/color-the-e-words_worksheet_png_468x609_q85.jpg?ctok=20150930114641" class="Slides_Food SlideSheet" alt="Sheet 2"></img>
							<img src="http://englishlinx.com/images/Write-the-Antonym-Worksheet.png" class="Slides_Food SlideSheet" alt="Sheet 3"></img>
							<img src="http://englishlinx.com/images/Points-of-View-Worksheet.png" class="Slides_Food SlideSheet" alt="Sheet 4"></img>
						</div>
						<script type="text/javascript">
							function printPage(divElements){var $printerDiv=$('<div class="printContainer"></div>');$printerDiv.html(divElements);$('body').append($printerDiv).addClass("printingContent");window.print();$printerDiv.remove();$('body').removeClass("printingContent");}
						</script>
					</div>
					<div class="contentSU_2">
						<iframe name="formRedirect" style="display: none;"></iframe>
						<form style=" margin-top: 25%; " class="DanceForm" action="assets/php/myphp.php" method="POST" target="formRedirect">
							<h2 class="DanceText"> Dancing Contest</h2>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
								<div class="col-sm-10">
									<input name="name" type="text" class="form-control" id="inputNume1" placeholder="Name">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Song</label>
								<div class="col-sm-10">
									<input name="song" type="text" class="form-control" id="inputSong1" placeholder="Song (eg: TNT)">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Artist</label>
								<div class="col-sm-10">
									<input name="artist" type="text" class="form-control" id="inputArtist1" placeholder="Artist (eg: AC DC)">
								</div>
							</div>
							<div class="form-group row FBr">
								<div class="col-sm-10">
									<input name="other" type="text" class="form-control otherInput" id="inputOther1" placeholder="Other">
								</div>
							</div>
							<div class="form-group row FBr">
								<div class="col-sm-10 FBt">
									<div class="FormButtonContainer">
										<button type="submit" name="submit" class="btn btn-primary CSubmit" onclick="SubmitForm(document.getElementById('inputNume1').value,document.getElementById('inputSong1').value,document.getElementById('inputArtist1').value)">Sign Up For Contest</button>
									</div>
									<script type="text/javascript">
										function SubmitForm(a,b,c){if(a!=''&&b!=''&&c!=''){alert("Contender signed-up ! Close this alert and sign another one if you need to !");}else{alert("Some of the fields are empty, complete them and try again.");}}
									</script>
								</div>
							</div>
						</form>
						<form style=" margin-top: 25%; " class="KaraokeForm" action="assets/php/Karaoke.php" method="POST" target="formRedirect">
							<h2 class="DanceText"> Karaoke Contest</h2>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
								<div class="col-sm-10">
									<input name="name" type="text" class="form-control" id="inputNume2" placeholder="Name">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Song</label>
								<div class="col-sm-10">
									<input name="song" type="text" class="form-control" id="inputSong2" placeholder="Song (eg: TNT)">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Artist</label>
								<div class="col-sm-10">
									<input name="artist" type="text" class="form-control" id="inputArtist2" placeholder="Artist (eg: AC DC)">
								</div>
							</div>
							<div class="form-group row FBr">
								<div class="col-sm-10">
									<input type="text" class="form-control otherInput" id="inputOther2" placeholder="Other" name="other">
								</div>
							</div>
							<div class="form-group row FBr">
								<div class="col-sm-10 FBt">
									<div class="FormButtonContainer">
										<button type="submit" class="btn btn-primary CSubmit" name="submit" onclick="SubmitForm(document.getElementById('inputNume2').value,document.getElementById('inputSong2').value,document.getElementById('inputArtist2').value)">Sign Up For Contest</button>
									</div>
								</div>
							</div>
						</form>
						<form style=" margin-top: 25%; " class="MMForm" action="assets/php/MM.php" method="POST" target="formRedirect">
							<h2 class="DanceText"> Miss & Mister Contest</h2>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
								<div class="col-sm-10">
									<input name="name" type="text" class="form-control" id="inputNume3" placeholder="Name">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Song</label>
								<div class="col-sm-10">
									<input name="song" type="text" class="form-control" id="inputSong3" placeholder="Song (eg: TNT)">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">Artist</label>
								<div class="col-sm-10">
									<input name="artist" type="text" class="form-control" id="inputArtist3" placeholder="Artist (eg: AC DC)">
								</div>
							</div>
							<div class="form-group row FBr">
								<div class="col-sm-10">
									<input name="other" type="text" class="form-control otherInput" id="inputOther3" placeholder="Other (eg: Singing / Dancing / etc.)">
								</div>
							</div>
							<div class="form-group row FBr">
								<div class="col-sm-10 FBt">
									<div class="FormButtonContainer">
										<button type="submit" class="btn btn-primary CSubmit" name="submit" onclick="SubmitForm(document.getElementById('inputNume3').value,document.getElementById('inputSong3').value,document.getElementById('inputArtist3').value)">Sign Up For Contest</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="contentContact_2">
						<div class="StaffInfo">
							<img class="StaffPhoto" src="https://logopond.com/logos/ca5ecda8001a373f000baaa1886f529a.png"></img>
							<br>
							<h2 class="text-uppercase StaffName" style="text-decoration: underline;margin-top: -5%;">Staff Information</h2>
							<p class="StaffP">You can find here information about our supervisors, along with a meaningful photo of them.
								<br>
								<br>In addition, some of them might have an email address attached to their profile or even a phone number.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer style=" margin-left: 0px; margin-right: 0px; margin-top: 0px !important; " class="page-footer font-small blue pt-4 mt-4">
			<div class="container-fluid text-center text-md-left">
				<div class="row">
					<div class="col-md-6">
						<h5 class="text-uppercase"><strong>Extras</strong></h5>
						<p>Made for the teachers and the supervisors of the "English is Fun...Tastic" camp.</p>
					</div>
					<div class="col-md-3">
						<h5 class="text-uppercase"><strong>Links</strong></h5>
						<ul class="list-unstyled">
							<li> <a class="footer-link Home" href="#!">Home</a>
							</li>
							<li> <a class="footer-link Shop" href="#!">Worksheets</a>
							</li>
							<li> <a class="footer-link Learn" href="#!">Staff</a>
							</li>
							<li> <a class="footer-link CSU" href="#!">Contest Sign-Ups</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<h5 class="text-uppercase"><strong>Social Media</strong></h5>
						<ul class="list-unstyled">
							<li> <a class="footer-social" href="#"><i style="font-size: 4vh;" class="fab fa-facebook-square"></i></a>  <span>&nbsp;&nbsp;Like me on FB</span>
							</li>
							<li> <a class="footer-social" href="#"><i style="font-size: 4vh;" class="fab fa-instagram"></i></a>  <span>&nbsp;&nbsp;Follow me on Instagram</span>
							</li>
							<li> <a class="footer-social" href="#"><i style="font-size: 4vh;" class="fab fa-github-square"></i></a>  <span>&nbsp;&nbsp;Reach me on Github</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright py-3 text-center">© 2018 Copyright: <a href="#"> Fun...Tastic Portal - Berbece Razvan </a>
			</div>
		</footer>
	</div>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/mdb.min.js"></script>
	<script type="text/javascript" async src="assets/js/WScript.js"></script>
	<script type="text/javascript" async src="assets/js/ajaxRequest.js"></script>
</body>

</html>
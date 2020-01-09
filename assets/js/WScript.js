$(document).ready(function () {
$(this).scrollTop(0);
$("body").css("overflow", "hidden");

//UL Items for "active" class
var li_Home=$(".li1");
var li_WS=$(".li2");
var li_SU = $(".li3");
var li_Contact=$(".li4");

// Variables for Pages
var ContentHome_1 = $(".contentHome_1");
var ContentHome_2 = $(".contentHome_2");

var ContentWS_1 = $(".contentWS_1");
var ContentWS_2 = $(".contentWS_2");

var ContentContact_1 = $(".contentContact_1");
var ContentContact_2 = $(".contentContact_2");

var ContentSU_1 = $(".contentSU_1");
var ContentSU_2 = $(".contentSU_2");

//Hidden Worksheets
var FoodButton_File = $(".Food_Worksheets");  
FoodButton_File.hide();

var BingoButton_File = $(".Bingo_Worksheets"); 
BingoButton_File.hide();

var TravelButton_File = $(".Travel_Worksheets"); 
TravelButton_File.hide();

var AnimButton_File = $(".Anim_Worksheets"); 
AnimButton_File.hide();

var WetButton_File = $(".Wet_Worksheets"); 
WetButton_File.hide();

var NatButton_File = $(".Nat_Worksheets"); 
NatButton_File.hide();

var GrammButton_File = $(".Gramm_Worksheets"); 
GrammButton_File.hide();

var SearchButton_File = $(".Search_Worksheets"); 
SearchButton_File.hide();

// Variables for Categories
var Food = $(".Food"); 
var Bingo = $(".Bingo");
var Travel = $(".Travel");
var Anim = $(".Anim");
var Wet = $(".Wet");
var Nat = $(".Nat");
var Gramm = $(".Gramm");
var Search = $(".Search");

function Worksheet_Switch(a,b,c,d,e,f,g,h) {
	a.fadeIn(500);

	b.hide();
	c.hide();
	d.hide();
	e.hide();
	f.hide();
	g.hide();
	h.hide();
}

// Variables for Contest Sign-Ups

var DanceButton = $(".Dance");
var KaraButton = $(".Kara");
var MButton = $(".MM");

function ShowForm(form1,form2,form3){
	form1.fadeIn(700);

	form2.fadeOut(200);
	form3.fadeOut(200);
}

// Variables for Contest Sign-Up Forms

var DanceForm = $(".DanceForm");
var KaraForm = $(".KaraokeForm"); KaraForm.hide();
var MMForm = $(".MMForm"); MMForm.hide();

DanceButton.on("click", function(){
	ShowForm(DanceForm,KaraForm,MMForm)
});
KaraButton.on("click", function(){
	ShowForm(KaraForm,MMForm,DanceForm)
});
MButton.on("click", function(){
	ShowForm(MMForm,KaraForm,DanceForm)
});

Food.on("click", function(){
	Worksheet_Switch(
	FoodButton_File,BingoButton_File,
	TravelButton_File,AnimButton_File,
	WetButton_File,NatButton_File,
	GrammButton_File,SearchButton_File)

});

Bingo.on("click", function(){
	Worksheet_Switch(
	BingoButton_File,FoodButton_File,
	TravelButton_File,AnimButton_File,
	WetButton_File,NatButton_File,
	GrammButton_File,SearchButton_File)
});

Travel.on("click", function(){
	Worksheet_Switch(
	TravelButton_File,BingoButton_File,
	FoodButton_File,AnimButton_File,
	WetButton_File,NatButton_File,
	GrammButton_File,SearchButton_File)
});

Anim.on("click", function(){
	Worksheet_Switch(
	AnimButton_File,BingoButton_File,
	TravelButton_File,FoodButton_File,
	WetButton_File,NatButton_File,
	GrammButton_File,SearchButton_File)
});

Wet.on("click", function(){
	Worksheet_Switch(
	WetButton_File,BingoButton_File,
	TravelButton_File,AnimButton_File,
	FoodButton_File,NatButton_File,
	GrammButton_File,SearchButton_File)
});

Nat.on("click", function(){
	Worksheet_Switch(
	FoodButton_File,BingoButton_File,
	TravelButton_File,AnimButton_File,
	WetButton_File,FoodButton_File,
	GrammButton_File,SearchButton_File)
});

Gramm.on("click", function(){
	Worksheet_Switch(
	GrammButton_File,BingoButton_File,
	TravelButton_File,AnimButton_File,
	WetButton_File,NatButton_File,
	FoodButton_File,SearchButton_File)
});

Search.on("click", function(){
	Worksheet_Switch(
	SearchButton_File,BingoButton_File,
	TravelButton_File,AnimButton_File,
	WetButton_File,NatButton_File,
	GrammButton_File,FoodButton_File)
});

// Hidden Content
ContentContact_1.hide();
ContentContact_2.hide();
ContentWS_1.hide();
ContentWS_2.hide();
ContentSU_1.hide();
ContentSU_2.hide();

var StaffL1 = $(".L1");
var StaffL2 = $(".L2");
StaffL2.hide();


// Variables for Page Buttons
var Home = $(".Home");
var WS = $(".WS");
var Contact = $(".Contact");
var SU = $(".SU");

var Slides = $(".Slideshow");

Home.on("click", HomePage);
function HomePage() {
	li_Home.addClass("active");
	li_WS.removeClass("active");
	li_Contact.removeClass("active");
	li_SU.removeClass("active");

	Slides.fadeIn(100);

	ContentHome_1.fadeIn(500);
	ContentHome_2.fadeIn(500);

	ContentContact_1.hide();
	ContentContact_2.hide();
	ContentWS_1.hide();
	ContentWS_2.hide();
	ContentSU_1.hide();
	ContentSU_2.hide();
}

WS.on("click", WSpage);
function WSpage() {
	li_WS.addClass("active");
	li_Home.removeClass("active");
	li_Contact.removeClass("active");
	li_SU.removeClass("active");

	Slides.hide();

	ContentWS_1.fadeIn(500);
	ContentWS_2.fadeIn(500);

	ContentContact_1.hide();
	ContentContact_2.hide();
	ContentHome_1.hide();
	ContentHome_2.hide();
	ContentSU_1.hide();
	ContentSU_2.hide();
}

Contact.on("click", ContactPage);
function ContactPage() {
	li_Contact.addClass("active");
	li_WS.removeClass("active");
	li_Home.removeClass("active");
	li_SU.removeClass("active");

	Slides.hide();

	ContentContact_1.fadeIn(500);
	ContentContact_2.fadeIn(500);

	ContentHome_1.hide();
	ContentHome_2.hide();
	ContentWS_1.hide();
	ContentWS_2.hide();
	ContentSU_1.hide();
	ContentSU_2.hide();
}
var jumboButton = $(".jumboBtn");
jumboButton.on("click", ContactPage);

SU.on("click", SUPage)
function SUPage() {
	li_SU.addClass("active");
	li_WS.removeClass("active");
	li_Home.removeClass("active");
	li_Contact.removeClass("active");

	Slides.hide();

	ContentSU_1.fadeIn(500);
	ContentSU_2.fadeIn(500);

	ContentHome_1.hide();
	ContentHome_2.hide();
	ContentWS_1.hide();
	ContentWS_2.hide();
	ContentContact_1.hide();
	ContentContact_2.hide();
}

// Slideshow Carousel

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 6000);    
}

});
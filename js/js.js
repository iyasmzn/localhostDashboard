
function animateH() {
	var title = document.getElementById('titleHeadH1');
		title.style.opacity = "0.7";
		title.style.transitionDelay = "0.4s";
	var box1 = document.getElementById('homeBox1');
	var box2 = document.getElementById('homeBox2');
		box1.style.transform = "none";
		box2.style.transform = "none";
		box1.style.transitionDelay = "0.4s";
		box2.style.transitionDelay = "0.4s";
		box1.style.opacity = "1";
		box2.style.opacity = "1";
	var headerImg = document.getElementById('headerImg').style;
	if (headerImg.height == "36.603221083455345vw") {
		headerImg.transition 	= "all 0.5s";
		headerImg.height 		= "6.603221083455345vw";
	}
	else {
		headerImg.height 		= "36.603221083455345vw";
		headerImg.transition 	= "all 0.5s";
	}
	// var headerImg = document.getElementById('headerImg').style;
	// 	headerImg.transition 	= "all 0.5s";
	// 	headerImg.height 		= "36.603221083455345vw";
}
function animateWD() {
			var img 		= document.getElementById('desIcon');
			img.style.opacity 		= "1";
			var headerImg 	= document.getElementById('headerImg').style;
			// headerImg.transition 	= "all 0.3s";
			headerImg.height 		= "26.6vw";
			var box1 		=	 document.getElementById('desBox1').style;
			box1.opacity 			= "1";
			box1.transform 			= "none";
			box1.transitionDelay	= "0.3s";
		}		

function animateG() {
	var img = document.getElementById('gitIcon').style;
	img.opacity = "1";
	var headerImg = document.getElementById('headerImg').style;
	headerImg.height 		= "26.6vw";
	// headerImg.backgroundImage	= "url('../image/background.jpg')";	
	var box1 = document.getElementById('gitBox1').style;
	box1.opacity = "1";
	box1.transform = "none";
}
function animateU() {
	var img 	= document.getElementById('ujianIcon');
	img.style.opacity 		= "1";
	var headerImg = document.getElementById('headerImg').style;
	headerImg.height 		= "26.6vw";
	// headerImg.backgroundImage	= "url('../image/background.jpg')";
	var box1 	= document.getElementById('ujianBox1').style;
	box1.opacity 				=	"1";
	box1.transform 			= "none";
	box1.transitionDelay= "0.3s";
}	
function dropside() {
	var card = document.getElementById('ujianNone').style;
	var a1 = document.getElementById('asd1').style;
	var a2 = document.getElementById('asd2').style;
	var a3 = document.getElementById('asd3').style;
	if (card.opacity == "1") {	
		card.left 		= "70%";
		card.opacity = "0";
		card.boxShadow = "none";
		a1.color 			= "darkred";
		a2.color 			= "darkred";
		a3.color 			= "darkred";
	}
	else {
		card.left 		= "100%";
		card.opacity 	= "1";
		card.boxShadow = "0px 2px 3px #444";
		a1.color 			= "white";
		a2.color 			= "white";
		a3.color 			= "white";
	}
}
function asd(x) {
	x.style.color 						= "darkred";
	x.style.transitionDelay 	= "0s";
	x.style.trasitionDuration = "0.2s";
}
function dsa(x) {
	x.style.color 						= "white";	
	x.style.transitionDelay 	= "0s";
	x.style.trasitionDuration = "0.2s";
}
function animateP() {
	var img 	= document.getElementById('proIcon');
	img.style.opacity 		= "1";
	var headerImg = document.getElementById('headerImg');
	headerImg.style.height 		= "26.6vw";
	// headerImg.style.backgroundImage	= "url('../image/background.jpg')";
	var box1 	= document.getElementById('proBox1');
	var box2 	= document.getElementById('proBox2');
	var box3 	= document.getElementById('proBox3');
	box1.style.opacity 		= "1";
	box2.style.opacity 		= "1";
	box3.style.opacity 		= "1";
	box1.style.transform 	= "none";
	box2.style.transform 	= "none";
	box2.style.transition 	= "box-shadow 0.7s,transform 0.7s 0.6s,opacity 0.7s 0.6s";
	box3.style.transition 	= "box-shadow 0.7s,transform 0.7s 0.3s,opacity 0.7s 0.3s";
	box3.style.transform 	= "none";
}
function animateJav() {
	var img 	= document.getElementById('javIcon');
	img.style.opacity 		= "1";
	var headerImg = document.getElementById('headerImg');
	headerImg.style.height 		= "26.6vw";
	// headerImg.style.backgroundImage	= "url('../image/background.jpg')";
	var box1 	= document.getElementById('javBox1');
	var box2 	= document.getElementById('javBox2');
	box1.style.opacity 		= "1";
	box2.style.opacity 		= "1";
	box1.style.transform 	= "none";
	box2.style.transform 	= "none";
	box2.style.transition 	= "box-shadow 0.7s,transform 0.7s 0.3s,opacity 0.7s 0.3s";
}
/* Function that creates a button to add more text information on the Anime page */
function readmore() {
  var read = document.getElementById("read");
  var moreText = document.getElementById("now");
  var btnText = document.getElementById("myBtn");

  if (read.style.display === "none") {
    read.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    read.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

function readmore1() {
  var read = document.getElementById("read1");
  var moreText = document.getElementById("now1");
  var btnText = document.getElementById("myBtn1");

  if (read.style.display === "none") {
    read.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    read.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

function readmore2() {
  var read = document.getElementById("read2");
  var moreText = document.getElementById("now2");
  var btnText = document.getElementById("myBtn2");

  if (read.style.display === "none") {
    read.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    read.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

function readmore3() {
  var read = document.getElementById("read3");
  var moreText = document.getElementById("now3");
  var btnText = document.getElementById("myBtn3");

  if (read.style.display === "none") {
    read.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    read.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

function readmore4() {
  var read = document.getElementById("read4");
  var moreText = document.getElementById("now4");
  var btnText = document.getElementById("myBtn4");

  if (read.style.display === "none") {
    read.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    read.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

function readmore5() {
  var read = document.getElementById("read5");
  var moreText = document.getElementById("now5");
  var btnText = document.getElementById("myBtn5");

  if (read.style.display === "none") {
    read.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    read.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}


/* JavaScript code that serves for the slideshow on the clothing page to work */
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

/* Function that serves to create a contact form, saves the information and displays it on the screen after the user presses submit */
function contactform()
{
  var selecteddata="";
  selecteddata= selecteddata+ " " + document.getElementById("name").value;
  selecteddata= selecteddata+ " " + document.getElementById("last").value;
	selecteddata= selecteddata+ " " + document.getElementById("email").value;

  if (document.getElementById("male").checked==true)
		selecteddata= selecteddata+ " " + document.getElementById("male").value;
		
  if (document.getElementById("female").checked==true)
		selecteddata= selecteddata+ " " + document.getElementById("female").value;
		selecteddata= selecteddata+ " " + document.getElementById("comment").value;
		selecteddata= selecteddata+ " " + document.getElementById("help").value;

  if (document.getElementById("agree").checked==true)
		selecteddata= selecteddata+ " " + document.getElementById("agree").value;
		
	alert(selecteddata);
   
}
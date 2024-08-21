<!DOCTYPE html>
<html>
<title>FTS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}

/* for display words in slide picture to be inline*/
span {
  display: block;
}

/* for back to top arrow */
.back-to-top {
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #000;
  color: #fff;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
  opacity: 0;
  transition: opacity 0.2s ease-in-out;
}

.back-to-top.show {
  opacity: 1;
  transition: opacity 0.2s ease-in-out;
}

.back-to-top i {
  font-size: 20px;
}

.back-to-top:hover {
  background-color: #555;
}

/*for grid style on Our Approach*/
.grid-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 30px;
  padding: 30px;
}

.grid-item {
  width: 100%;
}

@media screen and (max-width: 768px) {
  .grid-container {
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  }
}

/*for clock*/
.clock {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  font-size: 2rem;
  font-weight: bold;
}

.time {
  margin-bottom: 0.5rem;
}

.date {
  font-size: 1rem;
  opacity: 0.8;
}

</style>


<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-large w3-light-grey">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block">HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#WHAT WE OFFER" class="w3-button w3-block">WHAT WE OFFER</a>
    </div>
    <div class="w3-col s3">
      <a href="#OUR APPROACH" class="w3-button w3-block">OUR APPROACH</a>
    </div>
    <div class="w3-col s3">
      <a href="#CONTACT" class="w3-button w3-block">CONTACT</a>
    </div>
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">
    
    <div class="clock">
  <span class="time"></span>
  <span class="date"></span>
</div>
<script>
function updateTime() {
  const now = new Date();
  const time = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', second: '2-digit' });
  const date = now.toLocaleDateString([], { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });

  const timeElement = document.querySelector('.time');
  const dateElement = document.querySelector('.date');

  timeElement.textContent = time;
  dateElement.textContent = date;
}

setInterval(updateTime, 1000);


</script>

  <div class="w3-panel">
    <h1><b>FIQ TECH SOLUTIONS</b></h1>
    <p>FUTURE | INNOVATIVE | QUALITY</p>
  </div>







  <!-- Slideshow -->
 <div class="w3-container">
  <div class="w3-display-container mySlides">
    <img src="ajax/sld1.jpg" style="width:100%">
    <div class="w3-display-middle w3-container w3-padding-32">
      <span class="w3-white w3-padding-large w3-animate-bottom">AUDIT & CONSULTANCY</span>
    </div>
  </div>
  <div class="w3-display-container mySlides">
    <img src="ajax/sld2.jpg" style="width:100%">
    <div class="w3-display-middle w3-container w3-padding-32">
      <span class="w3-white w3-padding-large w3-animate-bottom">POWER MANAGEMENT SOLUTIONS</span>
    </div>
  </div>
  <div class="w3-display-container mySlides">
    <img src="ajax/sld3.jpg" style="width:100%">
    <div class="w3-display-middle w3-container w3-padding-32">
      <span class="w3-white w3-padding-large w3-animate-bottom">AUTOMATION & INTEGRATION SOLUTION</span>
    </div>
  </div>

  <!-- Slideshow next/previous buttons -->
  <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
    <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
    <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>

    <div class="w3-center">
      <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
      <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
      <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    </div>
  </div>
</div>
  
  
  
  
  
  <!-- Grid -->
  
<div class="w3-row w3-container" id="WHAT_WE_OFFER">
  <div class="w3-padding-64">
    <h2 class="w3-center w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">WHAT WE OFFER</h2>
  </div>
  
    <div class="w3-col l3 m6 w3-black w3-container w3-padding-16">
    <h3>AUDIT & CONSULTANCY</h3>
    <p>Risk assessments, security consulting, and sustainability audits to improve compliance, reduce risk, and optimize operations.</p>
  </div>
  
    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-16">
    <h3>POWER MANAGEMENT SOLUTIONS</h3>
    <p>Energy audits, consulting services, lighting systems, and smart grid technologies to reduce energy costs and improve sustainability.</p>
  </div>

  <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
    <h3>MONITORING SOLUTIONS</h3>
    <p>Real-time data and analytics tools, hardware sensors and monitoring equipment to optimize processes and reduce downtime.</p>
  </div>



  <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-16">
    <h3>AUTOMATION & INTEGRATION SOLUTION</h3>
    <p>Machine learning, software integrations, and APIs to streamline processes, improve efficiency, and reduce errors.</p>
  </div>


</div>








  <!-- Grid -->
  
  <!--
  <div class="w3-row-padding" id="plans">
    <div class="w3-center w3-padding-64">
      <h3>Pricing Plans</h3>
      <p>Choose a pricing plan that fits your needs.</p>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16"><b>10GB</b> Storage</li>
        <li class="w3-padding-16"><b>10</b> Emails</li>
        <li class="w3-padding-16"><b>10</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
        <li class="w3-padding-16"><b>25GB</b> Storage</li>
        <li class="w3-padding-16"><b>25</b> Emails</li>
        <li class="w3-padding-16"><b>25</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
        <li class="w3-padding-16"><b>50GB</b> Storage</li>
        <li class="w3-padding-16"><b>50</b> Emails</li>
        <li class="w3-padding-16"><b>50</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
-->





  <!-- Grid -->
<div class="grid-container">
  <div class="grid-item">
    <div class="w3-card-4">
      <!--<img src="ajax/oa1.jpg" alt="Mike" style="width:100%">-->
      <div class="w3-container">
        <h3>ANALYSIS</h3>
        <p> Our analysis services involve data gathering, reviewing existing designs, conducting experiments, and analyzing data to identify solutions that meet our clients' needs.</p>
      </div>
    </div>
  </div>
  <div class="grid-item">
    <div class="w3-card-4">
      <div class="w3-container">
        <h3>DESIGN</h3>
        <p>Our design services involve developing a detailed plan for the project, creating schematics, models, and prototypes to ensure feasibility, and meeting all requirements.</p>
      </div>
    </div>
  </div>
  <div class="grid-item">
    <div class="w3-card-4">
      <div class="w3-container">
        <h3>IMPLEMENTATION</h3>
        <p>Our implementation services involve building and assembling the components of the project, involving multiple engineering discipline, to ensure successful delivery.</p>
      </div>
    </div>
  </div>
  <div class="grid-item">
    <div class="w3-card-4">
      <div class="w3-container">
        <h3>FACTORY TESTING</h3>
        <p>Our factory testing services thoroughly test the project to ensure it meets all specifications and is safe for use before installation in the field.</p>
      </div>
    </div>
  </div>
  <div class="grid-item">
    <div class="w3-card-4">
      <div class="w3-container">
        <h3>FIELD INSTALLATION</h3>
        <p>Our field installation services oversee the correct installation of the project and ensure that all components are properly installed and connected.</p>
      </div>
    </div>
  </div>
  <div class="grid-item">
    <div class="w3-card-4">
      <div class="w3-container">
        <h4>COMMISSIONING & FIELD TESTING</h4>
        <p>Our commissioning and field testing services involve testing the project in real-world conditions to verify that it works as expected and to identify and resolve any issues that arise.</p>
      </div>
    </div>
  </div>
</div>






  <!-- Contact -->
<div class="w3-center w3-padding-64" id="CONTACT">
  <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact Us</span>
</div>

<form class="w3-container" action="https://api.whatsapp.com/send" method="post" target="_blank">
  <div class="w3-section">
    <label>Name</label>
    <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="text" required>
  </div>
  <div class="w3-section">
    <label>Email</label>
    <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="email" required>
  </div>
  <div class="w3-section">
    <label>Subject</label>
    <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="subject" required>
  </div>
  <div class="w3-section">
    <label>Message</label>
    <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="body" required>
  </div>
  <a href="https://wa.me/60182662432/?text=Name%3A%20%0D%0AEmail%3A%20%0D%0ASubject%3A%20%0D%0AMessage%3A%20" class="w3-button w3-block w3-black">Send</a>
</form>


</div>


<!-- back to top function -->
<a href="#" class="back-to-top w3-button w3-black w3-margin">
  <i class="fa fa-arrow-up"></i>
</a>

<script>
  window.addEventListener('scroll', function() {
  const backToTopButton = document.querySelector('.back-to-top');
  if (window.pageYOffset > 100) {
    backToTopButton.classList.add('show');
  } else {
    backToTopButton.classList.remove('show');
  }
});

document.querySelector('.back-to-top').addEventListener('click', function(event) {
  event.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});

</script>




<!-- Footer -->

<footer class="w3-container w3-padding-12 w3-light-grey w3-center">
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="http://117.53.155.184/~ioscout/HomeTest" title="W3.CSS" target="_blank" class="w3-hover-text-green">FTS</a></p>
</footer>



<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>

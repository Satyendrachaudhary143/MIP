<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>satyendra</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="res.css">
    <link rel="stylesheet" href="res2.css">
</head>
<body>
    <header>
      <div class="header">
        <h1>Satyendra chaudhary</h1>
        <nav>
            <a href="">Home</a>
            <a href="#about_p">About</a>
            <a href="#service_p">Sevice</a>
            <a href="#project_p">Project</a>
            <a href="#contact_us_p">Contact Us</a>
        </nav>
      </div>
    </header>
<div class="ic">
  <i class="fa fa-bars"></i>
</div>
    <main>
   <section class="contaner_home">
   
    <div class="left">
     
      <div class="leftsession">
        <h1> Hi, Myself <br> <span>Satyendra Chaudhary</span></h1>
         <span>And i am a </span>
         
         <span id="element"></span>
     </div>

     <p>Hi, i am satyendra chaudhary and i am a web developer and app developer. we developed website by HTML, css, javascript, jquery, ajax, bootstrap, php, mangoDB, Express,react,and node .
      And i am a full stack java developer we developed app by java and kotlin .</p> 
      <div class="icon">
     <a href="https://wa.me/918840859444"><i class="fa-brands fa-whatsapp"></i></a>
      <a href="https://www.facebook.com/profile.php?id=100044691802062"><i class="fa-brands fa-facebook"></i></a>
      <a href="https://www.instagram.com/satyendrachaudhary143?igsh=YzljYTk1ODg3Zg=="><i class="fa-brands fa-instagram"></i></a>
      </div>
       <button>Download cv</button>
        

    </div>


    <div class="right">

        <!--image profile -->
        <div class="profile">
          <img src="IMG_20240416_115519_826-removebg.png" alt="">
       </div>
        <!--end profile-->

    </div>

   </section>




    <!--section for about-->
<section class="abt" id="about_p">
<img src="IMG_20240416_115519_826-removebg.png" alt="">
  <div>
<h1>About <span>Me</span></h1>
<h4>Full stack developer</h4>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora inventore dolorem veniam, illo, magnam itaque voluptatibus odit, aut reprehenderit fuga dicta harum dolor totam exercitationem maxime architecto laudantium qui rerum.</p>
<button>Read more</button>
  </div>
</section>

    <!--section for about-->


<!--services session-->
<section class="service" id="service_p">
  <h1>My Services</h1>
  <div class="services_s">


<div class="web_dev">
  <i class="fa fa-code ab" aria-hidden="true" ></i>
  <h4>Web development</h4>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore repellendus corrupti veniam animi odit nesciunt veritatis? Repudiandae atque, quas, ab asperiores quo optio fuga odio, id numquam quidem eum sint.</p>
  <button>Read more</button>
  
</div>

<div class="design">
  <i class="fa fa-laptop ab" aria-hidden="true"></i>
 <h4> Web designing</h4>
 <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore repellendus corrupti veniam animi odit nesciunt veritatis? Repudiandae atque, quas, ab asperiores quo optio fuga odio, id numquam quidem eum sint.</p>
 <button>Read more</button>
</div>


<div class="app">
  <i class="fa fa-android ab" aria-hidden="true"></i>
  <h4>App development</h4>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore repellendus corrupti veniam animi odit nesciunt veritatis? Repudiandae atque, quas, ab asperiores quo optio fuga odio, id numquam quidem eum sint.</p>
  <button>Read more</button>
</div>

</div>
</section>
<!--end services session-->



<!--project session start-->
<section class="project" id="project_p">
 <h1>Latest <span>Project</span></h1>
 
  <div>
    <p>Coming soon</p>
  </div>

</section>


<!--end project session-->


<!--Contact us session-->
<section class="contact_us" id="contact_us_p">

<div>
  <h1>Contact <span>Me</span></h1>
  <form  id ="send_sms">
<input type="text" name="name" id="username" placeholder="Name">
<input type="email" name="email" id="email" placeholder="email address"> <br>
<input type="number" name="number" id="number" placeholder="Mobile Number">
<input type="text" name="subject" id="subject" placeholder="Email Subject"> <br>
<textarea name="message" id="message" cols="30" rows="10" placeholder="Your message"></textarea> <br>
<input type="submit" name="submit" id="submit" value="Send Now">
  </form>
</div>

</section>
<!--Contact us session end-->


    </main>

    <script>
      $("#send_sms").submit(function(e){
e.preventDefault();
$.ajax({
type:"POST",
url:"send.php",
data:{
  username:$("#username").val(),
  email:$("#email").val(),
  number:$("#number").val(),
  subject:$("#subject").val(),
  sms :$("#message").val()
},
beforeSend:function(){
$("#submit").attr("disabled","disabled");
$("#submit").attr("value","Plz wait..");
},
success:function(res){
  alert(res);
  $("#submit").removeAttr("disabled","disabled");
  $("#submit").attr("value","Send Now");
  $("#submit")[0].reset();


}
});
  });
  </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

<script>
    var typed = new Typed('#element', {
      strings: ['Web designer.', 'App developer.','Web developer.'],
      typeSpeed: 100,
    });
  </script>

 
</body>
</html>
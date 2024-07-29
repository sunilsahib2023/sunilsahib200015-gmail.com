<!DOCTYPE html>
<!--[if lt IE 7]>
     <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>
        <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>
        <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]>
    <!-->
<html class=""><!--<![endif]-->




<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142213830-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142213830-1');
</script>

    
    
    <meta charset="UTF-8">
  <meta name="description" content="Sunil Student Assignment">
  <meta name="keywords" content="sunil,web pages,arena,rajouri Garden,sunilsahib2000,assignment,student assignment,arena student,student work link,html,css,javaScript,student website,practice,daily practice">
  <meta name="author" content="John Doe">
  
    
    



    
    
    
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="boilerplate.css" rel="stylesheet" type="text/css">
    <link href="main.css" rel="stylesheet" type="text/css">
    <style type="text/css">

/*
******************************************************************************************************************
*/

 @keyframes sk2
{
0%{left:0px;}
10%{left:0px;}
20%{left:-800px;}
30%{left:-800px;}
40%{left:-1700px;}
50%{left:-1700px;}
60%{left:-2800px;}
70%{left:-2800px;}
80%{left:-3700px;}
90%{left:-3700px;}
100%{left:0px;}

}

iframe:focus {
    outline: none;
}

iframe[seamless] {
    display: block;
}

#banner{position:relative;width:5032px; }


#banner{posiion:relative;width:5032px;animation:sk2 22s infinite;}


#banner img{float:left;position:relative;height:400px;}









    body {
    	background-color:black;
    }
     
    a:link{color:white}
    a:visited{color:white}
    a:hover{color:yellow}
    li{list-style:yellow}
    </style>
    <!-- 
    To learn more about the conditional comments around the html tags at the top of the file:
    paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/
     
    Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
    * insert the link to your js here
    * remove the link below to the html5shiv
    * add the "no-js" class to the html tags at the top
    * you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
     
     
    -->
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     
     
    <![endif]-->
    <script src="respond.htm"></script>
    <style>
     
    .sk{
    font-family:Garamond,serif;
    line-height: 1em;
    color: #fff9d6;
    font-weight:bold;
    font-size: 52px;
    text-shadow:0px 0px 0 rgb(231,231,231),1px 1px 0 rgb(216,216,216),2px 2px 0 rgb(202,202,202),3px 3px 0 rgb(187,187,187),4px 4px 0 rgb(173,173,173),5px 5px 0 rgb(158,158,158), 6px 6px 0 rgb(144,144,144),7px 7px 6px rgba(0,0,0,0.6),7px 7px 1px rgba(0,0,0,0.5),0px 0px 6px rgba(0,0,0,.2);}
    #box1{float:left;top:5px;top:10px}
    #box12{float:left;top:5px;top:10px}
    #box2{float:right;top:10px;}
    #box3{float:left;text-align:left;}
     
    </style></head>
     
    
    
     
     
     
    <body>
    <div class="gridContainer clearfix"> 

     <div id="LayoutDiv1"> 




<script src="createjs-2015.11.26.min.js"></script>
<script src="flagjs.js"></script>
<script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	handleComplete();
}
function handleComplete() {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	exportRoot = new lib.flagjs();
	stage = new createjs.Stage(canvas);
	stage.addChild(exportRoot);	
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		createjs.Ticker.setFPS(lib.properties.fps);
		createjs.Ticker.addEventListener("tick", stage);
	}	    
	//Code to support hidpi screens and responsive scaling.
	function makeResponsive(isResp, respDim, isScale, scaleType) {		
		var lastW, lastH, lastS=1;		
		window.addEventListener('resize', resizeCanvas);		
		resizeCanvas();		
		function resizeCanvas() {			
			var w = lib.properties.width, h = lib.properties.height;			
			var iw = window.innerWidth, ih=window.innerHeight;			
			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
			if(isResp) {                
				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
					sRatio = lastS;                
				}				
				else if(!isScale) {					
					if(iw<w || ih<h)						
						sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==1) {					
					sRatio = Math.min(xRatio, yRatio);				
				}				
				else if(scaleType==2) {					
					sRatio = Math.max(xRatio, yRatio);				
				}			
			}			
			canvas.width = w*pRatio*sRatio;			
			canvas.height = h*pRatio*sRatio;
			canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';				
			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
			stage.scaleX = pRatio*sRatio;			
			stage.scaleY = pRatio*sRatio;			
			lastW = iw; lastH = ih; lastS = sRatio;		
		}
	}
	makeResponsive(false,'both',false,1);	
	fnStartAnimation();
}
</script>
<!-- write your code here -->

<div id="mask" style="background:black;width:1000px;height:400px;overflow:hidden"> 
<div id="banner" style="background:black">
  

	<img src="images/s1.jpg">
	<img src="images/s2.jpg">
    <img src="images/s3.jpg">
	<img src="images/s4.jpg">
	<img src="images/s5.jpeg">
	
     </div>
  
  </div>


</head>
<body onload="init();" style="margin:0px;">
	
    
     
    <div id="box1">
     
       <h1><font color="white">https://sunilsahib2023.000webhostapp.com</font></h1></div>
     <br/>
    <div id="box12">
        
        
           <a href="uploadimage.html">Upload Student Image </a><br><br>
           
           <a href="mystudent_photo.php">My Student Pic </a><br><br>

    
    <a href="https://sunilsahib2023.000webhostapp.com/flashwork.html">Flash work</a> 
           <a href="banner_with_time.php">PHP Banner with Time </a><br><br>

             <a href="https://sunilsahib2023.000webhostapp.com//banner.php">Image OF Day By PHP </a><br><br>
              <a href="draw.htm">Drawing in Js (by Sunil) </a><br><br>

              <a href="https://sunilsahib2023.000webhostapp.com/loopfor.php">PHP For Loop Example_1 </a><br><br>
              
              <a href="https://sunilsahib2023.000webhostapp.com/mychat/login.html">Talk </a><br><br>
               <a href="https://sunilsahib2023.000webhostapp.com/sendmail.html">Mail </a><br><br>
                                                                            
             
              
              
              
              
        <br><br>
              
              <a href="https://sunilsahib2023.000webhostapp.com/mychat/Feedback.html">Feedback </a><br><br>
              


            <a href="https://sunilsahib2023.000webhostapp.com/uploadimg.php">Up Load Image for Banner (must be name as p0.jpg....p6.jpg</a><br><br>

                   <a href="https://sunilsahib2023.000webhostapp.com/for_loop_images.php">PHP For Loop Example_2 </a><br><br>



 
        <a href="https://sunilsahib2023.000webhostapp.com">JavaScript and Jquery</a><a href="https://sunilsahib2023.000webhostapp.com/mydp.html" title="click to open">MY DP&nbsp;</a><br><br>
            <a href="https://sunilsahib2023.000webhostapp.com/about.html">About us </a>
            
            <a href="https://www.000webhost.com/">Login webhost.com </a><br><br>
            
            
         </div>
<div><a href="https://sunilsahib2023.000webhostapp.com/loginform1.php">Send Message To Me</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
     
   
     
    </div>
     
    <div class="sk" style="clear:both">
   STUDENTS ASSIGNMENT
	   </div>
         
    <div>
    <div id="box3">
    <h1 style="color:yellow"> My  Current Student Website </h1>
	
	 <div id="box2" style="top:5px;padding:10px;width:500px;height:auto;border:2px green solid;color:white;box-shadow:10px 10px 10px black;text-align:justify;padding:2px;margin-bottom:20px;">
     
    <h1>Message for Student</h1>
    
	<?php
	include("notice/mynotice.html");
	?>
	
     	
     
    </div>
     


<div></div>

    <ul>
           
        <li>
<a href="http://ritikdandriyal.blogspot.com//"><img src="images/ritik.JPG">RITIK(Web Designer) </a>
    </li>
    <!--
        <li>
<a href="http://ritikdandriyal.blogspot.com//"><img src="images/ritik.JPG">RITIK(Web Designer , Ph:-8076302267)</a>
    </li>
    -->
    
<br/>
<li><a href= "https://piyush2023.000webhostapp.com/"
"><img src="images/piyush.jpg">
Piyush Kumar Singh</a></li>   <br/>

<li><a href= "http://anshusaini.000webhostapp.com/"><img src="http://anshusaini.000webhostapp.com/images/my1.jpg" width="150" height="150">
Dhruv Saini</a></li>   <br/>
  
           <li><a href= "http://poojabansal08.000webhostapp.com/"><img src="images2/pooja.jpg">
Pooja Bansal</a></li>  <br/>
            <li><a href= "http://vijay2023.000webhostapp.com/"><img src="images2/vijay.jpg">
Vijay Upadhyay</a></li>   <br/>

<li><a href= "http://sumit2023.000webhostapp.com/"> <img  src="http://sumit2023.000webhostapp.com/Image/Sumit.jpg"  with="!50" height="150"> Sumit sharma</a></li><br/>

<li><a href= "http://tushar2023.000webhostapp.com/"><img src="images/tushar.jpg">
Tushar Mehta</a></li><br/>

    
 <li><a href= "http://two-way-trunks.000webhostapp.com/"><img src="images/bhawana.jpg">
Bhawana</a></li>   <br/>

 <li><a href= "http://naveenwork.000webhostapp.com/"><img src="images/naveen.jpg">
Naveen</a></li>   <br/>



 <li><a href= "https://portfolio-sachin.000webhostapp.com/"><img src="images/
sachin.jpg">Sachin</a></li> <br/>



<li><a href= "http://webforphp.000webhostapp.com/"><img src="images/dhruv.jpg">
Dhruv </a></li>   <br/>



        <li><a href= "http://kajal2002.000webhostapp.com/"><img src="images/kajal.jpg">
Kajal </a></li>   <br/>
        <li><a href= "http://mayank2003.000webhostapp.com/"><img src="images/mayank.jpg">
Mayank </a></li>   <br/>

 <li><a href= "http://isha2023.000webhostapp.com"><img src="images2/isha.jpg">
Isha </a></li>   <br/>

<li><a href= "http://yamini2022.000webhostapp.com/"><img src="images/yamini.jpg">
Yamini  Srivastava</a></li>   <br/>

<li><a href= "http://yogita2022.000webhostapp.com/"><img src="images/yogita.jpg">
Yogita Srivastava </a></li>   <br/>

<li><a href= "http://parwez2023.000webhostapp.com/"><img src="images/parwez.jpg">Parwez Alam</a></li> <br/>
<li><a href= "https://beneficent-lace.000webhostapp.com/"><img src="images/arshad.jpg">Arshad </a></li> <br/>
<li><a href= "https://ranjana2023.000webhostapp.com/"><img src="images/ranjana.jpg">Ranjana </a></li> <br/>



<li><a href="https://prashant2023.000webhostapp.com/"><img src="images/prashant.jpg">
prashant </a></li>   <br/>

<li><a href="https://prateeksha2023.000webhostapp.com/"><img src="images/prateeksha.jpg">
Prateeksha </a></li>   <br/>

<li><a href="https://manishrawat2023.000webhostapp.com/"><img src="images/Manish.jpg">
Manish  </a></li> <br/>



    
<li><a href= "https://harsh2023.000webhostapp.com/"><img src="images/harsh.jpg">
Harsh Rajput</a></li>   <br/>

<li><a href= "https://deepak23.000webhostapp.com/"><img src="images/deepak.jpg">
Deepak</a></li>   <br/>

<li><a href= "http://khushboosingh2023.000webhostapp.com/"><img  src="images/khushboo.jpg">
khushboo</a></li><br/>





<li><a href= "http://yogesh2023.000webhostapp.com/"><img src="images/yogesh.jpg">
Yogesh</a></li><br/>
<li><a href= "https://nikhil2023.000webhostapp.com"> <img width="150" height="150"  src="https://nikhil2023.000webhostapp.com/images/nik1.jpg">NIKHIL PAL</a></li><br/>
<li><a href= "http://himanshu2023.000webhostapp.com/"> <img  src="images/himanshu.jpg">Himanshu Pal</a></li><br/>
<li><a href= "http://aakash2023.000webhostapp.com/"> <img  src="images/aakash.jpg">Aakash Pal </a></li><br/>
<li><a href= "http://shivsaraswat2023.000webhostapp.com/
"> <img  src="images/shiv.jpg">Shiv Saraswat </a></li><br/>
<li><a href= "http://jitender2023.000webhostapp.com/"> <img width="150" height="150" src="http://jitender2023.000webhostapp.com/images/jeetu.jpg"> Jitender Kumar</a></li><br/>

<li><a href= "http://deepanshu2023.000webhostapp.com/"> <img  src="http://deepanshu2023.000webhostapp.com/images/de1.jpeg"  width="150" height="150" >Deepanshu Pal</a></li><br/>
<li><a href= "http://karthik2023.000webhostapp.com/"> <img  src="images/Karthik.jpg"> V.S. Karthik</a></li><br/>
<li><a href= "https://vikash2023.000webhostapp.com/"> <img  src="https://vikash2023.000webhostapp.com/images/p24.jpeg"  width="150" height="150"> Vikash Kumar Thakur</a></li><br/>
<li><a href= "http://palak2023.000webhostapp.com/"> <img  src="images/palak.jpg">Palak</a></li><br/>

<li><a href= "http://tanishagaur2023.000webhostapp.com/"> <img  src="images/tanisha.jpg"> Tanisha Gaur</a></li><br/>
<li><a href= "http://singhsahab420.000webhostapp.com/"> <img  src="
http://singhsahab420.000webhostapp.com/images/asd.jpg" width="150" height="150"> Abhay kumar Singh</a></li><br/>    

<br/>
<li><a href= "http://deepkumar2023.000webhostapp.com"> <img  src="images/deepkumar">Deep Kumar</a></li><br/>    


<br/>
<li><a href= "http://ishika23.000webhostapp.com/"> <img  src="images/ishika.jpg">ishika</a></li><br/>    




<li><a href= "http://dev2024.000webhostapp.com/"><img src="http://dev2024.000webhostapp.com/mypicc.jpg" width="100" height="100">
Dev Raj</a></li><br/>


<li><a href= "https://sagarrrathi2024.000webhostapp.com/index.html
"><img src="https://sagarrrathi2024.000webhostapp.com/images/p14.jpg" width="100" height="100">Sagar Rathi
</a></li><br/></li><br/><br/>


<li><a href= "http://kamal2024.000webhostapp.com/
"><img src="" width="100" height="100">Kamljeeta
</a></li><br/><br/>


<li><a href= "http://prachi2024.000webhostapp.com/">
<img src="" width="100" height="100">Prachi Aswal
</a></li><br/><br/>





<li><a href= "https://deepika2024.000webhostapp.com/"><img src="https://deepika2024.000webhostapp.com/p27.jpg" width="100" height="100">
Deepika Rawat
</a></li><br/><br/>


<li><a href= "http://puja2024.000webhostapp.com/"><img src="" width="100" height="100">Puja
</a></li><br/><br/>

<li><a href= "https://reshma2024.000webhostapp.com/
"><img src="" width="100" height="100"> Reshma
</a></li><br/><br/>

<li><a href= "http://tanyatiwari.000webhostapp.com/
"><img src="" width="100" height="100">Tanya
</a></li><br/><br/>



   <li><a href= "http://mohitmandal.000webhostapp.com/index.html
"><img src="http://mohitmandal.000webhostapp.com/images/PF2.jpg
" width="100" height="100">Mohit
</a></li><br/><br/>

<li><a href= "http://istfaq2004.000webhostapp.com/
"><img src=http://istfaq2004.000webhostapp.com/images/ISTFAQ.png" width="100" height="100">Istfaq
</a></li><br/><br/>

<li><a href= "http://aditya00765.000webhostapp.com/"><img src="" width="100" height="100">Aditya
</a></li><br/><br/>





<li><a href= ""><img src="" width="100" height="100">
</a></li><br/><br/>

<li><a href= ""><img src="" width="100" height="100">
</a></li><br/><br/>




   
   
   
    




<br/>


 
 
 
 

<!--              ************************************              -->





<li> <a href="http://sudhirj61.wixsite.com/talksudhirj"><img src="https://static.wixstatic.com/media/19f11d_760adc38508443a082c3cbc29f2d987a~mv2.png/v1/fill/w_439,h_440,al_c,q_85,usm_0.66_1.00_0.01/19f11d_760adc38508443a082c3cbc29f2d987a~mv2.webp"  width="250" height="250">Sudhir Joshi</a></li>
<br/>
<br/>



</ul>
<!--

**************************************************************************************************************************
-->


<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="Home_files/count.htm"></script>
<!-- End Of Analytics Code -->
</a></div></div></div></div>


<h3><a href="https://sunilsahib20022.000webhostapp.com/
">Single Page  Application (SPA)  by Angular Js (Routing) Example 1</a> </h3>
<h3>
<ol>
<li><a href="https://sunilsahib2023.github.io/one/">React Single Page App  1</a><li>
<li><a href="https://sunilsahib2023.github.io/spa">React Single Page App 2 </a><li>
<li><a href="https://sunilsahib2023.github.io/sunil.gethub.io/">Responsive web </a><li>
</ol>
</h3>


<h3><a href="mybanner_effect_2.html">Js Banner Example 2</a> </h3>
<h3><a href="mybanner_effect_3.html">Js Banner Example 3</a> </h3>
<h3><a href="mybanner_effect_3_3.html">Js Banner Example 3_3</a> </h3>
<h3><a href="mybanner_effect_4.HTML">Js Banner Example 4</a> </h3>
<h3><a href="mybanner_effect_5.html">Js Banner Example 5</a> </h3>
<h3><a href="mybanner_effect_6.html">Js Banner under Development Example 6</a> </h3>
<h3><a href="mybanner_effect_7.html">Js Banner Example 7</a> </h3>
<br/>

<h3><a href="sunilotp.php">OTP Test 1 ((To Email)</a> </h3>
<br/>


<h3><a href="skotp.php">OPT Test 2 (To Email)</a> </h3>
<br/>








</body></html>
<!DOCTYPE html>
<!--[if lt IE 7]>
     <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>
        <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>
        <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]>
    <!-->
<html class=""><!--<![endif]--><head>
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
20%{left:-1000px;}
30%{left:-1000px;}
40%{left:-2000px;}
50%{left:-2000px;}
60%{left:-3000px;}
70%{left:-3000px;}
80%{left:-4000px;}
90%{left:-4000px;}
100%{left:0px;}

}

iframe:focus {
    outline: none;
}

iframe[seamless] {
    display: block;
}

#banner{position:relative;width:5032px;animation:sk2 22s infinite;}

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
<div id="mask" style="background:red;width:1000px;height:400px;overflow:hidden">
<div id="banner" style="background:black">
  
	<img src="images/s1.jpg">
	<img src="images/s2.jpg">
        <img src="images/s3.jpg">
	<img src="images/s4.jpg">
	<img src="images/s5.jpg">
     </div>
  </div>


</head>
<body onload="init();" style="margin:0px;">
	
    
     
    <div id="box1">
     
       <h1><font color="white">https://sunilsahib2021.000webhostapp.com/sunil/</font></h1></div>
     <br/>
    <div id="box12">
        
        
           <a href="upload2.htm">Upload Student Image </a><br><br>
           <a href="mystudent_photo.php">My Student Pic </a><br><br>

    
    <a href="https://sunilsahib2021.000webhostapp.com/sunil//flashwork.html">Flash work</a> 
           <a href="banner_with_time.php">PHP Banner with Time </a><br><br>

             <a href="https://sunilsahib2021.000webhostapp.com/sunil///banner.php">Image OF Day By PHP </a><br><br>

              <a href="https://sunilsahib2021.000webhostapp.com/sunil//loopfor.php">PHP For Loop Example_1 </a><br><br>

            <a href="https://sunilsahib2021.000webhostapp.com/sunil//uploadimg.php">Up Load Image for Banner (must be name as p0.jpg....p6.jpg</a><br><br>

                   <a href="https://sunilsahib2021.000webhostapp.com/sunil//for_loop_images.php">PHP For Loop Example_2 </a><br><br>



 
        <a href="https://sunilsahib2021.000webhostapp.com/sunil/">JavaScript and Jquery</a><a href="https://sunilsahib2021.000webhostapp.com/sunil//mydp.html" title="click to open">MY DP&nbsp;</a><br><br>
            <a href="https://sunilsahib2021.000webhostapp.com/sunil//about.html">About us </a><a href="https://members.000webhost.com/">000webhost.com </a><br><br>
         </div>
<div><a href="https://sunilsahib2021.000webhostapp.com/sunil//loginform1.php">Send Message To Me</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
     
    <div id="box2" style="top:5px;padding:10px;width:200px;border:2px green solid;color:white;box-shadow:10px 10px 10px black;text-align:justify;padding:2px;">
     
    <h1>Notice Board</h1>
    <p>All Student are Required to Upload Their Website immedately <br>
     OtherWise They Will not be Given any Marks on Practical Test of web Design</p>
     
     
    </div>
     
     
    </div>
     
    <div class="sk" style="clear:both">
     STUDENTS ASSIGNMENT
    </div>
         
    <div>
    <div id="box3">
    <h1 style="color:yellow"> My  Current Student Website </h1>
    
    <ul>
        <li>
<a href="http://ritikdandriyal.blogspot.com//"><img src="images/ritik.JPG">RITIK(Web Designer , Ph:-8076302267)</a>
    </li>

<br/>
    <a href="http://mona23.000webhostapp.com">Mona(The Responsive Website)(bc-)<span style="font-size:25px;color:red">*****</span></a></li><a href="http://mona.net23.net/">
    
     <li><a href="http://mona.net23.net/"></a></li>

 <a href="https://flowershop1123.000webhostapp.com/">Mona(The PHP Website)(bc-)<span style="font-size:25px;color:red">*****</span></a></li><a href="http://mona.net23.net/">
    
     <li><a href="http://mona.net23.net/"></a></li>



<li><a href="http://aarchitaneja2017.host22.com">Archit  <span style="font-size:25px;color:red">**</span><span style="color:white;font-size:25px">*</span></a></li><a href="http://architaneja.net16.net/">
    </a><li>

       


<li>
<a href="http://simranjeet2018.000webhostapp.com/"><img src="images/img.png">Simranjeet Kaur(bc-2127)(AAIP))(practice-pages)</a>
</li>

<br/>


<li>
<a href="http://Rahulmalik15032.000webhostapp.com/"><img src="images/rahul.jpg">Rahul Malik()(Website)</a>
</li>

<br/>



<li>
<a href="https://nehabandooni2018.000webhostapp.com/"><img src="images/nehab.jpg">Neha Bandooni(bc-2259)(GWDD))(practice-pages)</a>
</li>

<br/>

<li>
<a href="http://neha2018.000webhostapp.com"><img src="images/">Neha (web design)(8587820279)(practice-pages)</a>
</li>
 <br/>


<li>
<a href="https://punyabatra2018.000webhostapp.com"><img src="images/punya.jpg">Punya  Batra (bc-2296)(GWDD)(8377897896)(practice-pages)</a>
</li>
 <br/>

<li>
<a href="http://dessertedbypunya.000webhostapp.com">Responsive Website:-Punya  Batra (bc-2296)(GWDD)(8377897896)(practice-pages)</a>
</li>
 <br/>



<li>
<a href="http://udayn2018.000webhostapp.com/"><img src="images/uday.png"> Uday bhan (GWDD)(practice-pages)</a>
</li>
 <br/>



<li>
<a href="http://soccer-proby-raunak.000webhostapp.com"><img src="images/raunak.jpg"> Raunak singh (GWDD)</a>
</li>
 <br/>


<li>
<a href="http://vanshaj2018.000webhostapp.com"><img src="images/vansh.jpg">vanshaj  (GWDD)(practice-pages)</a>
</li>
 <br/>
 
 
<li>
<a href="http://viratgoswami.000webhostapp.com/"><img src="images/ram krishan.jpg"> Ram Krishan  (GWDD)(practice-pages)</a>
</li>
 <br/>


<li>
<a href="http://abhishek2018.000webhostapp.com"><img src="images/abhishek.jpg">Abhishek Thakur(bc-2207)(GWDD)(9958226049)(practice-pages)</a>
</li>
 <br/>




<li>
<a href="http://chetansethi2018.000webhostapp.com/
"><img src="images/">Chetan(GWDD)(practice-pages)</a>
</li>
 <br/>
 
 


 
       <a href="http://fleekindustries.com/index.php">Sajan (PHP site)sajan Ph:-9910669291</a></li></a><br/>
<li>
<a href="http://sachin2016.000webhostapp.com/"><img src="images/sachin.jpg">Sachin(bc-1524)(7503370126)(practice-pages)</a>
</li>



 
        <br/><a href="http://trendyindia.000webhostapp.com/">Laxmi (PHP site)laxmi Ph:-9990899771></a><br/>
<li>
<a href="http://trendyindia.000webhostapp.com/"><img src="images/laxmi.jpg">Laxmi(bc-7)(9990899771)(practice-pages)</a>
</li>







<a href="http://sachin2016.000webhostapp.com/"><a/><br/>

          </a><br/><li><a href="http://sachin2016.000webhostapp.com/"></a><a href="http://aditi2016.000webhostapp.com/"><img src="images/aditi.jpg">Aditi(bc-1537)(8826576792)(practice-pages)</a></li><a href="http://aditi2016.000webhostapp.com/"><br/>
           </a><br/><li><a href="http://aditi2016.000webhostapp.com/"></a><br/>
                <a href="https://meetkaur2016.000webhostapp.com/"><img src="images/meet.jpg">Meet Kaur(bc-1937)(practice-pages)</a></li><br/>
               <li> <a href="https://meetkaur2016.000webhostapp.com/"></a></li><br/>
  <li> <a href="http://tapish2017.000webhostapp.com">Tapish bc-1699 ph:9868488764</a></li><br/>


<li> <a href="http://pradeepkumar2017.000webhostapp.com"><img src="images/pradeep.jpg">Pradeep Kumar  bc-1819
ph:8826682776 (Practice Work)</a></li><br/>

<li> <a href="http://sproozin.com">Pradeep Kumar  bc-1819
ph:8826682776 (Website)</a></li><br/>

<li>
<a href="http://priyanka2018000webhostappcom.000webhostapp.com/
"><img src="images/pryanka.jpg">Priyanka(GWDD)(practice-pages and Website)</a>
</li>
 <br/>



<li>
<a href="https://nisha2018.000webhostapp.com/
"><img src="images/nisha.jpg">Nisha(bc-2323) practice-pages)</a>
</li>
 <br/>


<li>
<a href="https://sandeep633sharma.000webhostapp.com
"><img src="images/sandeep.png">Sandeep (practice-pages and Website)</a>
</li>
 <br/>

<li>
<a href="http://samluthra303.000webhostapp.com
"><img src="images/simranjeet.jpg">simranjeet Kaur (practice-pages and Website)</a>
</li>
 <br/>

<li>
<a href=" http://nandra3537.000webhostapp.com"><img src="images/gurpreet.jpg">Gurpreet Singh (bc -2591)(practice-pages and Website)</a>
</li>
 <br/>




<li> <a href="http://gurpreet2017.000webhostapp.com">Gurpreet ph : 8376036091</a></li>

<br/>
<li> <a href="http://nikhil2017.000webhostapp.com/"><img src = "images/nikhil.jpg">Nikhil</a><br/></li>
<br/>


<br/>
<li> <a href="https://khushboogera149.000webhostapp.com">Khushboo (bc-1960 GWDD)</a><br/></li>
<br/>
<li> <a href="http://himani20017.000webhostapp.com">Himani</a></li>
<br/>

<br/>
<li> <a href="https://kusumat2018.000webhostapp.com/index.html"><img src="images/kusum.jpg">Kusum Verma  </a><br/></li>


<br/>






<br/>
<li> <a href="http://sudhirj61.wixsite.com/talksudhirj">Sudhir Joshi</a></li>
<br/>
<br/>
<li> <a href="http://arvind2017.000webhostapp.com">Arvind</a></li>
<br/>
<li> <a href="http://sameer2017.000webhostapp.com"> sameer Roll No:bc-1825 Ph: 9555484621</a><br/></li>
<br/>
<li> <a href="http://keshav2017.000webhostapp.com">keshav</a><br/></li>
<br/>
<li> <a href="https://nehaphpwork.000webhostapp.com/index.html"><img src="images/neha.jpg"> Neha Chaudhary  9810446761(GWDD)</a><br/></li>
<br/>
<li> <a href="http://mywebpages15.000webhostapp.com/"><img src="images/madhuri.jpg"> Madhuri  </a><br/></li>


<br/>


<li> <a href="https://nehajavascript.000webhostapp.com/
"> Neha Chaudhary  9810446761(GWDD) JavaScript</a><br/></li>


<br/>

<li> <a href="http://shubhamsingh2084.000webhostapp.com">Shubhsam Singh:-(bc2084)(AAIP)(7764027485) </a><br/></li>
<br/>


<li> <a href = "https://hind-messenger.000webhostapp.com"><img src="images/tarun.jpg">Tarun 9990776220(GWDD)</a><br/></li>
<br/>

 <li><a href="http://kavitarawat4997.000webhostapp.com/"><img src="images/kavita.jpg">Kavita 9873258796(GWDD)) </a></li><br/>

<li> <a href = "https://kavitaphpwork.000webhostapp.com">Kavita 9873258796(GWDD)</a><br/></li>
<br/>
<li><a href="https://aakashbakshi.000webhostapp.com"><img src="images/akash.jpg">Aakash bakshi </a><br/></li>
<br/>
<li><a href="http://deepakgola.000webhostapp.com/"><img src="images/deepak.png">Deepak Gola (ph:7838994543)</a><br/></li>
<br/>

<li><a href="http://bani2017.000webhostapp.com/"><img src="images/bani.jpg">Bani (ph:7838994543)</a><br/></li>
<br/>



<li><a href="https://gurkiratsingh11.000webhostapp.com">Gurkirat Singh (AAIP) ph:9999784764 </a><br/></li>
<br/>

<li><a href="https://7kreatiffdots.000webhostapp.com"> <img src="images/krishana.jpg">Krishna (bc-1965) 7503246619(GWDD)</a><br/></li>
<br/>




<li>-----------------------------------------------</li>
</ul>


<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="Home_files/count.htm"></script>
<!-- End Of Analytics Code -->
</a></div></div></div></div>
<h1>Mail Trial Link </h1>
<h1><a href="mail.php">Mail to Me </a></h1>

<h3><a href="http://sunilsahib2018.000webhostapp.com/index2.html">Single Page  Application (SPA)  by Angular Js (Routing) Example 1</a> </h3>


<h3><a href="http://sunilsahib2018.000webhostapp.com">Single Page  Application (SPA)  by Angular Js (Routing) Example 2</a> </h3>

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
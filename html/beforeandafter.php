<?php $title = 'Crack Chaser Repair Solutions'; ?>
<?php $currentPage = 'Before & After'; ?>

<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<script type="text/javascript">
jQuery.fn.center = function() {
    var container = $(window);
    var top = -this.height() / 2;
    var left = -this.width() / 2;
    return this.css('position', 'absolute').css({ 'margin-left': left + 'px', 'margin-top': top + 'px', 'left': '50%', 'top': '50%' });
}
</script>
<style>
    * {box-sizing: border-box}
    .mySlides1, .mySlides2, .mySlides3, .mySlides4, .mySlides5, .mySlides6, .mySlides7, .mySlides8, .mySlides9, .mySlides10, .mySlides11, .mySlides12, .mySlides13, .mySlides14, .mySlides15, .mySlides16, .mySlides17, .mySlides18, .mySlides19, .mySlides20, .mySlides21, .mySlides22 {display: none}
    img {vertical-align: middle;}

    /* Slideshow container */
    .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    }

    /* Hide the images by default */
    .mySlides {
    display: none;
    }

    /* Next & previous buttons */
    .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    }

    /* Position the "next button" to the right */
    .next {
    right: 0;
    border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
    }

    /* Caption text */
    .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
    }

    /* The dots/bullets/indicators */
    .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
    background-color: #717171;
    }

    /* Fading animation */
    .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
    }

    @keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
    }

    header {
        background: none; 
        border: none; 
        box-shadow: none; 
        text-align: center;
    }

    .responsiveVid {
        max-width: 70%;
        height: auto;
        object-fit: scale-down;
    }

    .responsiveIcon {
        max-width: 1.5vw !important;
        height: auto !important;
        object-fit: scale-down;
        float: left;
        font-size: 36px;
        padding-right: 8px;
    }

    .content1 {
        max-width: 1000px;
        padding: 20px;
        /* font-size: 2vw; */
        width: 80%;
        background-color: white;
        border: 3px 3px 12px;
        align-content: center;
        margin: auto;
        border-radius: 5px;
        box-shadow: 2px 2px 10px grey;
        display: grid;
        grid-template-columns: 60% 40%;
        grid-template-rows: 100%;
        height: auto;
    }
    .content2 {
        max-width: 1000px;
        padding: 20px;
        /* font-size: 2vw; */
        width: 80%;
        background-color: white;
        border: 3px 3px 12px;
        align-content: center;
        margin: auto;
        border-radius: 5px;
        box-shadow: 2px 2px 10px grey;
        display: grid;
        grid-template-columns: 40% 60%;
        grid-template-rows: 100%;
        height: auto;
    }
    /* @media screen and (min-width: 220px) {
        .content2 {
     font-size: 12px;
    } */


    .wrapper{
        display:grid;
        grid-gap:1em;
    }
    .wrapper > div{
        background:#eee;
        padding:1em;
    }
    .printerVid {

    }

    .h3Header{
      /*align-self:start;*/
      width:100%;
      height:auto;
      font-size: 1.5vw;
      /* grid-row:auto; */
      align-content:center;
      text-align: center;
      padding-top: 80px;
      /* font-size: 50px; */
    }

    .leftBox{
        grid-column-start: 1;
        grid-column-end: 2;
        grid-row-start: 1;
        grid-row-end: 2;
    }

    .rightBox{
        grid-column-start: 2;
        grid-column-end: 3;
        grid-row-start: 1;
        grid-row-end: 2;
      /* height:auto
      width: 30%; 
      float: right;
      grid-area: b; */
    }

    .vid{
        max-width: 100%;
        height: auto;
        object-fit: scale-down;
        /* object-fit: contain;
        margin: auto; */
    }




    .content {
        display: flex;
        flex-wrap: wrap;
    }

    .open {
        display: contents;
    }

    .box {
        height: 100px;
        width: 25%;
        border: 3px solid red;
        box-sizing: border-box;
    }

</style>

<div class="content" style="margin-top:20px; "> 
    <!-- <p>Slideshow 1:</p> -->
    <div class="slideshow-container">
        <div class="mySlides1" style="text-align: center;">
            <img src="./images/Slideshows/Asphalt1/1.jpg" style="height:80vh; width:auto;">
        </div>

        <div class="mySlides1" style="text-align: center;">
            <img src="./images/Slideshows/Asphalt1/2.jpg" style="height:80vh; width:auto;">
        </div>
        <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
    </div>

    <!-- <p>Slideshow 2:</p> -->
    <!-- <div class="slideshow-container">
        <div class="mySlides2" style="text-align: center;">
            <img src="./images/Slideshows/Asphalt2/1.jpg" style="height:80vh; width:auto;">
        </div>

        <div class="mySlides2" style="text-align: center;">
            <img src="./images/Slideshows/Asphalt2/2.jpg" style="height:80vh; width:auto;">
        </div>

        <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
    </div> -->

    <!-- <p>Slideshow 3:</p> -->
    <div class="slideshow-container">
        <div class="mySlides3" style="text-align: center;">
            <img src="./images/Slideshows/Concrete2/1.jpg" style="height:80vh; width:auto;">
        </div>

        <div class="mySlides3" style="text-align: center;">
            <img src="./images/Slideshows/Concrete2/2.jpg" style="height:80vh; width:auto;">
        </div>

        <a class="prev" onclick="plusSlides(-1, 2)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 2)">&#10095;</a>
    </div>

    <!-- <p>Slideshow 4:</p> -->
    <div class="slideshow-container">
        <div class="mySlides4" style="text-align: center;">
            <img src="./images/Slideshows/Concrete4/1.jpg" style="height:80vh; width:auto;">
        </div>

        <div class="mySlides4" style="text-align: center;">
            <img src="./images/Slideshows/Concrete4/2.jpg" style="height:80vh; width:auto;">
        </div>

        <a class="prev" onclick="plusSlides(-1, 3)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 3)">&#10095;</a>
    </div>

    <!-- <p>Slideshow 5:</p> -->
    <!-- <div class="slideshow-container">
        <div class="mySlides5" style="text-align: center;">
            <img src="./images/Slideshows/Concrete5/1.jpg" style="height:80vh; width:auto;">
        </div>

        <div class="mySlides5" style="text-align: center;">
            <img src="./images/Slideshows/Concrete5/2.jpg" style="height:80vh; width:auto;">
        </div>

        <a class="prev" onclick="plusSlides(-1, 4)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 4)">&#10095;</a>
    </div> -->

    <!-- <p>Slideshow 6:</p> -->
    <div class="slideshow-container">
        <div class="mySlides6" style="text-align: center;">
            <img src="./images/Slideshows/Concrete7/1.jpg" style="height:80vh; width:auto;">
        </div>

        <div class="mySlides6" style="text-align: center;">
            <img src="./images/Slideshows/Concrete7/2.jpg" style="height:80vh; width:auto;">
        </div>

        <a class="prev" onclick="plusSlides(-1, 5)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 5)">&#10095;</a>
    </div>

    <!-- <p>Slideshow 7:</p> -->
    <div class="slideshow-container">
        <!-- <div class="mySlides7">
            <img src="./images/Slideshows/Concrete8/1.jpg" style="height:80vh; width:auto;">
        </div> -->

        <div class="mySlides7" style="text-align: center;">
            <img src="./images/Slideshows/Concrete8/2.jpg" style="height:80vh; width:auto;">
        </div>

        <div class="mySlides7" style="text-align: center;">
            <img src="./images/Slideshows/Concrete8/3.jpg" style="height:80vh; width:auto;">
        </div>

        <a class="prev" onclick="plusSlides(-1, 6)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 6)">&#10095;</a>
    </div>

    <!-- <p>Slideshow 8:</p> -->
    <div class="slideshow-container">
        <div class="mySlides8" style="text-align: center;">
            <img src="./images/Slideshows/Concrete9/1.jpg" style="height:80vh; width:auto;">
        </div>

        <div class="mySlides8" style="text-align: center;">
            <img src="./images/Slideshows/Concrete9/2.jpg" style="height:80vh; width:auto;">
        </div>

        <div class="mySlides8" style="text-align: center;">
            <img src="./images/Slideshows/Concrete9/3.jpg" style="height:80vh; width:auto;">
        </div>

        <a class="prev" onclick="plusSlides(-1, 7)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 7)">&#10095;</a>
    </div>

    <!-- <p>Slideshow 9:</p> -->
    <!-- <div class="slideshow-container">
        <div class="mySlides9" style="text-align: center;">
            <img src="./images/Slideshows/Concrete10/1.jpg" style="height:80vh; width:auto;">
        </div>

        <div class="mySlides9" style="text-align: center;">
            <img src="./images/Slideshows/Concrete10/2.jpg" style="height:80vh; width:auto;">
        </div>

        <div class="mySlides9" style="text-align: center;">
            <img src="./images/Slideshows/Concrete10/3.jpg" style="height:80vh; width:auto;">
        </div>

        <a class="prev" onclick="plusSlides(-1, 8)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 8)">&#10095;</a>
    </div> -->

    <!-- <p>Slideshow 10:</p> -->
    <div class="slideshow-container">
        <div class="mySlides10">
            <img src="./images/Slideshows/Curb1/1.jpg" style="height:80vh; width:auto;">
        </div>

        <div class="mySlides10" style="text-align: center;">
            <img src="./images/Slideshows/Curb1/2.jpg" style="height:80vh; width:auto;">
        </div>

        <a class="prev" onclick="plusSlides(-1, 9)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 9)">&#10095;</a>
    </div>

    <!-- <p>Slideshow 11:</p> -->
    <div class="slideshow-container">
        <div class="mySlides11" style="text-align: center;">
            <img src="./images/Slideshows/Curb2/1.jpg" style="height:80vh; width:auto;">
        </div>

        <div class="mySlides11" style="text-align: center;">
            <img src="./images/Slideshows/Curb2/2.jpg" style="height:80vh; width:auto;">
        </div>

        <a class="prev" onclick="plusSlides(-1, 10)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 10)">&#10095;</a>
    </div>

    <!-- <p>Slideshow 12:</p> -->
    <div class="slideshow-container">
        <div class="mySlides12" style="text-align: center;">
            <img src="./images/Slideshows/Curb3/1.jpg" style="height:80vh; width:auto;">
        </div>

        <div class="mySlides12" style="text-align: center;">
            <img src="./images/Slideshows/Curb3/2.jpg" style="height:80vh; width:auto;">
        </div>

        <div class="mySlides12" style="text-align: center;">
            <img src="./images/Slideshows/Curb3/3.jpg" style="height:80vh; width:auto;">
        </div>

        <a class="prev" onclick="plusSlides(-1, 11)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 11)">&#10095;</a>
    </div>

    <!-- <p>Slideshow 13:</p> -->
    <div class="slideshow-container">
        <div class="mySlides13" style="text-align: center;">
            <img src="./images/Slideshows/Driveway1/1.jpg" style="height:80vh; width:auto;">
        </div>

        <div class="mySlides13" style="text-align: center;">
            <img src="./images/Slideshows/Driveway1/2.jpg" style="height:80vh; width:auto;">
        </div>

        <a class="prev" onclick="plusSlides(-1, 12)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 12)">&#10095;</a>
    </div>

    <!-- <p>Slideshow 14:</p> -->
    <div class="slideshow-container">
        <div class="mySlides14" style="text-align: center;">
            <img src="./images/Slideshows/DrivewayCrack1/1v.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides14" style="text-align: center;">
            <img src="./images/Slideshows/DrivewayCrack1/2v.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides14" style="text-align: center;">
            <img src="./images/Slideshows/DrivewayCrack1/3v.jpg" style="height:80vh; width:auto;">
        </div>
        <a class="prev" onclick="plusSlides(-1, 13)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 13)">&#10095;</a>
    </div>

    <!-- <p>Slideshow 15:</p> -->
    <div class="slideshow-container">
        <!-- <div class="mySlides15" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy1/1.jpg" style="height:80vh; width:auto;">
        </div> -->
        <!-- <div class="mySlides15" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy1/2.jpg" style="height:80vh; width:auto;">
        </div> -->
        <div class="mySlides15" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy1/3.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides15" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy1/4.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides15" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy1/5.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides15" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy1/6.jpg" style="height:80vh; width:auto;">
        </div>
        <a class="prev" onclick="plusSlides(-1, 14)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 14)">&#10095;</a>
    </div>

    <!-- <p>Slideshow 16:</p> -->
    <div class="slideshow-container">
        <div class="mySlides16" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy2/1.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides16" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy2/2.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides16" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy2/3.jpg" style="height:80vh; width:auto;">
        </div>
        <a class="prev" onclick="plusSlides(-1, 15)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 15)">&#10095;</a>
    </div>

    <!-- <p>Slideshow 17:</p> -->
    <div class="slideshow-container">
        <div class="mySlides17" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy3/1.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides17" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy3/2.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides17" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy3/3.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides17" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy3/4.jpg" style="height:80vh; width:auto;">
        </div>
        <a class="prev" onclick="plusSlides(-1, 16)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 16)">&#10095;</a>
    </div>

    <!-- <p>Slideshow 18:</p> -->
    <div class="slideshow-container">
        <div class="mySlides18" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy4/1.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides18" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy4/2.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides18" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy4/3.jpg" style="height:80vh; width:auto;">
        </div>
        <a class="prev" onclick="plusSlides(-1, 17)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 17)">&#10095;</a>
    </div>

    <!-- <p>Slideshow 19:</p> -->
    <!-- <div class="slideshow-container">
        <div class="mySlides19" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy5/1.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides19" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy5/2.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides19" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy5/3.jpg" style="height:80vh; width:auto;">
        </div>
        <a class="prev" onclick="plusSlides(-1, 18)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 18)">&#10095;</a>
    </div> -->

    <!-- <p>Slideshow 20:</p> -->
    <!-- <div class="slideshow-container">
        <div class="mySlides20" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy6/1.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides20" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy6/2.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides20" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy6/3.jpg" style="height:80vh; width:auto;">
        </div>
        <a class="prev" onclick="plusSlides(-1, 19)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 19)">&#10095;</a>
    </div> -->

    <!-- <p>Slideshow 21:</p> -->
    <div class="slideshow-container">
        <div class="mySlides21" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy7/1.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides21" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy7/2.jpg" style="height:80vh; width:auto;">
        </div>
        <!-- <div class="mySlides21" style="text-align: center;">
            <img src="./images/Slideshows/Epoxy7/3.jpg" style="height:80vh; width:auto;">
        </div> -->
        <a class="prev" onclick="plusSlides(-1, 20)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 20)">&#10095;</a>
    </div>

    <!-- <p>Slideshow 22:</p> -->
    <div class="slideshow-container">
        <div class="mySlides22" style="text-align: center;">
            <img src="./images/Slideshows/SidewalkCrack1/1.jpg" style="height:80vh; width:auto;">
        </div>
        <div class="mySlides22" style="text-align: center;">
            <img src="./images/Slideshows/SidewalkCrack1/2.jpg" style="height:80vh; width:auto;">
        </div>
        <a class="prev" onclick="plusSlides(-1, 21)">&#10094;</a>
        <a class="next" onclick="plusSlides(1, 21)">&#10095;</a>
    </div>
    
</div>

<script>
var slideIndex = [1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1];
var slideId = ["mySlides1","mySlides2","mySlides3","mySlides4","mySlides5","mySlides6","mySlides7","mySlides8","mySlides9","mySlides10","mySlides11","mySlides12","mySlides13","mySlides14","mySlides15","mySlides16","mySlides17","mySlides18","mySlides19","mySlides20","mySlides21","mySlides22"]
showSlides(1, 0);
// showSlides(1, 1);
showSlides(1, 2);
showSlides(1, 3);
// showSlides(1, 4);
showSlides(1, 5);
showSlides(1, 6);
showSlides(1, 7);
// showSlides(1, 8);
showSlides(1, 9);
showSlides(1, 10);
showSlides(1, 11);
showSlides(1, 12);
showSlides(1, 13);
showSlides(1, 14);
showSlides(1, 15);
showSlides(1, 16);
showSlides(1, 17);
// showSlides(1, 18);
// showSlides(1, 19);
showSlides(1, 20);
showSlides(1, 21);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>

<!-- <div class="content">
    <div class="landscape" id="SLIDE_BAA1">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div class="portrait" id="SLIDE_BAA2">
        <p class="emptyBox" style="padding-bottom: 20px;"></p>
    </div>
</div>
<div class="content">
    <div class="portrait" id="SLIDE_BAC1">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BAC2">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BAC3">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BAC4">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BAC5">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BAC6">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BAC7">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BAC8">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BAC9">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BACC1">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BACC2">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BACC3">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BACD1">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BACDC1">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BAE1">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BAE2">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BAE3">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BAE4">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BAE5">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BAE6">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BAE7">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div>
<div class="content">
    <div id="SLIDE_BACD1">
        <p class="emptyBox" style="padding-bottom: 20px; margin: 0 auto;"></p>
    </div>
</div> -->
</body>
</html>
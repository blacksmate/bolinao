
<?php 
include 'header.php';
?>

<div class="container text-center bg-white  text-dark p-5">
    
<div class = "page" id="page1">
    <img id = "body-part" class = "img-thumbnail" src ="../img/stories/hipo/Cover.jpeg" height= "350px" width = "500px" />
    <br>
    <span class = "heading h2">WHEN DO HIPPOS PLAY?</span>
    <br>
by Daniel Errico
<br>
<br>

<p>
<span class = "heading h2">B</span>y the African river, know as the Nile
</p>
<p>
The sun fell away and it rested a while
</p>
<p>
The rhinos had braved all the smoldering heat
</p>
<p>
They lay down to sleep as they wiped off their feet</p>
</p>
</div>
<div class = "page" id="page2">
<img id = "body-part" class = "img-thumbnail"  src ="../img/stories/hipo/1.jpeg" height= "350px" width = "500px" />
<p>The elephants marched to their elephant beds</p>
<p>And gently they rested their elephant heads</p>
<p>The hippos went bathing in cool, shallow pools</p>
<p>Thinking the rhinos and elephants fools
</p>
</div>
<div class = "page" id="page3">
<img id = "body-part" class = "img-thumbnail"  src ="../img/stories/hipo/2.jpeg" height= "350px" width = "500px" />
    <p>
    Slowly the hippos sank into the river</p>
<p>The water so cold that it gave them a shiver</p>
<p>(Hippos can't swim, like the pelicans think</p>
<p>They also can't float, they could easily sink)</p>
</div>
<div class = "page" id="page4"><p class = "lead">
<img id = "body-part" class = "img-thumbnail"  src ="../img/stories/hipo/3.jpeg" height= "350px" width = "500px" />
<p>
Underwater, they fell to the soft river bed
</p>
<br>
<p>On darkish green plants with a smidgen of red</p>
<p>They strolled on the bottom, then bounced up for air</p>
<p>They did it for hours, without any care</p>
</div>
<div class = "page" id="page5"><p class = "lead">
<img id = "body-part" class = "img-thumbnail"  src ="../img/stories/hipo/4.jpeg" height= "350px" width = "500px" />
<p>
The fish followed closely, and wove in an out
</p>
<p>Under their belly, and up to their snout</p>
<p>Each of the hippos came up to the shore</p>
<p>To feed on the grass by the river once more</p>
<p>They dried off their bodies by shaking and stomping</p>
<p>And took bites of grass, chewing and chomping</p>
</div>
<div class = "page" id="page6"><p class = "lead">
<img id = "body-part" class = "img-thumbnail"  src ="../img/stories/hipo/5.jpeg" height= "350px" width = "500px" />
<p>
With night fading fast, they were full from the feast
</p>
<br>
<p>The sun returned back, rising up form the east</p>
</div>
<div class = "page" id="page7"><p class = "lead">
<img id = "body-part" class = "img-thumbnail"  src ="../img/stories/hipo/6.jpeg" height= "350px" width = "500px" />
<p>
The hippos crept off to collapse for the day
</p>
<p>While rhinos and elephants got up to play</p>
</div>
<div class = "page" id="page8"><p class = "lead">
<img src ="../img/stories/hipo/Screen+Shot+2016-10-20+at+5.04.30+PM.jpg" height= "350px" width = "500px" />
<p>
Enjoying the warmth of the sun and its light
</p>
<p>Never knowing the story of hippos at night</p>
</div>
<div class = "page" id="page9"><p class = "lead">
<img id = "body-part" class = "img-thumbnail"  src ="../img/stories/hipo/8.jpeg" height= "350px" width = "1000px" />
</div>
   <ul id="pagination-demo" class="pagination">
   
   </ul>
</div>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://www.solodev.com/assets/pagination/jquery.twbsPagination.js"></script>

<script type="text/javascript">
$(document).ready(function() {
$('#pagination-demo').twbsPagination({
totalPages: 9,
// the current page that show on start
startPage: 1,

// maximum visible pages
visiblePages:9,

initiateStartPageClick: true,

// template for pagination links
href: false,

// variable name in href template for page number
hrefVariable: '{{number}}',

// Text labels
first: 'First',
prev: 'Previous',
next: 'Next',
last: 'Last',

// carousel-style pagination
loop: false,

// callback function
onPageClick: function (event, page) {
   $('.page-active').removeClass('page-active');
  $('#page'+page).addClass('page-active');
},

// pagination Classes
paginationClass: 'pagination',
nextClass: 'next',
prevClass: 'prev',
lastClass: 'last',
firstClass: 'first',
pageClass: 'page',
activeClass: 'active',
disabledClass: 'disabled'

});

});
</script>
</body>
</html>


<?php 
include 'header.php';
?>

<div class="container text-center bg-white  text-dark p-5">
    
<div class = "page" id="page1">
  
<span class = "heading h2">THE PARTICULAR WAY OF THE ODD MS. MCKAY</span>
<br>
<br>
by Daniel Errico
<br>
<p>
<div class="body-part" >
<img  id = "body-part" class = "img-thumbnail"src ="../img/stories/msmckay/1.jfif" height= "250px" width = "400px" />

</div>
<p>
<span class = "heading h2">S</span>ay what you will, or say what you may,
</p>
<p>
There’s nobody else who is like Ms. McKay.
</p>
<p>
To all whom she passes, she gives a “Good day!”
</p>
<p>
And she’s ready with maps, if you’ve been led astray.</p>
</p>

</div>
<div class = "page" id="page2">
<p>Her hair is bright orange with two streaks of gray.</p>
<p>And her purse may be made out of flowers and clay
</p>
<img   id = "body-part"  class = "img-thumbnail" src ="../img/stories/msmckay/2.png" height= "350px" width = "500px" />
</div>
<div class = "page" id="page3">
    <p>
    But her hugs have been known to go on for a day,</p>
<p>And she wakes up each morning with something to say.</p>
<p>She had her house built in a tree by the bay,</p>
<p>And dangles a tire swing down every May.
</p>
<img  id = "body-part" class = "img-thumbnail" src ="../img/stories/msmckay/3.jpg" height= "350px" width = "500px" />

</div>
<div class = "page" id="page4"><p class = "lead">
<p>
She’s famous for making a carrot soufflé.
</p>
<p>She’ll give you five boxes, but won’t let you pay.</p>
    <img  id = "body-part" class = "img-thumbnail" src ="../img/stories/msmckay/4.jpg" height= "350px" width = "500px" />
</div>
<div class = "page" id="page5"><p class = "lead">
<p>
She only eats food when it’s served on a tray,
<p>And doesn’t use forks since they get in here way.</p>
<p>She owns seven horses, and rides in a sleigh.</p>
<p>And when she addresses them, it’s with a “neigh”.</p>
<img  id = "body-part" class = "img-thumbnail"  src ="../img/stories/msmckay/5.png" height= "350px" width = "500px" />

</div>
<div class = "page" id="page6"><p class = "lead">
<p>
She’d lend you her coat, without any delay.
</p>
<p>(She wove it from flowers and piles of hay).</p>
<p>On Sundays she puts on a purple beret.</p>
<p>And never, not once, has she missed the ballet.</p>
<p>Her voice is quite bad but she sings everyday</p>
<p>If she’s holding her trumpet, don’t ask her to play!</p>
<img src ="../img/stories/msmckay/6.png" height= "350px" width = "500px" />

</div>
<div class = "page" id="page7"><p class = "lead">
<p>
I think you should meet her, as soon as today.
</p><br>
<p>Although, if you stop by she’ll insist that you stay.

</p>
<img  id = "body-part" class = "img-thumbnail" src ="../img/stories/msmckay/7.png" height= "350px" width = "500px" />

</div>

   <ul id="pagination-demo" class="pagination">
   
   </ul>
</div>

<script type="text/javascript">
$(document).ready(function() {
$('#pagination-demo').twbsPagination({
totalPages: 7,
// the current page that show on start
startPage: 1,

// maximum visible pages
visiblePages:7,

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


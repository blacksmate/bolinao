<?php 
include 'header.php';
?>

<div class="container text-center bg-white  text-dark p-5">
    
<div class = "page" id="page1">
  
<span class = "heading h2">Hipon at Biya</span>
<div class="body-part" >

</div>
<p>
<span class = "heading h2">K</span>wento ni Carla Pacis
<br>
<span class = "heading h2">G</span>uhit ni Joanne de Leon
</p>
<img id = "body-part" class = "img-thumbnail" src ="../img/stories/hipon-at-biya/tinywow_Hipon at Biya_12555547_1.jpg" class = "img-thumbnail"/>
</div>
<div class = "page" id="page2">
<img id = "body-part" class = "img-thumbnail" src ="../img/stories/hipon-at-biya/tinywow_Hipon at Biya_12555547_2.jpg" class = "img-thumbnail"/>
</div>
<div class = "page" id="page3">
<img id = "body-part" class = "img-thumbnail" src ="../img/stories/hipon-at-biya/tinywow_Hipon at Biya_12555547_3.jpg" class = "img-thumbnail"/>
</div>
<div class = "page" id="page4">
<img id = "body-part" class = "img-thumbnail" src ="../img/stories/hipon-at-biya/tinywow_Hipon at Biya_12555547_4.jpg" class = "img-thumbnail"/>
</div>
<div class = "page" id="page5">
<img id = "body-part" class = "img-thumbnail" src ="../img/stories/hipon-at-biya/tinywow_Hipon at Biya_12555547_5.jpg" class = "img-thumbnail"/>
</div>
<div class = "page" id="page6">
<img id = "body-part" class = "img-thumbnail" src ="../img/stories/hipon-at-biya/tinywow_Hipon at Biya_12555547_6.jpg" class = "img-thumbnail"/>
</div>
<div class = "page" id="page7">
<img id = "body-part" class = "img-thumbnail" src ="../img/stories/hipon-at-biya/tinywow_Hipon at Biya_12555547_7.jpg" class = "img-thumbnail"/>
</div>
<div class = "page" id="page8">
<img id = "body-part" class = "img-thumbnail" src ="../img/stories/hipon-at-biya/tinywow_Hipon at Biya_12555547_8.jpg" class = "img-thumbnail"/>
</div>
<div class = "page" id="page9">
<img id = "body-part" class = "img-thumbnail" src ="../img/stories/hipon-at-biya/tinywow_Hipon at Biya_12555547_9.jpg" class = "img-thumbnail"/>
</div>
<div class = "page" id="page10">
<img id = "body-part" class = "img-thumbnail" src ="../img/stories/hipon-at-biya/tinywow_Hipon at Biya_12555547_10.jpg" class = "img-thumbnail"/>
</div>
<div class = "page" id="page11">
<img id = "body-part" class = "img-thumbnail" src ="../img/stories/hipon-at-biya/tinywow_Hipon at Biya_12555547_11.jpg" class = "img-thumbnail"/>
</div>
<div class = "page" id="page12">
<img id = "body-part" class = "img-thumbnail" src ="../img/stories/hipon-at-biya/tinywow_Hipon at Biya_12555547_12.jpg" class = "img-thumbnail"/>
</div>
<div class = "page" id="page13">
<img id = "body-part" class = "img-thumbnail" src ="../img/stories/hipon-at-biya/tinywow_Hipon at Biya_12555547_13.jpg" class = "img-thumbnail"/>
</div>
<div class = "page" id="page14">
<img id = "body-part" class = "img-thumbnail" src ="../img/stories/hipon-at-biya/tinywow_Hipon at Biya_12555547_14.jpg" class = "img-thumbnail"/>
</div>
<div class = "page" id="page15">
<img id = "body-part" class = "img-thumbnail" src ="../img/stories/hipon-at-biya/tinywow_Hipon at Biya_12555547_15.jpg" class = "img-thumbnail"/>
</div>
   <ul id="pagination-demo" class="pagination">
   
   </ul>
</div>

<script type="text/javascript">
$(document).ready(function() {
$('#pagination-demo').twbsPagination({
totalPages: 15,
// the current page that show on start
startPage: 1,

// maximum visible pages
visiblePages:15,

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


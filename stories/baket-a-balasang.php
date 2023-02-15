<?php 
include 'header.php';
?>

<div class="container text-center bg-white  text-dark p-5">


<div class = "page" id="page1">
  
<span class = "heading h2">Ti Ina a Baket a Balasang</span>
<div class="body-part" >

</div>
<p>
<span class = "heading h2">S</span>arita ni Leila P. Areola
<br>
<span class = "heading h2">I</span>nladawan ni Noel B. Corpus
</p>
<p>
Ni Innok Kallang ket nabaketan a balasang. Awan kadkaduana idiay
balayda no di laeng ti inana a ni Lelang Ippit.
</p>
<p>
Nadekket dagiti kaaanakanna kenkuana. Nadungngo met ni Innok
Kallang kadakuada nangnangruna kenni Lallay. Anak ni nana
Bibing ni Lallay a kabsat ni Innok Kallang.
</p>
<p>
Nakurapay dagiti nagannak ni Lallay. Isu't gapuna nga innalana ni
Lallay a tagibien. Manipud idi ket isunan ti pannakaina ni Lallay.</p>
</p>

</div>
<div class = "page" id="page2">
<p>Naanus ni Innok Kallang a nangtagibi kenni Lallay.Daytoy met met
gapuna a natulnog ni Lallay kenni Innokna.</p>
<p>Intugtugot ni Innok Kallang ni Lallay no mapan idiay dapon
Umip-ipus met akanayon ni Lallay kenkuana no mapanda aglaba
kenni Lelang Ippit diay karayan.
</p>

</div>
<div class = "page" id="page3">
<p>Gapu ta surot, linlinunganna pay ti annaaw no agtudo iti
pagsikkaan.</p>
<p>Sinursurruan ni Innok Kallang ni Lallay nga agtrabaho isu a
dimmakkel a naayat
ken nanakem nga ubing daytoy.
</p>

</div>
   <ul id="pagination-demo" class="pagination">
   
   </ul>
</div>

<script type="text/javascript">
$(document).ready(function() {
$('#pagination-demo').twbsPagination({
totalPages: 3,
// the current page that show on start
startPage: 1,

// maximum visible pages
visiblePages:3,

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


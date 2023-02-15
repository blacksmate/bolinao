<?php 
include 'header.php';
?>

<div class="container text-center bg-white  text-dark p-5">
    
<div class = "page" id="page1">
  
<span class = "heading h2">Dagiti Ngipen ni Pining</span>
<p>
<div class="body-part" >

</div>
<p>
<span class = "heading h2">S</span>arita ni Grace Donata Abugan
</p>
<p>
Magusgustuan ni Pining ti mangan ti kendi ken dadduma a sinam-it.
No dadduma maliwayanna ti aggisigis kadagiti ngipenna. 
</p>
<p>
Gapu iti
daytoy, ribrib ti pammarangna ken agsakit-sakit pay no kua ti
binukbok a ngipenna.
</p>
<p>
Iti naminsan, simro ti sakit ti binukbok a ngipenna.
"Annay! Annay! Nagsakit ti ngipenko!" insangitna. Uray na la ingariet
iti tangan ti imana wenno iti ungto ti punganna.
"Agpelleska ta mapanta sadiay klinika ti dentista," kinuna ni
nanangna a maas-asian kenkuana.</p>
</p>

</div>
<div class = "page" id="page2">
<p>Napanda iti klinika ti dentista. Pinagut ti dentista ti binukbok a
ngipenna.</p>
<p>"Liklikam ti mangan ti adu a sinam-it. Aggisigiska met a kanayon
tapno saan a madadael dagiti ngipenmo," imbalakad ti dentista,
"Wen, doktor. Agyamanak unay," kinuna ti Pining.
"Manipud idi, likliklikanen ni Pining ti mangan ti sinam-it ken
kanayon metten nga asggisigis kadagiti ngipenna.
</p>

</div>

   <ul id="pagination-demo" class="pagination">
   
   </ul>
</div>

<script type="text/javascript">
$(document).ready(function() {
$('#pagination-demo').twbsPagination({
totalPages: 2,
// the current page that show on start
startPage: 1,

// maximum visible pages
visiblePages:2,

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


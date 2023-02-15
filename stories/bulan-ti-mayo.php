<?php 
include 'header.php';
?>

<div class="container text-center bg-white  text-dark p-5">
    
<div class = "page" id="page1">
  
<span class = "heading h2">Bulan ti Mayo Manen</span>
<div class="body-part" >

</div>
<p>
<span class = "heading h2">S</span>arita ni Leila P. Areola, Ph. D .
<br>
<span class = "heading h2">I</span>nlandawan ni Noel B. Corpuz
</p>
<p>
Kasta unay ti ayat dagiti annak ni Tata Munding idi impaamagna a
simmangpeteni Tata Dante. Ni Tata Dante ket kabsat ni Tata
Mungding nga
</p>
<p>
agnaed idiay Aparri, Cagayan.
Awan liway dagiti annak ni Tata Munday a dumay-ay ti "May
Festival" idiay Aparri. Agrugi daytoy iti umuna nga aldaw iti Mayo.
"Yehey, adda ni Tio Dante," inlaglagto nga imbaga ni Mabel.
</p>
<p>
"Makakuganak
manen ti Ferris Wheel'."
"Intuno maminsan a tawen, anak. Awan ti agaw-awir kenka diay.
Mayat.</p>
</p>

</div>
<div class = "page" id="page2">
<p>kuma no makapanak", impalawag ni Tata Munding.
"Agbatikan, ading . Iyawidan kanto ti munyekam, "inyay-ayo ni
manang na aMabel.</p>
<p>Iyawidan kanto met adu a makmakan." innayon ni Maros.
"Ala, ila irubbuat yon dagiti lupotyon ta masapa tayo nga agbiahe no
bigat, "kinuna ni Tio Dante. "Saan yo a liplipatan ti lupotyo a
pagdigos diay baybay."
</p>

</div>
<div class = "page" id="page3">
<p>Nakarkaro manenti ragsak da Mabel ken Maros.
"Yehey, mapan kami manen agdigos idiay danum a kumamat."
dandani a.</p>
<p>naggiddan nga inyikkis da Mabel ken Maros.
"Masapa kayo ngarud a maturog tapno masapa kayo a
mariing ."Impalagipni Tata Munding .
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


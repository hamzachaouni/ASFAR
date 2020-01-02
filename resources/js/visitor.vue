<template>
    <div>
      <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <img src="http://localhost:8000/front/img/AS.FAR_logo.png" height="30px">
      ASFAR
    </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <router-link to="/accueil" class="nav-link js-scroll-trigger" href="#nouvelles">Accuiel</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/nouvelles" class="nav-link js-scroll-trigger" href="#nouvelles">Nouvelles</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/equipe" class="nav-link js-scroll-trigger" href="#équipe">L'équipe</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/histoire/decennie" class="nav-link js-scroll-trigger" href="#fans">Histoire</router-link>
          </li>
          <!--<li class="nav-item">
            <router-link to="/magasin" class="nav-link js-scroll-trigger" href="#fans">Magasin</router-link>
          </li>-->
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">ASSOCIATION SPORTIVE DES FORCES ARMEES ROYALES</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Le site officiel de l'Armée Royale Marocaine et toutes les actualités et la nouvelle équipe, vous pouvez les trouver ici</p>
          <!--<a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">SAVOIR PLUS</a>-->
        </div>
      </div>
    </div>
  </header>
   <router-view></router-view>
  















<!--footer starts from here-->
<footer class="footer">
<div class="container bottom_border">
<div class="row">
<div class=" col-sm-3 col-md col-sm-4  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Trouve nous</h5>
<!--headin5_amrc-->
<p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
<p><i class="fa fa-phone"></i>  +212-610205213  </p>
<p><i class="fa fa fa-envelope"></i> asfartv1958@gmail.com  </p>


</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">Liens rapides</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="http://webenlance.com">Accuiel</a></li>
<li><a href="http://webenlance.com">Nouvelles</a></li>
<li><a href="http://webenlance.com">L'equipe</a></li>
<li><a href="http://webenlance.com">Histoire</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Suivez nous</h5>
<!--headin5_amrc ends here-->

<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAsfartv1958%2F&tabs=timeline&width=520&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
<!--footer_ul2_amrc ends here-->
</div>
</div>
</div>


<div class="container">
<ul class="foote_bottom_ul_amrc">
<li><a href="http://webenlance.com">Accuiel</a></li>
<li><a href="http://webenlance.com">Nouvelles</a></li>
<li><a href="http://webenlance.com">L'equipe</a></li>
<li><a href="http://webenlance.com">Classement</a></li>
<li><a href="http://webenlance.com">Histoire</a></li>
</ul>
<!--foote_bottom_ul_amrc ends here-->
<p class="text-center">Copyright @2019 | Designed With by <a href="https://www.facebook.com/hamza.chaouni.33">Hamza Chaouni</a></p>

<ul class="social_footer_ul">
<li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
<li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>



</footer>

    </div>
</template>
<script>
    //import match_suivant_accueil from './components/accueil/match_suivant_accueil'
    export default {
      components : {
        //'match-suivant-accueil': match_suivant_accueil,
      },
    data() {
      return {
        //
      }
    }
  }
</script>
<style>


















.page-section {
    padding: 2rem 0;
    background-image: linear-gradient(to right,#480505,#000000,#045a0d);
    margin: 20px 0;
}
.page-section .text-center {
  color: white;
}
.page-section .text-center .text-center {
  color: white;
}
.page-section .text-muted {
  color: rgba(255, 255, 255, 0.72)!important;
}
.text-white-50 {
  color: rgba(255, 255, 255, 0.72)!important;
}









.mb-2, .my-2 {
    margin-bottom: .5rem!important;
    font-size: 60px;
}

















/*footer*/
.col_white_amrc { color:#FFF;}
footer { width:100%; background-color:#263238; min-height:250px; padding:10px 0px 25px 0px ;}
.pt2 { padding-top:40px ; margin-bottom:20px ;}
footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}
.mb10 { padding-bottom:15px ;}
.footer_ul_amrc { margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; }
.footer_ul_amrc li {padding:0px 0px 5px 0px;}
.footer_ul_amrc li a{ color:#CCC;}
.footer_ul_amrc li a:hover{ color:#fff; text-decoration:none;}
.fleft { float:left;}
.padding-right { padding-right:10px; }

.footer_ul2_amrc {margin:0px; list-style-type:none; padding:0px;}
.footer_ul2_amrc li p { display:table; }
.footer_ul2_amrc li a:hover { text-decoration:none;}
.footer_ul2_amrc li i { margin-top:5px;}

.bottom_border { border-bottom:1px solid #323f45; padding-bottom:20px;}
.foote_bottom_ul_amrc {
  list-style-type:none;
  padding:0px;
  display:table;
  margin-top: 10px;
  margin-right: auto;
  margin-bottom: 10px;
  margin-left: auto;
}
.foote_bottom_ul_amrc li { display:inline;}
.foote_bottom_ul_amrc li a { color:#999; margin:0 12px;}

.social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
.social_footer_ul li { padding-left:20px; padding-top:10px; float:left; }
.social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
.social_footer_ul li i {  width:20px; height:20px; text-align:center;}






























.masthead .btn {
}
</style>
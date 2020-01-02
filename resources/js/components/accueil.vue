<template>
    <div>
      <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <div id="magicCarousel" class="carousel slide my-5" data-ride="carousel">
      
<!--    Carousel Indicators    -->
      <ol class="carousel-indicators">
        <li data-target="#magicCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#magicCarousel" data-slide-to="1"></li>
        <li data-target="#magicCarousel" data-slide-to="2"></li>
        <li data-target="#magicCarousel" data-slide-to="3"></li>
      </ol>
      
<!--    Carousel Slider    -->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <router-link v-bind:to="'/nouvelle/' + nouvellessliderleftactive.slug"><img :src="'storage/'+nouvellessliderleftactive.photo" class="d-block w-100" height="559px"></router-link>
          <div class="carousel-caption">
            <h3>{{ nouvellessliderleftactive.titre }}</h3>
            <p>{{ nouvellessliderleftactive.p_text | truncate(200) }}</p>
          </div> 
        </div>
        
        <div class="carousel-item">
          <router-link v-bind:to="'/nouvelle/' + nouvellessliderleftone.slug"><img :src="'storage/'+nouvellessliderleftone.photo" class="d-block w-100" height="559px"></router-link>
          <div class="carousel-caption">
            <h3>{{ nouvellessliderleftone.titre }}</h3>
            <p>{{ nouvellessliderleftone.p_text | truncate(200) }}</p>
          </div> 
        </div>
        <div class="carousel-item">
          <router-link v-bind:to="'/nouvelle/' + nouvellessliderlefttwo.slug"><img :src="'storage/'+nouvellessliderlefttwo.photo" class="d-block w-100" height="559px"></router-link>
          <div class="carousel-caption">
            <h3>{{ nouvellessliderlefttwo.titre }}</h3>
            <p>{{ nouvellessliderlefttwo.p_text | truncate(200) }}</p>
          </div> 
        </div>
        <div class="carousel-item">
          <router-link v-bind:to="'/nouvelle/' + nouvellessliderleftthree.slug"><img :src="'storage/'+nouvellessliderleftthree.photo" class="d-block w-100" height="559px"></router-link>
          <div class="carousel-caption">
            <h3>{{ nouvellessliderleftthree.titre }}</h3>
            <p>{{ nouvellessliderleftthree.p_text | truncate(200) }}</p>
          </div> 
        </div>
        
        
<!--     Carousel Controls     -->
        <a href="#magicCarousel" class="carousel-control-prev" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a href="#magicCarousel" class="carousel-control-next" role="button" data-slide="next">
          <span class="carousel-control-next-icon"></span>
          <span class="sr-only">Next</span>
        </a>
        
      </div>
    </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
    <div v-for="nouvelleslider in nouvellesslider.data" class="col-md-6">
                  <div id="magicCarousel" class="carousel slide my-5" data-ride="carousel">
<!--    Carousel Slider    -->
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <router-link v-bind:to="'/nouvelle/' + nouvelleslider.slug"><img :src="'storage/'+nouvelleslider.photo" class="d-block w-100" height="269px" ></router-link>
          <div class="carousel-caption">
           <p>{{ nouvelleslider.titre }}</p>
          </div> 
        </div>
        </div>   
      </div>
    </div>
                </div>


                    
                  </div>
                  
                   
                 
                </div>
              </div>
            <section class="match-sui page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Match Suivant</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Les FAR de Rabat affronteront <span class="remise">le {{ matchsuivant.remise }}</span> du Championnat du <span class="tournoi">{{ matchsuivant.type_tournoi }} {{ matchsuivant.temps }}</span> à <span class="temps">{{ matchsuivant.timing }}</span> au <span class="lieu">{{ matchsuivant.lieu }}</span></p>
          <img :src="'storage/'+matchsuivant.logo_remise" width="100px" height="100px">
        </div>
      </div>
    </div>
  </section>








<div class="nouvelles">
<div class="container-fluid">
  <hr>
  <div class="title">Nouvelles</div>
  <hr>
  <div class="row">
    <div class="col-md-3" v-for="nouvelle in nouvelles">
      <div class=card>
    <img class=cardimg :src="'storage/'+nouvelle.photo" width="100%" height="50%">
    <div class=cardcontent>
      <p class="p-date">{{ nouvelle.created_at }}</p>
      <h2>{{ nouvelle.titre }}</h2>
      <p>{{ nouvelle.p_text | truncate(200) }}</p>
    </div>
    <div class=cardfooter>
      <h3>Lire la suite</h3>
      <router-link v-bind:to="'/nouvelle/' + nouvelle.slug"><i class="fa fa-arrow-circle-right cardreadme" style="font-size:24px"></i></router-link>
    </div>
    
    

  </div>
    </div>
    <div class="col-md-12 text-center">
      <router-link v-bind:to="'/nouvelles'" class="btn btn-primary btn-xl js-scroll-trigger" href="#about">SAVOIR PLUS</router-link>
    </div>

  </div>
</div>
</div>














<section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Palmarès</h2>
      <hr class="divider my-4">
      <div class="row justify-content-center">
        <div v-for="palmare in palmares" class="col-lg-2 col-md-6 text-center">
          <div class="mt-5">
            <img :src="'storage/'+palmare.photo" height="160px">
            <h3 class="h4 mb-2">{{ palmare.numero }}</h3>
            <p class="text-muted mb-0">{{ palmare.name }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>  










<div class="photos container-fluid">
  <hr>
  <div class="title">PHOTOS</div>
  <hr>
  <div class="row">
    <div v-for="image in images.data" class="col-md-4">
      <div class="image">
        <router-link v-bind:to="'/image/' + image.slug"><img :src="'storage/'+image.photo" width="100%" height="380px"></router-link>
      </div>
      <div class="content">
        <a href="#"><h2>{{ image.titre }}</h2></a>
        <p>{{ image.text | truncate(200) }}</p>
      </div>
    </div>
    <div class="text-center col-md-12">
      <pagination :data="images" @pagination-change-page="getResultsImage"></pagination> 
    </div>
  </div>
  
</div>

<div class="classement">
<section>
  <!--for demo wrap-->
  <h1>Classement ELBotola 2019/2020</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>POS</th>
          <th>EQUIPE</th>
          <th>PTS</th>
          <th>J</th>
          <th>G</th>
          <th>N</th>
          <th>P</th>
          <th>BP</th>
          <th>BC</th>
          <th>DIFF</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr v-for="(classement, index) in classements">
          <th>{{ index+1 }}</th>
          <th><img :src="'storage/'+classement.photo" height="30px"> {{ classement.name }}</th>
          <th>{{ classement.gagne * 3 + classement.nul }}</th>
          <th>{{ classement.jouez }}</th>
          <th>{{ classement.gagne }}</th>
          <th>{{ classement.nul }}</th>
          <th>{{ classement.perdu }}</th>
          <th>{{ classement.pourlui }}</th>
          <th>{{ classement.cabaisse }}</th>
          <th>{{ classement.pourlui - classement.cabaisse }}</th>
        </tr>
      </tbody>
    </table>
  </div>
</section>
</div>













<!--<div class="produits container-fluid">
  <hr>
  <div class="title">NOUVEAUX PRODUITS</div>
  <hr>
  <div class="row">
    <div v-for="produit in produits.data" class="col-md-3 text-center">
      <img :src="'storage/'+produit.photo" width="100%" height="500px">
      <div class="content">
        <h3>{{ produit.titre }}</h3>
      <h4><span>{{ produit.prix }} DH</span></h4>
      </div>
    </div>
  </div>
  <pagination :data="images" @pagination-change-page="getResultsProduit"></pagination> 
</div>-->

    </div>
</template>
<script>
  export default {
    data() {
      return {
        nouvellesslider: {},
        nouvellessliderleftactive: {},
        nouvellessliderleftone: {},
        nouvellessliderlefttwo: {},
        nouvellessliderleftthree: {},
        matchsuivant: [],
        nouvelles: [],
        palmares: [],
        classements: [],
        images: {},
        produits: {}
      }
    },
    methods: {
      getResultsImage(page = 1) {
      axios.get('api/imagesaccuiel?page=' + page)
        .then(response => {
          this.images = response.data;
        });
    },
    getResultsProduit(page = 1) {
      axios.get('api/produitaccuiel?page=' + page)
        .then(response => {
          this.produits = response.data;
        });
    },
      getnouvellesslider() {
        axios.get('http://localhost:8000/api/nouvellesslider')
            .then(res => {
                this.nouvellesslider = res.data;
                this.nouvellessliderleftactive = res.data.data[0];
                this.nouvellessliderleftone = res.data.data[1];
                this.nouvellessliderlefttwo = res.data.data[2];
                this.nouvellessliderleftthree = res.data.data[3];
                console.log(res.data.data[0]);
              })
             .catch(err => console.error(err))
      },
      getmatchsuivant() {
        axios.get('http://localhost:8000/api/matchesuivant/1')
            .then(res => {
                this.matchsuivant = res.data.data[0];
              })
             .catch(err => console.error(err))
      },
      getpalmares() {
        axios.get('http://localhost:8000/api/palmares')
            .then(res => {
                this.palmares = res.data.data;
              })
             .catch(err => console.error(err))
      },
      getnouvelles() {
        axios.get('http://localhost:8000/api/nouvellesaccuiel')
            .then(res => {
                this.nouvelles = res.data.data;
                console.log(res.data.data);
              })
             .catch(err => console.error(err))
      },
      getClassements() {
        axios.get('http://localhost:8000/api/classement')
            .then(res => {
                this.classements = res.data.data;
                console.log(res.data.data);
              })
             .catch(err => console.error(err))
      },
      getimages() {
        axios.get('http://localhost:8000/api/imagesaccuiel')
            .then(res => {
                this.images = res.data;
                console.log(res.data.data);
              })
             .catch(err => console.error(err))
      },
      getproduits() {
        axios.get('http://localhost:8000/api/produitaccuiel')
            .then(res => {
                this.produits = res.data;
                console.log(res.data.data);
              })
             .catch(err => console.error(err))
      }
    },
    created() {
      this.getmatchsuivant();
      this.getnouvelles();
      this.getpalmares();
      this.getimages();
      this.getproduits();
      this.getnouvellesslider();
      this.getClassements();
      //setInterval(() => this.getcars(), 3000);
    },
    computed: {

    },
    components: {
    }
  }
// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
<style>
.match-sui .page-section {
    padding: 2rem 0;
    background-image: linear-gradient(to right,#480505,#000000,#045a0d);
    margin: 20px 0;
}
.match-sui .page-section .text-center {
  color: white;
}












.nouvelles {
  padding-top: 20px;
}
.nouvelles hr {
    border-top: 4px solid black;
}
.nouvelles .title {
  font-size: 2.75rem;
  font-weight: bold;
  color: black;
  font-family: 'Solway', serif;
}
.nouvelles .card {
  width: 100%;
  height: 500px;
  display: flex;
  flex-direction: column;
  font-family: sans-serif;
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  white-space: nowrap;
  margin-bottom: 15px;
}
.nouvelles .cardimg {
}
@import url('https://fonts.googleapis.com/css?family=Lalezar&display=swap');
.nouvelles .cardcontent {
  height: 39%;
  background: white;
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  padding-left: 15px;
  padding-right: 15px;
  white-space: normal;
  text-align: right;
}
.nouvelles .cardcontent h2 {
  font-family: 'Lalezar', cursive;
}
.nouvelles .cardcontent p {
  font-family: 'Lalezar', cursive;
  font-size: 15px;
}

.nouvelles .cardcontent {
  font-size: 0.8em;
}
.nouvelles .cardfooter {
  height: 12%;
  background: rgb(235, 235, 235);
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: center;
}

.nouvelles .cardbutton {
  background: lightgreen;
  position: absolute;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  transform: translate(150px, 128px);
  display: flex;
  justify-content: center;
  align-items: center;
  transition: 0.1s ease-in;
}
.nouvelles .cardbutton i {
  color: white;
  transform: translateY(-2px);
}

.nouvelles .cardbutton:hover {
  background: cyan;
}
.nouvelles .cardfooter h3 {
  font-size: 0.8em;
}
.nouvelles .cardreadme {
  color: rgb(150, 150, 150);
}
.nouvelles .cardcontent p:nth-child(1) {
  font-size: 0.8em;
}
.nouvelles .cardcontent h3 {
  font-size: 1.4em;
}
.nouvelles .cardcontent p:nth-child(2) {
  font-size: 0.9em;
}
.nouvelles .cardcontent .p-date {
  margin-top: 20px;
}


















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

















.photos .content {
    padding: 11px;
}
.photos .col-md-4 {
  overflow: hidden;
}
.photos .image {
  width: 100%;
  height: 380px;
  overflow: hidden;
}
.photos .image img {
  transition: .5s;
  
}
.photos .image img:hover {
  transform: scale(1.3) rotate(8deg);
  opacity: 0.9;
}
.photos .content h2 {
  color: #002f6c;
  font-size: 1.75rem;
    line-height: 2.125rem;
    margin-bottom: .625rem;
    font-family: 'Solway', serif;
}
.photos .content h2:hover {
  color: #940e0e;
} 
.photos .content p {
  font-family: 'Solway', serif;
  color: #6e7882;
}
.photos .title {
  font-size: 2.75rem;
  font-weight: bold;
  color: black;
  font-family: 'Solway', serif;
}
.photos hr {
    border-top: 4px solid black;
}












.page-item:first-child .page-link {
    margin-left: 0;
}
.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #000000;
    border-color: #000000;
}
.page-link {
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #000000;
    background-color: #fff;
    border: 1px solid #000000;
}
.page-link:hover {
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #fff;
    background-color: #000000;
    border: 1px solid #000000;
}










.produits {
  padding-top: 30px;
}
.produits .content {
    padding: 11px;
}
.produits .title {
  font-size: 2.75rem;
  font-weight: bold;
  color: black;
  font-family: 'Solway', serif;
}
.produits img {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.produits .content h3 {
  color: #002f6c;
    line-height: 2.125rem;
    margin-bottom: .625rem;
    font-family: 'Solway', serif;
}

.produits .content h4 {
  color: #002f6c;
    line-height: 2.125rem;
    margin-bottom: .625rem;
    font-family: 'Solway', serif;
}
.produits .content h4 span {
    background: black;
    padding: 6px 10px;
    color: white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.produits hr {
    border-top: 4px solid black;
}









.classement {
    background: black;
    padding: 3px;
    margin-bottom: 65px;
}
.classement h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
  padding-top: 20px;
}
.classement table{
  width:100%;
  table-layout: fixed;
}
.classement .tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.classement .tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
.classement th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
.classement td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}








/* demo styles */

/*@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #860000, #000000, #045400);
  font-family: 'Roboto', sans-serif;
}*/
.classement section{
  margin: 50px;
  background: linear-gradient(to right, #860000, #000000, #045400);
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}


/* follow me template */
/*.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}*/


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
</style>
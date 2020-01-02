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
          <router-link v-bind:to="'/nouvelle/' + nouvellessliderleftactive.slug"><img :src="'http://localhost:8000/storage/'+nouvellessliderleftactive.photo" class="d-block w-100" height="559px"></router-link>
          <div class="carousel-caption">
            <h3>{{ nouvellessliderleftactive.titre }}</h3>
            <p>{{ nouvellessliderleftactive.p_text | truncate(200) }}</p>
          </div> 
        </div>
        
        <div class="carousel-item">
          <router-link v-bind:to="'/nouvelle/' + nouvellessliderleftone.slug"><img :src="'http://localhost:8000/storage/'+nouvellessliderleftone.photo" class="d-block w-100" height="559px"></router-link>
          <div class="carousel-caption">
            <h3>{{ nouvellessliderleftone.titre }}</h3>
            <p>{{ nouvellessliderleftone.p_text | truncate(200) }}</p>
          </div> 
        </div>
        <div class="carousel-item">
          <router-link v-bind:to="'/nouvelle/' + nouvellessliderlefttwo.slug"><img :src="'http://localhost:8000/storage/'+nouvellessliderlefttwo.photo" class="d-block w-100" height="559px"></router-link>
          <div class="carousel-caption">
            <h3>{{ nouvellessliderlefttwo.titre }}</h3>
            <p>{{ nouvellessliderlefttwo.p_text | truncate(200) }}</p>
          </div> 
        </div>
        <div class="carousel-item">
          <router-link v-bind:to="'/nouvelle/' + nouvellessliderleftthree.slug"><img :src="'http://localhost:8000/storage/'+nouvellessliderleftthree.photo" class="d-block w-100" height="559px"></router-link>
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
          <router-link v-bind:to="'/nouvelle/' + nouvelleslider.slug"><img :src="'http://localhost:8000/storage/'+nouvelleslider.photo" class="d-block w-100" height="269px" ></router-link>
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

              <div class="nouvelle-left container-fluid" style="padding:30px 15px">
                <div class="row">
                  <div class="col-md-9">
                    <hr>
                    <div class="title">Nouvelles</div>
                    <hr>
                    <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12 text-right">
                        <div class="ti-tle">{{ nouvelle.titre }}</div>
                        <div class="ima-ge">
                          <img :src="'http://localhost:8000/storage/'+nouvelle.photo" height="700px" width="100%">
                        </div>
                        <p class="p__create">{{ nouvelle.created_at }}</p>
                        <div v-html="nouvelle.text" class="content">
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="col-md-3 social">
                    <hr>
                    <div class="title">Youtube</div>
                    <hr>
                    <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/dIh3izNLrc4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <hr>
                    <div class="title">Réseau social</div>
                    <hr>
                    <div class="login-box">
      <a href="#" class="social-button" id="facebook-connect"> <span>Connect with Facebook</span></a>
      <a href="#" class="social-button" id="twitter-connect"> <span>Connect with Twitter</span></a>
      <a href="#" class="social-button" id="linkedin-connect"> <span>Connect with Instagram</span></a>
    </div>
    <hr>
                    <div class="title">Page Facebook</div>
                    <hr>

    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAsfartv1958%2F&tabs=timeline&width=480&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

                  </div>
                </div>
              </div>
            </div>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        nouvelle: [],
        nouvellesslider: {},
        nouvellessliderleftactive: {},
        nouvellessliderleftone: {},
        nouvellessliderlefttwo: {},
        nouvellessliderleftthree: {}
      }
    },
    methods: {
      getnouvelle() {
        axios.get('http://localhost:8000/api/nouvelle/' + this.$route.params.slug)
            .then(res => {
                this.nouvelle = res.data.data[0];
              })
             .catch(err => console.error(err))
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
      }
    },
    created() {
      this.getnouvelle();
      this.getnouvellesslider();
      //setInterval(() => this.getcars(), 3000);
    },
    computed: {

    },
    components: {
    }
  }
</script>
<style>
@import url('https://fonts.googleapis.com/css?family=Tajawal&display=swap');
.carousel {
  position: relative;
}
.carousel h3,.carousel p {
  font-family: 'Tajawal', sans-serif;
}
.carousel-caption {
  position: absolute;
  background: rgba(0,0,0,0.4);
  padding: 15px 10px;
}

.carousel-control-prev,
.carousel-control-next {
  width: 5%;
}
.carousel img {
  transition: .5s;
  
}
.carousel img:hover {
  transform: scale(1.3) rotate(8deg);
  opacity: 0.9;
}
.carousel .mt-5, .my-5 {
    margin-top: 1rem!important;
     margin-bottom: 0rem!important;
}
.carousel .carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}










.nouvelle-left .ti-tle {
    font-size: 40px;
    margin-bottom: 14px;
    font-family: 'Tajawal', sans-serif;
}
.nouvelle-left .ima-ge {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.nouvelle-left .p__create {
    font-family: 'Solway', serif;
    font-weight: bold;
    margin-top: 10px;
}
.nouvelle-left .content p {
    font-family: 'Tajawal', sans-serif;
    font-size: 24px;
    
    color: #0000008c;
}

















hr {
    border-top: 4px solid black;
}
.title {
  font-size: 2.75rem;
  font-weight: bold;
  color: black;
  font-family: 'Solway', serif;
}
.content p {
  font-family: 'Lalezar', cursive;
}
.content h2 {
  font-family: 'Lalezar', cursive;
}
.image {
  margin-bottom: 10px;
}














.social .login-box {
    background: #fff;
    padding: 20px;
    max-width: 100%;
    margin: 0;
    text-align: center;
    letter-spacing: 1px;
    position: relative;
}

.social .login-box:hover {
}

.social .login-box h2 {
    margin: 20px 0 20px;
    padding: 0;
    text-transform: uppercase;
    color: #4688F1;
}

.social .social-button {
    background-position: 25px 0px;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    display: inline-block;
    height: 50px;
    line-height: 50px;
    text-align: left;
    text-decoration: none;
    text-transform: uppercase;
    vertical-align: middle;
    width: 100%;
    border-radius: 3px;
    margin: 10px auto;
    outline: rgb(255, 255, 255) none 0px;
    padding-left: 20%;
    transition: all 0.2s cubic-bezier(0.72, 0.01, 0.56, 1) 0s;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

.social #facebook-connect {
    background: rgb(255, 255, 255) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/facebook.svg?sanitize=true') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;
    border: 1px solid rgb(60, 90, 154);
}

.social #facebook-connect:hover {
    border-color: rgb(60, 90, 154);
    background: rgb(60, 90, 154) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/facebook-white.svg?sanitize=true') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;
    -webkit-transition: all .8s ease-out;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease-out;
}

.social #facebook-connect span {
    box-sizing: border-box;
    color: rgb(60, 90, 154);
    cursor: pointer;
    text-align: center;
    text-transform: uppercase;
    border: 0px none rgb(255, 255, 255);
    outline: rgb(255, 255, 255) none 0px;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

.social #facebook-connect:hover span {
    color: #FFF;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

.social #google-connect {
    background: rgb(255, 255, 255) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/google-plus.png') no-repeat scroll 5px 0px / 50px 50px padding-box border-box;
    border: 1px solid rgb(220, 74, 61);
}

.social #google-connect:hover {
    border-color: rgb(220, 74, 61);
    background: rgb(220, 74, 61) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/google-plus-white.png') no-repeat scroll 5px 0px / 50px 50px padding-box border-box;
    -webkit-transition: all .8s ease-out;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease-out;
}

.social #google-connect span {
    box-sizing: border-box;
    color: rgb(220, 74, 61);
    cursor: pointer;
    text-align: center;
    text-transform: uppercase;
    border: 0px none rgb(220, 74, 61);
    outline: rgb(255, 255, 255) none 0px;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

.social #google-connect:hover span {
    color: #FFF;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

.social #twitter-connect {
    background: rgb(255, 255, 255) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/twitter.png') no-repeat scroll 5px 1px / 45px 45px padding-box border-box;
    border: 1px solid rgb(85, 172, 238);
}

.social #twitter-connect:hover {
    border-color: rgb(85, 172, 238);
    background: rgb(85, 172, 238) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/twitter-white.png') no-repeat scroll 5px 1px / 45px 45px padding-box border-box;
    -webkit-transition: all .8s ease-out;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease-out;
}

.social #twitter-connect span {
    box-sizing: border-box;
    color: rgb(85, 172, 238);
    cursor: pointer;
    text-align: center;
    text-transform: uppercase;
    border: 0px none rgb(220, 74, 61);
    outline: rgb(255, 255, 255) none 0px;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

.social #twitter-connect:hover span {
    color: #FFF;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

.social #linkedin-connect {
    background: rgb(255, 255, 255) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/linkedin.svg?sanitize=true') no-repeat scroll 13px 0px / 28px 45px padding-box border-box;
    border: 1px solid rgb(0, 119, 181);
}

.social #linkedin-connect:hover {
    border-color: rgb(0, 119, 181);
    background: rgb(0, 119, 181) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/linkedin-white.svg?sanitize=true') no-repeat scroll 13px 0px / 28px 45px padding-box border-box;
    -webkit-transition: all .8s ease-out;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease-out;
}

.social #linkedin-connect span {
    box-sizing: border-box;
    color: rgb(0, 119, 181);
    cursor: pointer;
    text-align: center;
    text-transform: uppercase;
    border: 0px none rgb(0, 119, 181);
    outline: rgb(255, 255, 255) none 0px;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}

.social #linkedin-connect:hover span {
    color: #FFF;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}
</style>
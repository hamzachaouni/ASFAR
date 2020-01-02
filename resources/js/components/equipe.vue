<template>
    <div>
            <div class="container-fluid">
              <hr>
              <div class="title">Equipe 2019/2020</div>
              <hr>
              <div class="row">
                <div class="text-center title-span col-md-12"><span>Les gardes</span></div>

                <div v-for="jouerGarde in jouersGarde" class="col-md-3">
      <div class="card">
        <div class="imgBx">
            <router-link v-bind:to="'/equipe/' + jouerGarde.slug"><img :src="'storage/'+jouerGarde.photo_visage" alt="images"></router-link>
        </div>
        <div class="details">
            <h2>{{ jouerGarde.nom }} {{ jouerGarde.prenom }}<br><span>garde</span></h2>
        </div>
      </div>

                </div>
              </div>
              <div class="row">
                <div class="text-center title-span col-md-12"><span>Défense</span></div>
                <div v-for="jouerDéfense in jouersDéfense" class="col-md-3">
      <div class="card">
        <div class="imgBx">
            <router-link v-bind:to="'/equipe/' + jouerDéfense.slug"><img :src="'storage/'+jouerDéfense.photo_visage" alt="images"></router-link>
        </div>
        <div class="details">
            <h2>{{ jouerDéfense.nom }} {{ jouerDéfense.prenom }}<br><span>Défense</span></h2>
        </div>
      </div>

                </div>
              </div>
              <div class="row">
                <div class="text-center title-span col-md-12"><span>Milieu</span></div>
                <div v-for="jouerMoyen in jouersMoyen" class="col-md-3">
      <div class="card">
        <div class="imgBx">
           <router-link v-bind:to="'/equipe/' + jouerMoyen.slug"><img :src="'storage/'+jouerMoyen.photo_visage" alt="images"></router-link>
        </div>
        <div class="details">
            <h2>{{ jouerMoyen.nom }} {{ jouerMoyen.prenom }}<br><span>Milieu</span></h2>
        </div>
      </div>

                </div>
              </div>
              <div class="row">
                <div class="text-center title-span col-md-12"><span>L'attaque</span></div>
                <div v-for="jouerLattaque in jouersLattaque" class="col-md-3">
      <div class="card">
        <div class="imgBx">
            <router-link v-bind:to="'/equipe/' + jouerLattaque.slug"><img :src="'storage/'+jouerLattaque.photo_visage" alt="images"></router-link>
        </div>
        <div class="details">
            <h2>{{ jouerLattaque.nom }} {{ jouerLattaque.prenom }}<br><span>L'attaque</span></h2>
        </div>
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
        jouersGarde: {},
        jouersMoyen: {},
        jouersDéfense: {},
        jouersLattaque: {}
      }
    },
  mounted() {
    // Fetch initial results
  },
    methods: {
      jouerGarde() {
        axios.get('http://localhost:8000/api/jouers/Garde')
            .then(res => {
                this.jouersGarde = res.data.data;
                console.log(res.data.data);
              })
             .catch(err => console.error(err))
      },
      jouerMoyen() {
        axios.get('http://localhost:8000/api/jouers/Moyen')
            .then(res => {
                this.jouersMoyen = res.data.data;
                console.log(res.data.data);
              })
             .catch(err => console.error(err))
      },
      jouerDéfense() {
        axios.get('http://localhost:8000/api/jouers/Défense')
            .then(res => {
                this.jouersDéfense = res.data.data;
                console.log(res.data.data);
              })
             .catch(err => console.error(err))
      },
      jouerLattaque() {
        axios.get('http://localhost:8000/api/jouers/Lattaque')
            .then(res => {
                this.jouersLattaque = res.data.data;
                console.log(res.data.data);
              })
             .catch(err => console.error(err))
      }
    },
    created() {
      this.jouerGarde();
      this.jouerMoyen();
      this.jouerDéfense();
      this.jouerLattaque();
      //setInterval(() => this.getcars(), 3000);
    },
    computed: {

    },
    components: {
    }
  }
</script>
<style>

.title {
    text-align: center;
}
.title-span span {
    background: black;
    color: white;
    padding: 10px 17px;
    border-radius: 7px;
    font-family: 'Solway', serif;
}











  .card{
    position: relative;
    width: 100%;
    height: 450px;
    background: #fff;
    margin: 50px auto;
    border-radius: 4px;
    box-shadow:0 2px 10px rgba(0,0,0,.2);
  }
  .card:before,
  .card:after
  {
    content:"";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 4px;
    background: #fff;
    transition: 0.5s;
    z-index:-1;
  }
  .card:hover:before{
  transform: rotate(20deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);
  }
  .card:hover:after{
  transform: rotate(10deg);
  box-shadow: 0 2px 20px rgba(0,0,0,.2);
  }
  .card .imgBx{
  position: absolute;
  top: 10px;
  left: 10px;
  bottom: 10px;
  right: 10px;
  background: #222;
  transition: 0.5s;
  z-index: 1;
  }
  
  .card:hover .imgBx
  {
    bottom: 80px;
  }

  .card .imgBx img{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
  }

  .card .details{
      position: absolute;
      left: 10px;
      right: 10px;
      bottom: 10px;
      height: 60px;
      text-align: center;
  }

  .card .details h2{
   margin: 0;
   padding: 0;
   font-weight: 600;
   font-size: 20px;
   color: #777;
   text-transform: uppercase;
  } 

  .card .details h2 span{
  font-weight: 500;
  font-size: 16px;
  color: #f38695;
  display: block;
  margin-top: 5px;
   } 
</style>
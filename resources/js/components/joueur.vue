<template>
    <div>
      <div class="container-fluid joueur">
        <div class="row">
          <div class="col-md-4 joueur-left">
            <div class="content">
              <div class="numero">{{ jouers.numero }}</div>
              <div class="prenom">{{ jouers.prenom }}</div>
              <div class="nom">{{ jouers.nom }}</div>
              <div class="center">{{ jouers.center }}</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="image-joueur">
              <img src="https://img.fcbayern.com/image/fetch/f_auto,q_auto:good/https://fcbayern.com/binaries/content/gallery/fc-bayern/players/spielerportraits/ganzkoerper/manuel_neuer.png/manuel_neuer.png/fcbhippo%3Aheader%3Fv%3D1561964583569">
            </div>
          </div>
          <div class="col-md-4 joueur-right text-center">
            <div class="cont-ent">
              <div class="info">
                <span class="info">Information</span>
              </div>
              <div class="xx">
              <span class="label">DATE DE NAISSANCE</span>
              <span class="value">{{ jouers.date_naissance }}</span>
            </div>
            <div class="xx">
              <span class="label">TAILLE / POIDS</span>
              <span class="value">{{ jouers.taille }} cm / {{ jouers.poids }} kg</span>
            </div>
            <div class="xx">
              <span class="label">FIN DU CONTRAT</span>
              <span class="value">{{ jouers.fin_contrat }}</span>
            </div>
            <div class="xx">
              <span class="label">NATIONALITÉ</span>
              <span class="value">{{ jouers.nationalite }}</span>
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
        jouers: []
      }
    },
    methods: {
      getjouers() {
        axios.get('http://localhost:8000/api/equipe/' + this.$route.params.slug)
            .then(res => {
                this.jouers = res.data.data[0];
              })
             .catch(err => console.error(err))
      }
    },
    created() {
      this.getjouers();
      //setInterval(() => this.getcars(), 3000);
    },
    computed: {

    },
    components: {
    }
  }
</script>
<style>



.joueur {
  background: linear-gradient(to right, #860000, #000000, #045400);
  padding: 50px;
}




.joueur .joueur-left .content .numero {
    font-size: 120px;
    font-family: 'Solway', serif;
    color: white;
}
.joueur .joueur-left .content .prenom, .joueur .joueur-left .content .nom {
    font-size: 55px;
    font-weight: bold;
    font-family: 'Solway', serif;
    color: white;
}
.joueur .joueur-left .content .center {
    font-size: 80px;
    font-weight: bold;
    font-family: 'Solway', serif;
    color: white;
}






.joueur .joueur-right .info {
  margin-bottom: 20px;
}
.joueur .joueur-right .info span {
    color: white;
    font-size: 40px;
    background: black;
    padding: 5px 21px;
    border-radius: 11px;
    
}


.joueur .joueur-right {
    box-shadow: 154px 51px 48px 67px rgba(0, 0, 0, 0.2), 75px 34px 44px 116px rgba(0, 0, 0, 0.19);
    border: 1px solid #0000009e;
    padding: 80px;
}
.joueur .joueur-right .label {
   font-family: 'Solway', serif;
    font-size: 1.125rem;
    line-height: 1.5rem;
    text-transform: uppercase;
    display: block;
    color: white;
}
.joueur .joueur-right .value {
    font-family: 'Solway', serif;
    font-size: .75rem;
    line-height: 1.1875rem;
    display: block;
    position: relative;
    color: white;
}
.joueur .joueur-right .value:after {
    content: '';
    height: .125rem;
    width: 2.25rem;
    position: absolute;
    bottom: -1rem;
    left: 50%;
    margin-left: -1.125rem;
    background-color: #961432;
}
.joueur .joueur-right .xx {
    margin-bottom: 38px;
}

</style>
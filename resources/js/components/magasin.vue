<template>
    <div>
<div class="container-fluid">
  <hr>
              <div class="title">Emplacement du magasin</div>
              <hr>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.399696641785!2d-6.72810853274508!3d34.03784149557694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76a67aa934917%3A0xdd920af1ccc9bd08!2zS2FyaWF0LCBTYWzDqQ!5e1!3m2!1sfr!2sma!4v1576149139134!5m2!1sfr!2sma" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
              <div class="container-fluid">
                <hr>
              <div class="title">Nouveaux Produits</div>
              <hr>
                <div class="row card-prod">
                  <div v-for="produit in produits.data" class="col-md-6">
                     <div class="wrapper">
    <div class="product-img">
      <img src="http://asfar-club.weebly.com/uploads/1/0/6/1/106182371/cds_orig.png" height="420" width="327">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>{{ produit.titre }}</h1>
        <p>{{ produit.mini_text }}</p>
      </div>
      <div class="product-price-btn">
        <button type="button">{{ produit.prix }} DH</button>
      </div>
    </div>
  </div>
                  </div>
                </div>
              </div>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
 
                  </div>
                </div>
              </div>
    </div>
</template>
<script>
  export default {
    data() {
      return {
        produits: {}
      }
    },
  mounted() {
  },
    methods: {
      getproduits() {
        axios.get('http://localhost:8000/api/produits')
            .then(res => {
                this.produits = res.data;
                console.log(res.data.data);
              })
             .catch(err => console.error(err))
      }
    },
    created() {
      this.getproduits();
      //setInterval(() => this.getcars(), 3000);
    },
    computed: {

    },
    components: {
    }
  }
</script>
<style>
















.card-prod .wrapper {
  height: 420px;
  width: 654px;
  margin: 50px auto;
  border-radius: 7px 7px 7px 7px;
  /* VIA CSS MATIC https://goo.gl/cIbnS */
  -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
}

.card-prod .product-img {
  float: left;
  height: 420px;
  width: 327px;
}

.card-prod .product-img img {
  border-radius: 7px 0 0 7px;
}

.card-prod .product-info {
  float: left;
  height: 420px;
  width: 327px;
  border-radius: 0 7px 10px 7px;
  background-color: #ffffff;
}

.card-prod .product-text {
  height: 300px;
  width: 327px;
}

.card-prod .product-text h1 {
  margin: 0 0 0 38px;
  padding-top: 52px;
  font-size: 25px;
  color: #474747;
}

.card-prod .product-text h1,
.card-prod .product-price-btn p {
  font-family: 'Bentham', serif;
}

.card-prod .product-text h2 {
  margin: 0 0 47px 38px;
  font-size: 13px;
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
  text-transform: uppercase;
  color: #d2d2d2;
  letter-spacing: 0.2em;
}

.card-prod .product-text p {
  height: 125px;
  margin: 41px 0 0 38px;
  font-family: 'Playfair Display', serif;
  color: #8d8d8d;
  line-height: 1.7em;
  font-size: 15px;
  font-weight: lighter;
  overflow: hidden;
}

.card-prod .product-price-btn {
  height: 103px;
  width: 327px;
  margin-top: 17px;
  position: relative;
}

.card-prod .product-price-btn p {
  display: inline-block;
  position: absolute;
  top: -13px;
  height: 50px;
  font-family: 'Trocchi', serif;
  margin: 0 0 0 38px;
  font-size: 28px;
  font-weight: lighter;
  color: #474747;
}

.card-prod span {
  display: inline-block;
  height: 50px;
  font-family: 'Suranna', serif;
  font-size: 34px;
}

.card-prod .product-price-btn button {
  float: right;
  display: inline-block;
  height: 50px;
  width: 176px;
  margin: 0 40px 0 16px;
  box-sizing: border-box;
  border: transparent;
  border-radius: 60px;
  font-family: 'Raleway', sans-serif;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  color: #ffffff;
  background-color: #9cebd5;
  cursor: pointer;
  outline: none;
}

.card-prod .product-price-btn button:hover {
  background-color: #79b0a1;
}
</style>
<template>
    <div>
            <div class="produits container-fluid">
  <div class="title">NOUVEAUX PRODUITS</div>
  <hr>
  <div class="row">
    <div class="col-md-3 text-center">
      <img src="http://asfar-club.weebly.com/uploads/1/0/6/1/106182371/cds_orig.png" width="100%" height="405px">
      <div class="content">
        <h3>T-shirt ASFAR</h3>
      <h4><span>180 DH</span></h4>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <img src="https://assets.adidas.com/images/w_600,f_auto,q_auto:sensitive,fl_lossy/b425cbeda5b342ebadd7a92001316a8d_9366/Messi_Esofman_Takimi_Gri_DV1326_01_laydown.jpg" width="100%" height="405px">
      <div class="content">
        <h3>Survêtements Addidas ASFAR</h3>
      <h4><span>450 DH</span></h4>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <img src="http://asfar-club.weebly.com/uploads/1/0/6/1/106182371/reebok-41-75_orig.png" width="100%" height="405px">
      <div class="content">
        <h3>T-shirt ASFAR</h3>
      <h4><span>220 DH</span></h4>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <img src="https://assets.adidas.com/images/w_385,h_385,f_auto,q_auto:sensitive,fl_lossy/e59493fcbdb74b829ca1a83501202225_9366/veste-de-survetement-bb.jpg" width="100%" height="405px">
      <div class="content">
        <h3>Survêtements ASFAR</h3>
      <h4><span>600 DH</span></h4>
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
        //
      }
    },
    components: {
      
    }
  }
</script>
<style>
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
</style>
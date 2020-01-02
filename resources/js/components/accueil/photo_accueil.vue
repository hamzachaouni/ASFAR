<template>
    <div>
            <div class="photos container-fluid">
  <div class="title">PHOTOS</div>
  <hr>
  <div class="row">
    <div class="col-md-4">
      <div class="image">
        <a href="#"><img src="https://fr.hespress.com/wp-content/uploads/2019/08/ASFAR-e1565358843292-730x410.jpg" width="100%" height="305px"></a>
      </div>
      <div class="content">
        <a href="#"><h2>Session de formation</h2></a>
      <p> faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image">
        <a href="#"><img src="https://i.le360.ma/le360sport/sites/default/files/styles/img_742_454/public/assets/images/2018/03-reda/5a11d59fc5a4b064e74b710e_default.jpeg?itok=nMt0pXDB" width="100%" height="305px"></a>
      </div>
      <div class="content">
        <a href="#"><h2>l'interview de l'Union de Tanger</h2></a>
      <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image">
        <a href="#"><img src="https://www.libe.ma/photo/art/default/20479655-23939076.jpg?v=1519739234" width="100%" height="305px"></a>
      </div>
      <div class="content">
        <a href="#"><h2>Photos des joueurs dans le nouveau costume</h2></a>
      <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte</p>
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
        
      }
    },
    components: {
      
    }
  }
</script>
<style>
.photos .content {
    padding: 11px;
}
.photos .col-md-4 {
  overflow: hidden;
}
.photos .image {
  width: 100%;
  height: 305px;
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

</style>
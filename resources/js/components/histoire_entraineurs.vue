<template>
    <div>
            <div class="container-fluid">
              <nav class="nav-host navbar navbar-expand-sm navbar-light bg-light">
    <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarsExample11">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link to="/histoire/decennie" class="nav-link" href="#">Décennie par Décennie</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/histoire/presidents" class="nav-link" href="#">Président</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/histoire/legendes" class="nav-link" href="#">Légendes</router-link>
                </li>
                <li class="nav-item active">
                    <router-link to="/histoire/entraineurs" class="nav-link" href="#">Entraineurs</router-link>
                </li>
            </ul>
        </div>
    </div>
</nav>
              <hr>
                <div class="title">Entraineurs</div>
                <hr>
              <div class="row">
                <div v-for="entraineur in entraineurs" class="col-md-4 text-center">
                  <div class="image">
                   <router-link v-bind:to="'/histoire/' + entraineur.slug"><img :src="'http://localhost:8000/storage/'+entraineur.photo" width="100%" height="350px"></router-link>
                    <div class="content">
                      <h2>{{ entraineur.titre }}</h2>
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
        entraineurs: []
      }
    },
    methods: {
      gethistoire() {
        axios.get('http://localhost:8000/api/histoires/entraineurs')
            .then(res => {
                this.entraineurs = res.data.data;
                console.log(res.data.data);
              })
             .catch(err => console.error(err))
      }
    },
    created() {
      this.gethistoire();
      //setInterval(() => this.getcars(), 3000);
    },
    computed: {

    },
    components: {
    }
  }
</script>
<style>










.image {
    border: 1px solid #bebebe;
    width: 100%;
    overflow: hidden;
}
.image img {
  transition: .5s;
}
.image img:hover {
  transform: scale(1.3) rotate(8deg);
  opacity: 0.9;
}
.content {
    padding: 13px;
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









.bg-light {
    background-color: #000000!important;
    margin-top: 10px;
    padding: 0px;
}
.nav-host .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.9);
    font-family: 'Solway', serif;
    padding: 20px 24px;
}
.nav-host .navbar-nav .active {
  background-color: #f4623a;
}
.nav-host .navbar-nav .nav-link:hover {
  background-color: #f4623a;
}
.nav-host .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .nav-host .navbar-nav .show>.nav-link {
    color: rgba(255, 255, 255, 0.9);
    font-family: 'Solway', serif;
    padding: 20px 24px;
}
@media (min-width: 768px) {
.nav-host .navbar-brand.abs
    {
        position: absolute;
        width: 100%;
        left: 0;
        text-align: center;
    }
}

</style>
<template>
    <div>
            <div class="container-fluid">
              <hr>
                <div class="title">{{ histoire.titre }}</div>
                <hr>
              <div class="row histoire">
                <div class="container">
                  <div class="img">
                    <img :src="'http://localhost:8000/storage/'+histoire.photo" height="500px" width="100%">
                  </div>
                  <p class="p__create text-right">{{ histoire.created_at }}</p>
                        <div v-html="histoire.text" class="content text-right">
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
        histoire: []
      }
    },
    methods: {
      gethistoire() {
        axios.get('http://localhost:8000/api/histoire/' + this.$route.params.slug)
            .then(res => {
                this.histoire = res.data.data[0];
                console.log(res.data.data[0]);
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







.histoire .p__create {
    font-family: 'Solway', serif;
    font-weight: bold;
    margin-top: 10px;
}
.histoire .content p {
    font-family: 'Tajawal', sans-serif;
    font-size: 24px;
    padding: 5px 65px;
    color: #0000008c;
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
<template>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-sm-12 ">
           <div class="blog-slider">
                <div class="blog-slider__wrp swiper-wrapper">
                    <div class="blog-slider__item swiper-slide">
                    <div class="blog-slider__img">
                        <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759872/kuldar-kalvik-799168-unsplash.jpg" alt="">
                    </div>
                    <div class="blog-slider__content">
                        <span class="blog-slider__code" v-if="formData.date">{{formData.date | formatDate}}</span>
                        <span class="blog-slider__code" v-else>No se encontro fecha</span>
                        <div class="blog-slider__title">{{formData.title}}</div>
                        <div class="blog-slider__text">{{formData.description}}</div>
                    </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Show",
  data() {
    return {
      formData: {
        title: "",
        description: "",
        date : ""
      },
      message: "",
      submitted: false,
      successful: false,
     
    };
  },
  methods: {
    getInfo(){
      this.axios.post('/api/posts/'+this.$route.params.id) 
      .then((res)=> {
        console.log(res);

        this.formData.title = res.data.post.title;
        this.formData.description = res.data.post.description;
        this.formData.date = res.data.post.created_at;
        

      })
      .catch((e)=>e)
    }
  },
  mounted() {
    this.getInfo();
  }
};
</script>

<style>
</style>
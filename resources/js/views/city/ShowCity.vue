<template>
  <div class="conatiner-fluid">
    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center">
          <div class="col-md-4">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <h3 class="profile-username text-center"></h3>

                <p class="text-muted text-center">{{ cities.name }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Id</b> <span class="float-right">{{ cities.id }}</span>
                  </li>
                  <li class="list-group-item">
                    <b>Nombre</b> <span class="float-right">{{ cities.name }}</span>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Información</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Descripción</strong>

                <p class="text-muted">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ea
                  perferendis officia, eligendi fugit iure asperiores dolorum quia unde,
                  aspernatur modi fuga, hic illo sint possimus natus soluta harum? Magnam.
                </p>

                <hr />

                <strong><i class="far fa-file-alt mr-1"></i> Telefono</strong>

                <p class="text-muted">310 250 6389</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>
</template>

<script>
export default {
  name: "City",
  data() {
    return {
      cities: [],
      error: "",
    };
  },
  methods: {
    getinfoUser() {
      console.log(this.$route.params.id);
      axios
        .get("api/cities-detail/" + this.$route.params.id)
        .then((response) => {
          this.cities = response.data.cities;
          console.log(this.cities);
        })
        .catch((error) => {
          this.error = error;
          console.log(error);
        });
    },
  },
  created() {
    this.getinfoUser();
  },
};
</script>

<style></style>

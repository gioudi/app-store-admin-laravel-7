<template>
  <div class="container">
    <div class="row justify-content-center d-flex">
      <div class="col-sm-12 col-lg-4">
        <div class="register-box">
          <div class="card card-outline card-primary">
            <div class="card-body">
              <p class="login-box-msg">Update Client</p>

              <form name="form" @submit.prevent="setinfoUser()">
                <div class="form-row">
                  <div class="input-group col-sm-12 mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Full name"
                      name="name"
                      v-model="formData.name"
                      v-validate="'required|min:4|max:20'"
                    />
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-clients"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group col-sm-12">
                    <div
                      class="alert d-block w-100 shadow alert-danger"
                      role="alert"
                      v-if="submitted && errors.has('name')"
                    >
                      {{ errors.first("name") }}
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="input-group col-sm-12 mb-3">
                    <select
                      class="custom-select form-control"
                      name="city"
                      v-model="formData.id_City"
                      v-validate="'required'"
                    >
                      <option
                        v-for="city in formData.id_City"
                        :key="city"
                        :value="formData.id_City"
                      >
                        {{ city }}
                      </option>
                    </select>
                  </div>
                  <div class="input-group col-sm-12">
                    <div
                      class="alert d-block w-100 shadow alert-danger"
                      role="alert"
                      v-if="submitted && errors.has('city')"
                    >
                      {{ errors.first("city") }}
                    </div>
                  </div>
                </div>

                <div class="row mb-3">
                  <!-- /.col -->
                  <div class="col-4">
                    <button type="submit" class="btn btn-success btn-block">Save</button>
                  </div>
                  <!-- /.col -->
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div
                      class="alert"
                      v-if="submitted"
                      :class="successful ? 'alert-success' : 'alert-danger'"
                    >
                      {{ message }}
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.form-box -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "updateCity",
  data() {
    return {
      formData: {
        name: "",
      },
      message: "",
      submitted: false,
      successful: false,

      error: "",
    };
  },

  methods: {
    getinfoUser() {
      console.log(this.$route.params.id);
      axios
        .get("api/clients-detail/edit/" + this.$route.params.id)
        .then((response) => {
          this.formData = response.data.clients;
          console.log(this.formData);
        })
        .catch((error) => {
          this.error = error;
          console.log(error);
        });
    },
    setinfoUser() {
      this.message = "";
      this.submitted = true;
      this.$validator.validate().then((isValid) => {
        if (isValid) {
          axios
            .put("api/clients-detail/edit/" + this.$route.params.id, this.formData)
            .then((response) => {
              this.successful = true;
              this.message = response.data.message;
              console.log(this.message);
            })
            .catch((error) => {
              this.error = error;
              this.submitted = false;
              console.log(error);
            });
        }
      });
    },
  },
  created() {
    this.getinfoUser();
  },
};
</script>

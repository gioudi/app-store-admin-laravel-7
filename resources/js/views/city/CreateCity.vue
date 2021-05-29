<template>
  <!-- Main content -->
  <section class="content">
    <div class="row d-flex justify-content-center">
      <div class="col-md-6 col-sm-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add City</h3>
          </div>
          <div class="card-body">
            <form name="form" @submit.prevent="setinfoCity()">
              <div class="form-row">
                <div class="input-group col-sm-12 mb-3">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="City"
                    name="name"
                    v-model="formData.name"
                    v-validate="'required|min:4|max:20'"
                  />
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-cities"></span>
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
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "addClient",
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
    setinfoCity() {
      this.message = "";
      this.submitted = true;
      this.$validator.validate().then((isValid) => {
        if (isValid) {
          axios
            .post("api/cities", this.formData)
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
  created() {},
};
</script>

<style></style>

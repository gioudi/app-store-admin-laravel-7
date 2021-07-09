<template>
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-sm-12 col-lg-4">
        <div class="login-box">
          <div class="card card-outline card-primary">
            <div class="card-header text-center">
              <a href="/#/" class="h1"><b>Create -</b>Post</a>
            </div>
            <div class="card-body">
              <form name="form" @submit.prevent="createPost()">
                <div class="form-row">
                  <label>Title: </label>
                  <div class="input-group col-sm-12 mb-3">
              
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Title Post"
                      name="title"
                      v-model="formData.title"
                      v-validate="'required'"
                    />
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group col-sm-12">
                    <div
                      class="alert d-block w-100 shadow alert-danger"
                      role="alert"
                      v-if="submitted && errors.has('title')"
                    >
                      {{ errors.first("title") }}
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="input-group col-sm-12 mb-3">
                    <div class="form-group">
                      <label>Description: </label>
                      <textarea
                        class="form-control"
                        rows="3"
                        cols="40"
                        name="description"
                        v-model="formData.description"
                        v-validate="'required|min:10'"
                        placeholder="Enter ..."
                      ></textarea>
                    </div>
                  </div>

                  <div class="input-group col-sm-12">
                    <div
                      class="alert d-block w-100 shadow alert-danger"
                      role="alert"
                      v-if="submitted && errors.has('description')"
                    >
                      {{ errors.first("description") }}
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">
                      Save
                    </button>
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
    </div>
  </div>
</template>

<script>
export default {
  name: "Create",
  data() {
    return {
      formData: {
        title: "",
        description: "",
      },
      message: "",
      submitted: false,
      successful: false,
    };
  },
  methods: {
    createPost() {
            this.message = '';
            this.submitted = true;
            this.$validator.validate().then(isValid => {
                if(isValid) {
                   this.axios
                    .post("/api/posts", this.formData)
                    .then((res) => {
                        console.log(res);
                        this.successful= true;
                        this.message = res.data.message;
                        this.$router.push('/dashboard')

                    })
                    .catch((e) => e);
                    }
            });
     
    },
  },
};
</script>

<style>
</style>
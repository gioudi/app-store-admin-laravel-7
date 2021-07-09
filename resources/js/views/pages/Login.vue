<template>
  <div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/#/" class="h1"><b>Admin -</b>Main</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p> 
         <form name="form" @submit.prevent="login()" >
        <div class="form-row ">
            <div class="input-group  col-sm-12 mb-3">
              <input type="email" class="form-control" placeholder="Email" name="email" v-model="formData.email" v-validate="'required|email'">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>  
            <div class="input-group col-sm-12">
                  <div class="alert d-block w-100 shadow alert-danger" role="alert" v-if="submitted && errors.has('email')">
                      {{ errors.first('email')}} 
                  </div> 
              </div>
          </div>
         <div class="form-row">
            <div class="input-group  col-sm-12 mb-3">
                <input type="password" class="form-control" ref="password" placeholder="Password" name="password" v-model="formData.password"  v-validate="'required|min:6'">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              
            </div>

            <div class="input-group col-sm-12">
                <div class="alert d-block w-100 shadow alert-danger" role="alert" v-if="submitted && errors.has('password')">
                    {{ errors.first('password')}} 
                </div> 
            
            </div> 
       </div> 
        <div class="row mb-3">
      
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
         <div class="row">
              <div class="col-sm-12">
                  <div class="alert"
                  v-if="submitted "
                  :class="successful ? 'alert-success':'alert-danger'"
                  >{{message}}</div>

              </div>
          </div>
      </form>

  
      <p class="mb-0">
        <a href="/#/register" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

</template>
<script>
export default {
  name: 'login',
  data() {
    return {
      formData:
        {
            
            email: '',
            password: '',

        },
        message: '',
        submitted: false,
        successful: false
      
    }
  },

  methods: {
    login() {
          this.message = '';
            this.submitted = true;
            this.$validator.validate().then(isValid => {
                if(isValid) {
                    this.
                    axios.
                    post('/api/login', this.formData)
                    .then( response => {
                      this.message = response.data.message;
                      this.successful= true;
                      this.$router.push('/dashboard')
                    })
                    .catch(error =>  {
                      //console.log(error.response.data.message)
                      this.message = error.response.data.message;
                    })
                }
            });
    }
  },
}
</script>
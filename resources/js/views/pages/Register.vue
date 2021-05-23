<template>
  <div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/#/" class="h1"><b>Admin -</b>Main</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form  name="form" @submit.prevent="register()">
      <div class="form-row">
          <div class="input-group col-sm-12 mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="name" v-model="formData.name" v-validate="'required|min:4|max:20'">
            <div class="input-group-append">
          
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            
          </div>
          <div class="input-group col-sm-12">
              <div class="alert d-block w-100 shadow alert-danger" role="alert" v-if="submitted && errors.has('name')">
                  {{ errors.first('name')}} 
            </div> 
          </div>
                    
      </div>
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
       <div class="form-row">
          <div class="input-group  col-sm-12 mb-3">
            <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" v-model="formData.password_confirmation" v-validate="'required|min:6|confirmed:password'">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            
          </div>
          <div class="input-group col-sm-12">
            <div class="alert d-block w-100 shadow alert-danger" role="alert" v-if="submitted && errors.has('password_confirmation')">
                {{ errors.first('password_confirmation')}} 
            </div> 
          </div>
         
       </div>
        
        <div class="row mb-3">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Register</button>
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

      <!-- <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

      <a href="/#/login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
</template>


<script>
export default {
  name: 'register',
  data() {
    return {
      formData:
        {
            name: '',
            email: '',
            password: '',
            password_confirmation : ''
        },
        message: '',
        submitted: false,
        successful: false
      
    }
  },

  methods: {
    register() {
          this.message = '';
            this.submitted = true;
            this.$validator.validate().then(isValid => {
                if(isValid) {
                    this.
                    axios.
                    post('/api/register', this.formData)
                    .then( response => {
                      this.message = response.data.message;
                       this.successful= true;
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
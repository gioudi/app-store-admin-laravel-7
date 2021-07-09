<template>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="alert alert-info" v-if="message">
          {{message}}
        </div>
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
             List Post 
            </h3>
            <router-link to="/dashboard/create" class="btn btn-primary shadow-sm float-right" >New Post</router-link>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="table_id" class="display">
                <thead>
                      <tr role="row">
                        <th
                          class="sorting sorting_asc"
                          tabindex="0"
                          aria-controls="example2"
                          rowspan="1"
                          colspan="1"
                          aria-sort="ascending"
                          aria-label="Rendering engine: activate to sort column descending"
                        >
                          Id
                        </th>
                        <th
                          class="sorting"
                          tabindex="0"
                          aria-controls="example2"
                          rowspan="1"
                          colspan="1"
                          aria-label="Browser: activate to sort column ascending"
                        >
                          Title
                        </th>
                        <th
                          class="sorting"
                          tabindex="0"
                          aria-controls="example2"
                          rowspan="1"
                          colspan="1"
                          aria-label="Platform(s): activate to sort column ascending"
                        >
                          Description
                        </th>
                        <th
                          class="sorting"
                          tabindex="0"
                          aria-controls="example2"
                          rowspan="1"
                          colspan="1"
                          aria-label="Platform(s): activate to sort column ascending"
                        >
                          Actions
                        </th>
                      </tr>
                </thead>
                <tbody>
                     <tr class="even" v-for="item in post" :key="item">
                        <td class="sorting_1 dtr-control">{{ item.id }}</td>
                        <td>{{ item.title }}</td>
                        <td>{{ item.description }}</td>
                        <td>
                          <router-link :to="{name: 'dashboard.edit' , params: item }" type="button" class="btn btn-outline-primary "><i class="fas fa-pencil-alt mr-1"></i>Edit</router-link>
                          <router-link :to="{name: 'dashboard.show' , params: item }" type="button" class="btn btn-outline-info "><i class="fas fa-eye mr-1"></i>Show</router-link>
                          <button  @click="deletePost(item.id)"     type="button" class="btn btn-outline-danger "><i class="fas fa-trash mr-1"></i>Delete</button>

                        </td>
                      </tr>
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "dashboard",
  data() {
    return {
      post: [],
      message: ""
    };
  },
  methods: {
    getInfo() {
      this.axios
        .get("/api/posts")
        .then((res) => {
          console.log(res);
          this.post = res.data;
        })
        .catch((e) => e);
    },
    deletePost(id) {
      if(id) {
        this.axios.delete('/api/posts/'+id)
        .then((res)=>{
          console.log(res)
          this.message = res.data.message;
        })
        .catch((e)=>e)
      }
    }
  },
  created() {
    this.getInfo();
  },
  mounted() {
    $('#table_id').DataTable();
  },
};
</script>

<style>
</style>
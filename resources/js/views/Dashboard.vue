<template>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              DataTable with minimal features &amp; hover style
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6"></div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <table
                    id="example2"
                    class="
                      table table-bordered table-hover
                      dataTable
                      dtr-inline
                      collapsed
                    "
                    role="grid"
                    aria-describedby="example2_info"
                  >
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
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="even" v-for="item in post" :key="item">
                        <td class="sorting_1 dtr-control">{{item.id}}</td>
                        <td>{{item.title}}</td>
                        <td>{{item.description}}</td> 
                      </tr>
                    </tbody>
                  
                  </table>
                </div>
              </div>
              
            </div>
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
  data(){
      return {
          post: []
      }
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
  },
  created() {
    this.getInfo();
  },
  mounted() {
    $('example2').dataTable();   
  }
};
</script>

<style>
</style>
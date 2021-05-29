<template>
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Table Cities</h3>

        <div class="card-tools">
          <ul class="pagination pagination-sm float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
          </ul>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <table class="table">
          <thead>
            <tr>
              <th style="width: 10px">Id</th>
              <th>Name</th>

              <th style="width: 400px" class="text-right">Options</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(city, index) of cities" :key="index">
              <td>{{ index + 1 }}</td>
              <td>{{ city.name }}</td>
              <td>{{ city.email }}</td>

              <td>
                <a
                  class="btn btn-app mr-3 bg-secondary btn-sm"
                  :href="'/#/dashboard/cities/create'"
                >
                  <i class="fas fa-plus"></i>Add
                </a>
                <a
                  class="btn btn-app mr-3 bg-success btn-sm"
                  :href="'/#/dashboard/cities/' + city.id + '/show'"
                >
                  <i class="fas fa-eye"></i>Show
                </a>
                <a
                  class="btn btn-app mr-3 bg-primary btn-sm"
                  :href="'/#/dashboard/cities/' + city.id + '/edit'"
                >
                  <i class="fas fa-edit"></i> Edit
                </a>
                <a
                  class="btn btn-app bg-danger btn-sm"
                  data-id="city.id"
                  @click="deleteModalWindow(city.id)"
                  data-toggle="modal"
                  data-target="#modal-delete-city"
                >
                  <i class="fas fa-trash"></i> Delete
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</template>

<script>
export default {
  components: {},
  data() {
    return {
      cities: [],
      error: "",
    };
  },
  methods: {
    deleteModalWindow(id) {
      $("#modal-delete-city").modal("show");
      eventBus.$emit("deleteModalWindow", { item: id });
    },
  },
  mounted() {
    this.axios
      .get("/api/cities")
      .then((response) => {
        this.cities = response.data.data;
        console.log(response.data.data);
      })
      .catch((error) => {
        this.error = error.response.data.message || error.message;
        console.log(this.error);
      });
  },
};
</script>

<style></style>

<template>
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Table Clients</h3>

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
              <th>City</th>

              <th style="width: 400px" class="text-right">Options</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(client, index) of clients" :key="index">
              <td>{{ index + 1 }}</td>
              <td>{{ client.name }}</td>
              <td>{{ client.id_city }}</td>

              <td>
                <a
                  class="btn btn-app mr-3 bg-success btn-sm"
                  :href="'/#/dashboard/clients/' + client.id + '/show'"
                >
                  <i class="fas fa-eye"></i>Show
                </a>
                <a
                  class="btn btn-app mr-3 bg-primary btn-sm"
                  :href="'/#/dashboard/clients/' + client.id + '/edit'"
                >
                  <i class="fas fa-edit"></i> Edit
                </a>
                <a
                  class="btn btn-app bg-danger btn-sm"
                  data-id="client.id"
                  @click="deleteModalWindow(client.id)"
                  data-toggle="modal"
                  data-target="#modal-delete-client"
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
      clients: [],
      error: "",
    };
  },
  methods: {
    deleteModalWindow(id) {
      $("#modal-delete-client").modal("show");
      eventBus.$emit("deleteModalWindow", { item: id });
    },
  },
  mounted() {
    this.axios
      .get("/api/clients")
      .then((response) => {
        this.clients = response.data.data;
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

<template>
  <div class="modal fade" id="modal-delete" aria-modal="false" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p>You are sure to delete the user ? : {{ id }}</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
          <button type="button" class="btn btn-primary" @click="deleteArticle(id)">
            Delete
          </button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      id: "",
      info: "",
    };
  },
  methods: {
    deleteArticle(id) {
      console.log(id);
      axios.delete("api/user-detail/" + id).then((response) => (this.info = response));
      $("#modal-delete").modal("hide");
    },
  },
  created() {
    eventBus.$on("deleteModalWindow", (item) => {
      console.log("bus data: ", item);
      this.id = item.item;
    });
  },
};
</script>

<style></style>

<template>
  <div class="wrapper" v-if="this.$route.meta.requiresAuth">
    <Header></Header>
    <Sidebar></Sidebar>
    <div class="content-wrapper" style="min-height: 956.3px">
      <section class="content">
        <div class="row">
          <div class="col-sm-12"><ModalDeleteUser></ModalDeleteUser></div>
          <div class="col-sm-12"><ModalDeleteCity></ModalDeleteCity></div>
          <div class="col-sm-12"><ModalDeleteClient></ModalDeleteClient></div>

          <div class="col-sm-12">
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1>{{ this.$route.name }}</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="/#/dashboard">Home</a></li>
                      <li class="breadcrumb-item active">{{ this.$route.name }}</li>
                    </ol>
                  </div>
                </div>
              </div>
            </section>
            <router-view></router-view>
          </div>
        </div>
      </section>
    </div>
  </div>
  <div v-else>
    <section class="content container py-5">
      <div class="row justify-content-center align-items-center">
        <div class="col-sm-12 col-lg-4">
          <router-view></router-view>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import Header from "./components/partials/Header";
import Sidebar from "./components/partials/Sidebar";
import ModalDeleteUser from "./views/user/_modalDelete";
import ModalDeleteCity from "./views/city/_modalDelete";
import ModalDeleteClient from "./views/client/_modalDelete";

export default {
  components: {
    Header,
    Sidebar,
    ModalDeleteUser,
    ModalDeleteCity,
    ModalDeleteClient,
  },

  methods: {},
};
</script>

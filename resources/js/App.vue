<template>
<div class="wrapper" v-if="this.$route.meta.requiresAuth" >
    <Nav></Nav>
    <Sidebar></Sidebar>
  <div class="content-wrapper" style="min-height: 956.3px;">

    <section class="content">
      <div class="row">
            <div class="col-sm-12">
                 <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>{{this.$route.name}}</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/#/dashboard">Inicio</a></li>
                            <li class="breadcrumb-item active">{{this.$route.name}}</li>
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
    <router-view></router-view>
</div>
</template>

<script>
import Nav from './components/Nav'
import Sidebar from './components/Sidebar'

export default {

    components:{
        Nav,
        Sidebar

    },




}
</script>

<style>

</style>

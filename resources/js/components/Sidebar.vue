<template>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img
        src="dist/img/AdminLTELogo.png"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: 0.8"
      />
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div
      class="
        sidebar
        os-host
        os-theme-light
        os-host-overflow
        os-host-overflow-y
        os-host-resize-disabled
        os-host-scrollbar-horizontal-hidden
        os-host-transition
      "
    >
      <div class="os-resize-observer-host observed">
        <div class="os-resize-observer" style="left: 0px; right: auto"></div>
      </div>
      <div
        class="os-size-auto-observer observed"
        style="height: calc(100% + 1px); float: left"
      >
        <div class="os-resize-observer"></div>
      </div>
      <div
        class="os-content-glue"
        style="margin: 0px -8px; width: 249px; height: auto"
      ></div>
      <div class="os-padding">
        <div
          class="os-viewport os-viewport-native-scrollbars-invisible"
          
        >
          <div
            class="os-content"
            style="padding: 0px 8px; height: 100%; width: 100%"
          >
            <!-- Sidebar user panel (optional) -->

            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul
                class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false"
              >
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                  <router-link to="/dashboard" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      List Post
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </router-link>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <router-link to="/dashboard/create" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Create Post</p>
                      </router-link>
                    </li>
                  
                  </ul>
                </li>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
        </div>
      </div>
      <div
        class="
          os-scrollbar
          os-scrollbar-horizontal
          os-scrollbar-unusable
          os-scrollbar-auto-hidden
        "
      >
        <div class="os-scrollbar-track">
          <div
            class="os-scrollbar-handle"
            style="width: 100%; transform: translate(0px, 0px)"
          ></div>
        </div>
      </div>
      <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
        <div class="os-scrollbar-track">
          <div
            class="os-scrollbar-handle"
            style="height: 32.066%; transform: translate(0px, 0px)"
          ></div>
        </div>
      </div>
      <div class="os-scrollbar-corner"></div>
    </div>
    <!-- /.sidebar -->
  </aside>
</template>

<script>
export default {};
</script>

<style>
</style>
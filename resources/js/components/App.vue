<template>
    <!-- <div id="preloader"></div> -->
    <div class="main-wrapper" v-if="!setups">
        <Navbar></Navbar>
        <router-view/>
        <footers></footers>
    </div>

    <!-- Admin -->
    <div class="wrapper" v-else>
        <sidebar></sidebar>
        <div class="content-page">
            <router-view/>
        </div>
    </div>
</template>

<script>
    import Navbar from "./navbar.vue";
    import footers from "./footer.vue";
    import sidebar from "./admin/sidebar.vue"
    export default {
        components:{
            Navbar,
            footers,
            sidebar
        },
        computed:{
            setups() {
                return this.$route.path === "/home" || this.$route.path === "/courseadmin" || this.$route.path === "/sessionsadmin"
            }
        }
    }
</script>

<style>
    
</style>
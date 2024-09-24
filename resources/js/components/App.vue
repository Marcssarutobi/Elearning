<template>
    <!-- <div id="preloader"></div> -->
    <div class="main-wrapper">
        <Navbar></Navbar>
        <router-view/>
        <footers></footers>
        
    </div>
</template>

<script>
import Navbar from "./navbar.vue";
    import footers from "./footer.vue";
    export default {
        components:{
            Navbar,
            footers
        }
    }
</script>

<style>
    
</style>
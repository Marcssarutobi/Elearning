<template>
    <div> 
        <!-- HEADER
        ================================================== -->
        <header class="header-style1 menu_area-light">

            <div class="navbar-default border-bottom border-color-light-white">

                <!-- start top search -->
                <div class="top-search bg-primary">
                    <div class="container">
                        <form class="search-form" action="search.html" method="GET" accept-charset="utf-8">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                                <span class="input-group-addon close-search mt-1"><i class="fas fa-times"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end top search -->

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area alt-font">
                                <nav class="navbar navbar-expand-lg navbar-light p-0">
                                    <div class="navbar-header navbar-header-custom">
                                        <!-- start logo -->
                                        <a href="index.html" class="navbar-brand"><img id="logo" src="../../../public/img/logos/logo-inner.png" alt="logo" /></a>
                                        <!-- end logo -->
                                    </div>

                                    <div class="navbar-toggler bg-primary"></div>

                                    <!-- start menu area -->
                                    <ul class="navbar-nav ms-auto" id="nav" style="display: none;">
                                        <li><router-link to="/">Home</router-link></li>
                                        <li><router-link to="/course">Courses</router-link></li>
                                        <li><router-link to="/event">Event</router-link></li>
                                        <li><router-link to="/instrue">Instructor</router-link></li>
                                        <li><router-link to="/abouts">About Us</router-link></li>
                                        <li><router-link to="/contact">Contact</router-link></li>
                                    </ul>
                                    <!-- end menu area -->

                                    <!-- start attribute navigation -->
                                    <div class="attr-nav align-items-xl-center ms-xl-auto main-font">
                                        <ul>
                                            <li class="search"><a href="#!"><i class="fas fa-search"></i></a></li>
                                            <li class="d-none d-xl-inline-block"><a href="contact.html" class="butn md text-white"><i class="fas fa-user icon-arrow before"></i><span class="label">Sign-in / Sign-up</span><i class="fas fa-plus-circle icon-arrow after"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- end attribute navigation -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style>
    
</style>
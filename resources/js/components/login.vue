<template>
    
    <!-- PAGE TITLE
    ================================================== -->
    <section class="page-title-section bg-img bg-lgn cover-background top-position1 left-overlay-dark" data-overlay-dark="9" data-background="img/bg/bg-04.jpg">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1>Se Connecter</h1>
                </div>
                <div class="col-md-12">
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="#!">Connexion</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulaire de connexion -->
    <section class="row mt-2 d-flex align-item-center justify-content-center height-self-center" style="padding: 40px 0;">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body p-0">
                    <div class="d-flex align-items-center auth-content">
                        <div class="col-lg-6 bg-white content-left">
                            <div class="p-3">
                                <h2 class="mb-2 text-primary">Sign In</h2>
                                 <p class="text-secondary">Login to stay connected.</p>
                                 <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control rounded-0" type="email" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control rounded-0" type="password" placeholder=" ">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a href="auth-recoverpw.html" class="text-black">Forgot Password?</a>
                                    </div>
                                    <div class="col-lg-12 d-flex align-item-center mt-3 justify-content-center">
                                        <button type="submit" class=" btn-lg btn btn-primary rounded-0 w-75">Connexion</button>
                                    </div>
                                   
                                    <p class="mt-3 d-flex align-item-center mt-3 justify-content-center">
                                       Vous n'avez pas de compte ? <a href="auth-sign-up.html" class="text-secondary text-underline"> Inscrivez-vous</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 content-right">
                            <img src="../../assets/img/banner/slide1.jpg" class="img-fluid image-right" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</template>
<script>
export default {
    
}
</script>
<style>
    .bg-lgn{
        background: url(../../assets/img/bg/bg-04.jpg);
    }
    .content-left {
        min-height: 480px;
        display: flex;
        justify-content: center;
        align-items: center; 
    }
</style>
<template>
    <div> 

        <!-- PAGE TITLE
        ================================================== -->
        <section class="page-title-section bg-img bg-ent cover-background top-position1 left-overlay-dark" data-overlay-dark="9" data-background="img/bg/bg-04.jpg">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>Event List</h1>
                    </div>
                    <div class="col-md-12">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#!">Event List</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- UPCOMING EVENT
        ================================================== -->
        <section class="bg-very-light-gray" style="padding: 80px 0">
            <div class="container">
                <div class="section-heading">
                    <span class="sub-title">latest events</span>
                    <h2 class="h1 mb-0">Our Upcoming Events</h2>
                </div>
                <div class="row g-xxl-5 mt-n2-9">
                    <div class="col-xl-6 mt-2-9">
                        <div class="row g-0 event-wrapper">
                            <div class="col-md-5 event-img bg-img cover-background">
                                <img src="../../assets/img/content/event-01.jpg" />
                            </div>
                            <div class="col-md-7">
                                <div class="p-1-6 p-sm-1-9">
                                    <span class="badge-soft mb-3">art competition</span>
                                    <h4 class="font-weight-800 h5 mb-3"><router-link to="/event_detail">Graphics design conference</router-link></h4>
                                    <p class="mb-3 alt-font font-weight-500">Attend the activities and analyze treasured recommendations from the pinnacle eLearn professionals.</p>
                                    <div class="dotted-seprator pt-4 mt-4"></div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0 text-primary font-weight-600"><i class="ti-calendar me-2"></i><span class="text-primary"> 30 Mar. 2023</span></p>
                                        <p class="mb-0 text-primary font-weight-600"><i class="ti-location-pin me-2"></i><span class="text-primary">London</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mt-2-9">
                        <div class="row g-0 event-wrapper">
                            <div class="col-md-5 event-img bg-img cover-background">
                                <img src="../../assets/img/content/event-02.jpg" />
                            </div>
                            <div class="col-md-7">
                                <div class="p-1-6 p-sm-1-9">
                                    <span class="badge-soft secondary mb-3">Learning english</span>
                                    <h4 class="font-weight-800 h5 mb-3"><a href="event-details.html">Important learning english</a></h4>
                                    <p class="mb-3 alt-font font-weight-500">Attend the activities and analyze treasured recommendations from the pinnacle eLearn professionals.</p>
                                    <div class="dotted-seprator pt-4 mt-4"></div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0 text-secondary font-weight-600"><i class="ti-calendar me-2"></i><span class="text-secondary"> 01 Apr. 2023</span></p>
                                        <p class="mb-0 text-secondary font-weight-600"><i class="ti-location-pin me-2"></i><span class="text-secondary">London</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mt-2-9">
                        <div class="row g-0 event-wrapper">
                            <div class="col-md-5 event-img bg-img cover-background" >
                                <img src="../../assets/img/content/event-03.jpg" />
                            </div>
                            <div class="col-md-7">
                                <div class="p-1-6 p-sm-1-9">
                                    <span class="badge-soft mb-3">creative day</span>
                                    <h4 class="font-weight-800 h5 mb-3"><a href="event-details.html">Annual creative meetup</a></h4>
                                    <p class="mb-3 alt-font font-weight-500">Attend the activities and analyze treasured recommendations from the pinnacle eLearn professionals.</p>
                                    <div class="dotted-seprator pt-4 mt-4"></div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0 text-primary font-weight-600"><i class="ti-calendar me-2"></i><span class="text-primary"> 02 Apr. 2023</span></p>
                                        <p class="mb-0 text-primary font-weight-600"><i class="ti-location-pin me-2"></i><span class="text-primary">London</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mt-2-9">
                        <div class="row g-0 event-wrapper">
                            <div class="col-md-5 event-img bg-img cover-background" >
                                <img src="../../assets/img/content/event-04.jpg" />
                            </div>
                            <div class="col-md-7">
                                <div class="p-1-6 p-sm-1-9">
                                    <span class="badge-soft secondary mb-3">art competition</span>
                                    <h4 class="font-weight-800 h5 mb-3"><a href="event-details.html">Digital arts and reshaping</a></h4>
                                    <p class="mb-3 alt-font font-weight-500">Attend the activities and analyze treasured recommendations from the pinnacle eLearn professionals.</p>
                                    <div class="dotted-seprator pt-4 mt-4"></div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="mb-0 text-secondary font-weight-600"><i class="ti-calendar me-2"></i><span class="text-secondary"> 03 Apr. 2023</span></p>
                                        <p class="mb-0 text-secondary font-weight-600"><i class="ti-location-pin me-2"></i><span class="text-secondary">London</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>

<script>
export default {
    
}
</script>

<style>
    
    .bg-ent{
        background: url(../../assets/img/bg/bg-04.jpg);
    }

</style>
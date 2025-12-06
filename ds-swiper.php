<?php include '_header.php'; ?>

<style>
    .web-app-top-bar {
        display: none !important
    }
</style>

<div class="page default-layout page-name">

    <div class="ds-section">

        <div class="ds-title">
            <h1 class="text-center"> Swiper </h1>
        </div>

        <div class="container">

            <div class="ds-sub-section mb-5">

                <h3 class="text-left mb-4"> Test 1 swiper </h3>

                <div class="swiper-slider-wrapper arrows-sides pagination-bottom">

                    <div class="swiper-container swiper-custom"
                        data-per-view="4"
                        data-per-view-md="3"
                        data-per-view-sm="2"
                        data-per-view-xs="1"
                        data-space-between="40"
                        data-next-button="test1-button-next"
                        data-prev-button="test1-button-prev"
                        data-pagination="test1-pagination">

                        <div class="swiper-wrapper">

                            <?php foreach (range(1, 12) as $inner_i) { ?>

                                <div class="swiper-slide">

                                    <div class="card text-center base-border p-2">
                                        <div class="color-primary h3 m-4"> <?php echo $inner_i ?> </div>
                                    </div> <!-- card -->

                                </div>

                            <?php } ?>

                        </div>

                    </div>

                    <div class="swiper-button-prev" id="test1-button-prev">
                        <i class="icon icon-arrow-circle-left"></i>
                    </div>

                    <div class="swiper-button-next" id="test1-button-next">
                        <i class="icon icon-arrow-circle-right"></i>
                    </div>

                    <div class="pagination-wrapper">
                        <div class="swiper-pagination" id="test1-pagination"></div>
                    </div>

                </div> <!-- swiper-slider-wrapper -->

            </div> <!-- ds-sub-section -->

            <div class="ds-sub-section mb-5">

                <h3 class="text-left mb-4"> Test 2 swiper </h3>

                <div class="swiper-slider-wrapper arrows-sides">

                    <div class="swiper-container swiper-custom"
                        data-per-view="4"
                        data-per-view-md="3"
                        data-per-view-sm="2"
                        data-per-view-xs="1"
                        data-space-between="40"
                        data-next-button="test2-button-next"
                        data-prev-button="test2-button-prev">

                        <div class="swiper-wrapper">

                            <?php foreach (range(1, 12) as $inner_i) { ?>

                                <div class="swiper-slide">

                                    <div class="card text-center base-border p-2">
                                        <div class="color-primary h3 m-4"> <?php echo $inner_i ?> </div>
                                    </div> <!-- card -->

                                </div>

                            <?php } ?>

                        </div>

                    </div>

                    <div class="swiper-button-prev" id="test2-button-prev">
                        <i class="icon icon-arrow-circle-left"></i>
                    </div>

                    <div class="swiper-button-next" id="test2-button-next">
                        <i class="icon icon-arrow-circle-right"></i>
                    </div>


                </div> <!-- swiper-slider-wrapper -->

            </div> <!-- ds-sub-section -->

            <div class="ds-sub-section mb-5">

                <h3 class="text-left mb-4"> Test 3 swiper </h3>

                <div class="swiper-slider-wrapper pagination-bottom">

                    <div class="swiper-container swiper-custom"
                        data-per-view="4"
                        data-per-view-md="3"
                        data-per-view-sm="2"
                        data-per-view-xs="1"
                        data-space-between="40"
                        data-pagination="test3-pagination">

                        <div class="swiper-wrapper">

                            <?php foreach (range(1, 12) as $inner_i) { ?>

                                <div class="swiper-slide">

                                    <div class="card text-center base-border p-2">
                                        <div class="color-primary h3 m-4"> <?php echo $inner_i ?> </div>
                                    </div> <!-- card -->

                                </div>

                            <?php } ?>

                        </div>

                    </div>



                    <div class="pagination-wrapper">
                        <div class="swiper-pagination" id="test3-pagination"></div>
                    </div>

                </div> <!-- swiper-slider-wrapper -->

            </div> <!-- ds-sub-section -->

            <div class="ds-sub-section mb-5">

                <h3 class="text-left mb-4"> Test 4 swiper </h3>

                <div class="swiper-slider-wrapper pagination-bottom">

                    <div class="swiper-container swiper-custom"
                        data-per-view="4"
                        data-per-view-md="3"
                        data-per-view-sm="2"
                        data-per-view-xs="1"
                        data-space-between="40"
                        data-next-button="test4-button-next"
                        data-prev-button="test4-button-prev"
                        data-pagination="test4-pagination">

                        <div class="swiper-wrapper">

                            <?php foreach (range(1, 12) as $inner_i) { ?>

                                <div class="swiper-slide">

                                    <div class="card text-center base-border p-2">
                                        <div class="color-primary h3 m-4"> <?php echo $inner_i ?> </div>
                                    </div> <!-- card -->

                                </div>

                            <?php } ?>

                        </div>

                    </div>



                    <div class="pagination-and-buttons-wrapper">

                        <div class="swiper-button-prev" id="test4-button-prev">
                            <i class="icon icon-arrow-circle-left"></i>
                        </div>

                        <div class="pagination-wrapper">
                            <div class="swiper-pagination" id="test4-pagination"></div>
                        </div>

                        <div class="swiper-button-next" id="test4-button-next">
                            <i class="icon icon-arrow-circle-right"></i>
                        </div>

                    </div>


                </div> <!-- swiper-slider-wrapper -->


            </div> <!-- ds-sub-section -->


            <div class="ds-sub-section mb-5">

                <h3 class="text-left mb-4"> Test 5 swiper </h3>

                <div class="swiper-slider-wrapper pagination-bottom">

                    <div class="swiper-container swiper-custom"
                        data-per-view="4"
                        data-per-view-md="3"
                        data-per-view-sm="2"
                        data-per-view-xs="1"
                        data-space-between="40"
                        data-next-button="test5-button-next"
                        data-prev-button="test5-button-prev"
                        data-pagination="test5-pagination">

                        <div class="swiper-wrapper">

                            <?php foreach (range(1, 12) as $inner_i) { ?>

                                <div class="swiper-slide">

                                    <div class="card text-center base-border p-2">
                                        <div class="color-primary h3 m-4"> <?php echo $inner_i ?> </div>
                                    </div> <!-- card -->

                                </div>

                            <?php } ?>

                        </div>

                    </div>



                    <div class="pagination-and-buttons-wrapper light-theme" style="background-color: #353535;">

                        <div class="swiper-button-prev" id="test5-button-prev">
                            <i class="icon icon-arrow-left"></i>
                        </div>

                        <div class="pagination-wrapper">
                            <div class="swiper-pagination" id="test5-pagination"></div>
                        </div>

                        <div class="swiper-button-next" id="test5-button-next">
                            <i class="icon icon-arrow-right"></i>
                        </div>

                    </div>


                </div> <!-- swiper-slider-wrapper -->


            </div> <!-- ds-sub-section -->

        </div> <!-- container -->

        <div class="ds-sub-section mb-5 py-5 bg-gradient">

            <div class="container">

                <h3 class="text-left mb-4"> Test 6 swiper </h3>

                <div class="col-md-9">

                    <div class="swiper-slider-wrapper pagination-bottom membership-slider">

                        <div class="swiper-container membership-swiper">

                            <div class="swiper-wrapper">

                                <?php foreach (range(1, 12) as $inner_i) { ?>

                                    <div class="swiper-slide">

                                        <div class="px-3 py-4 text-center" style="background-color: #376f59;">

                                            <img src="assets/images/icons-svg/icon-1.svg" class="w-50px mb-3">

                                            <p class="small"> أنشطة تقديم الخدمات للمباني وتجميل المواقع </p>

                                        </div> <!-- card -->

                                    </div>

                                <?php } ?>

                            </div>

                        </div>

                        <div class="pagination-and-buttons-wrapper light-theme">

                            <div class="swiper-button-prev" id="membership-swiper-button-prev">
                                <i class="icon icon-arrow-left"></i>
                            </div>

                            <div class="pagination-wrapper">
                                <div class="swiper-pagination" id="membership-swiper-pagination"></div>
                            </div>

                            <div class="swiper-button-next" id="membership-swiper-button-next">
                                <i class="icon icon-arrow-right"></i>
                            </div>

                        </div>


                    </div> <!-- swiper-slider-wrapper -->

                </div>

            </div>

        </div> <!-- ds-sub-section -->

    </div> <!-- ds-section -->

</div> <!-- page -->

<?php include '_footer.php'; ?>
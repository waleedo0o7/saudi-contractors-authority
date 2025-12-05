<?php include '_header.php'; ?>
<?php include '_top-header.php'; ?>

<div class="page home">

    <section class="intro-swiper-wrapper">

        <div class="swiper-slider-wrapper pagination-bottom">

            <div class="swiper-container swiper-custom"
                data-per-view="1"
                data-per-view-md="1"
                data-per-view-sm="1"
                data-per-view-xs="1"
                data-space-between="0"
                data-effect="fade"
                data-next-button="intro-swiper-button-next"
                data-prev-button="intro-swiper-button-prev"
                data-pagination="intro-swiper-pagination">

                <div class="swiper-wrapper">

                    <?php foreach (range(1, 5) as $i) { ?>

                        <div class="swiper-slide">

                            <div class="slide-content"
                                style="
                                   background-image: linear-gradient(-279.07deg, #0c4a43e2 26.97%, #074d31de 92.31%),
                                   url(assets/images/intro-slider/intro-bg-<?php echo $i ?>.png)
                                   ">

                                <div class="container">

                                    <span class="badge badge-primary-faded badge-xs mb-2"> بناء المستقبل بثقة</span>

                                    <h1 class="display-5 mb-2 font-medium"> الهيئة السعودية للمقاولين <?php echo $i ?> </h1>

                                    <p class="lead mb-4 col-lg-6 p-0 mb-4"> تنظيم وتطوير صناعة المقاولات وتعزيزها، وبناء الكفاءات الانتاجية المميزة وخلق بيئة آمنة ذات جودة عالمية </p>

                                    <div class="flex-start gap-3">

                                        <a href="#" class="btn btn btn-light"> تسجيل عضوية جديدة </a>

                                        <a href="#" class="btn btn-outline-light"> تواصل مع الهيئة </a>

                                    </div>

                                </div>

                                <img src="assets/images/intro-slider-bg.svg" class="intro-slider-bg">

                            </div>

                        </div>

                    <?php } ?>

                </div>

            </div>

            <div class="pagination-and-buttons-wrapper light-theme">

                <div class="swiper-button-prev" id="intro-swiper-button-prev">
                    <i class="icon icon-arrow-left"></i>
                </div>

                <div class="pagination-wrapper">
                    <div class="swiper-pagination" id="intro-swiper-pagination"></div>
                </div>

                <div class="swiper-button-next" id="intro-swiper-button-next">
                    <i class="icon icon-arrow-right"></i>
                </div>

            </div>

        </div>

    </section>

    <section class="about section-padding bg-image">

        <div class="container">

            <div class="row flex-between">

                <div class="col-lg-5">

                    <div class="image-wrapper">
                        <img src="assets/images/about.png" class="w-100  border-radius-lg">
                    </div>

                </div>

                <div class="col-lg-6">

                    <h1 class="mb-4 font-medium"> عن الهيئة </h1>

                    <p class="mb-3 line-height-1-5"> تأسست الهيئة السعودية للمقاولين من خلال قرار مجلس الوزراء رقم 510 بتاريخ 23/11/1436 هـ لتنظم وتطور قطاع مقاولات ليساهم في دفع عجلة التنمية في المملكة. وستسعى الهيئة إلى تحقيق أهدافها من خلال التطوير الدائم لجميع الجوانب المتعلقة ببيئة العمل للوصول لأعلى درجات الانتاجية والجودة. </p>

                    <p class="mb-3 line-height-1-5"> وتهدف الهيئة إلى تنظيم وتطوير صناعة المقاولات وتعزيزها، وبناء الكفاءات الانتاجية المميزة وخلق بيئة آمنة ذات جودة عالمية. وستعمل الهيئة أيضاً على ايجاد الحلول الملائمة للمشاكل والأزمات التي تواجه المقاولين بشكل عام وستشجع الابتكار وتعزز عملية التواصل بين جميع الأطراف ذات العلاقة في القطاع. </p>

                    <a href="#" class="btn btn-primary"> معرفة المزيد </a>

                </div>

            </div>

        </div>

    </section>

    <section class="section-padding bg-gradient">

        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <h1 class="mb-3"> عضوية الهيئة السعودية للمقاولين </h1>

                    <p class="lead mb-5"> أنشئت الهيئة السعودية للمقاولين بقرار مجلس الوزراء رقم 510 وتاريخ 23-11-1436 لتكون هي المظلة الرسمية لقطاع المقاولات وقد صدر تعميم وزارة المالية لمؤسسات الدولة لإعتماد عضوية الهيئة كمتطلب أساسي للدخول في المناقصات الحكومية. </p>

                    <a href="#" class=" btn btn-outline-light"> معرفة المزيد </a>

                </div>


                <div class="col-lg-6"></div>


            </div>

        </div>


    </section>

    <section class="section-padding bg-white">

        <div class="container">

            <h1 class="bold mb-4"> خدمات المنصة </h1>

            <div class="custom-tabs-wrapper style1">

                <div class="nav-tabs-wrapper">

                    <ul class="nav nav-tabs justify-content-start" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="firstTab-tab" data-toggle="tab" data-target="#firstTab"> الكل </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="secondTab-tab" data-toggle="tab" data-target="#secondTab"> المفضلة </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="thirdTab-tab" data-toggle="tab" data-target="#thirdTab"> الأكثر استخداماً </button>
                        </li>
                    </ul>

                </div>

                <div class="tab-content">

                    <div class="tab-pane fade show active" id="firstTab" role="tabpanel" aria-labelledby="firstTab-tab">

                        <div class="row mt-4">

                            <?php foreach (range(1, 6) as $i) { ?>

                                <div class="col-lg-4">

                                    <?php include 'shared-html/_service-card.php' ?>

                                </div>

                            <?php } ?>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="secondTab" role="tabpanel" aria-labelledby="secondTab-tab">
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>

                    <div class="tab-pane fade" id="thirdTab" role="tabpanel" aria-labelledby="thirdTab-tab">
                        <p> Lorem Ipsum is simply dummy text of </p>
                    </div>

                </div>

            </div> <!-- custom-tabs-wrapper -->

        </div>

    </section>

    <section class="news section-padding bg-gray">

        <div class="container">

            <div class="flex-between mb-4">

                <h1 class="bold"> اخبار المنصة </h1>

                <a href="#" class="btn btn-outline-dark"> مشاهدة جميع الأخبار </a>

            </div>

            <div class="row">

                <div class="col-lg-6 mb-3 mb-lg-0">

                    <div class="news-list-wrapper d-flex flex-column gap-3">

                        <?php foreach (range(1, 3) as $i) { ?>

                            <?php include 'shared-html/news-card-1.php' ?>

                        <?php } ?>

                    </div>

                </div>

                <div class="col-lg-6">

                    <?php include 'shared-html/news-card-2.php' ?>

                </div>

            </div>

        </div>

    </section>

    <section class="activities section-padding bg-white">

        <div class="container">

            <div class="flex-between mb-4">

                <h1 class="bold"> فعاليات المنصة </h1>

                <a href="#" class="btn btn-outline-dark"> مشاهدة جميع الفعاليات </a>

            </div>

            <div class="swiper-slider-wrapper pagination-bottom">

                <div class="swiper-container swiper-custom"
                    data-per-view="3"
                    data-per-view-md="2"
                    data-per-view-sm="2"
                    data-per-view-xs="1"
                    data-space-between="20"
                    data-next-button="activities-button-next"
                    data-prev-button="activities-button-prev"
                    data-pagination="activities-pagination">

                    <div class="swiper-wrapper">

                        <?php foreach (range(1, 12) as $inner_i) { ?>

                            <div class="swiper-slide">

                                <?php include 'shared-html/_activities-card.php' ?>

                            </div>

                        <?php } ?>

                    </div>

                </div>

                <div class="pagination-and-buttons-wrapper">

                    <div class="swiper-button-prev" id="activities-button-prev">
                        <i class="icon icon-arrow-left"></i>
                    </div>

                    <div class="pagination-wrapper">
                        <div class="swiper-pagination" id="activities-pagination"></div>
                    </div>

                    <div class="swiper-button-next" id="activities-button-next">
                        <i class="icon icon-arrow-right"></i>
                    </div>

                </div>

            </div> <!-- swiper-slider-wrapper -->

        </div>

    </section>




</div> <!-- page -->

<?php include '_bottom-footer.php'; ?>
<?php include '_footer.php'; ?>
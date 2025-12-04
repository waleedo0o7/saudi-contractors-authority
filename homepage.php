<?php include '_header.php'; ?>
<?php include '_top-header.php'; ?>

<div class="page home">

    <section class="intro-swiper-wrapper">


        <div class="swiper-slider-wrapper">

            <div class="swiper-container swiper-custom"
                data-per-view="1"
                data-per-view-md="1"
                data-per-view-sm="1"
                data-per-view-xs="1"
                data-space-between="0"
                data-next-button="intro-swiper-button-next"
                data-prev-button="intro-swiper-button-prev"
                data-pagination="intro-swiper-pagination">

                <div class="swiper-wrapper">

                    <?php foreach (range(1, 12) as $inner_i) { ?>



                        <div class="swiper-slide">

                            <div class="slide-content"
                                style="
                                   background-image: linear-gradient(0deg, rgba(9, 42, 30, 0.8) 0%, rgba(9, 42, 30, 0.8) 100%),
                                   url(assets/images/intro-bg.png)
                                   ">

                                <div class="container">

                                    <span class=" badge badge-primary-faded badge-xs"> بناء المستقبل بثقة</span>

                                    <h1 class="display-5 mb-2 font-medium"> الهيئة السعودية للمقاولين </h1>

                                    <p class="lead mb-4"> تنظيم وتطوير صناعة المقاولات وتعزيزها، وبناء الكفاءات الانتاجية المميزة وخلق بيئة آمنة ذات جودة عالمية </p>

                                    <div class="flex-start">

                                        <a href="#" class="btn btn btn-light me-2"> تسجيل عضوية جديدة </a>

                                        <a href="#" class="btn btn-outline-light"> تواصل مع الهيئة </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    <?php } ?>

                </div>

            </div>



            <div class="d-none swiper-button-prev" id="intro-swiper-button-prev">
                <i class="icon icon-arrow-circle-left"></i>
            </div>

            <div class="d-none swiper-button-next" id="intro-swiper-button-next">
                <i class="icon icon-arrow-circle-right"></i>
            </div>

            <div class="d-none pagination-wrapper">
                <div class="swiper-pagination" id="intro-swiper-pagination"></div>
            </div>

        </div> <!-- swiper-slider-wrapper -->



    </section>





    <section class="about section-padding bg-image">

        <div class="container">

            <div class="row">

                <div class="col-lg-6">

                    <div class="p-4">
                        <div class="image-wrapper">
                            <img src="assets/images/about.png" class="w-100  border-radius-lg">
                        </div>
                    </div>

                </div>



                <div class="col-lg-6">

                    <div class="p-4">

                        <h1 class="mb-4"> عن الهيئة </h1>

                        <p class="mb-3 line-height-1-5"> تأسست الهيئة السعودية للمقاولين من خلال قرار مجلس الوزراء رقم 510 بتاريخ 23/11/1436 هـ لتنظم وتطور قطاع مقاولات ليساهم في دفع عجلة التنمية في المملكة. وستسعى الهيئة إلى تحقيق أهدافها من خلال التطوير الدائم لجميع الجوانب المتعلقة ببيئة العمل للوصول لأعلى درجات الانتاجية والجودة. </p>

                        <p class="mb-3 line-height-1-5"> وتهدف الهيئة إلى تنظيم وتطوير صناعة المقاولات وتعزيزها، وبناء الكفاءات الانتاجية المميزة وخلق بيئة آمنة ذات جودة عالمية. وستعمل الهيئة أيضاً على ايجاد الحلول الملائمة للمشاكل والأزمات التي تواجه المقاولين بشكل عام وستشجع الابتكار وتعزز عملية التواصل بين جميع الأطراف ذات العلاقة في القطاع. </p>

                        <a href="#" class="btn btn-primary"> معرفة المزيد </a>

                    </div>

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


    <section class="section-padding">

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

                        <div class="row">
                            <?php foreach (range(1, 6) as $i) { ?>
                                <div class="col-lg-4">
                                    <div class="service-card card mb-4">
                                        <div class="flex-between">


                                            <div class="badge badge-primary w-20px h-20px">
                                                <img src="assets/images/services-icons/service-1.svg">
                                            </div>




                                            <p>11</p>

                                        </div>

                                    </div>
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




</div> <!-- page -->

<?php include '_bottom-footer.php'; ?>
<?php include '_footer.php'; ?>
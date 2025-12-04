<?php include '_header.php'; ?>
<?php include '_top-header.php'; ?>

<div class="page inner-page service-provider-list">

    <div class="inner-content p-0">

        <div class="intro-slide-wrapper mb-5"

            style="background-image: linear-gradient(0deg, rgba(9, 42, 30, 0.8) 0%, rgba(9, 42, 30, 0.8) 100%),
                                   url(assets/images/hero-section.webp);">

            <div class="container">

                <div class="intro-home-content">

                    <h1 class="title mb-4"> ساهم في تطوير قطاع المقاولات </h1>

                    <p class="text h5 mb-4"> في الهيئة السعودية للمقاولين، نؤمن بأن الإبداع يبدأ بفكرة، وأن التغيير والتطوير ينبعان من مشاركة الجميع. إذا كانت لديك فكرة مبتكرة تسهم في تحسين بيئة العمل في قطاع المقاولات، أو تدعم الابتكار، أو تعزز الكفاءة التشغيلية فنحن نرحب بها</p>

                    <a href="#" class="btn btn-primary"> قدم فكرتك الآن </a>

                </div>

            </div>

        </div>

        <div class="container">


            <div class="row">

                <div class="col-lg-6">
                    <div class="text-center text-lg-start">
                        <h3 class="mb-4 font-medium"> شركاء النجاح </h3>
                        <p class="lead"> نحن فخورون بشراكتنا مع أفضل معامل النمذجة والابتكار لتقديم موارد وفرص استثنائية لك. </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="text-center text-lg-end">
                        <a href="#" class="btn btn-primary"> التسجيل كـ مزود للخدمة </a>
                    </div>
                </div>
            </div>

            <div class="card no-border base-box-shadow mb-3">

                <div class="row flex-start">

                    <div class="col-lg-3 offset-3 mb-3 mb-lg-0">
                        <p class="lead m-0"> 374 فكرة موجودة </p>
                    </div>

                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="form-group input-with-start-icon m-0">
                            <div class="relative">
                                <input type="text" class="form-control" placeholder="بحث...">
                                <i class="icon icon-search start-icon"></i>
                                <div class="end-content m-0">
                                    <a href="#" class="btn btn-light base-border"> بحث </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">

                        <div class="dropdown select w-100">

                            <button class="btn base-border w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="start flex-center gap-2">
                                    <i class="icon icon-sort icon-sm h-5px color-gray"></i>
                                    <span> ترتيب حسب </span>
                                </div>
                                <div class="end">
                                    <i class="icon icon-chevron-down icon-xs color-gray"></i>
                                </div>
                            </button>

                            <div class="dropdown-menu text-start" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"> ترتيب 1 </a>
                                <a class="dropdown-item active" href="#"> ترتيب 1 </a>
                                <a class="dropdown-item" href="#"> ترتيب 1 </a>
                                <a class="dropdown-item" href="#"> ترتيب 1 </a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="row flex-row-stretched">

                <?php foreach (range(0, 7) as $i) { ?>

                    <div class="col-lg-4">

                        <div class="card text-start no-border base-box-shadow flex-start justify-content-between align-items-start p-4 h-100">

                            <div class="start w-100">

                                <h6 class="font-medium mb-2 show-lines-2 h-50px">
                                    <?php
                                    if ($i  ==  0) {
                                        echo '   عنوان علي سطر واحد  ';
                                    } elseif ($i  ==  1) {
                                        echo ' عنوان علي سطرين اتنين صة للمقاولين لتوثيق مراحل المشاريع باستخدام ';
                                    } else {
                                        echo ' عنوان علي ثلاثه سطور او أكثر عادي فكرة لإنشاء منصة إلكترونية مخصصة للمقاولين لتوثيق مراحل المشاريع باستخدام الصور مراحل المشاريع باستخدام الصور مراحل المشاريع باستخدام الصور';
                                    }
                                    ?>
                                </h6>

                                <p class="show-lines-2 h-45px">

                                    <?php

                                    if ($i  ==  0) {
                                        echo '   براجراف علي سطر واحد  ';
                                    } elseif ($i  ==  1) {
                                        echo ' براجراف علي سطرين اتنين صة للمقاولين لتوثيق مراحل المشاريع باستخدام ';
                                    } else {
                                        echo ' براجراف علي ثلاثه سطور او أكثر عادي فكرة لإنشاء منصة إلكترونية مخصصة للمقاولين لتوثيق مراحل المشاريع باستخدام الصور مراحل المشاريع باستخدام الصور مراحل المشاريع باستخدام الصور';
                                    }

                                    ?>
                                </p>

                                <div class="flex-start flex-wrap gap-2 mb-3">

                                    <span class="badge badge-xs  badge-info-faded"> مقترح </span>

                                    <span class="badge badge-xs  badge-success-faded"> مقترح مقترح </span>

                                    <span class="badge badge-xs  badge-secondary-faded"> مقترح مقترح مقترح </span>

                                </div>

                                <div class="d-flex gap-1 mb-1">
                                    <i class="icon icon-star icon-sm color-warning"></i>
                                    <i class="icon icon-star icon-sm color-warning"></i>
                                    <i class="icon icon-star icon-sm color-warning"></i>
                                    <i class="icon icon-star icon-sm color-gray-light-200"></i>
                                    <i class="icon icon-star icon-sm color-gray-light-200"></i>
                                </div>

                                <p> 6 تقييم </p>


                            </div>

                            <div class="end w-100">
                                <a href="#" class="btn btn-light flex-center gap-1">
                                    <span> التفاصيل </span>
                                    <i class="icon icon-lg icon-arrow-right"></i>
                                </a>
                            </div>

                        </div> <!-- card -->

                    </div>

                <?php } ?>

            </div>

        </div>

    </div> <!-- inner-content -->

</div> <!-- page -->

<?php include '_bottom-footer.php'; ?>
<?php include '_footer.php'; ?>
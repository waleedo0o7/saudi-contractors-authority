<?php include '_header.php'; ?>
<?php include '_top-header.php'; ?>

<div class="page inner-page about">

    <div class="page-header">

        <div class="container">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="homepage.php"> الرئيسية </a></li>
                    <li class="breadcrumb-item "> عن الهيئة </li>
                </ol>
            </nav>

            <h1 class="page-title mb-2"> عن الهيئة </h1>

        </div> <!-- container -->

    </div> <!-- page-header -->

    <div class="inner-content p-0">

        <div class="section-padding bg-image">

            <div class="container">

                <div class="row flex-between">

                    <div class="col-lg-4">
                        <img src="assets/images/about-1.png" class="cover aspect-ratio-1-1-2 border-radius-lg">
                    </div>

                    <div class="col-lg-7">

                        <h4 class="mb-2 bold"> لماذا أنشئت الهيئة </h4>

                        <p> يعتبر قطاع البناء والتشييد ثاني أكبر القطاعات غير النفطية بالمملكة وتمثل صناعة المقاولات ركناً اساسياً لا يتجزأ عن هذا القطاع. </p>

                        <p> وتهدف الهيئة إلى تنظيم وتطوير صناعة المقاولات وتعزيزها، وبناء الكفاءات الانتاجية المميزة وخلق بيئة آمنة ذات جودة عالمية. وستعمل الهيئة أيضاً على ايجاد الحلول الملائمة للمشاكل والأزمات التي تواجه المقاولين بشكل عام وستشجع الابتكار وتعزز عملية التواصل بين جميع الأطراف ذات العلاقة في القطاع. </p>


                        <hr />

                        <h4 class="mb-2 bold"> قرار مجلس وزراء 510 </h4>

                        <p> تأسست الهيئة السعودية للمقاولين من خلال قرار مجلس الوزراء رقم 510 بتاريخ 23/11/1436 هـ لتنظم وتطور قطاع مقاولات ليساهم في دفع عجلة التنمية في المملكة. وستسعى الهيئة إلى تحقيق أهدافها من خلال التطوير الدائم لجميع الجوانب المتعلقة ببيئة العمل للوصول لأعلى درجات الانتاجية والجودة. </p>


                        <div class="flex-start gap-3">

                            <a href="#" class="color-primary"> تنظيم الهيئة السعودية للمقاولين </a>

                            <a href="#" class="color-primary"> تعميم الديوان الملكي حول قرار مجلس الوزراء وتوجيهاته </a>

                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="section-padding bg-white">

            <h1 class="text-center bold"> رؤية ورسالة الهيئة </h1>

            <div class="container">

                <div class="row justify-content-around">

                    <div class="col-lg-4">

                        <div class="flex-center flex-column w-100 text-center">

                            <div class="badge-icon mb-2">
                                <img src="assets/images/icons-svg/target.svg">
                            </div>

                            <h4 class="mb-2 bold"> الرسالة </h4>

                            <p> تطوير قطاع المقاولات من خلال تمكين البيئة التنظيمية ، وتعزيز الابتكار وتنمية مهارات العاملين. </p>

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="flex-center flex-column w-100 text-center">

                            <div class="badge-icon mb-2">
                                <img src="assets/images/icons-svg/vision.svg">
                            </div>

                            <h4 class="mb-2 bold"> رؤية </h4>

                            <p> تطوير قطاع المقاولات من خلال تمكين البيئة التنظيمية ، وتعزيز الابتكار وتنمية مهارات العاملين. </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="section-padding bg-gray">

            <div class="container">


                <div class="row">

                    <div class="col-lg-5">
                        <img src="assets/images/about-2.png" class="w-100 border-radius-lg">
                    </div>

                    <div class="col-lg-7">

                        <h1 class="bold mb-3"> القيم </h1>

                        <div class="row row-gap-4">

                            <?php

                            $mediaMenuData = [
                                [
                                    "title" => "الشراكة",
                                    "image" => "values-1.svg"
                                ],

                                [
                                    "title" => "التميز",
                                    "image" => "values-2.svg"
                                ],

                                [
                                    "title" => "الشفافية",
                                    "image" => "values-3.svg"
                                ],

                                [
                                    "title" => "الكفاءة والفعالية",
                                    "image" => "values-4.svg"
                                ],

                                [
                                    "title" => "التنمية البشرية",
                                    "image" => "values-5.svg"
                                ],

                                [
                                    "title" => "الابتكار",
                                    "image" => "values-6.svg"
                                ],
                            ];

                            ?>

                            <?php foreach ($mediaMenuData as $index => $item): ?>

                                <div class="col-lg-4">

                                    <div class="card flex-column flex-center text-center">

                                        <div class="badge-icon mb-2">
                                            <img src="assets/images/icons-svg/<?= $item['image'] ?>">
                                        </div>

                                        <h5 class="bold"> <?= $item['title'] ?> </h5>

                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="section-padding bg-white">

            <div class="container">

                <h1 class="bold mb-3"> المحاور والأهداف الاستراتيجية لتحقيق التوجه الاستراتيجي </h1>




                <div class="custom-accordion">
                    <div class="accordion-item">
                        <div class="accordion-item-header" id="headingOne">
                            <button class="accordion-button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <p class="m-0 lead font-medium"> مرجعية موحدة لتنظيم القطاع </p>
                                <i class="accordion-button-icon icon icon-chevron-down"></i>
                            </button>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="accordion-item-body">

                                <p>
                                    تبسيط العلاقات التنظيمية في القطاع ,
                                    رفع معايير الجودة في القطاع ,
                                    تحسين سهولة ممارسة الأعمال للمقاولين

                                </p>

                                <p class="bold"> مرجعية موحدة لتنظيم القطاع </p>

                                <ul>


                                    <li> تبسيط العلاقات التنظيمية في القطاع </li>
                                    <li> رفع معايير الجودة في القطاع </li>
                                    <li> تحسين سهولة ممارسة الأعمال للمقاولين </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item-header" id="headingTwo">
                            <button class="accordion-button collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <p class="m-0 lead font-medium"> ركيزة أساسية لتطوير القطاع </p>
                                <i class="accordion-button-icon icon icon-chevron-down"></i>
                            </button>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="accordion-item-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-item-header" id="headingThree">
                            <button class="accordion-button collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <p class="m-0 lead font-medium"> خدمات متخصصة ذات قيمة مضافة </p>
                                <i class="accordion-button-icon icon icon-chevron-down"></i>
                            </button>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="accordion-item-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>






    </div>


</div> <!-- page -->

<?php include '_bottom-footer.php'; ?>
<?php include '_footer.php'; ?>
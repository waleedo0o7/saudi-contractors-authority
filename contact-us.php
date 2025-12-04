<?php include '_header.php'; ?>
<?php include '_top-header.php'; ?>

<div class="page inner-page contact-us">

    <div class="page-header bg-primary-faded">

        <div class="container">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="homepage.php"> تواصل معنا </a></li>
                    <li class="breadcrumb-item active"> تواصل معنا </li>
                </ol>
            </nav>

            <h1 class="page-title mb-2"> تواصل معنا </h1>

            <div class="row">
                <div class="col-lg-6">
                    <p> مثال على وصف الخدمة لشراء قطعة أرض لبناء منزلك، يتطلب ذلك توثيق عملية البيع والشراء في مكاتب التوثيق أو خدمات كاتب العدل لتسجيل العقار باسمك. </p>
                </div>
            </div>
        </div>

    </div> <!-- page-header -->


    <div class="inner-content p-0">

        <div class="section-padding">

            <div class="container">

                <div class="row">

                    <div class="col-lg-8 form-col">

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label> <span class="color-danger">*</span> الاسم الاول </label>
                                    <input type="text" class="form-control" placeholder="الاسم الاول">
                                </div> <!-- form-group -->
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label> البريد الإلكتروني </label>
                                    <input type="text" class="form-control" placeholder="نص تلميحي">
                                </div> <!-- form-group -->
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label> رقم الجوال </label>
                                    <input type="text" class="form-control" placeholder="نص تلميحي">
                                </div> <!-- form-group -->
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label> النوع </label>
                                    <select class="form-control w-100">
                                        <option value="AL">Brazil</option>
                                        <option value="WY">Canada</option>
                                        <option value="CA">France</option>
                                        <option value="TX">Germany</option>
                                        <option value="FL">Italy</option>
                                        <option value="NY">Japan</option>
                                        <option value="IL">Kenya</option>
                                        <option value="GA">Mexico</option>
                                        <option value="OH">Nigeria</option>
                                        <option value="MI">Spain</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1"> تفاصيل الفكرة </label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="النص المُدخل"></textarea>
                                </div>
                            </div>


                            <div class="col-lg-12 mb-4">

                                <div class="mb-1">
                                    <p class="lead font-medium"> إرفاق ملفات داعمة (اختياري) </p>
                                    <p class="small color-gray"> يمكنك إرفاق ملفات لتوضيح فكرتك (PDF، صور، عروض، مستندات). الحد الأقصى للملف 10MB. </p>
                                </div>

                                <div class="d-block">

                                    <a href="#" class="btn btn-secondary relative upload-files-button mb-2">
                                        <span class="me-1"> تصفح الملفات </span>
                                        <i class="icon icon-plus-circle"></i>
                                    </a>


                                    <input type="file" id="upload-files-input" class="d-none" multiple>


                                    <div id="files-list" class="files-list"></div>

                                </div>

                            </div>

                            <div class="col-lg-12">
                                <a href="#" class="btn btn-primary py-4 px-4"> ارسال فكرتك الآن </a>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 contact-col">

                        <div class="card">

                            <p class="h4 font-medium mb-3"> تواصل مع منادات </p>

                            <div class="flex-start gap-2 mb-3">
                                <div class="start">
                                    <i class="icon icon-phone color-primary icon-lg"></i>
                                </div>
                                <div class="end contact-card">
                                    <p class="font-medium m-0"> رقم الجوال </p>
                                    <div class="flax-start color-primary">
                                        <a href="tel:9200343222" class="d-inline-flex text-to-copy">9200343222</a>
                                        <i class="icon icon-copy-2 cursor-pointer"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-start gap-2 mb-3">
                                <div class="start">
                                    <i class="icon icon-message color-primary icon-lg"></i>
                                </div>
                                <div class="end">
                                    <p class="font-medium m-0"> رسالة قصيرة </p>
                                    <div class="flax-start color-primary">
                                        <a href="tel:9200343222" class="d-inline-flex">9200343222</a>
                                        <i class="icon icon-copy-2"></i>
                                    </div>
                                </div>
                            </div>



                            <div class="flex-start gap-2 mb-3">
                                <div class="start">
                                    <i class="icon icon-envelope color-primary icon-lg"></i>
                                </div>
                                <div class="end">
                                    <p class="font-medium m-0"> البريد الالكتروني </p>
                                    <div class="flax-start color-primary">
                                        <a href="mailto:help@company.sa" class="d-inline-flex"> help@company.sa </a>
                                        <i class="icon icon-copy-2"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-start gap-2 mb-3">
                                <div class="start">
                                    <i class="icon icon-envelope color-primary icon-lg"></i>
                                </div>
                                <div class="end">
                                    <p class="font-medium m-0"> فاكس </p>
                                    <div class="flax-start color-primary">
                                        <a href="#" class="d-inline-flex"> 00966-11-434-6654 </a>
                                        <i class="icon icon-copy-2"></i>
                                    </div>
                                </div>
                            </div>


                            <div class="flex-start gap-2 mb-3">
                                <div class="start">
                                    <i class="icon icon-location color-primary icon-lg"></i>
                                </div>
                                <div class="end">
                                    <p class="font-medium m-0"> الموقع </p>
                                    <div class="flax-start color-primary">
                                        <a href="https://maps.app.goo.gl/pRM7uY1Es66KeNwXA" target="_black" class="d-inline-flex"> الرياض </a>
                                        <i class="icon icon-copy-2"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="d-block">
                                <p class="h5 bold"> تابعنا على
                                <p>

                                <div class="flex-start gap-3">

                                    <a href="#" class="social-media-icon no-hover">
                                        <i class="icon icon-lg icon-x-twitter"></i>
                                    </a>
                                    <a href="#" class="social-media-icon no-hover">
                                        <i class="icon icon-lg icon-linkedin"></i>
                                    </a>
                                    <a href="#" class="social-media-icon no-hover">
                                        <i class="icon icon-lg icon-instagram"></i>
                                    </a>

                                </div>


                            </div>


                            <hr />


                            <p class="h4 font-medium mb-3"> اتصالات الطوارئ </p>

                            <div class="flex-start gap-2 mb-3">
                                <p class="m-0"> الدفاع المدني </p>
                                <a href="tel:988" class="color-primary"> 988 </a>
                                <i class="icon icon-copy-2 color-primary"></i>
                            </div>

                            <div class="flex-start gap-2 mb-3">
                                <p class="m-0"> الشرطة </p>
                                <a href="tel:988" class="color-primary"> 988 </a>
                                <i class="icon icon-copy-2 color-primary"></i>
                            </div>

                            <div class="flex-start gap-2">
                                <p class="m-0"> الإسعاف </p>
                                <a href="tel:988" class="color-primary"> 988 </a>
                                <i class="icon icon-copy-2 color-primary"></i>
                            </div>










                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div> <!-- inner-content -->


</div> <!-- page -->

<?php include '_bottom-footer.php'; ?>
<?php include '_footer.php'; ?>
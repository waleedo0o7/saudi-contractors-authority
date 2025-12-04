<?php include '_header.php'; ?>
<?php include '_top-header.php'; ?>

<div class="page inner-page ideas-receiving">

    <div class="page-header">

        <div class="container">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="homepage.php"> الرئيسية </a></li>
                    <li class="breadcrumb-item active"> نموذج استقبال الأفكار الإبداعية </li>
                </ol>
            </nav>

            <h1 class="page-title mb-2"> نموذج استقبال الأفكار الإبداعية </h1>

            <div class="row">
                <div class="col-lg-7">
                    <p class="lead"> جميع الأفكار ستخضع للمراجعة من قبل لجنة مختصة, وسيتم التواصل عند الحاجة لمزيد من المعلومات. </p>
                </div>
            </div>




        </div>

    </div> <!-- page-header -->


    <div class="inner-content">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">
                    <p class="color-danger font-medium"> * المعلومات المطلوبة </p>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label> <span class="color-danger">*</span> إدخال النص الإلزامي </label>
                        <input type="text" class="form-control" placeholder="نص تلميحي">
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

                <div class="col-lg-12">
                    <div class="form-group">
                        <label> نوع الفكرة </label>
                        <select class="form-control select2 w-100">
                            <option value="AL"> فكرة جديدة </option>
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

    </div> <!-- inner-content -->

</div> <!-- page -->

<?php include '_bottom-footer.php'; ?>
<?php include '_footer.php'; ?>
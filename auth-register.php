<?php include '_header.php'; ?>
<?php include '_top-header.php'; ?>

<div class="page inner-page register">

    <div class="page-header">

        <div class="container">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="homepage.php"> الرئيسية </a></li>
                    <li class="breadcrumb-item active"> تسجيل مستخدم جديد </li>
                </ol>
            </nav>

            <h1 class="page-title mb-2"> تسجيل مستخدم جديد </h1>

            <div class="row">
                <div class="col-lg-7">
                    <p class="lead"> عند استخدام النماذج، فإن حقول النموذج القياسية المستخدمة هي حقول نصية تُستخدم عادةً لإدخال نص قصير. حالات حقل النموذج هي الافتراضي، النشط، المركز، الخطأ، التلميح، والمعطل. </p>
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

                <div class="col-lg-6">
                    <div class="form-group">
                        <label> <span class="color-danger">*</span> إدخال النص الإلزامي </label>
                        <input type="text" class="form-control" placeholder="نص تلميحي">
                    </div> <!-- form-group -->
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label> إدخال النص الاختياري </label>
                        <input type="text" class="form-control" placeholder="نص تلميحي">
                    </div> <!-- form-group -->
                </div>

                <div class="col-lg-6">
                    <div class="form-group input-with-start-icon">
                        <label> إدخال النص الاختياري </label>
                        <div class="relative">
                            <input type="text" class="form-control" placeholder="نص تلميحي">
                            <i class="icon icon-search start-icon"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group input-with-start-icon">
                        <label> إدخال النص الاختياري </label>
                        <div class="relative">
                            <input type="text" class="form-control" placeholder="نص تلميحي">
                            <i class="icon icon-search start-icon"></i>
                        </div>
                    </div>
                </div>







                <div class="col-lg-6">
                    <div class="form-group">
                        <label> إدخال النص الاختياري </label>
                        <div class="relative">
                            <input type="text" class="form-control" placeholder="نص">

                            <div class="end-content">
                                <i class="icon icon-check icon-sm color-success me-2"></i>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="form-group">
                        <label> إدخال النص الاختياري </label>
                        <div class="relative">
                            <input type="text" class="form-control" placeholder="نص">

                            <div class="end-content">
                                <i class="icon icon-check icon-sm color-success me-2"></i>
                            </div>

                        </div>
                    </div>
                </div>




                <div class="col-lg-6">
                    <div class="form-group">
                        <label> <span class="color-danger">*</span> إدخال النص الإلزامي </label>
                        <input type="text" class="form-control" placeholder="نص تلميحي">
                        <span class="d-block mt-2"> <i class="icon icon-question-circle"></i> نص مساعده يوضع هنا لتوضيح للعميل ماذا سوف يفعل هذا الحقل تحديدا</span>
                    </div> <!-- form-group -->
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label> <span class="color-danger">*</span> إدخال النص الإلزامي </label>
                        <input type="text" class="form-control" placeholder="نص تلميحي">
                        <span class="d-block mt-2"> <i class="icon icon-question-circle"></i> نص مساعده يوضع هنا لتوضيح للعميل ماذا سوف يفعل هذا الحقل تحديدا</span>
                    </div> <!-- form-group -->
                </div>



                <div class="col-lg-6">
                    <div class="form-group">
                        <label> <span class="color-danger">*</span> إدخال النص الإلزامي </label>
                        <input type="text" class="form-control invalid" placeholder="نص تلميحي">
                        <small class="form-text text-danger"> اسم مستخدم خاطئ </small>
                    </div> <!-- form-group -->
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label> <span class="color-danger">*</span> إدخال النص الإلزامي </label>
                        <input type="text" class="form-control invalid" placeholder="نص تلميحي">
                        <small class="form-text text-danger"> اسم مستخدم خاطئ </small>
                    </div> <!-- form-group -->
                </div>






                <div class="col-md-6">
                    <div class="form-group">
                        <label> اختار تاريخ </label>
                        <input type="text" class="form-control flatpickr" placeholder="اختار تاريخ">
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label> اختار تاريخ </label>
                        <input type="text" class="form-control flatpickr" placeholder="اختار تاريخ">
                    </div>
                </div>










                <div class="col-lg-6">
                    <div class="form-group">
                        <label> اختار من دروب داون  </label>
                        <select class="select2 w-100">
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


                <div class="col-lg-6">
                    <div class="form-group">
                        <label> اختار من دروب داون  </label>
                        <select class="select2 w-100">
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



                <div class="col-lg-6">
                    <div class="form-group mb-4">

                        <label class="main-label"> اختار اختيار واحد </label>

                        <div class="custom-radio-wrapper">

                            <div class="custom-control custom-radio custom-control-inline me-3">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadioInline1"> اختيار أول </label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline me-3">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2"> اختيار ثاني </label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2"> اختيار ثالث </label>
                            </div>

                        </div> <!-- custom-radio-wrapper -->

                    </div> <!-- form-group -->
                </div>







                <div class="col-lg-6">
                    <div class="form-group">

                        <label class="main-label"> اختار اختيار أو اكثر </label>

                        <div class="custom-checkbox-wrapper">

                            <div class="custom-control custom-checkbox custom-control-inline me-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1"> اختيار 1 </label>
                            </div>

                            <div class="custom-control custom-checkbox custom-control-inline me-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2"> اختيار 2 </label>
                            </div>


                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3"> اختيار 3 </label>
                            </div>


                        </div> <!-- custom-checkbox-wrapper -->

                    </div> <!-- form-group -->
                </div>







            </div>



        </div>

    </div> <!-- inner-content -->


</div> <!-- page -->

<?php include '_bottom-footer.php'; ?>
<?php include '_footer.php'; ?>
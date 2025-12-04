<?php include '_header.php'; ?>
<?php include '_top-header.php'; ?>

<div class="page inner-page ideas-list">

    <div class="page-header">

        <div class="container">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="homepage.php"> الرئيسية </a></li>
                    <li class="breadcrumb-item active"> الأفكار الإبداعية المرسلة </li>
                </ol>
            </nav>

            <h1 class="page-title mb-2"> الأفكار الإبداعية المرسلة </h1>

        </div>

    </div> <!-- page-header -->


    <div class="inner-content">

        <div class="container">

            <div class="card no-border mb-3">


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

                            <button class="btn base-border flex-between  w-100" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                        <div class="idea-card card text-start no-border base-box-shadow flex-start justify-content-between align-items-start p-4 h-100">

                            <div class="wishlist-wrapper">
                                <a href="#" class="no-hover">
                                    <i class="icon icon-heart-plus"></i>
                                </a>
                            </div>

                            <div class="start w-100">

                                <h6 class="font-medium mb-3 show-lines-2 h-50px">

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

                                <div class="w-100 flex-start bg-primary-faded p-2 base-border-radius mb-2 gap-2">
                                    <i class="icon icon-lg icon-user color-primary"></i>
                                    <span> محمد العتيبي </span>
                                </div>

                                <div class="flex-start flex-wrap mb-3">
                                    <span class="py-1 px-2 base-border-radius me-2 base-border small bold mb-2"> مبادرة توعية </span>
                                    <span class="py-1 px-2 base-border-radius me-2 base-border small bold mb-2"> حل تقني </span>
                                    <span class="py-1 px-2 base-border-radius me-2 base-border small bold mb-2"> مقترح تطوير </span>
                                    <span class="py-1 px-2 base-border-radius me-2 base-border small bold mb-2"> مقترح تطوير </span>
                                    <span class="py-1 px-2 base-border-radius me-2 base-border small bold mb-2"> مقترح تطوير </span>
                                    <span class="py-1 px-2 base-border-radius me-2 base-border small bold mb-2"> مقترح تطوير </span>
                                    <span class="py-1 px-2 base-border-radius me-2 base-border small bold mb-2"> مقترح تطوير </span>
                                    <span class="py-1 px-2 base-border-radius me-2 base-border small bold mb-2"> مقترح تطوير </span>
                                </div>

                            </div>

                            <div class="end w-100">
                                <a href="#" class="btn btn-light flex-center gap-1">
                                    <span> اطلع على التفاصيل </span>
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
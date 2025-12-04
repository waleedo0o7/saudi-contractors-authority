<!-- Modal -->
<div class="modal fade" id="search-modal" tabindex="-1">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-body">

                <div class="modal-search-content">

                    <div class="flex-between w-100 mb-3">
                        <h4 class="modal-title color-primary bold"> البحث </h4>
                        <i class="icon icon-remove icon-sm cursor-pointer" data-dismiss="modal" aria-label="Close"></i>
                    </div>

                    <div class="text-center mb-3">
                        <h6 class="font-medium mb-2"> مرحباً بك في صفحة البحث </h6>
                        <h2 class="color-primary font-medium"> ستجد كل ما تبحث عنه </h2>
                    </div>

                    <div class="flex-start gap-2 mb-3">

                        <div class="form-group m-0 input-with-start-icon w-100">
                            <div class="relative">
                                <input type="text" class="form-control " placeholder="ابحث هنا...">
                                <i class="icon icon-search start-icon"></i>
                            </div>
                        </div>

                        <a href="#" class="btn btn-primary px-4"> بحث </a>

                    </div>

                    <div class="flex-between mb-1">
                        <p class="m-0"> إن لم تستطع إيجاد ما تبحث عنه يمكنك الانتقال للبحث المتقدم </p>
                        <a href="#" class="btn btn-outline-dark btn-xs"> <span class="small font-medium"> البحث المتقدم</span> </a>
                    </div>

                    <p class="font-medium"> نقترح لك أيضًا تصفح الأعلى بحثًا </p>

                    <div class="flex-start gap-2 mb-3 flex-wrap mb-4">

                        <?php foreach (range(0, 3) as $i) { ?>
                            <a class="btn btn-primary-faded btn-xs "> <span class=""> جدارات </span> </a>
                            <a class="btn btn-primary-faded btn-xs "> <span class=""> سداد </span> </a>
                            <a class="btn btn-primary-faded btn-xs "> <span class=""> سداد </span> </a>
                            <a class="btn btn-primary-faded btn-xs "> <span class=""> سداد </span> </a>
                            <a class="btn btn-primary-faded btn-xs "> <span class=""> العنوان الوطني </span> </a>
                        <?php } ?>

                    </div>

                    <div class="text-center bg-gray-light border-radius-lg p-4 mb-3">
                        <h6 class="font-medium mb-3"> الصفحات الأكثر زيــــــــارة </h6>

                        <div class="flex-center gap-2 mb-3 flex-wrap">

                            <?php foreach (range(0, 4) as $i) { ?>
                                <a class="btn btn-primary-faded bg-white btn-xs border-radius-lg"> <span class=""> جدارات </span> </a>
                                <a class="btn btn-primary-faded bg-white btn-xs border-radius-lg"> <span class=""> جدارات جدارات جدارات </span> </a>
                                <a class="btn btn-primary-faded bg-white btn-xs border-radius-lg"> <span class=""> سداد سداد </span> </a>
                            <?php } ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<div id="readIcon" class="read-icon">🔊</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/vendors/bootstrap/jquery-3.2.1.min.js"></script>
<script src="assets/vendors/bootstrap/popper.min.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.min.js"></script>

<!-- select2 JS -->
<script src="assets/vendors/select2/select2.min.js"></script>

<!-- Circle progress JS -->
<script src="assets/vendors/circle-progress/circle-progress.min.js"></script>

<!-- Noty JS -->
<script src="assets/vendors/noty/noty.min.js"></script>

<!-- Flatpickr -->
<script src="assets/vendors/flatpickr/flatpickr.min.js"></script>

<!-- swiper -->
<script src="assets/vendors/swiper/swiper-bundle.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


<!-- ScrollMagic -->
<script src="assets/vendors/scroll-magic/ScrollMagic.min.js"></script>
<script src="assets/vendors/scroll-magic/debug.addIndicators.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/nouislider@15.7.1/dist/nouislider.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.umd.js"></script>

<!-- Custom JS -->
<script src="assets/js/custom.js"></script>

</body>

</html>
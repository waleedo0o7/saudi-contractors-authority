<?php include '_header.php'; ?>
<?php include '_top-header.php'; ?>

<div class="page inner-page about">

    <div class="page-header">

        <div class="container">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="homepage.php"> الرئيسية </a></li>
                    <li class="breadcrumb-item "> مجلس الإدارة </li>
                </ol>
            </nav>

            <h1 class="page-title mb-2"> مجلس الإدارة </h1>

        </div> <!-- container -->

    </div> <!-- page-header -->

    <div class="inner-content p-0">

        <div class="section-padding">

            <div class="container">

                <div class="row row-gap-4 flex-row-stretched">


                    <?php

                    $boardData = [
                        [
                            "name" => "م. زكريا بن عبد الرحمن العبد القادر",
                            "image" => "board-1.png",
                            "jobTitle" => "",
                            "boardRole" => "رئيس مجلس الإدارة"
                        ],
                        [
                            "name" => "أ. عاصم بن بطي العتيبي",
                            "image" => "board-2.png",
                            "jobTitle" => "",
                            "boardRole" => "نائب رئيس مجلس الإدارة"
                        ],
                        [
                            "name" => "د. أحمد بن جميل قطان",
                            "image" => "board-3.png",
                            "jobTitle" => "ممثل وزارة الشؤون البلدية والقروية والإسكان",
                            "boardRole" => "عضو مجلس الإدارة"
                        ],
                        [
                            "name" => "أ. عبد السلام بن عبدالله المانع",
                            "image" => "board-4.png",
                            "jobTitle" => "ممثل وزارة التجارة",
                            "boardRole" => "عضو مجلس الإدارة"
                        ],
                        [
                            "name" => "المستشار عبدالله بن سعد السعد",
                            "image" => "board-5.png",
                            "jobTitle" => "ممثل وزارة المالية",
                            "boardRole" => "عضو مجلس الإدارة"
                        ],
                        [
                            "name" => "م. خالد بن فهد العريك",
                            "image" => "board-6.png",
                            "jobTitle" => "ممثل هيئة كفاءة الإنفاق والمشروعات الحكومية",
                            "boardRole" => "عضو مجلس الإدارة"
                        ],
                        [
                            "name" => "أ. محمد بن عبد العزيز العجلان",
                            "image" => "board-7.png",
                            "jobTitle" => "",
                            "boardRole" => "عضو مجلس الإدارة"
                        ],
                        [
                            "name" => "د. أحمد بن عبدالله الزهراني",
                            "image" => "board-8.png",
                            "jobTitle" => "ممثل وزارة الموارد البشرية والتنمية الاجتماعية",
                            "boardRole" => "عضو مجلس الإدارة"
                        ],
                        [
                            "name" => "م. فهد بن علي القفاري",
                            "image" => "board-9.png",
                            "jobTitle" => "",
                            "boardRole" => "عضو مجلس الإدارة"
                        ],
                        [
                            "name" => "م. مهند بن قصي العزاوي",
                            "image" => "board-10.png",
                            "jobTitle" => "",
                            "boardRole" => "عضو مجلس الإدارة"
                        ],
                        [
                            "name" => "أ. إبراهيم بن حمزة القثامي",
                            "image" => "board-11.png",
                            "jobTitle" => "",
                            "boardRole" => "عضو مجلس الإدارة"
                        ]
                    ];


                    ?>


                    <?php foreach ($boardData as $index => $item): ?>

                        <div class="col-3">

                            <div class="board-card">

                                <div class="start">
                                    <img src="assets/images/board/<?= $item['image'] ?>" class="board-image aspect-ratio-1-1 cover border-radius-md mb-2">

                                    <p class="lead bold mb-1"> <?= $item['name'] ?> </p>

                                    <p class="mb-2"> <?= $item['jobTitle'] ?> </p>

                                </div>

                                <div class="end">
                                    <span class="badge badge-xs badge-outline-primary-faded"> <?= $item['boardRole'] ?> </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>

</div> <!-- page -->

<?php include '_bottom-footer.php'; ?>
<?php include '_footer.php'; ?>
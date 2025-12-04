<?php include '_header.php'; ?>

<div class="page default-layout page-name">

    <div class="ds-section">

        <div class="ds-title">
            <h1 class="text-center"> Noty JS </h1>
        </div>

        <div class="container">

            <a href="#" class="btn btn-danger" onClick="showDanger()"> Show danger</a>

            <a href="#" class="btn btn-success" onClick="showSuccess()"> Show success</a>

            <a href="#" class="btn btn-info" onClick="showInfo()"> Show info</a>


        </div> <!-- container -->

    </div> <!-- ds-section -->

</div> <!-- page -->

<?php include '_footer.php'; ?>


<script>
    function showDanger() {
        new Noty({
            type: 'error',
            layout: 'topRight',
            theme: 'nest',
            text: `
            <div class="d-flex justify-content-center align-items-center">
                <i class="icon icon-remove-3 icon-xxl me-3"></i>
                <p class="m-0"> Your Profile photo removed Your Profile photo removed Your Profile photo removed oto removed Your Profile photo removed  </p>
            </div>
                `,
            timeout: '400000',
            progressBar: false,
            closeWith: ['click'],
            killer: true,
        }).show();
    }

    function showSuccess(message,type) {
        new Noty({
            type: type,
            layout: 'topRight',
            theme: 'nest',
            text: `
            <div class="d-flex justify-content-center align-items-center">
                <i class="icon icon-check-3 icon-xxl me-3"></i>
                <p class="m-0"> ${message} </p>
            </div>
                `,
            timeout: '4000',
            progressBar: false,
            closeWith: ['click'],
            killer: true,
        }).show();
    }


    function showInfo() {
        new Noty({
            type: 'info',
            layout: 'topRight',
            theme: 'nest',
            text: `
            <div class="d-flex justify-content-center align-items-center">
                <i class="icon icon-info-3 icon-xxl me-3"></i>
                <p class="m-0"> Item deleted Successfully </p>
            </div>
                `,
            timeout: '40000',
            progressBar: false,
            closeWith: ['click'],
            killer: true,
        }).show();
    }
</script>
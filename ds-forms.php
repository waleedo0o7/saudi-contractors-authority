<?php include '_header.php'; ?>

<div class="page default-layout page-name">

    <div class="ds-section">

        <div class="ds-title">
            <h1 class="text-center"> Forms </h1>
        </div>

        <div class="container">

            <div class="ds-sub-section">

                <div class="row">

                    <div class="col-md-2">
                        <p class="m-0 mt-3 lead"> dropdown </p>
                    </div>

                    <div class="col-md-10">

                        <div class="row">

                            <div class="col-md-6">

                            </div> <!-- col-md-6 -->

                            <div class="col-md-6">
                            </div> <!-- col-md-6 -->



                        </div> <!-- row -->


                    </div><!-- col-md-10 -->

                </div> <!-- row -->


                <div class="row">

                    <div class="col-md-2">
                        <p class="m-0 mt-3 lead"> SIZES </p>
                    </div>

                    <div class="col-md-10">

                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Text input sm </label>
                                    <input type="text" class="form-control form-control-sm" placeholder="placeholder">
                                </div>
                            </div> <!-- col-md-4 -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Text input md (default) </label>
                                    <input type="text" class="form-control" placeholder="placeholder">
                                </div>
                            </div> <!-- col-md-4 -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Text input lg </label>
                                    <input type="text" class="form-control form-control-lg" placeholder="placeholder">
                                </div>
                            </div> <!-- col-md-4 -->



                        </div> <!-- row -->


                    </div><!-- col-md-10 -->

                </div> <!-- row -->




                <div class="row">

                    <div class="col-md-2">
                        <p class="m-0 mt-3 lead"> Normal </p>
                    </div>

                    <div class="col-md-10">

                        <div class="row">

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label> Text input </label>
                                    <input type="text" class="form-control" placeholder="placeholder">
                                </div>

                            </div> <!-- col-md-3 -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Password </label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div> <!-- col-md-3 -->



                            <div class="col-md-4">

                                <div class="form-group">

                                    <label> Phone Number</label>

                                    <div class="relative">

                                        <input type="text" class="form-control input-with-country-code" placeholder="Phone Number" required="">

                                        <div class="country-code-container">

                                            <select class="d-none" name="country" id="country">
                                                <option value="001"> 001 </option>
                                                <option value="002"> 002 </option>
                                                <option value="003"> 003 </option>
                                            </select>

                                            <div class="dropdown">
                                                <button class="reset-btn dropdown-toggle" type="button" id="choose-country-btn" data-toggle="dropdown">
                                                    <img alt="" src="assets/images/flag-kuwait.png" /> +001
                                                    <i class="icon icon-chevron-down"></i>
                                                </button>

                                                <div class="dropdown-menu choose-country-list" aria-labelledby="choose-country-btn">
                                                    <a data-value="1" class="dropdown-item" href="#"><img alt="" src="assets/images/flag-kuwait.png" /> +001 </a>
                                                    <a data-value="2" class="dropdown-item " href="#"><img alt="" src="assets/images/flag-ksa.png" /> +002 </a>
                                                    <a data-value="3" class="dropdown-item " href="#"><img alt="" src="assets/images/flag-uae.png" /> +003 </a>
                                                </div>
                                            </div> <!-- dropdown -->

                                        </div><!-- country-code-container -->

                                        <div class="end-content">
                                            <a href="#" class="link link-primary"> Edit </a>
                                        </div>

                                    </div>

                                </div><!-- form-group  -->

                            </div> <!-- col-md-3 -->





                        </div> <!-- row -->


                    </div><!-- col-md-10 -->

                </div> <!-- row -->

                <div class="row">

                    <div class="col-md-2">
                        <p class="m-0 mt-3 lead"> Disabled </p>
                    </div>

                    <div class="col-md-10">

                        <div class="row">


                            <div class="col-md-4">

                                <div class="form-group">
                                    <label> Disabled Text input </label>
                                    <input type="text" class="form-control disabled" placeholder="placeholder" disabled>
                                </div>

                            </div> <!-- col-md-3 -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Password </label>
                                    <input type="password" class="form-control disabled" placeholder="Password" disabled>
                                </div>
                            </div> <!-- col-md-3 -->



                            <div class="col-md-4">
                                <div class="form-group">

                                    <label>Your phone num 2 selected</label>

                                    <div class="relative">

                                        <input type="text" class="form-control input-with-country-code disabled" disabled placeholder="Phone Number" required="">

                                        <div class="country-code-container">

                                            <select class="d-none" name="country" id="country">
                                                <option value="001"> 001 </option>
                                                <option selected value="002"> 002 </option>
                                                <option value="003"> 003 </option>
                                            </select>

                                            <div class="dropdown">
                                                <button class="reset-btn dropdown-toggle" type="button" id="choose-country-btn" data-toggle="dropdown">
                                                    <img alt="" src="assets/images/flag-kuwait.png" /> +001
                                                    <i class="icon icon-chevron-down"></i>
                                                </button>

                                                <div class="dropdown-menu choose-country-list" aria-labelledby="choose-country-btn">
                                                    <a data-value="1" class="dropdown-item" href="#"><img alt="" src="assets/images/flag-kuwait.png" /> +001 </a>
                                                    <a data-value="2" class="dropdown-item " href="#"><img alt="" src="assets/images/flag-ksa.png" /> +002 </a>
                                                    <a data-value="3" class="dropdown-item " href="#"><img alt="" src="assets/images/flag-uae.png" /> +003 </a>
                                                </div>
                                            </div> <!-- dropdown -->

                                        </div><!-- country-code-container -->

                                    </div>

                                </div><!-- form-group  -->
                            </div> <!-- col-md-3 -->

                        </div> <!-- row -->


                    </div><!-- col-md-10 -->

                </div> <!-- row -->

                <div class="row">

                    <div class="col-md-2">
                        <p class="m-0 mt-3 lead"> Error </p>
                    </div>

                    <div class="col-md-10">

                        <div class="row">


                            <div class="col-md-4">

                                <div class="form-group">
                                    <label> Text input </label>
                                    <input type="text" class="form-control" placeholder="placeholder">
                                    <small class="form-text text-danger">wrong username</small>
                                </div>

                            </div> <!-- col-md-3 -->

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> Password </label>
                                    <input type="password" class="form-control" placeholder="Password">
                                    <small id="emailHelp" class="form-text text-danger">invalid password</small>
                                </div>
                            </div> <!-- col-md-3 -->


                            <div class="col-md-4">

                                <div class="form-group">

                                    <label>Your phone</label>

                                    <div class="relative">

                                        <input type="text" class="form-control input-with-country-code" placeholder="Phone Number" required="">

                                        <small class="form-text text-danger">Invalid phone number</small>

                                        <div class="country-code-container">
                                            <select class="d-none" name="country" id="country">
                                                <option value="001"> 001 </option>
                                                <option value="002"> 002 </option>
                                                <option selected value="003"> 003 </option>
                                            </select>
                                            <div class="dropdown">
                                                <button class="reset-btn dropdown-toggle" type="button" id="choose-country-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img alt="" src="assets/images/flag-kuwait.png" /> +001
                                                </button>
                                                <div class="dropdown-menu choose-country-list" aria-labelledby="choose-country-btn">
                                                    <a data-value="1" class="dropdown-item" href="#"><img alt="" src="assets/images/flag-kuwait.png" /> +001 </a>
                                                    <a data-value="2" class="dropdown-item " href="#"><img alt="" src="assets/images/flag-ksa.png" /> +002 </a>
                                                    <a data-value="3" class="dropdown-item " href="#"><img alt="" src="assets/images/flag-uae.png" /> +003 </a>
                                                </div>
                                            </div> <!-- dropdown -->
                                        </div><!-- country-code-container -->

                                    </div>

                                </div><!-- form-group  -->

                            </div> <!-- col-md-3 -->

                        </div> <!-- row -->


                    </div><!-- col-md-10 -->

                </div> <!-- row -->

                <div class="row">

                    <div class="col-md-2">
                        <p class="m-0 mt-3 lead"> Other </p>
                    </div>

                    <div class="col-md-10">


                        <div class="row">
                            <div class="col-md-3">

                                <div class="form-group">
                                    <label> Text rounded input </label>
                                    <input type="text" class="form-control  rounded-pill" placeholder="placeholder">
                                </div>

                            </div> <!-- col-md-3 -->

                            <div class="col-md-3">

                                <div class="form-group input-with-start-icon">
                                    <label> Text input with start icon </label>
                                    <div class="relative">
                                        <input type="text" class="form-control" placeholder="placeholder">
                                        <i class="icon icon-search start-icon"></i>
                                    </div>
                                </div>

                            </div> <!-- col-md-3 -->

                            <div class="col-md-3">

                                <div class="form-group">
                                    <label> Text input with end content </label>
                                    <div class="relative">
                                        <input type="text" class="form-control" placeholder="placeholder">

                                        <div class="end-content">
                                            <i class="icon icon-check icon-sm color-success me-2"></i>
                                            <a href="#" class="link link-primary"> Edit </a>
                                        </div>

                                    </div>
                                </div>

                            </div> <!-- col-md-3 -->





                            <div class="col-md-3">
                                <div class="form-group">
                                    <label> Text Gray input </label>
                                    <input type="text" class="form-control gray" placeholder="placeholder">
                                </div>
                            </div> <!-- col-md-3 -->
                        </div>


                    </div><!-- col-md-10 -->

                </div> <!-- row -->

                <div class="row mb-5">

                    <div class="col-md-2">
                        <p class="m-0 mt-3 lead"> Select 2 </p>
                    </div>

                    <div class="col-md-10">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Default select </label>
                                    <select class="form-control mb-3">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Select2 single </label>
                                    <select class="form-control select2 w-100">
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

                            <div class="col-md-6">
                                <label> Select2 multiple 1 </label>
                                <select class="select2  w-100" multiple="multiple">
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



                            <div class="col-md-6">
                                <label> Select2 multiple 2 </label>
                                <select class="select2-multiple w-100" multiple="multiple">
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






                        </div> <!-- row -->

                    </div><!-- col-md-10 -->

                </div> <!-- row -->

                <div class="row mb-5">

                    <div class="col-md-2">
                        <p class="m-0 mt-3 lead"> Flatpickr js </p>
                    </div>

                    <div class="col-md-10">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Flatpickr default </label>
                                    <input type="text" class="form-control flatpickr" placeholder="Select date">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Datepicker DateTime </label>
                                    <input type="text" class="form-control flatpickr-date-time" placeholder="Select date time">
                                </div>
                            </div>

                        </div> <!-- row -->

                    </div><!-- col-md-10 -->

                </div> <!-- row -->














            </div> <!-- ds-sub-section -->

            <hr class="my-5" />

            <div class="row">

                <div class="col-md-12">

                    <div class="form-group mb-4">

                        <label class="main-label"> Default Radio </label>

                        <div class="custom-radio-wrapper">

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadioInline1">Toggle radio</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Or toggle other radio</label>
                            </div>

                        </div> <!-- custom-radio-wrapper -->

                    </div> <!-- form-group -->


                    <div class="form-group mb-4">

                        <label class="main-label"> Default Radio disabled </label>

                        <div class="custom-radio-wrapper">

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioDisabled1" name="customRadioDisabled" class="custom-control-input" checked disabled>
                                <label class="custom-control-label" for="customRadioDisabled1">Toggle radio</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioDisabled2" name="customRadioDisabled" class="custom-control-input" disabled>
                                <label class="custom-control-label" for="customRadioDisabled2">Or toggle other radio</label>
                            </div>

                        </div> <!-- custom-radio-wrapper -->

                    </div> <!-- form-group -->

                    <hr />
                </div>


                <div class="col-md-12">


                    <div class="form-group">

                        <label class="main-label"> Default Checkbox </label>

                        <div class="custom-checkbox-wrapper">

                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                <label class="custom-control-label" for="customCheck1">Check this checkbox</label>
                            </div>

                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">Check this checkbox</label>
                            </div>


                        </div> <!-- custom-checkbox-wrapper -->

                    </div> <!-- form-group -->


                    <div class="form-group">

                        <label class="main-label"> Default Checkbox disabled </label>

                        <div class="custom-checkbox-wrapper">

                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="customCheckDisabled1" checked disabled>
                                <label class="custom-control-label" for="customCheckDisabled1">Check this checkbox</label>
                            </div>

                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="customCheckDisabled2" disabled>
                                <label class="custom-control-label" for="customCheckDisabled2">Check this checkbox</label>
                            </div>

                        </div> <!-- custom-checkbox-wrapper -->

                    </div> <!-- form-group -->

                    <hr />
                </div> <!-- col-md-12 -->

                <div class="col-md-4 mb-5">

                    <label> Radio </label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio1" class="custom-control-input" checked>
                        <label class="custom-control-label" for="customRadio1">Toggle radio</label>
                    </div>

                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">Or toggle other radio</label>
                    </div>

                </div>

                <div class="col-md-4 mb-5">

                    <label> Checkbox </label>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck10" checked>
                        <label class="custom-control-label" for="customCheck10">Check this checkbox</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck20">
                        <label class="custom-control-label" for="customCheck20">Check this checkbox</label>
                    </div>

                </div>

                <div class="col-md-4">

                    <label> Switch </label>

                    <div class="form-group m-0">

                        <div class="d-flex">
                            <div class="custom-switch-wrapper me-2">
                                <input type="checkbox" name="switch2" id="switch2" class="custom-checkbox" checked />
                                <label for="switch2" class="checkbox-label"></label>
                            </div>
                        </div>

                    </div>

                    <!-- https://codepen.io/designcouch/pen/BaJOJg?editors=1100 -->

                </div>

            </div> <!-- row -->







            <div class="row">

                <div class="col-md-4 mb-5">

                    <label> Radio </label>
                    <div class="custom-control custom-radio control-border mb-2">
                        <input type="radio" id="customRadioBorder1" name="customRadioBorder" class="custom-control-input" checked>
                        <label class="custom-control-label" for="customRadioBorder1">Toggle radio</label>
                    </div>

                    <div class="custom-control custom-radio control-border">
                        <input type="radio" id="customRadioBorder2" name="customRadioBorder" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioBorder2">Or toggle other radio</label>
                    </div>

                </div>

                <div class="col-md-4 mb-5">

                    <label> Checkbox </label>

                    <div class="custom-control custom-checkbox control-border mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheckBorder1" checked>
                        <label class="custom-control-label" for="customCheckBorder1">Check this checkbox</label>
                    </div>

                    <div class="custom-control custom-checkbox control-border">
                        <input type="checkbox" class="custom-control-input" id="customCheckBorder2">
                        <label class="custom-control-label" for="customCheckBorder2">Check this checkbox</label>
                    </div>

                </div>


            </div>


            <div class="select-items-wrapper mb-5">

                <button data-category-id="1" type="button" class="btn btn-sm btn-select-option me-1 mb-2 active"> TV show </button>
                <button data-category-id="2" type="button" class="btn btn-sm btn-select-option me-1 mb-2 active"> music </button>
                <button data-category-id="3" type="button" class="btn btn-sm btn-select-option me-1 mb-2 active"> books </button>
                <button data-category-id="4" type="button" class="btn btn-sm btn-select-option me-1 mb-2"> sport </button>
                <button data-category-id="5" type="button" class="btn btn-sm btn-select-option me-1 mb-2"> shopping </button>
                <button data-category-id="6" type="button" class="btn btn-sm btn-select-option me-1 mb-2"> movie </button>
                <button data-category-id="7" type="button" class="btn btn-sm btn-select-option me-1 mb-2"> games </button>
                <button data-category-id="8" type="button" class="btn btn-sm btn-select-option me-1 mb-2"> social N </button>
                <button data-category-id="9" type="button" class="btn btn-sm btn-select-option me-1 mb-2"> shopping shopping </button>

                <button data-category-id="10" type="button" class="btn btn-sm btn-select-option me-1 mb-2"> games </button>
                <button data-category-id="11" type="button" class="btn btn-sm btn-select-option me-1 mb-2"> TV show </button>
                <button data-category-id="12" type="button" class="btn btn-sm btn-select-option me-1 mb-2"> music </button>
                <button data-category-id="13" type="button" class="btn btn-sm btn-select-option me-1 mb-2"> books </button>
                <button data-category-id="14" type="button" class="btn btn-sm btn-select-option me-1 mb-2"> sport </button>
                <button data-category-id="15" type="button" class="btn btn-sm btn-select-option me-1 mb-2"> shopping </button>
                <button data-category-id="16" type="button" class="btn btn-sm btn-select-option me-1 mb-2"> movie </button>
                <button data-category-id="17" type="button" class="btn btn-sm btn-select-option me-1 mb-2"> games </button>
                <button data-category-id="18" type="button" class="btn btn-sm btn-select-option me-1 mb-2"> social N </button>
                <button data-category-id="19" type="button" class="btn btn-sm btn-select-option me-1 mb-2"> shopping shopping </button>


            </div><!-- select-items-wrapper -->

            <input id="my-interests-value" type="text" value="" class="mb-5">

        </div> <!-- container -->

    </div> <!-- ds-section -->

</div> <!-- page -->

<?php include '_footer.php'; ?>
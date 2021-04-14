<!-- Header -->
<?php include("header.php") ?>
<!-- End Header -->

<div class="main-wrp">
    
</div>
<div class="top-navtext inner-navtext">
    <div class="container">
        <ul>
            <li>
                <a href="#"><i class="fas fa-home"></i></a>
            </li>
            <li><a href="#">Notepad</a></li>
        </ul>
    </div>
</div>

<section class="notepad-wrp">
    <div class="container">
        <div class="title03">
            <h1>NOTEPAD</h1>
            <h4>YOU CURRENTLY HAVE 0 PRODUCTS ON YOUR NOTEPAD.</h4>
            <p>You have not assigned any products to your Notepad. Explore our products and add products to your Notepad.</p>
        </div>
        <div class="notped-block">
            <div class="nottitle">
                <h2>
                    <span>STANDARD</span>
                    <a href="#" data-toggle="modal" data-target="#myModal"><img src="images/pen.svg" /></a>
                </h2>
            </div>
            <div class="notefrm">
                <div class="form-group">
                    <label><strong>Quick add</strong> by product number</label>
                    <input type="text" name="" class="form-control" />
                    <a href="#" class="main-btn">Search</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="functionality bg-gray">
    <div class="container">
        <div class="titlebar">
            <h1>NOTEPAD <strong>FUNCTIONALITIES</strong></h1>
        </div>
        <div class="functionality-block">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="functionality-box">
                        <h4>CREATE PDF CATALOGUE</h4>
                        <p>Create your own PDF product catalogue</p>
                        <span><i class="fas fa-exclamation-triangle"></i> Login required</span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="functionality-box">
                        <h4>DOWNLOAD PRODUCT INFORMATION</h4>
                        <p>Choose different output formats and what information to include in your specification.</p>
                        <span><i class="fas fa-exclamation-triangle"></i> Login required</span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="functionality-box">
                        <h4>CREATE PDF CATALOGUE</h4>
                        <p>Create your own PDF product catalogue</p>
                        <span><i class="fas fa-exclamation-triangle"></i> Login required</span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="functionality-box">
                        <h4>DOWNLOAD PRODUCT INFORMATION</h4>
                        <p>Choose different output formats and what information to include in your specification.</p>
                        <span><i class="fas fa-exclamation-triangle"></i> Login required</span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-3">
                    <div class="functionality-box">
                        <h4>CREATE PDF CATALOGUE</h4>
                        <p>Create your own PDF product catalogue</p>
                        <span><i class="fas fa-exclamation-triangle"></i> Login required</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><img src="images/close.svg" /></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="titlebar">
                        <h1>MANAGE YOUR <strong>CATEGORIES</strong></h1>
                    </div>
                    <div class="mad-dt">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit cubilia ridiculus erat primis cras condimentum tellus fringilla tristique egestas, sociis inceptos porta sodales a felis eros velit vehicula at malesuada
                            quam scelerisque aptent ultricies tempus.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <form role="form" action="/wohoo" method="POST">
                            <div class="multi-field-wrapper">
                                <div class="multi-fields">
                                    <div class="multi-field">
                                        <span class="multi-ic"><i class="far fa-ellipsis-v"></i></span>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" name="stuff[]" />
                                        <button type="button" class="remove-field"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <button type="button" class="add-field"><i class="fas fa-plus"></i> Add new Category</button>
                            </div>
                        </form>
                        <div class="btn-group">
                            <a href="#" class="Reset-btn">Reset changes</a>
                            <a href="#">Save all changes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- Footer -->
<?php include("footer.php") ?>
<!-- End Footer -->

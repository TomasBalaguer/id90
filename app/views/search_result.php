<?php
if (!isset($_SESSION['user'])) redirect("home");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/searchlist.css">
</head>

<body>
    <div class="container-fluid main-section">
        <div class="header">
            <div class="agile-top-header">
                <div class="banner-agile-top">
                    <div class="number">
                    </div>
                    <div class="top-icons">
                        <ul>
                            <li><a href="../auth/logout"><i class="fa fa-sign-out" aria-hidden="true"> Logout</i></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-white text-center mb-5">
                <img src="../public/images/white-logo.png" alt="">
            </div>
            <div class="col-lg-7 select-part-section p-2 rounded">
                <form action="./search" method="post" class="w3_form_post">
                    <div class="row">
                        <div class="col-lg-3">
                            <input class="form-control form-control-lg" type="text" name="destination" placeholder="Destination" required="">
                        </div>
                        <div class="col-lg-2 border-left">
                            <div class="agileits_w3layouts_main_gridl">
                                <input class="date form-control form-control-lg" id="datepicker" name="checkin" type="text" value="Check-In" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = new Date();}" required="" autocomplete="off" style="font-size: 1em;">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-lg-2 border-left">
                            <div class="agileits_w3layouts_main_gridl">
                                <input class="date form-control form-control-lg" id="datepicker1" name="checkout" type="text" value="Check-Out" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="" autocomplete="off" style="font-size: 1em;">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-lg-3 border-left">
                            <div class="agileits_w3layouts_main_gridl">
                                <select id="guests" name="guests[]" required="" class="form-control form-control-lg">
                                    <option value="">Guests</option>
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" target="_blank" class="btn btn-danger btn-block search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-8 mx-auto">

                <!-- List group-->
                <ul class="list-group shadow">
                    <?php if (isset($datos['hotels']['hotels'])) : ?>
                        <?php foreach ($datos['hotels']['hotels'] as $hotel) : ?>

                            <!-- list group item-->
                            <li class="list-group-item">
                                <!-- Custom content-->
                                <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                    <div class="media-body order-2 order-lg-1">
                                        <h5 class="mt-0 font-weight-bold mb-2"><?php echo $hotel['name']; ?></h5>
                                        <p class="font-italic text-muted mb-0 small"><?php echo $hotel['location_description']; ?></p>
                                        <p class="font-italic text-muted mb-0 small">Checkin: <?php echo $hotel['checkin']; ?> - Checkout: <?php echo $hotel['checkout']; ?></p>
                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                            <h6 class="font-weight-bold my-2">USD <?php echo number_format($hotel['total'], 2); ?></h6>
                                            <ul class="list-inline small">
                                                <?php for ($x = 0; $x < $hotel['star_rating']; $x++) : ?>
                                                    <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                                    <!-- <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li> -->
                                                <?php endfor; ?>
                                            </ul>
                                        </div>
                                    </div><img src="<?php echo $hotel['image']; ?>" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2 image-hotel">
                                </div>
                                <!-- End -->
                            </li>
                            <!-- End -->
                        <?php endforeach; ?>
                    <?php else : ?>
                        <li class="list-group-item">
                            <!-- Custom content-->
                            <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                                <div class="media-body order-2 order-lg-1">
                                    <h5 class="mt-0 font-weight-bold mb-2">No encontramos resultados para su busqueda</h5>
                                </div>
                                <!-- End -->
                        </li>
                    <?php endif; ?>
                </ul>
                <!-- End -->
            </div>
        </div>
    </div>

</body>

<script type="text/javascript" src="../public/js/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<!-- Calendar -->
<link rel="stylesheet" href="../public/css/jquery-ui.css" />
<script src="../public/js/jquery-ui.js"></script>
<script>
    $(function() {
        $("#datepicker,#datepicker1").datepicker({
            dateFormat: 'yy-mm-dd'
        });
    });
</script>
<!-- //Calendar -->

</html>

<!doctype html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="canonical" href="/" />
  
  <meta name="description" content="" />
  
  <title>GameWorld HTML Template</title>
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css">
  
  <link href="http://demo.designshopify.com/html_gameworld/assets/stylesheets/cs.animate.css" rel="stylesheet" type="text/css" media="all">
  <link href="http://demo.designshopify.com/html_gameworld/assets/stylesheets/application.css" rel="stylesheet" type="text/css" media="all">
  <link href="http://demo.designshopify.com/html_gameworld/assets/stylesheets/bootstrap.min.3x.css" rel="stylesheet" type="text/css" media="all">
  <link href="http://demo.designshopify.com/html_gameworld/assets/stylesheets/cs.bootstrap.3x.css" rel="stylesheet" type="text/css" media="all">
  <link href="http://demo.designshopify.com/html_gameworld/assets/stylesheets/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
  <link href="http://demo.designshopify.com/html_gameworld/assets/stylesheets/cs.global.css" rel="stylesheet" type="text/css" media="all">
  <link href="http://demo.designshopify.com/html_gameworld/assets/stylesheets/cs.style.css" rel="stylesheet" type="text/css" media="all">
  <link href="http://demo.designshopify.com/html_gameworld/assets/stylesheets/cs.media.3x.css" rel="stylesheet" type="text/css" media="all">
  <!--[if IE 8 ]> 
  <link href="http://demo.designshopify.com/html_gameworld/assets/stylesheets/ie8.css" rel="stylesheet" type="text/css" media="all">
  <![endif]-->
  
  <script src="http://demo.designshopify.com/html_gameworld/assets/javascripts/jquery-1.8.2.min.js" type="text/javascript"></script>
  <script src="http://demo.designshopify.com/html_gameworld/assets/javascripts/bootstrap.min.3x.js" type="text/javascript"></script>
  <script src="http://demo.designshopify.com/html_gameworld/assets/javascripts/modernizr.js" type="text/javascript"></script>
  <script src="http://demo.designshopify.com/html_gameworld/assets/javascripts/cs.global.js" type="text/javascript"></script>
  <script src="http://demo.designshopify.com/html_gameworld/assets/javascripts/owl.carousel.js" type="text/javascript"></script>
  <script src="http://demo.designshopify.com/html_gameworld/assets/javascripts/jquery.imagesloaded.min.js" type="text/javascript"></script>
  <script src="http://demo.designshopify.com/html_gameworld/assets/javascripts/application.js" type="text/javascript"></script>
  <script src="http://demo.designshopify.com/html_gameworld/assets/javascripts/cs.script.js" type="text/javascript"></script>
</head>

<body class="template">
  <!-- Header -->
  <header id="top" class="clearfix">
    <?php include 'v_header.php'; ?>
    <?php include 'v_navig_st.php'; ?>
    <?php include 'v_navig_nd.php'; ?>
  </header>
  
  <div id="content-wrapper-parent">
    <div id="content-wrapper">
      <div id="content" class="container clearfix">
        <div class="group_breadcrumb">
          <div id="breadcrumb" class="row breadcrumb">
            <div class="col-md-24">
              <a href="./index.html" class="homepage-link" title="Back to the frontpage">Home</a>
              <i class="angle-right">&gt;</i>
              <span class="page-title">Your Shopping Cart</span>
            </div>
          </div>
        </div>
        
        <section class="row content">
          <div id="col-main" class="col-md-24 cart-page content">
            <form method="post" action="<?php echo site_url();?>cart/proses_order" enctype="multipart/form-data" id="cartform" class="clearfix">
            <div id="page-header">
              <h4 id="page-title">CheckOut Confirmation</h4>
            </div>

            <div class="row-fluid">
              <h5>Customer Identity</h5>
              <div class="row">
                  <p class="col-md-8">
                    <label for="Name" class="control-label">Name</label>
                    <input type="text" class="form-control" value="<?php echo $dt['nama']; ?>" disabled>
                    <input type="hidden" name="name" value="<?php echo $dt['nama']; ?>">
                  </p>
                  <p class="col-md-8">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" class="form-control" value="<?php echo $dt['email']; ?>" disabled>
                    <input type="hidden" name="email" value="<?php echo $dt['email']; ?>">
                  </p>
                  <p class="col-md-8">
                    <label for="phone" class="control-label">Phone Number</label>
                    <input type="text" class="form-control" value="<?php echo $dt['phone']; ?>" disabled>
                    <input type="hidden" name="phone" value="<?php echo $dt['phone']; ?>">
                  </p>
                </div>
            </div>
            <div class="row-fluid">
                <div class="wrap-table">
                  <h5>Order List</h5>
                  <table class="cart-items haft-border">
                    <colgroup>
                      <col class="checkout-image">
                      <col class="checkout-info">
                      <col class="checkout-price">
                      <col class="checkout-quantity">
                      <col class="checkout-totals">
                      <col class="checkout-delete">
                    </colgroup>
                    <thead>
                      <tr class="top-labels">
                        <th>Picture</th>
                        <th class="text-left">Product name</th>
                        <th>Unit Price</th>
                        <th class="qty">Qty</th>
                        <th>SubTotal</th>
                        <th>Remove</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($cart as $item) { ?>
                      <tr class="item curabitur-mattis-tellus-rutrum-enim-facilisis">
                        <td>
                          <img src="http://demo.designshopify.com/html_gameworld/screen/products/product_03_small.jpg" alt="Curabitur mattis tellus rutrum enim facilisis">
                        </td>
                        <td class="title">
                          <a class="link" href="./product.html">
                            <span class="block"><?php echo $item['name']; ?></span>
                          </a>
                        </td>
                        <td class="title-1"><span class="money"><?php echo number_format($item['price'],0,",","."); ?></span></td>
                        <td class="qty">
                        	<span class="money"><?php echo $item['qty'];?></span>
                        </td>
                        <td class="total title-1"><span class="money"><?php echo number_format($item['subtotal'],0,",","."); ?></span></td>
                        <td class="action">
                          <a class="btn-7 btooltip" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove" href="<?php echo site_url()?>cart/hapus/<?php echo $item['rowid'];?>">
                            <i class="fa fa-times"></i>
                          </a>
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr class="bottom-summary">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="update-quantities">
                          <span class="money">Total Price</span>
                        </td>
                        <td class="subtotal title-1"><span class="money">Rp <?php echo number_format($grand_total, 0,",","."); ?></span></td>
                        <td>&nbsp;</td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
            </div>
            
              <div class="row-fluid">
                <div id="checkout-proceed" class="last1 text-right">
                  <button class="btn btn-2 large" type="submit" name="checkout">Proceed Order <i class="fa fa-chevron-right"></i></button>
                </div>
              </div>
          </form>  
          </div>
        </section>
      </div>
    </div>
  </div>
  
  <div id="bottom">
    <div class="container">
      <div id="bottom-content" class="row">
        <div class="clearfix">
          <div id="widget-partners">
            <div class="widget-wrapper text-center">
              <div id="partners-container" class="clearfix">
                <div id="partners" class="clearfix">
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="150">
                    <a class="animated" href="./collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="300">
                    <a class="animated" href="./collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="450">
                    <a class="animated" href="./collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="600">
                    <a class="animated" href="./collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="750">
                    <a class="animated" href="./collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="900">
                    <a class="animated" href="./collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="1050">
                    <a class="animated" href="./collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="1200">
                    <a class="animated" href="./collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="1350">
                    <a class="animated" href="./collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="1500">
                    <a class="animated" href="./collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- footer guys -->
  <?php include 'v_footer.php'; ?>
</body>
</html>

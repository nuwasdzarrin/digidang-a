		<!--top-other-->
		<div id="top-other">
			<div class="container">
				<div class="row">
					<div class="welcome col-md-9 text-left">
						Welcome to digidang.com
					</div>
					<div class="top-other col-md-15">
						<ul class="list-inline text-right">
							<li class="currencies-switcher">
								<div class="currency-plain">
									<ul class="currencies list-inline unmargin">
										<li class="heading">Currency </li>
										<li class="currency-EUR active">
											<a href="#">EUR</a>
											<input type="hidden" value="EUR">
										</li>
										<li class="currency-USD">
											<a href="#">USD</a>
											<input type="hidden" value="USD">
										</li>
										<li class="currency-GBP">
											<a href="#">GBP</a>
											<input type="hidden" value="GBP">
										</li>
									</ul>
									<select class="currencies_src hide" name="currencies">
										<option value="EUR" selected="selected">EUR</option>
										<option value="USD">USD</option>
										<option value="GBP">GBP</option>
									</select>
								</div>
							</li>
							<li class="customer-links">
								<ul id="accounts" class="list-inline">
									<li class="login">
										<span id="loginButton" class="dropdown-toggle" data-toggle="dropdown">
											Login
											<i class="sub-dropdown1"></i>
											<i class="sub-dropdown"></i>
										</span>
										<div id="loginBox" class="dropdown-menu text-left" style="overflow:hidden;display:none">
											<form method="post" action="http://demo.designshopify.com/html_gameworld/login.html" id="customer_login" accept-charset="UTF-8">
												<input name="form_type" type="hidden" value="customer_login">
												<input name="utf8" type="hidden" value="✓">
												<div id="bodyBox">
													<div class="sb-title">Login</div>
													<ul class="control-container customer-accounts list-unstyled">
														<li class="clearfix">
															<label for="customer_email_box" class="control-label">Email Address <span class="req">*</span></label>
															<input type="email" value="" name="customer[email]" id="customer_email_box" class="form-control">
														</li>
														<li class="clearfix">
															<label for="customer_password_box" class="control-label">Password <span class="req">*</span></label>
															<input type="password" value="" name="customer[password]" id="customer_password_box" class="form-control password">
														</li>
														<li class="clearfix last1">
															<button class="btn btn-1" type="submit">Login</button>
														</li>
														<li>
															<a class="register" href="http://demo.designshopify.com/html_gameworld/register.html">Creat New Account</a>
														</li>
													</ul>
												</div>
											</form>
										</div>
									</li>
									<li>or</li>
									<li class="register">
										<a href="http://demo.designshopify.com/html_gameworld/register.html" id="customer_register_link">Register</a>
									</li>
								</ul>
							</li>
							<?php $cart= $this->cart->contents(); ?>
							<li class="umbrella">
								<div id="umbrella" class="list-inline unmargin">
									<div class="cart-link">
										<div class="dropdown-toggle" data-toggle="dropdown">
											<i class="sub-dropdown1"></i>
											<i class="sub-dropdown"></i>
											<a class="num-items-in-cart link-dropdown" href="<?php echo site_url();?>cart">
												<span>My Cart</span>
												<?php 
												$sum_it = 0;
												$grand_total = 0;
												foreach ($cart as $it) {
													$sum_it ++;
													$grand_total += $it['subtotal']; 
												}
												 ?>
												<?php if (empty($cart)) { ?>
												<span class="icon">
													<span class="number"><?php echo $sum_it; ?></span> items
													<span class="total"> - <span class="money" >Rp <?php echo number_format($grand_total, 0,",","."); ?></span></span>
												</span>
											</a>
										</div>
										<div id="cart-info" class="dropdown-menu">
											<div id="cart-content">
												<div class="sb-title">
													<a href="/cart">My cart</a>
												</div>
												<div class="action">
													<span>Cart Subtotal:</span>
													<span class="cart-total-right"><span class="money">YOUR CART IS EMPTY</span></span>
												</div>
											</div>
										</div>
												<?php } else { ?>
												<span class="icon">
													<span class="number"><?php echo $sum_it; ?></span> items
													<span class="total"> - <span class="money" >Rp <?php echo number_format($grand_total, 0,",","."); ?></span></span>
												</span>
											</a>
										</div>
										<div id="cart-info" class="dropdown-menu">
											<div id="cart-content">
												<div class="sb-title">
													<a href="/cart">My cart</a>
												</div>
												<div class="action">
													<span>Cart Subtotal:</span>
													<span class="cart-total-right"><span class="money">Rp <?php echo number_format($grand_total, 0,",","."); ?></span></span>
												</div>
												<div class="action">
													<button class="btn btn-1">CHECKOUT</button>
												</div>
												<div class="recently">
													<span>Recently added items</span>
												</div>
												<div class="items control-container">
												<?php foreach ($cart as $item) { ?>
													<div class="row">
														<a class="cart-close" title="Remove" href="<?php echo site_url()?>cart/hapus/<?php echo $item['rowid'];?>">
															<i class="fa fa-times"></i>
														</a>
														<div class="col-md-7 cart-left">
															<a class="cart-image" href="http://demo.designshopify.com/html_gameworld/product.html">
																<img src="http://demo.designshopify.com/html_gameworld/screen/products/product_03_small.jpg" alt="" title="">
															</a>
														</div>
														<div class="col-md-17 cart-right">
															<div class="cart-title">
																<a href="http://demo.designshopify.com/html_gameworld/product.html"><?php echo $item['name']; ?></a>
															</div>
															<div class="cart-price"><?php echo $item['qty']; ?><span class="x"> x </span><span class="money"><?php echo number_format($item['price'],0,",","."); ?></span><span class="x"> = </span><span class="money"><?php echo number_format($item['subtotal'],0,",","."); ?></span></div>
														</div>
													</div>
													<?php } ?>
												</div>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--end top-other -->

		<div class="container">
			<div class="row">
				<div class="col-md-12 top-logo">
					<a id="site-title" href="http://localhost/digidang" title="HTML Game Store Theme">
						<img src="<?php echo base_url();?>assets/img/logo-digidang.png" alt="HTML Game Store Theme" style="width: 50%; height: auto;">
					</a>
				</div>
				<div class="col-md-12 top-support">
					<div class="support">
						<span class="h5 txt_color">Customer Support</span><span>1800-000-GameWorld</span>
						<span class="line"></span>
						<a href="ymsgr:sendIM?quocbao0415">Chat with us</a>
					</div>
					<div class="top-search">
						<form id="header-search" class="search-form" action="http://demo.designshopify.com/html_gameworld/index.html" method="get">
							<input type="hidden" name="type" value="product">
							<input type="text" class="input-block-level" name="q" value="" accesskey="4" autocomplete="off" placeholder="search entire store here">
							<button type="submit" class="search-submit" title="Search">
								<i class="fa fa-search"></i>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
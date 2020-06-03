<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- Main -->
<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
			
			<!-- Content Slider -->
			
			<!-- End Content Slider -->
			
			<!-- Products -->
			<div class="products">
				<div class="cl">&nbsp;</div>
				<ul>
                <?php foreach ($latestProducts as $product): ?>
				    <li>
				    	<a href="/product/<?php echo $product['auto_id'];?>"><img src="<?php echo $product['auto_bigImage'];?>" alt="" /></a>
				    	<div class="product-info">
				    		<h3><?php echo $product['auto_name'];?></h3>
				    		<div class="product-desc">
								<h4><?php echo $product['auto_city'];?></h4>
				    			<p><?php echo $product['auto_year'];?></p>
				    			<strong class="price"><?php echo $product['auto_price'];?>€</strong>
								<a href="#" data-id="<?php echo $product['auto_id'];?>"
                                           class="add-to-cart">
                                            <i class="fa fa-shopping-cart"></i>Добавить в выбранные 
                                        </a>
				    		</div>
				    	</div>
			    	</li>
			    	<?php endforeach ?>
				</ul>
				
				<div class="cl">&nbsp;</div>
				
			</div>
			
			<!-- End Products -->
			
		</div>
			
		</div>
		<!-- End Content -->
		
		<!-- Sidebar -->
		<div id="sidebar">
			
			<?php include ROOT . '/views/layouts/search.php'; ?>

			
			<!-- Categories -->
			<div class="box categories">
				<h2>Категория <span></span></h2>
				<div class="box-content">
					<ul>
					<?php foreach ($Category as $cat): ?>
						<li><a href="/category/<?php echo $cat['id_category'];?>"><?php echo $cat['category'];?></a></li>
					<?php endforeach ?>
					   
					</ul>
				</div>
			</div>
			<!-- End Categories -->
			
		</div>
		<!-- End Sidebar -->
		
		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->
	
	<!-- Side Full -->
	<div class="side-full">
		
		<!-- More Products -->
		
		<!-- End More Products -->
		
		<!-- Text Cols -->
		
		<!-- End Text Cols -->
		
	</div>
	<!-- End Side Full -->
	<?php include ROOT . '/views/layouts/footer.php'; ?>

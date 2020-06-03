<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- Main -->
<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
			
			<!-- Content Slider -->
			<div id="slider" class="box">
				<div id="slider-holder">
					<ul>
					    <li><a href="#"><img src="/template/css/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="/template/css/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="/template/css/images/slide1.jpg" alt="" /></a></li>
					    <li><a href="#"><img src="/template/css/images/slide1.jpg" alt="" /></a></li>
					</ul>
				</div>
				<div id="slider-nav">
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
				</div>
			</div>
			<!-- End Content Slider -->
			
			<!-- Products -->
			<div class="products">
				<div class="cl">&nbsp;</div>
				<ul>
                <?php foreach ($categoryProducts as $product): ?>
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
			<div id="pagin"><?php echo $pagination->get(); ?></div>
			<!-- End Products -->
			
		</div>
		<!-- End Content -->
		
		<!-- Sidebar -->
		<div id="sidebar">
			
		<!-- Search -->
		<div class="box search">
					<h2>Поиск <span></span></h2>
					<div class="box-content">
						<form action="s" method="post">
						<label>Ключевое слово</label>
						<input type="text" class="field" name="keyword" />

						<label>Год</label>
						<input type="text" class="field" name="year" />

						<label>Город</label>
						<input type="text" class="field" name="city" />
						
							<label>Категория:</label>
							<input type="text" class="field" name="model" value="<?php echo ($categoryProducts[0]['auto_category']); ?>">
							
							
							<div class="inline-field">
								<label><strong>Цена</strong></label></br>
								<label>от:</label>
								<input type="text" class="field" name="price1"/>
								<label>до:</label>
								<input type="text" class="field" name="price2"/>
							</div>
							
							<input type="submit" class="search-submit" value="Search" name="search" />
							
						
		
						</form>
					</div>
		</div>
			<!-- End Search -->
			
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
		
		
		
		
	</div>
	<!-- End Side Full -->
	<?php include ROOT . '/views/layouts/footer.php'; ?>

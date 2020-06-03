<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- Main -->
<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
			
		
			
			<!-- Products -->
			<div class="productsOne">
				<div class="cl">&nbsp;</div>
				<div class="fotorama" data-nav="thumbs"
				data-width="80%"
				data-ratio="800/600"
				data-minwidth="400"
				data-maxwidth="1000"
				data-minheight="300"
				data-maxheight="100%">
				<?php foreach ($images as $img): ?>
				   
					<a href="1.jpg"><img src="<?php echo $img['auto_path'];?>"></a>
					
				    
				<?php endforeach ?>

					
				</div>
				<div class="cl">&nbsp;</div>
					
				
			</div>
			
			<a href="<?php echo $product['auto_link'];?>">Ссылка на сайт</a>
			<!-- End Products -->
			
		</div>
		<!-- End Content -->
		
		<!-- Sidebar -->
		<div id="sidebar">
			
			
			
			<!-- Categories -->
			<div class="box categories">
				
				<h2><?php echo $product['auto_name'];?> <span></span></h2>
				<div class="box-content">
					<P><strong>Год выпуска</strong></P>
					<p><?php echo $product['auto_year'];?> год</p>
					<P><strong>Характеристика</strong></P>
					<p><?php echo $product['auto_des'];?></p>
					<P><strong>Город</strong></P>
					<p><?php echo $product['auto_city'];?></p>
					<P><strong>Описание</strong></P>
					<p><?php echo $product['auto_list'];?></p>
					
					<strong class="price"><?php echo $product['auto_price'];?>$</strong>
					<a href="#" data-id="<?php echo $product['auto_id'];?>" class="add-to-cart">
                        <i class="fa fa-shopping-cart"></i>В выбранные</a>
					
					
					
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
		
		
		
	</div>
	<!-- End Side Full -->
	<?php include ROOT . '/views/layouts/footer.php'; ?>

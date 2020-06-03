<?php include ROOT . '/views/layouts/header.php'; ?>










<div id="main">
		<div class="cl">&nbsp;</div>
		
		<!-- Content -->
		<div id="content">
			
			
			
			<!-- Products -->
			<div class="products">
				<div class="cl">&nbsp;</div>
				<h2 class="title text-center">Выбранные авто</h2>
                    <?php $i=0 ?>
                    <?php if ($productsInCart): ?>
                        <p>Вы выбрали такие авто:</p>
                        <table class="table-bordered table-striped table">
                            <tr>
                                <th>Ссылка на сайт с авто</th>
                                <th>Название</th>
                                <th>Стомость</th>
                                <th>Стомость  растоможки</th>
								<th>Удалить</th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><a href="<?php echo $product['auto_link'];?>"><?php echo $product['auto_link'];?></a></td>
                                    <td>
                                        
                                            <?php echo $product['auto_name'];?>
                                       
                                    </td>
                                    <td><?php echo $product['auto_price'];?>Є</td>
                                    <td><?php echo $totalPrice[$i];?>Є</td>    
									<td><a href="/cart/delete/<?php echo $product['auto_id'];?>">
                                            X
                                        </a></td>
									<?php $i++ ?>                    
                                </tr>
                            <?php endforeach; ?>
                                
                        </table>
                    <?php else: ?>
                        <p>Ничего не выбрано</p>
                    <?php endif; ?>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Products -->
			
		</div>
		<!-- End Content -->
		
		<!-- Sidebar -->
		<div id="sidebar">
			
			
			
			<!-- Categories -->
			<div class="box categories">
				<h2>Categories <span></span></h2>
				<div class="box-content">
					<ul>
					<?php foreach ($categories as $cat): ?>
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
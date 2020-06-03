<!-- Search -->
<div class="box search">
				<h2>Поиск <span></span></h2>
				<div class="box-content">
					<form action="search" method="post">
						
						<label>Ключевое слово</label>
						<input type="text" class="field" name="keyword" />

						<label>Год </label>
						<input type="text" class="field" name="year" />

						<label>Город</label>
						<input type="text" class="field" name="city" />
						
						
						<label>Категория</label>
						<select class="field" name="model">
							<?php foreach ($Category as $cat): ?>
								<option value="<?php echo $cat['category'];?>"><?php echo $cat['category'];?></option>
							<?php endforeach ?>
						</select>
						
						<div class="inline-field">
							<label>Цена от:</label>
							<input type="text" class="field" name="price1"/>
							<label>до:</label>
							<input type="text" class="field" name="price2"/>
						</div>
						
						<input type="submit" class="search-submit" value="Search" name="search" />
						
						
					</form>
				</div>
</div>
			<!-- End Search -->
<!-- Footer -->
<div id="footer">
	
		<p class="left">
			<a href="/">Главная</a>
			<span>|</span>
			
			<span>|</span>
			<a href="/cabinet">Аккаунт</a>
			<span>|</span>
			
			<span>|</span>
			<a href="/contact">Контакты</a>
		</p>
		<p class="right">
			&copy; 2020 AutoParser.
			
		</p>
	</div>
	<!-- End Footer -->
	
</div>	
<!-- End Shell -->
<script src="/template/js/jquery.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>	
<script  src="/template/js/index.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>


</body>
</html>
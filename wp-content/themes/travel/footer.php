 <footer>
         <div class="cpy">
              <a href="#"><span>C</span>hoose <span>T</span>ravel</a>
              <p>Choose Travel 2014<br />
                 Все права защищены<br />
                 e-mail:contact@travel.com</p>
        </div>
        <div class="categoriy">
        <?php if (!function_exists('dynamic_sidebar')|| !dynamic_sidebar('Sidebar')):?>
                <p>Текст, если не назначены виджеты</p>
        <?php endif;?>
        </div>
       <!-- <div class="categoriy">
             <h2>Категории</h2>
                <ul>
                <li>-<a href="#">Италия</a></li>
                <li>-<a href="#">Германия</a></li>
                <li>-<a href="#">Франция</a></li>
                <li>-<a href="#">Великобритания</a></li>
                <li>-<a href="#">Египет</a></li>
                <li>-<a href="#">ОАЭ</a></li>
                </ul>    
        </div>-->
        <div class="menu-foot">
             <h2>Страницы</h2>
                <ul>
                <li>-<a href="#">Главная</a></li>
                <li>-<a href="#">Автор</a></li>
                <li>-<a href="#">Контакты</a></li>
                </ul>    
        </div>
      </footer>  
   
   </div>

<script type="text/javascript">
        function rotateImages(){
            var oCurPhoto = $("#photo div.current");
            var oNxtPhoto = oCurPhoto.next();
            if (oNxtPhoto.length==0) oNxtPhoto=$("#photo div:first");
            oCurPhoto.removeClass('current').addClass('previous');
            oNxtPhoto.addClass('current').animate({opacity:1.0},3000,
            function(){oCurPhoto.removeClass('previous') });
            }
        
        $(function(){
        
        $('.popup-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
			}
		}
	});
        
        
        var stop =  setInterval("rotateImages()",3000);
        $('#button-rotator').click(function(){
            clearInterval(stop);
            rotateImages();
         });
        
      }); 
    </script>
</body>

</html>
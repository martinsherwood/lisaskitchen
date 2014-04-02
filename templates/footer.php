        <footer class="site-footer centre">
            <p class="no-select">&#169; Copyright <?php copyright(); ?>, Lisa's Kitchen.</p>
            <p><a href="sitemap">Sitemap</a> | <a href="terms">Terms &amp; Conditions</a> | <a href="privacy">Privacy</a></p>
            <div class="website">Website by Martin Sherwood &amp; Martin Price</div>
        </footer>
        <?php function copyright($year = 'auto') {
           	  	if(intval($year) == 'auto'){ $year = date('Y'); }
           	  	if(intval($year) == date('Y')){ echo intval($year); }
           	  	if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); }
           	  	if(intval($year) > date('Y')){ echo date('Y'); }
       		  }
		?>
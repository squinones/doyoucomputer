{%include "header.php"%}
	<body class="contact">
	
		<!-- Header -->
        {%include "nav.php"%}


        <!-- Main -->
			<article id="main">
				<header class="special container">
                    {%if message%}
                    <h2 class="wrapper style2">{{message}}</h2>
                    {%else%}
                    <span class="icon fa-envelope"></span>
					<h2>Get In Touch</h2>
                    {%endif%}
				</header>
					
				<!-- One -->
					<section class="wrapper style4 special container 75%">
					
						<!-- Content -->
							<div class="content">
								<form action="//formspree.io/kayladnls@gmail.com" method="post">
									<div class="row 50%">
										<div class="6u 12u(3)">
											<input type="text" name="name" placeholder="Name" />
										</div>
										<div class="6u 12u(3)">
											<input type="text" name="email" placeholder="Email" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<input type="text" name="subject" placeholder="Subject" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<textarea name="message" placeholder="Message" rows="7"></textarea>
										</div>
									</div>
									<div class="row">
										<div class="12u">
											<ul class="buttons">
												<li><input type="submit" class="special" value="Send Message" /></li>
											</ul>
										</div>
									</div>
								</form>
							</div>
							
					</section>
				
			</article>

		<!-- Footer -->
        {%include "footer.php"%}

    </body>
</html>
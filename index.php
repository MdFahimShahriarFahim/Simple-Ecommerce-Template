<?php
	include('header.php');
	//require('header.php');

?>
        <!-- slider section -->
        <section id="slider">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <!-- slider 1 img -->
                  <div class="carousel-item active">
                    <img src="img/s1.png" class="img-fluid w-100" alt="slider1">
                  </div>
                  <!-- slider 2 img -->
                  <div class="carousel-item">
                    <img src="img/s2.png" class="img-fluid w-100" alt="slider2">
                  </div>
                  <!-- slider 3 img -->
                  <div class="carousel-item">
                    <img src="img/s3.png" class="img-fluid w-100" alt="slider3">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        

        <!-- shop section -->
        <section id="shop">
            <div class="container">
                <h2 class="text-uppercase text-center text-warning mt-5">shop</h2>
                <div class="form-row mt-5">
					<!-- card 3 part -->
                    <div class="col-sm-4 mb-2">
                        <div class="card shadow " >
                            <a href="img/ice.jpg" class="example-image-link" data-lightbox="example-1">
                                <img src="img/ice.jpg" class="card-img-top example-image" alt="c3">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Ice</h5>
                                <p class="card-text"><strong>Price:</strong>10$</p>
                            </div>
                            <div class="card-footer border-0 px-1">
                                <div class="btn-group w-100 px-0" role="group" aria-label="Basic example">
                                    <a href="#" class="btn btn-outline-success"><b>Cart</b></a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg3">Details</button>
                                    <!-- modal-3 -->
									<div id="bd-example-modal-lg3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalCenterTitle">Ice</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body row">
													<div class="col-6">
														<img src="img/ice.jpg" class="card-img-top" alt="shop1">
													</div>
													<div class="col-6">
														<h2>CODE: #modal-3</h2>
														<h3>Product Name: Ice</h3>
														<h3 class="mb-3">Price: 10$</h3>
														<h3>Description:</h3>
														<p>Good healthy food.</p>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div> <!-- model end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card 1 part -->
                    <div class="col-sm-4 mb-2">
                        <div class="card shadow">
                            <a href="img/bread-and-butter.jpg" class="example-image-link" data-lightbox="example-1">
                                <img src="img/bread-and-butter.jpg" class="card-img-top example-image" style="height: 17rem;" alt="c1">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Bread and Butter</h5>
                                <p class="card-text"><strong>Price:</strong>10$</p>
                                <div class="btn-group w-100 px-0 mt-1" role="group" aria-label="Basic example">
                                    <a href="#" class="btn btn-outline-success">Cart</a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg1">Details</button>
                                    <!-- modal-1 -->
									<div id="bd-example-modal-lg1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalCenterTitle">Bread and Butter</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body row">
													<div class="col-6">
														<img src="img/bread-and-butter.jpg" class="card-img-top" alt="shop1">
													</div>
													<div class="col-6">
														<h2>CODE: #modal-1</h2>
														<h3>Product Name: Bread and Butter</h3>
														<h3 class="mb-3">Price: 10$</h3>
														<h3>Description:</h3>
														<p>Good healthy food.</p>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div> <!-- model end -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card 2 part -->
                    <div class="col-sm-4 mb-2">
                        <div class="card shadow">
                            <a href="img/dessert.jpg" class="example-image-link" data-lightbox="example-1">
                                <img src="img/dessert.jpg" class="card-img-top example-image" alt="c2">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Dessert</h5>
                                <p class="card-text"><strong>Price:</strong>10$</p>
                                <div class="btn-group w-100 px-0" role="group" aria-label="Basic example">
                                    <a href="#" class="btn btn-outline-success">Cart</a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg2">Details</button>
                                    <!-- modal-2 -->
									<div id="bd-example-modal-lg2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalCenterTitle">Dessert</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body row">
													<div class="col-6">
														<img src="img/dessert.jpg" class="card-img-top" alt="shop1">
													</div>
													<div class="col-6">
														<h2>CODE: #modal-2</h2>
														<h3>Product Name: Dessert</h3>
														<h3 class="mb-3">Price: 10$</h3>
														<h3>Description:</h3>
														<p>Good healthy food.</p>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div> <!-- model end -->
                                </div>
                            </div>
                        </div>
                    </div>
                                
                    <!-- card 4 part -->
                    <div class="col-sm-4 mb-2">
                        <div class="card shadow" >
                            <a href="img/strawberry.jpg" class="example-image-link" data-lightbox="example-1">
                                <img src="img/strawberry.jpg" class="card-img-top example-image" alt="c4">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Strawberry</h5>
                                <p class="card-text"><strong>Price:</strong>10$</p>
                                <div class="btn-group w-100 px-0" role="group" aria-label="Basic example">
                                    <a href="#" class="btn btn-outline-success">Cart</a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg4">Details</button>
                                    <!-- modal-4 -->
									<div id="bd-example-modal-lg4" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalCenterTitle">Strawberry</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body row">
													<div class="col-6">
														<img src="img/strawberry.jpg" class="card-img-top" alt="shop1">
													</div>
													<div class="col-6">
														<h2>CODE: #modal-4</h2>
														<h3>Product Name: Strawberry</h3>
														<h3 class="mb-3">Price: 10$</h3>
														<h3>Description:</h3>
														<p>Good healthy food.</p>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div> <!-- model end -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card 5 part -->
                    <div class="col-sm-4 mb-2">
                        <div class="card shadow" >
                            <a href="img/vegetable-juices.jpg" class="example-image-link" data-lightbox="example-1">
                                <img src="img/vegetable-juices.jpg" class="card-img-top example-image" alt="c5">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Vegetable Juices</h5>
                                <p class="card-text"><strong>Price:</strong>10$</p>
                                <div class="btn-group w-100 px-0" role="group" aria-label="Basic example">
                                    <a href="#" class="btn btn-outline-success">Cart</a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg5">Details</button>
                                    <!-- modal-5 -->
									<div id="bd-example-modal-lg5" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalCenterTitle">Vegetable Juices</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body row">
													<div class="col-6">
														<img src="img/vegetable-juices.jpg" class="card-img-top" alt="shop1">
													</div>
													<div class="col-6">
														<h2>CODE: #modal-5</h2>
														<h3>Product Name: Vegetable Juices</h3>
														<h3 class="mb-3">Price: 10$</h3>
														<h3>Description:</h3>
														<p>Good healthy food.</p>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div> <!-- model end -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- card 6 part -->
                    <div class="col-sm-4 mb-2">
                        <div class="card shadow" >
                            <a href="img/yogurt.jpg" class="example-image-link" data-lightbox="example-1">
                                <img src="img/yogurt.jpg" class="card-img-top example-image" alt="c6">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Yogurt</h5>
                                <p class="card-text"><strong>Price:</strong>10$</p>
                                <div class="btn-group w-100 px-0" role="group" aria-label="Basic example">
                                    <a href="#" class="btn btn-outline-success">Cart</a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg6">Details</button>
                                    <!-- modal-6 -->
									<div id="bd-example-modal-lg6" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalCenterTitle">Yogurt</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body row">
													<div class="col-6">
														<img src="img/yogurt.jpg" class="card-img-top" alt="shop1">
													</div>
													<div class="col-6">
														<h2>CODE: #modal-6</h2>
														<h3>Product Name: Yogurt</h3>
														<h3 class="mb-3">Price: 10$</h3>
														<h3>Description:</h3>
														<p>Good healthy food.</p>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div> <!-- model end -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- exclusive section -->
        <section id="exclusive">
            <div class="container">
                <h2 class="text-uppercase text-center text-warning mt-5">exclusive</h2>
                <div class="form-row mt-5 mb-5">

                    <!-- exclusive 1 part -->
                    <div class="col-sm-4 mb-2">
                        <div class="card shadow" >
                            <a href="img/hamburger.jpg" class="example-image-link" data-lightbox="example-1">
                                <img src="img/hamburger.jpg" class="card-img-top example-image" style="height: 15rem;" alt="e1">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Hamburger</h5>
                                <p class="card-text"><strong>Price:</strong>20$</p>
                                <div class="btn-group w-100 px-0 mt-1" role="group" aria-label="Basic example">
                                    <a href="#" class="btn btn-outline-success">Cart</a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg7">Details</button>
                                    <!-- modal-7 -->
									<div id="bd-example-modal-lg7" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalCenterTitle">Hamburger</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body row">
													<div class="col-6">
														<img src="img/hamburger.jpg" class="card-img-top" alt="shop1">
													</div>
													<div class="col-6">
														<h2>CODE: #modal-7</h2>
														<h3>Product Name: Hamburger</h3>
														<h3 class="mb-3">Price: 20$</h3>
														<h3>Description:</h3>
														<p>Good healthy food.</p>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div> <!-- model end -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- exclusive 2 part -->
                    <div class="col-sm-4 mb-2">
                        <div class="card shadow" >
                            <a href="img/raspberry.jpg" class="example-image-link" data-lightbox="example-1">
                                <img src="img/raspberry.jpg" class="card-img-top example-image" alt="e2">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Raspberry</h5>
                                <p class="card-text"><strong>Price:</strong>20$</p>
                                <div class="btn-group w-100 px-0 mt-1" role="group" aria-label="Basic example">
                                    <a href="#" class="btn btn-outline-success">Cart</a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg8">Details</button>
                                    <!-- modal-8 -->
									<div id="bd-example-modal-lg8" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalCenterTitle">Raspberry</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body row">
													<div class="col-6">
														<img src="img/raspberry.jpg" class="card-img-top" alt="shop1">
													</div>
													<div class="col-6">
														<h2>CODE: #modal-8</h2>
														<h3>Product Name: Raspberry</h3>
														<h3 class="mb-3">Price: 20$</h3>
														<h3>Description:</h3>
														<p>Good healthy food.</p>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div> <!-- model end -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- exclusive 3 part -->
                    <div class="col-sm-4 mb-2">
                        <div class="card shadow" >
                            <a href="img/salad.jpg"  class="example-image-link" data-lightbox="example-1">
                                <img src="img/salad.jpg" class="card-img-top example-image" alt="e3">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Salad</h5>
                                <p class="card-text"><strong>Price:</strong>20$</p>
                                <div class="btn-group w-100 px-0 mt-1" role="group" aria-label="Basic example">
                                    <a href="#" class="btn btn-outline-success">Cart</a>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bd-example-modal-lg9">Details</button>
                                    <!-- modal-9 -->
									<div id="bd-example-modal-lg9" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalCenterTitle">Salad</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body row">
													<div class="col-6">
														<img src="img/salad.jpg" class="card-img-top" alt="shop1">
													</div>
													<div class="col-6">
														<h2>CODE: #modal-9</h2>
														<h3>Product Name: Salad</h3>
														<h3 class="mb-3">Price: 20$</h3>
														<h3>Description:</h3>
														<p>Good healthy food.</p>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
										</div>
									</div> <!-- model end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- upcoming section -->
        <section id="upcoming">
            <div class="container">
                <h2 class="text-uppercase text-center text-warning mt-5">upcoming</h2>
                <div class="form-row mt-5">

                <!-- upcoming 1 part -->
                <div class="col-sm-4 mb-2">
                    <div class="card shadow" >
                        <a href="img/cake.jpg" class="example-image-link" data-lightbox="example-1">
                            <img src="img/cake.jpg" class="card-img-top example-image" alt="u1">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Cake</h5>
                            <p class="card-text"><strong>Price:</strong>15$</p>
                        </div>
                    </div>
                </div>

                <!-- upcoming 2 part -->
                <div class="col-sm-4 mb-2">
                    <div class="card shadow" >
                        <a href="img/pancakes.jpg" class="example-image-link" data-lightbox="example-1">
                            <img src="img/pancakes.jpg" class="card-img-top example-image" style="height: 15.5rem;" alt="u2">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Pancakes</h5>
                            <p class="card-text"><strong>Price:</strong>15$</p>
                        </div>
                    </div>
                </div>

                <!-- upcoming 3 part -->
                <div class="col-sm-4 mb-2">
                    <div class="card shadow" >
                        <a href="img/piza.jpg" class="example-image-link" data-lightbox="example-1">
                            <img src="img/piza.jpg" class="card-img-top example-image" alt="u3">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Pizza</h5>
                            <p class="card-text"><strong>Price:</strong>15$</p>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </section>
    
	
	
	<?php
		
		
		include('footer.php');
	?>
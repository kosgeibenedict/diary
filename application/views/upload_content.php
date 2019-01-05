	<style type="text/css">
		
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
	</style>
	<div class="image-container set-full-height" style="background-image: url('<?=base_url()?>assets/img/wizard-book.jpg')">
	    <!--   Creative Tim Branding   --> 

		<!--  Made With Material Kit  --> 

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
	        	<div class="col-sm-2"></div>
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="blue" id="wizard">
		                    <form action="<?=base_url()?>Welcome/add_new_book" method="post" class="form-group" enctype="multipart/form-data">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Publish to the World!
		                        	</h3>
									<small class="text-muted">Books, Articles, Educative content, Poems, Riddles, Programming content, Short Stories...</small>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">Book Details</a></li>
			                            <li><a href="#description" data-toggle="tab">Author Details</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">

		                            <div class="tab-pane" id="details"> 
		                            	<div class="form-group">
		                            		<div class="row">
		                            			<div class="label col-sm-2">
		                            				<label>Book Title:</label>
		                            			</div>
		                            			<div class="input col-sm-8">
		                            				<input type="text" class="form-control" name="book_title">
		                            			</div>
		                            		</div>
		                            		<div class="row">
		                            			<div class="label col-sm-2">
		                            				<label>ISBN:</label>
		                            			</div>
		                            			<div class="input col-sm-8">
		                            				<input type="text" class="form-control" name="isbn">
		                            			</div>
		                            		</div> 
		                            		<div class="row">
		                            			<div class="label col-sm-2">
		                            				<label>Book Preview:</label>
		                            			</div>
		                            			<div class="input col-sm-8">
		                            				<textarea class="form-control" name="book_preview"></textarea>
		                            			</div>
		                            		</div>
		                            		<div class="row">
		                            			<div class="label col-sm-2">
		                            				<label>Genre:</label>
		                            			</div>
		                            			<div class="input col-sm-8">
		                            				<input type="text" class="form-control" name="genre">
		                            			</div>
		                            		</div>
		                            		<div class="row">
		                            			<div class="label col-sm-2">
		                            				<label>Attachment:</label>
		                            			</div>
		                            			<div class="input col-sm-8">
		                            				<input type="file" class="form-control-file" id="exampleInputFile" name="book_attachment"><i class="fas fa-file-archive"></i>
		                            			</div>
		                            		</div>
		                            		<div class="row">
		                            			<div class="label col-sm-2">
		                            				<label>Cover Image:</label>
		                            			</div>
		                            			<div class="input col-sm-8">
		                            				<input type="file" class="form-control-file" id="exampleInputFile" name="book_image"><i class="fas fa-file-archive"></i>
		                            			</div>
		                            		</div>
		                            	</div>
		                            </div>

		                            <div class="tab-pane" id="captain"> 
		                            	<div class="form-group">
		                            		<div class="row">
		                            			<div class="label col-sm-2">
		                            				<label>Publisher:</label>
		                            			</div>
		                            			<div class="input col-sm-8">
		                            				<input type="text" class="form-control" name="publisher">
		                            			</div>
		                            		</div>
		                            		<div class="row">
		                            			<div class="label col-sm-2">
		                            				<label>Date Released:</label>
		                            			</div>
		                            			<div class="input col-sm-8">
		                            				<input type="date" class="form-control" name="date_released">
		                            			</div>
		                            		</div>
		                            		<div class="row">
		                            			<div class="label col-sm-2">
		                            				<label>Book Genre:</label>
		                            			</div>
		                            			<div class="input col-sm-8">
		                            				<input type="text" class="form-control" name="book_genre">
		                            			</div>
		                            		</div>
		                            		<div class="row">
		                            			<div class="label col-sm-2">
		                            				<label>Publisher Rating:</label>
		                            			</div>
		                            			<div class="input col-sm-8">
		                            				<div class="rate">
													    <input type="radio" id="star5" name="rate" value="5" />
													    <label for="star5" title="text">5 stars</label>
													    <input type="radio" id="star4" name="rate" value="4" />
													    <label for="star4" title="text">4 stars</label>
													    <input type="radio" id="star3" name="rate" value="3" />
													    <label for="star3" title="text">3 stars</label>
													    <input type="radio" id="star2" name="rate" value="2" />
													    <label for="star2" title="text">2 stars</label>
													    <input type="radio" id="star1" name="rate" value="1" />
													    <label for="star1" title="text">1 star</label>
													  </div>
		                            			</div>
		                            		</div>
		                            	</div>
		                            </div>

		                            <div class="tab-pane" id="description"> 
		                            	<div class="form-group"> 
		                            		<div class="row">
		                            			<div class="label col-sm-2">
		                            				<label>Full Name:</label>
		                            			</div>
		                            			<div class="input col-sm-8">
		                            				<input type="text" class="form-control" name="authro">
		                            			</div>
		                            		</div>

		                            		<div class="row">
		                            			<div class="label col-sm-2">
		                            				<label>Email Address:</label>
		                            			</div>
		                            			<div class="input col-sm-8">
		                            				<input type="email" class="form-control" name="email_address">
		                            			</div>
		                            		</div>

		                            		<div class="row">
		                            			<div class="label col-sm-2">
		                            				<label>Phone:</label>
		                            			</div>
		                            			<div class="input col-sm-8">
		                            				<input type="tel" id="phone" class="form-control" name="phone">
		                            			</div>
		                            		</div>
		                            	</div>
		                            </div>
		                            
		                        </div>
	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
	                                    <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />

										<div class="footer-checkbox">
											<div class="col-sm-12">
											  <div class="checkbox hidden">
												  <label>
													  <input type="checkbox" name="optionsCheckboxes">
												  </label>
												  Subscribe to our newsletter
											  </div>
										  </div>
										</div>
	                                </div>
	                                <div class="clearfix"></div>
	                        	</div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	</div> 
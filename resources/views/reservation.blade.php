 <!-- ***** Reservation Us Area Starts ***** -->
 <section class="section" id="reservation">
        <div class="container" style="align-items: center;">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here you can keep request to our products.</h2>
                        </div>
                        <p>Send money to my number i.e 0000000000 through ani upi method and send me the UPI  transaction ID and you enter your details and then we supply to you. </p>
                        
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="{{url('reservation')}}" method="post">
@csrf


                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Buy our products here</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                            <input type="phone" name="guest" placeholder = "Transaction Id">  
                            </div>
                            <div class="col-lg-6">
                                <div id="filterDate2">    
                                
                                  </div>
                                </div>   
                            </div>
                            
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Address and products that you need." required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon" style="background-color: black;">Proceed to continue</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->
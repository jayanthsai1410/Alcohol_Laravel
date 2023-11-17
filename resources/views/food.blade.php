 <!-- ***** Menu Area Starts ***** -->
 <section class="section" id="menu">
        <div class="container" >
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        
                        <h2>Our bestsellers</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel" >
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">


@foreach($data as $data)






                    <div class="item" style="background-color: black;">
                        <div style = "background-image: url('/foodimage/{{$data->image}}');" class='card' style="background-color: black;">
                        
                        
                        
                        
                        <div class="price" style="background-color: black;"><h6>{{$data->price}}</h6></div>
                            <div class='info' style="background-color: black;">
                              <h1 class='title' style="background-color: black;">{{$data->name}}</h1>
                              <p class='description' style="background-color: black;">{{$data->description}}</p>
                              <div class="main-text-button" style="background-color: black;">
                                  <div class="scroll-to-section" style="background-color: black;"><a href="#reservation">Buy this <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>






                    </div>
                    </form>
@endforeach



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->
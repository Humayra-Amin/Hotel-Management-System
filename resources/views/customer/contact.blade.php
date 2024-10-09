@extends('customer.layouts.apps')

@section('apps')



<div class="standard-promo contact-us-promo">
    <div class="container">
        <h3 class="standard-promo-header">Contact Us</h3>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div id="map-canvas" class="map map-canvas" style="width: 100%;height: 300px;"></div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h4 class="name">The Metropolis Hotel</h4>
                <p class="address">
                    <a style="color:#333" href="https://maps.google.com/?q=The+Metropolis+Hotel+&amp;ll=41.40932800,2.17888500" target="_blank" rel="noopener"></a>
                </p>
                <p class="phone-number">
                    <span class="letter">T</span>
                    <a style="color:#333" href="tel:(01) 234 567 890">(01) 234 567 890</a>
                </p>
                <p class="fax-number">
                    <span class="letter">F</span>
                    (01) 234 567 890
                </p>
                <p class="email">
                    <span class="letter">E</span>
                    <a style="color:#333" href="mailto:metropolis@hotel.com.au">metropolis@hotel.com.au</a>
                </p>
                <a class="btn btn-primary" href="/contactUs.html">Learn More</a>
            </div>
        </div>
    </div>
</div>


            <!-- Add your map code here (e.g., using Google Maps) -->
            <div class="map-container">
                <!-- Add your map embed code here -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.781722834278!2d91.81870947103317!3d22.361869295692408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd972a7c0913d%3A0xa89bedab30fca683!2sAscii%20System!5e0!3m2!1sen!2sbd!4v1695225952836!5m2!1sen!2sbd" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


        </div>

        </div>

    </div>


    
@endsection
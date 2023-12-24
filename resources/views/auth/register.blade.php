@include('home.inc.head') 


<!-- intro section -->
<section class="intro_sections">
    <div class="container">
        <h1>تسجيل حساب</h1>
        <p>صنف المنتجات حسب اختيارك</p>
        <ul>
            <li> <a href="./index.php">الرئيسيه</a> </li>
            <li> / </li>
            <li> <a href="./index.php">تسجيل حساب</a> </li>
        </ul>
    </div>
</section>

<section class="Login form" id="Login">
    <div class="contaoner">

        <form action="{{ route('registerPost') }}" method="post" class="Login_form">
            @csrf
            <h3>أنشاء حساب</h3>
                    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <label for="">رقم الهاتف</label>
            <input name="mobile" type="text" placeholder="">
            <label  for="">كلمه السر</label>
            <input name="password" type="password" placeholder="">
               <!-- Add a div to hold the map -->
               <div id="map" style="height: 300px;"></div>

               <!-- Input fields for latitude and longitude -->
               <input type="hidden" name="latitude" id="latitude">
               <input type="hidden" name="longitude" id="longitude">
   
            <button class="add-to-cart">ارسل</button>
            <a href="{{ route('login') }}" type="submit"  class="add-to-cart" >تسجيل دخول</a>
        </form>

    </div>
</section>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
<script>
    var map;

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: -34.397, lng: 150.644 },
            zoom: 8
        });

        // Add a click event listener to update the input fields
        map.addListener('click', function(event) {
            document.getElementById('latitude').value = event.latLng.lat();
            document.getElementById('longitude').value = event.latLng.lng();
        });
    }
</script>


@include('home.inc.footer')
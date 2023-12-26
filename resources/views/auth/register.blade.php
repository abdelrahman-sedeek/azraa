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
                    {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
            <label  for=""> الاسم</label>
            <input name="name"  value="{{ old('name') }}" type="text" placeholder="">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
     
            <label for="">رقم الهاتف</label>
            <input name="mobile"  value="{{ old('mobile') }}" type="text" placeholder="">
            @error('mobile')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label  for="">كلمه السر</label>
            <input name="password"  value="{{ old('password') }}" type="password" placeholder="">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label  for="">العنوان</label>
            <input   value="{{ old('address') }}" type="text" name="address"  >
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="addressType">نوع العنوان</label>
            <select class="form-control mb-5" id="addressType" name="type">
                <option value="منزل">منزل</option>
                <option value="عمل">عمل</option>
            </select>
            <!-- Add a div to hold the map -->
            
               <!-- Input fields for latitude and longitude -->
               <input type="hidden" name="latitude" id="latitude">
               <input type="hidden" name="longitude" id="longitude">
   
            {{-- <button class="add-to-cart">ارسل</button>--}}
            <button  type="submit"  class="add-to-cart" >تسجيل دخول</button> 
        </form>

    </div>
</section>
{{-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script> --}}
{{-- <script>
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
</script> --}}


@include('home.inc.footer')
{{-- @include('home.inc.liveCart') --}}
@include('home.inc.popUp')
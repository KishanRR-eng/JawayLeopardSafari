@extends('frontend.layout.main')
@section('title', 'Gir National Park Safari Booking Online')
@section('css')
    @vite(['node_modules/intl-tel-input/build/css/intlTelInput.min.css', 'node_modules/vanillajs-datepicker/dist/css/datepicker.min.css'])
    <style>
        .iti--allow-dropdown {
            width: 100%;
        }
    </style>
@endsection
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        {{--
   <div class="container">
      <div class="ticker-container">
         <h3 class="ticker-title fs-6">Latest Updates</h3>
         <div class="ticker-text">
            <p>This Website is Owned by Jungle Safari India, Visitors Can Book Safari For Gir Jungle Safari, Devalia Safari Park and Kankai Nature Ride.</p>
         </div>
      </div>
   </div>
   --}}
        <div class="">
            <div class="">
                <img class="main_img" alt="Gir lion" src="{{ asset('frontend/img/Feature-image-Gir-National-Park.jpg') }}">
            </div>
            {{--
      <div>
         <img class="text_img" src="{{ asset('frontend/img/HEADLINE.png') }}" alt="gir national park">
      </div>
      --}}
        </div>

        </div>
    </section>
    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started">
        <div class="container">
            <div class="row justify-content-between gy-4">
                <div class="col-lg-5 d-flex flex-column info " data-aos="fade-right" data-aos-delay="100">
                    <h3 class="text-left">Updates</h3>
                    <ul class="updates mt-2">
                        <li class="d-flex">
                            <span class="p-1">Innovative Conservation Through Technology: Research and Monitoring in the Gir Ecosystem</span>
                        </li>
                        <li class="d-flex">
                            <span class="p-1"> Exploring Gir’s Natural Colors</span>
                        </li>
                        <li class="d-flex">
                            <span class="p-1"> World Lion Day: A Tribute to the King of the Jungle</span>
                        </li>
                        <li class="d-flex">
                            <span class="p-1">An Unlikely Standoff: Will the Turtle Survive the Lion Encounter?</span>
                        </li>
                        <li class="d-flex">
                            <span class="p-1"> Early Insights into the Habitats and Migration Paths of Four Endangered Raptors in Central Asia</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-7 col-sm-12 d-flex flex-column align-items-center">
                    <form class="firststep_form" method="POST" action="{{ route('inquiry') }}">
                        @csrf
                        <h3>Check Availability & Book</h3>
                        <div class="row">

                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name*" value="{{ old('first_name') ?? '' }}" required>
                                <div class="text-sm text-danger">{{ $errors->first('first_name') ?? '' }}</div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name*" value="{{ old('last_name') ?? '' }}" required>
                                <div class="text-sm text-danger">{{ $errors->first('last_name') ?? '' }}</div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="{{ old('mobile_no') ?? '' }}" required>
                                <input type="hidden" name="phone_code" id="phone_code" value="{{ old('phone_code') ?? '91' }}">
                                <div class="text-sm text-danger">{{ $errors->first('mobile_no') ?? '' }}</div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ old('email') ?? '' }}">
                                <div class="text-sm text-danger">{{ $errors->first('email') ?? '' }}</div>
                            </div>
                            <div class="col-md-12 mb-2 text-center">
                                <button class="button-29" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Get Started Section -->
    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
        <div class="container">
            <div class="section-header">
                <h1>GIR NATIONAL PARK </h1>
            </div>
            <div class="gir_about">
                <p>There’s a unique thrill in locking eyes with the lion — a moment where wonder meets a rush of fear. If you're craving that rare blend of wild beauty and raw power, Gir National Park promises an experience like no other.
                </p>
                <p>Many of us first learned about Gir National Park through our school geography or general knowledge books. Nestled in Gujarat, this iconic sanctuary—also known as Sasan Gir—is located close to places like Somnath, Junagadh, Amreli, and particularly Talala Gir. Established in 1965, the
                    park is a safe haven for the majestic Asiatic lions, including over 200 adult males, more than 100 females, and 200+ cubs. Spanning across 1,412 square kilometers, Gir continues to draw nature lovers and wildlife enthusiasts from around the country and beyond.
                </p>
                <p>For the most memorable experience, plan your visit to Gir National Park between December and March, when the weather is pleasant and wildlife sightings are frequent. Keep in mind that the park remains closed annually from June 16 to October 15. If you're a photography enthusiast and
                    don’t mind the summer heat, the vibrant wilderness in April and May offers some incredible moments. To make the most of your trip, booking a Gir Safari in advance is highly recommended.
                </p>
            </div>
            <div class="row gy-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card-bg" style="background-image: url({{ asset('frontend/img/homepage/Gir_lion-Gir_forest.jpeg') }}); aria-label=" gir="" jungle="" safari"="" "=""></div>
                                                                                                              </div>
                                                                                                              <div class="col-xl-6 d-flex align-items-center">
                                                                                                                 <div class="card-body">
                                                                                                                    <h4 class="card-title">Gir Jungle Safari</h4>
                                                                                                                    <p class="mb-2">
                                                                                                                       Gir National Park is teeming with diverse wildlife, unique plant life, and a wide variety of bird species. It’s a thrilling destination for nature lovers and wildlife enthusiasts alike. With exciting safari experiences available at different times of the day, every visit promises a new adventure in the heart of the wild.
                                                                                                                    </p>
                                                                                                                    <a href="{{ route('girJungle') }}" class="readmore stretched-link"><span>Read More </span><i class="bi bi-arrow-right"></i></a>
                                                                                                                 </div>
                                                                                                              </div>
                                                                                                           </div>
                                                                                                        </div>
                                                                                                     </div>
                                                                                                     <!-- End Card Item -->
                                                                                                     <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                                                                                        <div class="card-item">
                                                                                                           <div class="row">
                                                                                                              <div class="col-xl-6">
                                                                                                                 <div class="card-bg" style="background-image: url({{ asset('frontend/img/homepage/devaliya.jpg') }}); aria-label=" devalia="" jungle="" safari" ;="" "="">
                                                                                                              </div>
                                                                                                           </div>
                                                                                                           <div class="col-xl-6 d-flex align-items-center">
                                                                                                              <div class="card-body">
                                                                                                                 <h4 class="card-title">Devalia Safari Park</h4>
                                                                                                                 <p class="mb-2">
                                                                                                                    Devalia Safari Park, also known as the Gir Interpretation Zone, is a fenced reserve that offers a zoo-like environment where visitors can observe a wide range of wildlife and plant species. It provides a safe and accessible way to enjoy the wilderness, with various safari options that bring you up close to nature in a thrilling yet controlled setting.
                                                                                                                 </p>
                                                                                                                 <a href="{{ route('girDevaliya') }}" class="readmore stretched-link"><span class="mt-2">Read More </span><i class="bi bi-arrow-right"></i></a>
                                                                                                              </div>
                                                                                                           </div>
                                                                                                        </div>
                                                                                                     </div>
                                                                                                  </div>
                                                                                                  <!-- End Card Item -->
                                                                                               </div>
                                                                                               </div>
                                                                                               </div>
                                                                                            </section>
                                                                                            <!-- End Constructions Section -->
                                                                                            <!-- ======= Alt Services Section ======= -->
                                                                                            <section id="alt-services" class="alt-services">
                                                                                               <div class="container" data-aos="fade-up">
                                                                                                  <div class="row justify-content-around gy-4">
                                                                                                     <h3>What Awaits You at Gir National Park</h3>
                                                                                                     <span>The influence of Gir's rich heritage goes far beyond just safari bookings. To enhance the visitor experience and raise awareness about this protected forest, authorities have introduced a variety of engaging activities designed to both entertain and educate tourists.
                                                                                                     </span>
                                                                                                     <div class="col-lg-4 img-bg" style="background-image: url({{ asset('frontend/img/nearby/gir_junglesafari.png') }})" aria-label="Gir Jungle Activity"></div>
                                                                                                     <div class="col-lg-8 d-flex flex-column justify-content-center">
                                                                                                        <div class="icon-box d-flex position-relative">
                                                                                                           <i class="bi bi-easel flex-shrink-0"></i>
                                                                                                           <div>
                                                                                                              <h4>
                                                                                                                 <a href="#" class="stretched-link">Know Before You Go: Gir Insight Point</a>
                                                                                                              </h4>
                                                                                                              <p>
                                                                                                                 The center was created to educate visitors about Gir National Park and foster a deeper appreciation for the wildlife it protects. Designed like museums, these centers showcase life-sized models of various species along with informative displays about their behavior, traits, and natural habits. You can find these orientation centers near the guest houses, Devalia Safari Park, and the main Sasan Gir Safari area.
                                                                                                              </p>
                                                                                                           </div>
                                                                                                        </div>
                                                                                                        <!-- End Icon Box -->
                                                                                                        <div class="icon-box d-flex position-relative">
                                                                                                           <i class="bi bi-patch-check flex-shrink-0"></i>
                                                                                                           <div>
                                                                                                              <h4><a href="#" class="stretched-link">Take a Piece of Gir Home</a></h4>
                                                                                                              <p>
                                                                                                                 While booking a Gir Safari gives you a glimpse into the region’s rich wildlife, a visit to the local souvenir shops offers a deeper connection to the cultural heritage of the native communities. These shops showcase the incredible craftsmanship of Indian artisans, with handmade items that reflect local traditions. What makes it even more meaningful is that the proceeds support the livelihoods of Gir Forest workers and contribute to various welfare initiatives.
                                                                                                              </p>
                                                                                                           </div>
                                                                                                        </div>
                                                                                                        <!-- End Icon Box -->
                                                                                                        <div class="icon-box d-flex position-relative">
                                                                                                           <i class="bi bi-brightness-high flex-shrink-0"></i>
                                                                                                           <div>
                                                                                                              <h4>
                                                                                                                 <a href="#" class="stretched-link">Gir Arboretum – A Haven for Nature Lovers and Birdwatchers</a>
                                                                                                              </h4>
                                                                                                              <p>
                                                                                                                 By now, you’ve likely gained a good understanding of the incredible biodiversity found in Gir National Park. The Gir Arboretum takes this richness even further. The on-site nursery showcases a variety of rare medicinal plants native to the region, while the gallery provides informative displays with images and scientific details about these species. And if your Gir Safari didn’t offer many sightings, don’t worry—you can still spot birds and deer in this peaceful, nature-filled space.
                                                                                                              </p>
                                                                                                           </div>
                                                                                                        </div>
                                                                                                        <!-- End Icon Box -->
                                                                                                        <div class="icon-box d-flex position-relative">
                                                                                                           <i class="bi bi-brightness-high flex-shrink-0"></i>
                                                                                                           <div>
                                                                                                              <h4><a href="#" class="stretched-link">Voices of the Wild – Open Theater</a></h4>
                                                                                                              <p>
                                                                                                                 If you enjoy movies and documentaries, don’t miss the chance to visit the amphitheater—whether you’re in Devalia, Sing Sasan, or wrapping up your Gir Safari. These open-air venues offer free daily film screenings that beautifully showcase the rich wildlife and natural charm of Gir Forest.
                                                                                                                 <br>
                                                                                                                 <b>And if the roar of majestic big cats excites you, now’s the perfect time to plan your Gir Safari adventure!</b>
                                                                                                              </p>
                                                                                                           </div>
                                                                                                        </div>
                                                                                                        <!-- End Icon Box -->
                                                                                                     </div>
                                                                                                  </div>
                                                                                               </div>
                                                                                            </section>
                                                                                            <!-- End Alt Services Section -->

                                                                                            <section id="history" class="history">
                                                                                               <div class="container">
                                                                                                  <div class="section-header">
                                                                                                     <h2>From Royal Hunting Grounds to Protected Sanctuary: The Story of Gir</h2>
                                                                                                  </div>
                                                                                                  <div class="row">
                                                                                                     <div class="col-md-7">
                                                                                                        <p>
                                                                                                           During the British era, Gir was often used as a royal hunting ground, where local princes would invite British officials and guests for sport. Unfortunately, this led to a sharp decline in the population of Asiatic lions, leaving only a handful of them in the region.
                                                                                                        </p>
                                                                                                        <p>Alarmed by this, the Nawab of Junagadh—who owned the land—took action to protect the remaining lions. His efforts led to the establishment of Gir National Park, a sanctuary created to conserve these majestic and endangered animals.
                                                                                                        </p>
                                                                                                        <p>
                                                                                                           Today, Gir is not just a refuge for lions but also a thriving habitat for countless other species of plants, birds, and animals. Its ecological significance is immense, and many organizations—ranging from wildlife activists and NGOs to government forest departments—are working tirelessly to preserve and protect its rich biodiversity.
                                                                                                        </p>
                                                                                                     </div>
                                                                                                     <div class="col-md-5">
                                                                                                        <div class="img_container">
                                                                                                           <img src="{{ asset('frontend/img/homepage/gir_jungle_safari1.webp') }}" alt="History of Gir">
                                                                                                        </div>
                                                                                                     </div>
                                                                                                  </div>
                                                                                               </div>
                                                                                            </section>


                                                                                    <!-- ======= Features Section ======= -->
                                                                                    <section id="features" class="features section-bg">
                                                                                        <div class="container">
                                                                                            <h3>Your Journey to Gir National Park Starts Here</h3>
                                                                                            <p>
                                                                                                Gir National Park is a popular destination for nature and wildlife enthusiasts. Much like its diverse wildlife, there are several ways to reach this incredible sanctuary. Whether you prefer traveling by road, train, or air, the options are flexible depending on your starting point. Let’s
                                                                                                explore the best ways to get to Gir National Park.
                                                                                            </p>
                                                                                            <ul class="nav nav-tabs row g-1 d-flex" id="myTab" role="tablist">
                                                                                                <li class="nav-item col-3" role="presentation">
                                                                                                    <a id="train" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="true">
                                                                                                        <h4>Reaching Gir National Park via Rail</h4>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <!-- End tab nav item -->
                                                                                                <li class="nav-item col-3" role="presentation">
                                                                                                    <a class="nav-link" id="air" data-bs-toggle="tab" data-bs-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false" tabindex="-1">
                                                                                                        <h4>Reaching Gir National Park by Air</h4>
                                                                                                    </a>
                                                                                                    <!-- End tab nav item -->
                                                                                                </li>
                                                                                                <li class="nav-item col-3" role="presentation">
                                                                                                    <a class="nav-link" id="road" data-bs-toggle="tab" data-bs-target="#tab-3" type="button" role="tab" aria-controls="tab-3" aria-selected="false" tabindex="-1">
                                                                                                        <h4>raveling to Gir National Park: By Road</h4>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <!-- End tab nav item -->
                                                                                            </ul>
                                                                                            <div class="tab-content" id="myTabContent">
                                                                                                <div class="tab-pane active" id="tab-1" role="tabpanel" aria-labelledby="train" tabindex="0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                                                                                            <p>Traveling to Gir National Park is quite convenient, thanks to several nearby railway stations. Once you arrive at any of these stations, you can easily find a cab, taxi, or local transport to take you directly to the park.
                                                                                                            </p>
                                                                                                            <ul>
                                                                                                                <li><i class="bi bi-check2-all"></i> Veraval Railway Station
                                                                                                                </li>
                                                                                                                <li><i class="bi bi-check2-all"></i> Junagadh Junction
                                                                                                                </li>
                                                                                                                <li><i class="bi bi-check2-all"></i> Rajkot Railway Station
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- End tab content item -->
                                                                                                <div class="tab-pane" id="tab-2" role="tabpanel" aria-labelledby="air" tabindex="0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                                                                                            <!-- <h3>Neque exercitationem debitis</h3> -->
                                                                                                            <p class="fst-italic">
                                                                                                                You can fly into the nearest airport to Gir National Park and then take a cab or taxi for the 1 to 2-hour journey to the park. The closest airport options include:
                                                                                                            </p>
                                                                                                            <ul>
                                                                                                                <li><i class="bi bi-check2-all"></i> Rajkot Airport</li>
                                                                                                                <li><i class="bi bi-check2-all"></i>Keshod Airport</li>
                                                                                                                <li><i class="bi bi-check2-all"></i> Porbandar Airport</li>
                                                                                                                <li><i class="bi bi-check2-all"></i> Diu Airport</li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- End tab content item -->
                                                                                                <div class="tab-pane" id="tab-3" role="tabpanel" aria-labelledby="road" tabindex="0">
                                                                                                    <div class="row">
                                                                                                        <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                                                                                            <p>
                                                                                                                If you love the journey as much as the destination, traveling to Gir National Park by road is an excellent option. The park is well-connected to major cities across Gujarat with well-maintained roads. You can choose from private or government buses, or even drive there
                                                                                                                yourself for a flexible and scenic trip.
                                                                                                            </p>
                                                                                                            <p style="font-weight: 600">Distance From Major Cities</p>
                                                                                                            <ul>
                                                                                                                <li>
                                                                                                                    <i class="bi bi-check2-all"></i> Distance from Ahmedabad:
                                                                                                                    329 km
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <i class="bi bi-check2-all"></i> Distance from Surat: 361 km
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <i class="bi bi-check2-all"></i> Distance from Rajkot: 154 km
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <i class="bi bi-check2-all"></i> Distance from Somnath: 40
                                                                                                                    km
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <i class="bi bi-check2-all"></i> Distance from Diu: 98 km
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <i class="bi bi-check2-all"></i> Distance from Statue of
                                                                                                                    Unity: 525 km
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- End tab content item -->
                                                                                            </div>
                                                                                        </div>
                                                                                    </section>
                                                                                    <!-- End Hero Section -->
@endsection
@section('script')
                    @vite(['resources/js/pages/forms-advanced.js'])
@endsection

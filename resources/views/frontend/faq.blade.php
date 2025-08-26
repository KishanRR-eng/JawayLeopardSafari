@extends('frontend.layout.main')
@section('title', 'FAQ')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs_faq d-flex align-items-center mt-3">
   <div class="container position-relative d-flex flex-column align-items-center"></div>
</div>
<div id="faq" class="faq">
   <div class="container">
      <h1 class="text-center">Frequently Asked Questions</h1>
      <div class="accordion">
         <div class="accordion-item">
            <input type="checkbox" id="accordion1">
            <label for="accordion1" class="accordion-item-title"><span class="icon"></span>Curious about how to reserve a safari at Gir National Park? Here’s what to do.
            </label>
            <div class="accordion-item-desc">
               To book your safari, simply visit the official Gir Safari Online Booking Portal at https://www.girsafaribooking.in. Just complete the payment and submit valid ID details to confirm your reservation.
            </div>
         </div>
         <div class="accordion-item">
            <input type="checkbox" id="accordion2">
            <label for="accordion2" class="accordion-item-title"><span class="icon"></span>
            Are safaris in Gir National Park considered safe for visitors?
            </label>
            <div class="accordion-item-desc">
              Yes, going on a Gir Safari is safe. Each safari is accompanied by a trained guide who is well-versed in the jungle’s terrain and wildlife behavior. The safaris are organized under government supervision, and the forest is monitored with wired cameras to ensure visitor safety at all times.
            </div>
         </div>
         <div class="accordion-item">
            <input type="checkbox" id="accordion3">
            <label for="accordion3" class="accordion-item-title"><span class="icon"></span>What is the ideal time to explore Gir Forest?
            </label>
            <div class="accordion-item-desc">
               The ideal period to explore this region is between December and March.
            </div>
         </div>
         <div class="accordion-item">
            <input type="checkbox" id="accordion4">
            <label for="accordion4" class="accordion-item-title"><span class="icon"></span>How does Gir Jungle Safari differ from Devalia Safari Park?
            </label>
            <div class="accordion-item-desc">
               Gir Jungle Safari takes place in the core area of the park, it
               gives a natural vibe of the jungle. Whereas in Devalia Safari
               you will get a chance to explore a fenced area of the park that
               is more like a Zoo.
            </div>
         </div>
         <div class="accordion-item">
            <input type="checkbox" id="accordion5">
            <label for="accordion5" class="accordion-item-title"><span class="icon"></span>What are the ways to travel from Somnath to Gir National Park?
            </label>
            <div class="accordion-item-desc">
               The distance between Somnath and Gir is around 57 km. You can travel this route using government or private buses, hire a cab, or use any local mode of transport.
            </div>
         </div>
         <div class="accordion-item">
            <input type="checkbox" id="accordion6">
            <label for="accordion6" class="accordion-item-title"><span class="icon"></span>Is it permitted to use a private vehicle for touring inside Gir National Park?
            </label>
            <div class="accordion-item-desc">
               Yes, private vehicles are allowed inside the forest, but they must be petrol-driven. Additionally, you are required to be accompanied by a government-authorized guide and driver.
            </div>
         </div>
         <div class="accordion-item">
            <input type="checkbox" id="accordion7">
            <label for="accordion7" class="accordion-item-title"><span class="icon"></span>What are the train travel options to reach Gir National Park?
            </label>
            <div class="accordion-item-desc">
               To reach Gir National Park smoothly, book your train ticket to either Veraval or Junagadh Railway Station, as they are the closest. From there, you can hire a taxi to get to the park.
            </div>
         </div>
         <div class="accordion-item">
            <input type="checkbox" id="accordion8">
            <label for="accordion8" class="accordion-item-title"><span class="icon"></span>How far is Gir National Park from Ahmedabad?
            </label>
            <div class="accordion-item-desc">
               The journey from Ahmedabad to Gir National Park spans approximately 328 kilometers.
            </div>
         </div>
         <div class="accordion-item">
            <input type="checkbox" id="accordion9">
            <label for="accordion9" class="accordion-item-title"><span class="icon"></span>Gir National Park: What Makes It So Special?
            </label>
            <div class="accordion-item-desc">
               Gir National Park is renowned as the only natural habitat of the Asiatic lions. It offers visitors a rare opportunity to observe these majestic creatures in the wild. The Forest Department organizes guided safaris, allowing tourists to explore the park and witness not just lions, but a variety of other wildlife species in their natural environment.
            </div>
         </div>
         <div class="accordion-item">
            <input type="checkbox" id="accordion10">
            <label for="accordion10" class="accordion-item-title"><span class="icon"></span>What is the Gir Safari experience like?
            </label>
            <div class="accordion-item-desc">
               Gir Jungle Safari is an open gypsy ride that takes visitors deep into the forest, offering a chance to witness a rich variety of wildlife and plant species in their natural surroundings. These safaris are specially organized for tourists to experience the true essence of the jungle.
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

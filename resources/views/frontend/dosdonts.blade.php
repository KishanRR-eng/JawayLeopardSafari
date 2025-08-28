@extends('frontend.layout.main')
@section('title', 'Dos & Donts - Jaway Leapord Safari')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs_doNot d-flex align-items-center">
   <div class="container position-relative d-flex flex-column align-items-center"></div>
</div>
<!-- End Breadcrumbs -->
<section class="safari-tips py-5">
  <div class="container">
    <div class="section-title text-center mb-4">
      <h2 class="fw-bold">Safari Do's & Don'ts</h2>
      <p class="text-muted">Follow these essential guidelines for a safe and respectful Jawai Safari experience.</p>
    </div>

    <div class="row g-4">
      <!-- ✅ Do's -->
      <div class="col-md-6">
        <div class="card h-100 shadow-sm border-0 rounded-3 p-4">
          <h4 class="fw-bold text-success mb-3">✔ Do's</h4>
          <ul class="list-unstyled mb-0">
            <li class="mb-2">✅ Follow all instructions given by your safari guide.</li>
            <li class="mb-2">✅ Maintain a safe distance from animals.</li>
            <li class="mb-2">✅ Keep belongings secure inside the jeep.</li>
            <li class="mb-2">✅ Carry cash as digital payment options might be limited.</li>
            <li class="mb-2">✅ Respect local culture and traditions during village visits.</li>
            <li class="mb-2">✅ Carry a valid photo ID for park entry.</li>
          </ul>
        </div>
      </div>

      <!-- ❌ Don'ts -->
      <div class="col-md-6">
        <div class="card h-100 shadow-sm border-0 rounded-3 p-4">
          <h4 class="fw-bold text-danger mb-3">❌ Don'ts</h4>
          <ul class="list-unstyled mb-0">
            <li class="mb-2">❌ Avoid loud noises or sudden movements.</li>
            <li class="mb-2">❌ Do not feed or touch wildlife.</li>
            <li class="mb-2">❌ Avoid dangling cameras or phones outside the jeep.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

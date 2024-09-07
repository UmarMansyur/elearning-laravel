@extends('layouts.admin')
@section('content2')
<div class="row gy-4">
  <div class="col-lg-9">
    <div class="grettings-box position-relative rounded-16 bg-main-600 overflow-hidden gap-16 flex-wrap z-1">
      <img src="/assets/images/bg/grettings-pattern.png" alt=""
        class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6">
      <div class="row gy-4">
        <div class="col-sm-7">
          <div class="grettings-box__content py-xl-4">
            <h2 class="text-white mb-0">Hello, {{$data->name}}! </h2>
            <p class="text-15 fw-light mt-4 text-white">
              Pastikan hari ini anda telah membagikan materi terbaru serta mengoreksi tugas yang telah dikerjakan oleh
              siswa.
            </p>
            <p class="text-lg fw-light mt-24 text-white">
              Jangan lupa untuk selalu memeriksa jadwal mengajar anda hari ini.
            </p>
          </div>
        </div>
        <div class="col-sm-5 d-sm-block d-none">
          <div class="text-center h-100 d-flex justify-content-center align-items-end ">
            <img src="/assets/images/thumbs/gretting-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-30">
      <div class="col-xxl-6 mb-24 col-sm-6">
        <div class="card">
          <div class="card-body">
            <h4 class="mb-2">15</h4>
            <span class="text-gray-600">
              Siswa
            </span>
            <div class="flex-between gap-8 mt-16">
              <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-main-600 text-white text-2xl"><i
                  class="ph-fill ph-users"></i></span>

            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-6 mb-24 col-sm-6">
        <div class="card">
          <div class="card-body">
            <h4 class="mb-2">15</h4>
            <span class="text-gray-600">
              Tugas diberikan
            </span>
            <div class="flex-between gap-8 mt-16">
              <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-main-600 text-white text-2xl"><i
                  class="ph-fill ph-clipboard-text"></i></span>

            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-6 mb-24 col-sm-6">
        <div class="card">
          <div class="card-body">
            <h4 class="mb-2">15</h4>
            <span class="text-gray-600">
              Mata Pelajaran diampu
            </span>
            <div class="flex-between gap-8 mt-16">
              <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-main-600 text-white text-2xl">
                <i class="ph-fill ph-books"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-6 mb-24 col-sm-6">
        <div class="card">
          <div class="card-body">
            <h4 class="mb-2">15%</h4>
            <span class="text-gray-600">
              Siswa menyelesaikan tugas
            </span>
            <div class="flex-between gap-8 mt-16">
              <span class="flex-shrink-0 w-48 h-48 flex-center rounded-circle bg-main-600 text-white text-2xl">
                <i class="ph-fill ph-chart-pie"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="card">
      <div class="card-body">
        <div class="calendar">
          <div class="calendar__header">
            <button type="button" class="calendar__arrow left"><i class="ph ph-caret-left"></i></button>
            <p class="display h6 mb-0">""</p>
            <button type="button" class="calendar__arrow right"><i class="ph ph-caret-right"></i></button>
          </div>

          <div class="calendar__week week">
            <div class="calendar__week-text">Su</div>
            <div class="calendar__week-text">Mo</div>
            <div class="calendar__week-text">Tu</div>
            <div class="calendar__week-text">We</div>
            <div class="calendar__week-text">Th</div>
            <div class="calendar__week-text">Fr</div>
            <div class="calendar__week-text">Sa</div>
          </div>
          <div class="days"></div>
        </div>
      </div>
    </div>
    <div class="card mt-24">
      <div class="card-body">
        <div class="mb-20 flex-between flex-wrap gap-8">
          <h4 class="mb-0">Penugasan</h4>
          <a href="assignment.html" class="text-13 fw-medium text-main-600 hover-text-decoration-underline">See All</a>
        </div>
        <div
          class="p-xl-4 py-16 px-12 flex-between gap-8 rounded-8 border border-gray-100 hover-border-gray-200 transition-1 mb-16">
          <div class="flex-align flex-wrap gap-8">
            <span class="text-main-600 bg-main-50 w-44 h-44 rounded-circle flex-center text-2xl flex-shrink-0"><i
                class="ph-fill ph-graduation-cap"></i></span>
            <div>
              <h6 class="mb-0">Do The Research</h6>
              <span class="text-13 text-gray-400">Due in 9 days</span>
            </div>
          </div>
          <a href="assignment.html" class="text-gray-900 hover-text-main-600"><i class="ph ph-caret-right"></i></a>
        </div>
        <div
          class="p-xl-4 py-16 px-12 flex-between gap-8 rounded-8 border border-gray-100 hover-border-gray-200 transition-1 mb-16">
          <div class="flex-align flex-wrap gap-8">
            <span class="text-main-600 bg-main-50 w-44 h-44 rounded-circle flex-center text-2xl flex-shrink-0"><i
                class="ph ph-code"></i></span>
            <div>
              <h6 class="mb-0">PHP Dvelopment</h6>
              <span class="text-13 text-gray-400">Due in 2 days</span>
            </div>
          </div>
          <a href="assignment.html" class="text-gray-900 hover-text-main-600"><i class="ph ph-caret-right"></i></a>
        </div>
        <div
          class="p-xl-4 py-16 px-12 flex-between gap-8 rounded-8 border border-gray-100 hover-border-gray-200 transition-1">
          <div class="flex-align flex-wrap gap-8">
            <span class="text-main-600 bg-main-50 w-44 h-44 rounded-circle flex-center text-2xl flex-shrink-0"><i
                class="ph ph-bezier-curve"></i></span>
            <div>
              <h6 class="mb-0">Graphic Design</h6>
              <span class="text-13 text-gray-400">Due in 5 days</span>
            </div>
          </div>
          <a href="assignment.html" class="text-gray-900 hover-text-main-600"><i class="ph ph-caret-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
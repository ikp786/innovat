@extends('front.layouts.app')
@push('content')
<section id="home" class="fullscreen bg-lightest">
    <div class="display-table text-center">
      <div class="display-table-cell">
        <div class="container pt-200 pb-150">
          <div class="row">
            <div class="col-md-7">
              <h1 class="font-200 line-height-1em mt-0 mb-0 text-theme-colored">404!</h1>
              <h2 class="mt-0">Oops! Page Not Found</h2>
              <p>The page you were looking for could not be found.</p>
              <a class="btn btn-border btn-gray btn-transparent btn-circled smooth-scroll-to-target" href="{{ route('home') }}">Return Home
              </a> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endpush
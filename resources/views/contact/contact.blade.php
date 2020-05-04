
@extends('layouts.front')



@section('content')
{{ $theSrc = asset('uploads/' . $page->featured_image) }}
    {{-- <section id="theContact" class="d-flex align-items-center" ></section><!-- End Hero --> --}}
    <section class="d-flex align-items-center"
    style=" width: 100%; height: 100vh; background: url('{{$theSrc}}') top center; background-size: cover; "
    ></section>

  <!-- ======= About Section ======= -->
    <section id="about" class="">
        <div class="container">


        {!! $page->content !!}

        </div>
    </section><!-- End About Section -->


    <section id="contact" class="contact">
        <div class="container">

        <form action="{{ url('contact') }}" method="post" role="form" class="php-email-form d-flex justify-content-center flex-column text-center">
            {{ csrf_field() }}
            <div class="form-group">
                <label  for="name">Name*</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
            </div>
            <div class="form-group">
                <label for="name">EMAIL ADDRESS*</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
            </div>
            <div class="form-group">
            <label for="message">HOW CAN WE HELP YOU? *</label>
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
            </div>
            <div class="mb-3">
            <div class="loading">Loading</div>
            {{-- <div class="error-message"></div> --}}
            {{-- <div class="sent-message">Your message has been sent. Thank you!</div> --}}
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="text-center mr-1 "><button type="reset" class="btn btn-primary">Reset</button></div>
                <div class="text-center ml-1"><button type="submit" class="btn btn-primary">Submit</button></div>
            </div>

        </form>

        </div>
    </section><!-- End Contact Section -->
@endsection





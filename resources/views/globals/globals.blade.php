@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <a href="{{ url('home') }}" class="btn btn-primary">Back Home</a>
                    </div>


                  
                    <form action="{{route('globals.update',$global->id)}}" method="POST">
                            @csrf   
                            {!! method_field('PUT') !!}      
                                      

                        <div class="form-group row">
                            <label for="fb_ads_pixel" class="col-md-4 col-form-label text-md-right">{{ __('Facebook Ads Pixel') }}</label>

                            <div class="col-md-6">
                                <input id="fb_ads_pixel" type="text" class="form-control @error('fb_ads_pixel') is-invalid @enderror" name="fb_ads_pixel" value="{{ $global->fb_ads_pixel }}">

                                @error('fb_ads_pixel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="google_analytics_tag" class="col-md-4 col-form-label text-md-right">{{ __('Google Analytics Tag') }}</label>

                            <div class="col-md-6">
                                <input id="google_analytics_tag" type="text" class="form-control @error('google_analytics_tag') is-invalid @enderror" name="google_analytics_tag" value="{{ $global->google_analytics_tag }}">

                                @error('google_analytics_tag')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact_email" class="col-md-4 col-form-label text-md-right">{{ __('Contact Email') }}</label>

                            <div class="col-md-6">
                                <input id="contact_email" type="text" class="form-control @error('contact_email') is-invalid @enderror" name="contact_email" value="{{ $global->contact_email }}">

                                @error('contact_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Global Settings') }}
                                </button>
                            </div>
                        </div>
                    </form>


                </div>

            </div>
        </div>
    </div>
</div>
@endsection

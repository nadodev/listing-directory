@extends('admin.layouts.master')
@push('page-style')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <form method="post" action="{{ route('admin.profile.update', ) }}" class="needs-validation" novalidate="" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-5 col-12">
                                        <h2>Avatar</h2>
                                        <div>
                                            <div id="image-preview" class="image-preview">
                                                <label for="image-upload" id="image-label">Choose File</label>
                                                <input type="file" name="avatar" id="image-upload" />
                                                <input type="hidden" name="old_avatar" value="{{ $user->avatar }}">
                                            </div>
                                        </div>

                                        @if($errors->has('avatar'))
                                        <div class="text-danger">
                                            {{ $errors->first('avatar') }}
                                        </div>
                                    @endif
                                    </div>
                                    <div class="form-group col-md-5 col-12">
                                        <h2>Banner</h2>
                                        <div>
                                            <div id="banner-preview" class="banner-preview">
                                                <label for="banner-upload" id="banner-label">Choose File</label>
                                                <input type="file" name="banner" id="banner-upload" />
                                                <input type="hidden" name="old_banner" value="{{  $user->banner }}">
                                            </div>
                                        </div>
                                        @if($errors->has('banner'))
                                            <div class="text-danger">
                                                {{ $errors->first('banner') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                        @if($errors->has('name'))
                                            <div class="text-danger">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="{{ $user->email }}" name="email">
                                       @if($errors->has('email'))
                                            <div class="text-danger">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Phone</label>
                                        <input type="text" class="form-control" value="{{ $user->phone }}" name="phone">
                                        @if($errors->has('phone'))
                                            <div class="text-danger">
                                                {{ $errors->first('phone') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Address</label>
                                        <input type="text" class="form-control" value="{{ $user->address }}" name="address">
                                        @if($errors->has('address'))
                                            <div class="text-danger">
                                                {{ $errors->first('address') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>About</label>
                                        <textarea name="about" class="form-control summernote-simple">{{ $user->about }}</textarea>
                                        @if($errors->has('about'))
                                            <div class="text-danger">
                                                {{ $errors->first('about') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12 col-12">
                                        <label>Website</label>
                                        <input type="text" class="form-control" value="{{ $user->website }}" name="website">
                                        @if($errors->has('website'))
                                            <div class="text-danger">
                                                {{ $errors->first('website') }}
                                            </div>
                                        @endif

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Twitter</label>
                                        <input type="text" class="form-control" value="{{ $user->x_link }}" name="x_link">
                                        @if($errors->has('x_link'))
                                            <div class="text-danger">
                                                {{ $errors->first('x_link') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>LinkDin</label>
                                        <input type="text" class="form-control" value="{{ $user->in_link }}" name="in_link">
                                        @if($errors->has('in_link'))
                                            <div class="text-danger">
                                                {{ $errors->first('in_link') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control" value="{{ $user->fb_link }}" name="fb_link">
                                        @if($errors->has('fb_link'))
                                            <span class="text-danger">
                                                {{ $errors->first('fb_link') }}
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Instagram</label>
                                        <input type="text" class="form-control" value="{{ $user->intra_link }}" name="intra_link">
                                        @if($errors->has('intra_link'))
                                            <div class="text-danger">
                                                {{ $errors->first('intra_link') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end pb-4">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                    </div>
                    </form>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <form method="post" action="{{ route('admin.profile.password', ) }}" class="needs-validation" novalidate="">
                            @csrf
                            @method('put')
                            <div class="card-header">
                                <h4>Edit Password</h4>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" value="">
                                        @if($errors->has('password'))
                                            <div class="text-danger">
                                                {{ $errors->first('password') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" value="" name="password_confirmation">
                                       @if($errors->has('password_confirmation'))
                                            <div class="text-danger">
                                                {{ $errors->first('password_confirmation') }}
                                            </div>
                                        @endif

                                    </div>
                                </div>

                            </div>
                            <div class="col-12 d-flex justify-content-end pb-4">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@push('page-scripts')
    <script src="{{ asset('admin/assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
    <script>

        $(document).ready(function() {
            $('.image-preview').css({
                'background-image': 'url({{ asset($user->avatar) }})',
                'background-size': 'cover',
                'background-position': 'center',
                'background-repeat': 'no-repeat'
            });

            $('.banner-preview').css({
                'background-image': 'url({{ asset($user->banner) }})',
                'background-size': 'cover',
                'background-position': 'center',
                'background-repeat': 'no-repeat'
            });
        });

        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });

        $.uploadPreview({
            input_field: "#banner-upload", // Default: .banner-upload
            preview_box: "#banner-preview", // Default: .banner-preview
            label_field: "#banner-label", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });
    </script>
@endpush

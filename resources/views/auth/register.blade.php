@extends('layouts.app')

@section('content')

    <div class="account-popup">
        <div class="row">


            <!-- Registration sec -->
            <div class="col-md-12">
                <div class="registration-sec">

                    <h3>REGISTRATION Form</h3>

                    <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">

                        @csrf


                        <!-- Personal Information Row -->
                        <div class="control-group" style="margin-bottom: 10px;">
                            <div class="group-title">Peronal Information</div>

                            <div class="field row">

                                <!-- Name + Phone -->
                                <div class="col-md-6">

                                    <div class="form-group">

                                        <input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" />

                                        @error('name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="form-group">

                                        <input type="text" name="phone" placeholder="Phone" value="{{ old('phone') }}" />

                                        @error('phone')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div>

                                </div>

                                <!-- Username + Email -->
                                <div class="col-md-6" style="margin-bottom: 20px;">

                                    <div class="form-group">

                                        <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" />

                                        @error('username')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="form-group">

                                        <input type="text" name="email" placeholder="Your Email" value="{{ old('email') }}" />

                                        @error('email')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div>

                                </div>

                                <!-- About me -->
                                <div class="col-md-12" style="margin-bottom: 50px;">

                                    <div class="form-group">

                                        <textarea id="desc" class="form-control" placeholder="About Me" name="about" rows="8"></textarea>

                                        @error('about')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div>
                                </div>

                            </div>

                        </div>


                        <!-- Social Media -->
                        <div class="control-group" style="margin-bottom: 10px;">

                            <div class="group-title">Social Network</div>

                            <!-- Social Media Rows -->
                            <div class="field row">

                                <!-- Facebook + Twitter + GooglePlus -->
                                <div class="col-md-6" style="margin-bottom: 50px;">

                                    <div class="form-group s-profile-facebook">
                                        <label for="facebook">Facebook Url</label>
                                        <input id="facebook" class="form-control" value="{{ old('facebook') }}" name="facebook" type="text">

                                        @error('facebook')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                    <div class="form-group s-profile-twitter">
                                        <label for="twitter">Twitter Url</label>
                                        <input id="twitter" class="form-control" value="{{ old('twitter') }}" name="twitter" type="text">

                                        @error('twitter')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                    <div class="form-group s-profile-google_plus">
                                        <label for="google_plus">Google Plus Url</label>
                                        <input id="google_plus" class="form-control" value="{{ old('google') }}" name="google" type="text">

                                        @error('google')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                </div>

                                <!-- LinkedIn + Pinterest -->
                                <div class="col-md-6">

                                    <div class="form-group s-profile-linkedin">
                                        <label for="linkedin">LinkedIn Url</label>
                                        <input id="linkedin" class="form-control" value="{{ old('linkedin') }}" name="linkedin" type="text">

                                        @error('linkedin')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                    <div class="form-group s-profile-pinterest">
                                        <label for="pinterest">Pinterest Url</label>
                                        <input id="pinterest" class="form-control" value="{{ old('pinterest') }}" name="pinterest" type="text">

                                        @error('pinterest')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>

                                </div>

                                <div class="col-md-12">

                                </div>

                            </div>

                        </div>


                        <!-- Image -->
                        <div class="control-group">
                            <div class="group-title">Property Images</div>
                            <div class="group-container row">
                                <div class="col-md-12">
                                    <div id="upload-container">
                                        <div id="aaiu-upload-container">
                                            <div class="moxie-shim moxie-shim-html5">

                                                <label for="input-upload" class="btn flat-btn btn-lg">Select Images</label>

                                                <input id="input-upload" type="file" multiple="" name="avatar" accept="image/jpeg,image/gif,image/png">

                                                @error('avatar')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                            </div>
                                            <p>At least 1 image is required for a valid submission. The featured image will be used to dispaly on property listing page.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                            <!-- Password + Confirmation -->
                        <div class="control-group" style="margin-bottom: 10px;">
                            <div class="group-title">Password</div>

                            <!-- Password -->
                            <div class="field" style="margin-bottom: 10px;">
                                <input type="password" name="password" placeholder="Type Password" />

                                @error('password')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                            <!-- Confirm Password -->
                            <div class="field" style="margin-bottom: 10px;">
                                <input type="password" name="password_confirmation" placeholder="Retype Password" />

                                @error('password_confirmation')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>

                        </div>


                        <!-- "By Clicking" Checkbox -->
                        <label>
                            <input type="checkbox" /> By Clicking on this You are agree with our <a href="#" title="">Terms & Condition</a>
                        </label>


                        <!-- "Register Now" Button -->
                        <input type="submit" value="Register Now" class="flat-btn" />


                    </form>

                </div>

            </div>
        </div>
    </div>

@endsection

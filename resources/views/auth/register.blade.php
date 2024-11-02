@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center" style="padding: 80px 0 120px 0">
        <div class="col-md-6 text-center">
            <h1 style="margin-top:15vh">BECOME A MEMBER</h1>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <hr>
                        <p>Personal Information</p>
                        <hr>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth">

                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="blood_group" class="col-md-4 col-form-label text-md-end">{{ __('Blood Group') }}</label>

                            <div class="col-md-6">
                                <select id="blood_group" type="blood_group" class="form-control @error('blood_group') is-invalid @enderror" name="blood_group" value="{{ old('blood_group') }}" required autocomplete="blood_group">
                                    <option value="">SELECT BLOOG GROUP</option>
                                    <option value="A Positive">A Positive</option>
                                    <option value="A Positive">A Negative</option>
                                    <option value="A Positive">B Positive</option>
                                    <option value="A Positive">B Negative</option>
                                    <option value="A Positive">AB Positive</option>
                                    <option value="A Positive">AB Negative</option>
                                    <option value="A Positive">O Positive</option>
                                    <option value="A Positive">O Negative</option>
                                </select>
                                @error('blood_group')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="facebook" class="col-md-4 col-form-label text-md-end">{{ __('Facebook') }}</label>

                            <div class="col-md-6">
                                <input id="facebook" type="facebook" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}" required autocomplete="facebook">

                                @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr>
                        <p>Academic Information</p>
                        <hr>

                        <div class="row mb-3">
                            <label for="batch" class="col-md-4 col-form-label text-md-end">{{ __('Batch') }}</label>

                            <div class="col-md-6">
                                <select id="batch" type="batch" class="form-control @error('batch') is-invalid @enderror" name="batch" value="{{ old('batch') }}" required autocomplete="batch">
                                    @for($x=1970;$x<=2025;$x++){
                                        <option value="{{ $x }}">{{ $x }}</option>
                                    }
                                    @endfor
                                </select>
                                @error('batch')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="admission_year" class="col-md-4 col-form-label text-md-end">{{ __('Admission Year') }}</label>

                            <div class="col-md-6">
                                <input id="admission_year" type="admission_year" class="form-control @error('admission_year') is-invalid @enderror" name="admission_year" value="{{ old('admission_year') }}" required autocomplete="admission_year">

                                @error('admission_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="section" class="col-md-4 col-form-label text-md-end">{{ __('Section') }}</label>

                            <div class="col-md-6">
                                <input id="section" type="section" class="form-control @error('section') is-invalid @enderror" name="section" value="{{ old('section') }}" required autocomplete="section">

                                @error('section')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="ssc_result" class="col-md-4 col-form-label text-md-end">{{ __('SSC Result') }}</label>

                            <div class="col-md-6">
                                <input id="ssc_result" type="ssc_result" class="form-control @error('ssc_result') is-invalid @enderror" name="ssc_result" value="{{ old('ssc_result') }}" required autocomplete="ssc_result">

                                @error('ssc_result')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr>
                        <p>Career Information</p>
                        <hr>

                        <div class="row mb-3">
                            <label for="co_curricular_activities" class="col-md-4 col-form-label text-md-end">{{ __('Co Curricular Activities and Achievements (if any) ') }}</label>

                            <div class="col-md-6">
                                <input id="co_curricular_activities" type="co_curricular_activities" class="form-control @error('co_curricular_activities') is-invalid @enderror" name="co_curricular_activities" value="{{ old('co_curricular_activities') }}" required autocomplete="co_curricular_activities">

                                @error('co_curricular_activities')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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

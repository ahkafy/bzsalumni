@extends('layouts.template')

@section('content')

    <div class="row justify-content-center mb-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>



    <div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"># My Profile</h4>
            <p class="card-description"> This is my <code>Basic Information</code>
            </p>
            <div class="table-responsive pt-3">
              <table class="table table-bordered table-striped table-hover">

                <tbody>
                  <tr>
                    <td>Name</td>
                    <td>{{ $userInfo->name }}</td>
                  </tr>

                  <tr>
                    <td>Email</td>
                    <td>{{ $userInfo->email }}</td>
                  </tr>

                  <tr>
                    <td>Phone</td>
                    <td>{{ $userInfo->phone }}</td>
                  </tr>

                  <tr>
                    <td>Address</td>
                    <td>{{ $userInfo->address }}</td>
                  </tr>

                  <tr>
                    <td>Date of Birth</td>
                    <td>{{ $userInfo->date_of_birth }}</td>
                  </tr>

                  <tr>
                    <td>Blood Group</td>
                    <td>{{ $userInfo->blood_group }}</td>
                  </tr>


                  <tr>
                    <td>Facebook</td>
                    <td>{{ $userInfo->facebook }}</td>
                  </tr>

                  <tr>
                    <td>Batch</td>
                    <td>{{ $userInfo->batch }}</td>
                  </tr>

                  <tr>
                    <td>Admission Year</td>
                    <td>{{ $userInfo->admission_year }}</td>
                  </tr>


                  <tr>
                    <td>Section</td>
                    <td>{{ $userInfo->section }}</td>
                  </tr>


                  <tr>
                    <td>SSC Result</td>
                    <td>{{ $userInfo->ssc_result }}</td>
                  </tr>


                  <tr>
                    <td>Other Activities or Professions</td>
                    <td>{{ $userInfo->co_curricular_activities }}</td>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>



    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">More Features are Under Development</h4>
            <p class="card-description"> Please wait <code>while we push more updates here.</code>
            </p>
          </div>
        </div>
      </div>
    </div>


@endsection

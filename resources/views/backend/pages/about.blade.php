@extends('backend.layouts.app')
@section('title', 'Edit About Page')

@section('content')

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Edit About Page</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit About</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
              <form action="{{ route('contactPage.update') }}" method="post"
                  enctype="multipart/form-data">
                  @csrf
                  @method('POST')
                  <div class="card">
                      <div class="card-header">
                          <h5 class="card-title">About Details</h5>
                      </div>
                      <div class="card-body">
                          <div class="card-text">
                              {{-- <div class="form-group row">
                                  <label class="form-label">Email</label>
                                  <div class="col-sm">
                                    <input type="text" class="form-control" name="email"
                                        value="{{old('email')}}">
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label class="form-label">Phone</label>
                                  <div class="col-sm">
                                    <input type="text" class="form-control" name="phone"
                                        value="{{old('phone')}}">
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label class="form-label">Address</label>
                                  <div class="col-sm">
                                    <input type="text" class="form-control" name="address"
                                        value="{{old('address')}}">
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label class="form-label">Zip/postal code</label>
                                  <div class="col-sm">
                                    <input type="text" class="form-control" name="postCode"
                                        value="{{old('postCode')}}">
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label class="form-label">City</label>
                                  <div class="col-sm">
                                    <input type="text" class="form-control" name="city"
                                        value="{{old('city')}}">
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label class="form-label">State</label>
                                  <div class="col-sm">
                                    <input type="text" class="form-control" name="state"
                                        value="{{old('state')}}">
                                  </div>
                              </div> --}}

                              <div class="form-group row">
                                  <label class="form-label">Description</label>
                                  <div class="col-sm">
                                    <textarea name="description"
                                        class="form-control">{{old('description')}}</textarea>
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label class="form-label">Image</label>
                                  <div class="col-sm">
                                      <input type="file" class="form-control" name="image">
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                      <div class="card-footer">
                        <div class="d-flex justify-content-end">
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </div>
                  </div>
              </form>
            </div>
        </div>

    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->

@endsection

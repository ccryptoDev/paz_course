@extends('backend.layouts.app')
@section('title', 'Add Course')

@push('styles')
<!-- Pick date -->
<link rel="stylesheet" href="{{asset('vendor/pickadate/themes/default.css')}}">
<link rel="stylesheet" href="{{asset('vendor/pickadate/themes/default.date.css')}}">
@endpush

@section('content')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Add Course</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('course.index')}}">Courses</a></li>
                    <li class="breadcrumb-item active"><a href="{{route('course.create')}}">Add Course</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic Info</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Status</label> 
                                        <select class="form-control" name="status">
                                            <option value="0" @if(old('status', 2) == 0) selected @endif>Pending</option>
                                            <option value="1" @if(old('status', 2) == 1) selected @endif>Inactive</option>
                                            <option value="2" @if(old('status', 2) == 2) selected @endif>Active</option>
                                        </select>
                                    </div>
                                </div>

                                <div style="width: 100%">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" name="courseTitle"
                                                value="{{old('courseTitle')}}">
                                        </div>
                                        @if($errors->has('courseTitle'))
                                        <span class="text-danger"> {{ $errors->first('courseTitle') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div style="width: 100%">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" name="courseDescription">{{old('courseDescription')}}</textarea>
                                        </div>
                                        @if($errors->has('courseDescription'))
                                        <span class="text-danger"> {{ $errors->first('courseDescription') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Category</label>
                                        <select class="form-control" name="categoryId">
                                            @forelse ($courseCategory as $c)
                                            <option value="{{$c->id}}" {{old('categoryId') == $c->id? 'selected' : ''}}>
                                                {{$c->category_name}}</option>
                                            @empty
                                            <option value="">No Category Found</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    @if($errors->has('categoryId'))
                                    <span class="text-danger"> {{ $errors->first('categoryId') }}</span>
                                    @endif
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Instructor</label>
                                        <select class="form-control" name="instructorId">
                                            @forelse ($instructor as $i)
                                            <option value="{{$i->id}}" {{old('instructorId') == $i->id?'selected':''}}>
                                                {{$i->name}}</option>
                                            @empty
                                            <option value="">No Instructor Found</option>
                                            @endforelse
                                        </select>
                                    </div>
                                    @if($errors->has('instructorId'))
                                    <span class="text-danger"> {{ $errors->first('instructorId') }}</span>
                                    @endif
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <select class="form-control" name="courseType">
                                            <option value="free" @if(old('courseType')=='free' ) selected @endif>Free
                                            </option>
                                            <option value="paid" @if(old('courseType')=='paid' ) selected @endif>Paid
                                            </option>
                                            <option value="subscription" @if(old('courseType')=='subscription' )
                                                selected @endif>Subscription-based</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Difficulty</label>
                                        <select class="form-control" name="courseDifficulty">
                                            <option value="beginner" @if(old('courseDifficulty')=='beginner' ) selected
                                                @endif>Beginner</option>
                                            <option value="intermediate" @if(old('courseDifficulty')=='intermediate' )
                                                selected @endif>Intermediate
                                            </option>
                                            <option value="advanced" @if(old('courseDifficulty')=='advanced' ) selected
                                                @endif>Advanced
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Price</label>
                                        <input type="number" class="form-control" name="coursePrice"
                                            value="{{old('coursePrice')}}">
                                    </div>
                                    @if($errors->has('coursePrice'))
                                    <span class="text-danger"> {{ $errors->first('coursePrice') }}</span>
                                    @endif
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Old Price</label>
                                        <input type="number" class="form-control" name="courseOldPrice"
                                            value="{{old('courseOldPrice')}}">
                                    </div>
                                    @if($errors->has('courseOldPrice'))
                                    <span class="text-danger"> {{ $errors->first('courseOldPrice') }}</span>
                                    @endif
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Subscription Price</label>
                                        <input type="number" class="form-control" name="subscriptionPrice"
                                            value="{{old('subscriptionPrice')}}">
                                    </div>
                                    @if($errors->has('subscriptionPrice'))
                                    <span class="text-danger"> {{ $errors->first('subscriptionPrice') }}</span>
                                    @endif
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Start From</label>
                                        <input type="date" class="form-control" name="start_from"
                                            value="{{old('start_from')}}">
                                    </div>
                                    @if($errors->has('start_from'))
                                    <span class="text-danger"> {{ $errors->first('start_from') }}</span>
                                    @endif
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Duration</label>
                                        <input type="number" class="form-control" name="duration"
                                            value="{{old('duration')}}">
                                    </div>
                                    @if($errors->has('duration'))
                                    <span class="text-danger"> {{ $errors->first('duration') }}</span>
                                    @endif
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Number of Lesson</label>
                                        <input type="number" class="form-control" name="lesson"
                                            value="{{old('lesson')}}">
                                    </div>
                                    @if($errors->has('lesson'))
                                    <span class="text-danger"> {{ $errors->first('lesson') }}</span>
                                    @endif
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Prerequisites</label>
                                        <textarea class="form-control" name="prerequisites"
                                            value="{{old('prerequisites')}}"></textarea>
                                    </div>
                                    @if($errors->has('prerequisites'))
                                    <span class="text-danger"> {{ $errors->first('prerequisites') }}</span>
                                    @endif
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Course Code</label>
                                        <input type="text" class="form-control" name="course_code"
                                            value="{{old('course_code')}}">
                                    </div>
                                    @if($errors->has('course_code'))
                                    <span class="text-danger"> {{ $errors->first('course_code') }}</span>
                                    @endif
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Thumbnail Video URL</label>
                                        <input type="text" class="form-control" name="thumbnail_video" value="{{old('thumbnail_video')}}">
                                    </div>
                                    @if($errors->has('thumbnail_video'))
                                    <span class="text-danger"> {{ $errors->first('thumbnail_video') }}</span>
                                    @endif
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Course Tag</label>
                                        <select class="form-control" name="tag">
                                            <option value="popular" @if(old('tag')=='popular' ) selected @endif>Popular</option>
                                            <option value="featured" @if(old('tag')=='featured' ) selected @endif>Featured
                                            </option>
                                            <option value="upcoming" @if(old('tag')=='upcoming' ) selected @endif>Upcoming
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Image</label>
                                    <div class="form-group fallback w-100">
                                        <input type="file" class="dropify" data-default-file="" name="image">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Thumbnail Image</label>
                                    <div class="form-group fallback w-100">
                                        <input type="file" class="dropify" data-default-file="" name="thumbnail_image">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Create</button>
                                    <button type="submit" class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

@push('scripts')
<!-- pickdate -->
<script src="{{asset('vendor/pickadate/picker.js')}}"></script>
<script src="{{asset('vendor/pickadate/picker.time.js')}}"></script>
<script src="{{asset('vendor/pickadate/picker.date.js')}}"></script>

<!-- Pickdate -->
<script src="{{asset('js/plugins-init/pickadate-init.js')}}"></script>
@endpush
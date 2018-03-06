@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bold">
                    <i class="fa fa-align-justify"></i> New E-library&nbsp;&nbsp;
                    <a href="{{url('/ebook')}}" class="btn btn-link btn-sm">Back To List</a>
                </div>
                <div class="card-block">
                    @if(Session::has('sms'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div>
                                {{session('sms')}}
                            </div>
                        </div>
                    @endif
                    @if(Session::has('sms1'))
                        <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div>
                                {{session('sms1')}}
                            </div>
                        </div>
                    @endif

                    <form 
                    	action="{{url('/ebook/save')}}" 
                    	class="form-horizontal" 
                    	method="post"
                    	enctype="multipart/form-data"  
                    >
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="title" class="control-label col-lg-2 col-sm-2">
                            	Title  <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-4 col-sm-4">
                                <input type="text" autofocus name="title" id="title" class="form-control" required>
                            </div>
                            <?php $categories = DB::table('categories')->where('active', 1)->get();?>
                            <label for="category" class="control-label col-lg-2 col-sm-2">
                            	Category  <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-4 col-sm-4">         
                                <select class="form-control" name="category" id="category">
                                    @<?php foreach ($categories as $cat): ?>
                                        <option value="{{$cat->id}}">{{ $cat->name }}</option>
                                    <?php endforeach ?>                    
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="order" class="control-label col-lg-2 col-sm-2">
                            	Order
                            </label>
                            <div class="col-lg-4 col-sm-4">
                                <input type="number" name="order" id="order" value="0" class="form-control">
                            </div>
                            <label for="featured_photo" class="control-label col-lg-2 col-sm-2">Feature Image <span class="text-info"></span> <span class="text-danger">*</span></label>
                            <div class="col-lg-4 col-sm-4">
                                <input type="file" name="featured_photo" required id="featured_photo" accept="image/*" onchange="loadFile(event)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file_name" class="control-label col-lg-2 col-sm-2">File</label>
                            <div class="col-lg-4 col-sm-4">
                                <input type="file" name="file_name" required id="file_name">
                            </div>
                            <label class="control-label col-lg-2 col-sm-2"></label>
                            <div class="col-md-2">
                                <img src="" id="img" width="100"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="control-label col-lg-2 col-sm-2">
                                Description
                            </label>
                            <div class="col-lg-10 col-sm-10">
                                <textarea name="description" id="description" rows="6" class="form-control ckeditor">
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-lg-2 col-sm-2">&nbsp;</label>
                            <div class="col-lg-6 col-sm-8">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-danger" type="reset">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    function loadFile(e){
        var output = document.getElementById('img');
        output.width = 150;
        output.src = URL.createObjectURL(e.target.files[0]);
    }
</script>
<script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
   var roxyFileman = "{{asset('fileman/index.html?integration=ckeditor')}}"; 

  CKEDITOR.replace( 'description',{filebrowserBrowseUrl:roxyFileman, 
                               filebrowserImageBrowseUrl:roxyFileman+'&type=image',
                               removeDialogTabs: 'link:upload;image:upload'});
</script> 
@endsection
@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')
<div class="container m-5 pt-2" >
        <form action="/postaddproduct" method="POST" class="bg-light" enctype="multipart/form-data">
          <h4 class="text-center  pb-3 pt-4 mb-1">Add Product</h4>
          <fieldset style="border: 2px solid grey; padding: 1% 0 2% 3%">
              <legend>Book Details</legend>
              @csrf
              <div class="form-group row">
                  <label class="col-sm-2">Book Name</label>
                  <div class="col-sm-8">
                      <input type="text" class="form-control mb-2 mr-sm-2" name="bookName" placeholder="Full book name">
                      @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('bookName') }}</span>
                      @endif
                  </div>
              </div>
              <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Author</label>
                
                <div class="col-sm-8">
                  <input type="text" class="form-control mb-2 mr-sm-2" name="author" id="inputauthor" placeholder="Author's name">
                  @if ($errors->has('author'))
                    <span class="text-danger">{{ $errors->first('author') }}</span>
                  @endif
                </div>
              </div>
                 
                <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">ISBN</label>
                    
                    <div class="col-sm-8">
                      <input type="text" class="form-control mb-2 mr-sm-2" name="isbn" id="inputisbn" placeholder="ISBN Number" >
                      @if ($errors->has('isbn'))
                        <span class="text-danger">{{ $errors->first('isbn') }}</span>
                      @endif
                    </div>
                  </div> 
                    
                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">Description</label>
                    
                    <div class="col-sm-8">
                        <textarea class="form-control mb-2 mr-sm-2" name="description" id="inputdescription" placeholder="Book overview" rows="5" cols="50">
                        </textarea>
                      <!-- <input type="text" class="form-control mb-2 mr-sm-2" name="description" id="inputdescription" > -->
                      @if ($errors->has('description'))
                        <span class="text-danger">{{ $errors->first('description') }}</span>
                      @endif
                    </div>
                  </div>
              <!-- book picture -->
              <input id="file-upload" type="file" name="fileUpload" accept="image/*" onchange="readURL(this);">
              <label for="file-upload" id="file-drag">
              <img id="file-image" height="150" width="150" style="border-radius:50%;"src="#" alt="Preview" class="hidden">
                  <div id="start" >
                      <i class="fa fa-download" aria-hidden="true"></i>
                      <div>Select a file or drag here</div>
                      
                      @if($message = Session::get('success'))
                      <strong>{{ $message }} </strong>
                      <div class="alert alert-success alert-block">
                        <img src="/image/{{ Session::get('path')}}" width="175" height="175">
                      </div>
                      @endif
                      <span class="text-danger">{{ $errors->first('fileUpload') }}</span>
                  </div>
              </label>
              <hr>
              <!-- button -->
              <div class="form-group row text-center mt-3">
                    <div class="col-sm-6" style="text-align:right;">
                      <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                  
                    <div class="col-sm-6"  style="text-align:left;">
                    <a href="/" class="btn btn-primary" >Cancel</a>                
                  </div>
                </div>
            </fieldset> <br>          
        </form>
      </div>
@endsection
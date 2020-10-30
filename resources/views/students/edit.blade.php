@extends('master')
@section('content')
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider my-4">
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Sturdy Themes</h3>
                            <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Ready to Publish</h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
       {{-- Main Content --}}
       <div class="container">
         <div class="row">
           <div class="col-lg-8 col-md-10 mx-auto">
            <form method="post" action="{{route('students.update',$student->id)}}">
              @csrf
              <div class="form-group row">
                <div class="col-md-6">
                  <label>Roll No:</label>
                  <input type="text" name="rollno" class="form-control @error ('rollno') is-invalid @enderror" 
                  value="{{old('roll no')}}" required>
                  @error('rollno')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                  </span>
                  @enderror
                </div>
                <div class="col-md-6">
                  <label>Name:</label>
                  <input type="text" name="name" class="form-control">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label>Email:</label>
                  <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                  value="{{old('email')}}">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{$messgae}}</strong>
                  </span>
                  @enderror
                </div>
                <div class="col-md-6">
                  <label>Phone no:</label>
                  <input type="text" name="phoneno" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <label>Address:</label>
                <textarea class="form-control" name="address"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="btnsumbit" value="Save" class="btn btn-info btn-block">
              </div>
            </form>
           </div>
         </div>
       </div>
       

@endsection
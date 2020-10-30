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
           <div class="col-md-12">
             <a href="{{route('students.create')}}" class="btn btn-info">Add New</a>
           </div>
         </div>
         <div class="col-lg-8 col-md-10 mx-auto">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phoneno</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @php
              $i=1;
              @endphp
              @foreach($student as $row)
              <tr>
                <td>{{$i++}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->phoneno}}</td>
                <td>
                  <a href="{{route('students.edit',$row->id)}}" class="btn btn-warning btn-sm">Edit</a>
                  <form method="post" action="{{route('students.destroy',$row->id)}}" onsubmit="return comfirm ('Are You Sure?')" class="d-inline-">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="btnsubmit" class="btn btn-danger" value="Delete">
                  </form>
                </td>
              </tr>
               @endforeach
            </tbody>
          </table>
           
           @endsection
     
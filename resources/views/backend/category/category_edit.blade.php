@extends('admin.admin_master')
@section('admin')
    

    <div class="container-full">
    <!-- Main content -->
      <section class="content">
        <div class="row">


{{-- Add Category Page --}}

<div class="col-12">

    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title">Add Category</h3>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive">
             
            <form method="post" action="{{route('category.update', $category->id)}}" >
                @csrf
                <input type="hidden" name="id" value="{{$category->id}}">
                   <div class="col-12">			

               

                        <div class="form-group">
                          <h5>Category English <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="text" value="{{$category->category_name_en}}" name="category_name_en" class="form-control" >
                            @error('category_name_en')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                      </div>

                      <div class="form-group">
                        <h5>Category Vietnam <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" value="{{$category->category_name_vi}}" name="category_name_vi" class="form-control">
                            @error('category_name_vi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Category Icon <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" value="{{$category->category_icon}}" name="category_icon" class="form-control">
                            @error('category_icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
             
                     
                      
                   <div class="text-xs-right">
                       <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update"></div>
               </form>

           </div>
       </div>
       <!-- /.box-body -->
     </div>

   </div>


        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>



@endsection
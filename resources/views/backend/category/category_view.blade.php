@extends('admin.admin_master')
@section('admin')
    

    <div class="container-full">
    <!-- Main content -->
      <section class="content">
        <div class="row">

          <div class="col-8">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Category List</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Category Icon</th>
                              <th>Category En</th>
                              <th>Category Vi</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($category as $item)
                          <tr>
                              <td><span><i class="{{$item->category_icon}} "></i></span></td>
                              <td>{{$item->category_name_en}}</td>
                              <td>{{$item->category_name_vi}}</td>
                              <td>
                                  <a href="{{route('category.edit', $item->id)}}" title="Edit Data" class="btn btn-info"><i class="fa fa-pencil"></i> </a>
                                  <a href="{{route('category.delete',$item->id)}}" title="Delete Data" id="delete" class="btn btn-danger" id="delete"><i class="fa fa-trash"></i> </a>
                              </td>
                          </tr>
                              
                          @endforeach
                          
                      </tbody>
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
     
          </div>
          <!-- /.col -->

{{-- Add Brand Page --}}

<div class="col-4">

    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title">Add Category</h3>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive">
             
            <form method="post" action="{{route('category.store')}}" >
                @csrf
                   <div class="col-12">			

               

                        <div class="form-group">
                          <h5>Category English <span class="text-danger">*</span></h5>
                          <div class="controls">
                              <input type="text"  name="category_name_en" class="form-control" >
                            @error('category_name_en')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                      </div>

                      <div class="form-group">
                        <h5>Category Vietnam <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text"  name="category_name_vi" class="form-control">
                            @error('category_name_vi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <h5>Category Icon <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text"  name="category_icon" class="form-control">
                            @error('category_icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
             
                     
                      
                   <div class="text-xs-right">
                       <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New"></div>
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
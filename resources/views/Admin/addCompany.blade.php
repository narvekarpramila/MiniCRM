<x-app-layout>
  <x-slot name="header">

  </x-slot>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

          <div class="container">
            <div class="row">
              <div class="offset-lg-2 col-lg-8 col-sm-8 col-8 border rounded main-section p-6">
                <h3 class="text-center text-inverse">Add Company</h3>
                <hr>
                <form  id="needs-validation" novalidate method="post" class="needs-validation" action="{{url('company/add')}}" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12">
                     <div class="form-group">
                      <label class="text-inverse" for="validationCustom01"> Name</label>
                      <input type="hidden" name="id" <?php if(isset($company) && !empty($company)){ ?> value="{{$company->id}}" <?php } ?>>
                      <input type="text" class="form-control" id="validationCustom01" placeholder="Name" name="name" required=""  <?php if(isset($company) && !empty($company)){ ?> value="{{$company->name}}" <?php } ?>>
                     @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                      <label class="text-inverse" for="validationCustom01">Email</label>
                      <input type="email" class="form-control" id="validationCustom01" placeholder="Email" required name="email" <?php if(isset($company) && !empty($company)){ ?> value="{{$company->email}}" <?php } ?>>
                      @if ($errors->has('email'))
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                      @endif
                    </div>  
                  </div>
                </div>


                <div class="row">
                  <div class="col-lg-12 col-sm-12 col-12">
                   <div class="form-group">
                    <label class="text-inverse" for="validationCustom01"> Logo </label>
                    <input type="file" class="form-control" id="validationCustom01"  name="logo" required>

                      <?php if(isset($company) && !empty($company)){ ?><img class="profile-pic" src="{{ asset('storage/app/public/' .$company->logo) }}"><?php } ?>
                    @if ($errors->has('logo'))
                      <span class="text-danger">{{ $errors->first('logo') }}</span>
                      @endif
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 col-sm-12 col-12">
                 <div class="form-group">
                  <label class="text-inverse" for="validationCustom01"> Website </label>
                  <input type="text" class="form-control" id="validationCustom01"  name="website" required <?php if(isset($company) && !empty($company)){ ?> value="{{$company->website}}" <?php } ?>>
                    @if ($errors->has('website'))
                      <span class="text-danger">{{ $errors->first('website') }}</span>
                      @endif
               </div>
             </div>
           </div>
           <div class="row">
            <div class="col-lg-12 col-sm-12 col-12 text-center">
               <input type="hidden" name="_token" value="{{ csrf_token() }}" />
              <button class="btn btn-info" type="submit">Submit</button>
            </div>
          </div>  
        </form>
      </div>
    </div>  
  </div>
</div>
</div>
</div>
</div>
</x-app-layout>

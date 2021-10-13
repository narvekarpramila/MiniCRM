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
                <h3 class="text-center text-inverse">Add Employee</h3>
                <hr>
                <form  id="needs-validation" novalidate method="post" class="needs-validation" action="{{url('employee/add')}}">
                  {{ csrf_field() }}
                  <div class="row">
                    <div class="col-lg-12 col-sm-12 col-12">
                     <div class="form-group">
                      <label class="text-inverse" for="validationCustom01">First Name</label>
                      <input type="hidden" name="id" <?php if(isset($employee) && !empty($employee)){ ?> value="{{$employee->id}}" <?php } ?>>
                      <input type="text" class="form-control" id="validationCustom01" placeholder="First Name" name="first_name" required <?php if(isset($employee) && !empty($employee)){ ?> value="{{$employee->first_name}}" <?php } ?>>
                      @if ($errors->has('first_name'))
                      <span class="text-danger">{{ $errors->first('first_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12 col-sm-12 col-12">
                   <div class="form-group">
                    <label class="text-inverse" for="validationCustom01"> Last Name </label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="Last Name" name="last_name" required  <?php if(isset($employee) && !empty($employee)){ ?> value="{{$employee->last_name}}" <?php } ?>>
                    @if ($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                    @endif
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-lg-12 col-sm-12 col-12">
                 <div class="form-group">
                  <label class="text-inverse" for="validationCustom01"> Company Name </label>
                  <select class="form-control" name="company_id">
                   <option value="">Select One</option>
                   <?php if(isset($employee) && !empty($employee)){ ?>
                  @if(isset($company_name) && !empty($company_name))
                  @foreach($company_name as $value)
                  <option value="{{ $value->id }}" @if($value->id == $employee->company_id) selected="selected" @endif>{{ $value->name }}</option>
                  @endforeach
                  @endif
                <?php } ?>
                 </select>
                 @if ($errors->has('company_id'))
                 <span class="text-danger">{{ $errors->first('company_id') }}</span>
                 @endif
               </div>
             </div>
           </div>

          
           <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
              <div class="form-group">
                <label class="text-inverse" for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required name="email"  <?php if(isset($employee) && !empty($employee)){ ?> value="{{$employee->email}}" <?php } ?>>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
              </div>  
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12 col-sm-12 col-12">
             <div class="form-group">
              <label class="text-inverse" for="validationCustom01"> Phone No. </label>
              <input type="text" class="form-control" id="validationCustom01" placeholder="Phone No." name="phone_no" required  <?php if(isset($employee) && !empty($employee)){ ?> value="{{$employee->phone_no}}" <?php } ?>>
              @if ($errors->has('phone_no'))
              <span class="text-danger">{{ $errors->first('phone_no') }}</span>
              @endif
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-12 text-center">
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

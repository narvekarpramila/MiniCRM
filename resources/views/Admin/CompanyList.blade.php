<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <div class="container">
                     <h3>User List <a href="{{url('company/add')}}" class="btn btn-info pull-right">Add Company</a></h3><hr>
                     <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Logo</th>
                                <th>Website</th>
                                <th width="300px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($data) && $data->count())
                            @foreach($data as $key => $value)
                            <tr>
                                <td>{{ $value->name }}</td>
                                 <td>{{ $value->email }}</td>
                                  <td> <img class="profile-pic" src="{{ asset('storage/app/public/' .$value->logo) }}"></td>
                                   <td>{{ $value->website }}</td>
                                <td>
                                    <a href="{{url('company/edit/'.$value->id)}}"><i class="fa fa-edit"></i></a>
                                     <a href="{{url('company/delete/'.$value->id)}}" class="button delete-confirm"><i class="fa fa-trash" style="color: red"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="10">There are no data.</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    {!! $data->links() !!}     

                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
</script>
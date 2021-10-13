<x-app-layout>
    <x-slot name="header">
      
    </x-slot>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <div class="row" style="text-align: center;margin-top: 40px;">
            <h2>How to Create Multi Language Website in Laravel - Online Web Tutor Blog</h2><br>
            <div class="col-md-2 col-md-offset-3 text-right">
                <strong>Select Language: </strong>
            </div>
            <div class="col-md-4">
                <select class="form-control Langchange">
                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                    <option value="es" {{ session()->get('locale') == 'es' ? 'selected' : '' }}>Spanish</option>
                </select>
            </div>
            <h1 style="margin-top: 80px;">{{ __('message.page_title') }}</h1>
            <h2 style="margin-top: 80px;">{{ __('message.welcome_message') }}</h2>
            <h3 style="margin-top: 80px;">{{ __('message.author_information') }}</h3>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script type="text/javascript">
    var url = "{{ route('LangChange') }}";
    $(".Langchange").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });
</script>
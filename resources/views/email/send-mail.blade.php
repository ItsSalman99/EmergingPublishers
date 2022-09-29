@component('mail::message')
# Email From {{ $data['name'] }} - {{ $data['contact'] }}
<hr style="border: 2px solid #eee;">

# Client Message:

{{ $data['message'] }}

Thanks,<br>
{{ $data['name'] }} - {{ $data['email'] }}
@endcomponent

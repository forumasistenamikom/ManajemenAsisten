{{-- resources/views/emails/password.blade.php --}}

{{ trans('message.passwordclickreset') }} <a href="{{ url('admin/password/reset/'.$token) }}">{{ url('admin/password/reset/'.$token) }}</a>
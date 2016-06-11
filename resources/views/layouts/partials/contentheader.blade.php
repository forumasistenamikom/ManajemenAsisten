<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Forum Asisten')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('') }}"><i class="fa fa-dashboard"></i> Dasbor {{-- trans('message.level') --}}</a></li>
        @if ($__env->yieldContent('contentheader_level') != '')
        <li class="active"> @yield('contentheader_level') {{-- trans('message.here') --}}</li>
        @endif
    </ol>
</section>
@extends('layouts.app')

@section('content')
    <h1>Analytics Dashboard</h1>
    
@endsection


@push('head_scripts')
    <script>
        // Set a global JS variable
        window.analyticsPage = 'Analytics Dashboard';
    </script>
@endpush


@push('body_end_scripts')
    <script>
        // Log the global variable to check if it works
        console.log('Logging from body_end_scripts:', window.analyticsPage);
    </script>
@endpush
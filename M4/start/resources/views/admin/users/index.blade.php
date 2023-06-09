
@extends('admin.layouts.master')

@section('title') Quan ly user  @endsection

@section('content')
    <h1>Admin user's Page</h1>
    Xin chao toi la: {{ $name }}
    Tong gio hang la: {{ $cart_total }}
    <ul>
    <?php foreach( $users as $user ): ?>
    <li><?= $user;?></li>
    <?php endforeach; ?>
    </ul>

    <ul>
    @foreach( $users as $user )
    <li>{{ $user }}</li>
    @endforeach
    </ul>
@endsection

@section('styles')
<style>
/* #content-wrapper {
    background-color:red !important;
}
</style> */
@endsection

@section('scripts')
<!-- <script>
alert(123);
</script> -->
@endsection

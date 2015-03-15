@extends('Home._main')

@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                课件列表
                <small>List</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                @foreach($ItemList as $item)
                    <p>
                        <a href="{{ $item->item_id }}" >{{ $item->item_title }}</a>
                    </p>
                @endforeach

                <div class="box-footer">

                </div><!-- /.box-footer-->
            </div><!-- /.box -->

        </section><!-- /.content -->
@endsection

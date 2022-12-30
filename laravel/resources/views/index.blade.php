@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="text-left">
                <h2 style="font-size:1rem;">文房具マスター</h2>
            </div>
            <div class="text-right">
            <a class="btn btn-success" href="{{route('bunbougu.create')}}">新規登録</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>name</th>
            <th>kakaku</th>
            <th>bunrui</th>
        </tr>
        @foreach ($bunbougus as $bunbougu)
        <tr>
            <td style="text-align:right">{{ $bunbougu->id }}</td>
            <td><a class="" href="{{ route('bunbougu.show', $bunbougu->id) }}">{{ $bunbougu->name }}</a></td>
            <td style="text-align:right">{{ $bunbougu->kakaku }}円</td>
            <td style="text-align:right">{{ $bunbougu->bunrui }}</td>
            <td style="text-align:center">
                <a class="btn btn-primary" href="{{route('bunbougu.edit', $bunbougu->id)}}">変更</a>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $bunbougus->links() !!}

@endsection

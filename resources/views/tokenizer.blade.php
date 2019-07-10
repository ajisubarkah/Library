@extends('layouts.default')
@section('content')
    <div>
        {{ $desc }}
    </div>
    <table class="table-bordered">
        <thead>
            <tr>
            <th style="padding: 5px 10px">#</th>
            <th style="padding: 5px 20px">Token</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tokens as $token => $val)
            <tr>
                <td class="text-center">{{ $val }}</td>
                <td class="text-center">{{ $token }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

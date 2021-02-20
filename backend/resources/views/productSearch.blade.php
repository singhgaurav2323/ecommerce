@extends('layouts.dashboardLayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12" style="padding: 40px;">
            {{ __('Matched results ...') }}
            <table class="table" id="table" style="margin: 20px 0px;">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Brand</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($results as $result)
                    <tr style="background-color: lightgray;">
                        <td><a href="{{ route('product', ['product' =>strval($result->asing) ]) }}"><img src="{{ explode("|", $result->images)[0] }}" alt="product image"></a></td>
                        <td>{{ $result->title }}</td>
                        <td>{{ $result->brand }}</td>
                        <td>{{ $result->price }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
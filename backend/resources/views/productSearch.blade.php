@extends('layouts.dashboardLayout')

@section('custom-style')
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12" style="padding: 40px;">
            {{ __('Matched results for ...')}} <b>{{ $keyword }}</b>
            <table class="table" id="table" style="margin: 20px 0px;">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Brand</th>
                        <th>Price</th>
                    </tr>
                </thead>
                @if($results->count() > 1)
                <tbody>
                    @foreach($results as $result)
                    <tr style="background-color: lightgray;">
                        <td><a href="{{ route('product', ['product' =>strval($result->asing) ]) }}"><img src="{{ explode("|", $result->images)[0] }}" alt="product image"></a></td>
                        <td>{{ $result->title }}</td>
                        <td>{{ $result->brand }}</td>
                        <td style="min-width:70px;">₹ {{ $result->price }}</td>
                    </tr>
                    @endforeach
                </tbody>

                <ul class="pagination" style="display: flex; justify-content: center; margin: 20px;">
                    <li style="transform: scale(1.9);" class="{{ ($results->currentPage() == 1) ? 'disabled' : '' }}">
                        <a class="scale-font" href="{{ $results->url($results->currentPage()-1) }}">&laquo;...</a>
                    </li>
                    @for($i = $results->currentPage(); $i <= $results->currentPage()+10; $i++)
                        <li class="{{ ($results->currentPage() == $i) ? 'active-bar' : '' }}">
                            <a href="{{ $results->url($i) }}">{{ $i }}</a>
                        </li>
                        @endfor
                        <li style="transform: scale(1.9);" class="{{ ($results->currentPage() == $results->lastPage()) ? ' disabled' : '' }}">
                            <a href="{{ $results->url($results->currentPage()+1) }}">...&raquo;</a>
                        </li>
                </ul>
                @endif
            </table>
        </div>
    </div>
</div>
@endsection
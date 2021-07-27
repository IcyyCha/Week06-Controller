@extends('layouts.main')

@section('title', $title)

@section('content')
<form action="{{ route('product-list') }}" method="get">
<div>
<label for="cmp-search">Search</label>
<input id="cmp-search" type="text" name="term" value="{{ $term }}" />
</div>
<div>
<button type="submit">Search</button>
</div>
</form>
<table>
<thead>{{-- Header column --}}</thead>
<tbody>
@foreach($products as $product)
<tr>
<td>{{ $product['code'] }}</td> <td>{{ $product['name'] }}</td>
<td>
@foreach($product['categories'] as $iCategory)
{{ $iCategory['name'] }}&nbsp;
@endforeach
</td>
<td class="number">{{ number_format($product['price'], 2) }}</td>
</tr>
@endforeach
</tbody>
</table>
@endsection
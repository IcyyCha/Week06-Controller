@extends('layouts.main')

@section('title', $title)

@section('content')
<form action="{{ route('category-list') }}" method="get">
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
@foreach($categories as $category)
<tr>
<td>{{ $category['code'] }}</td>
<td>{{ $category['name'] }}</td>
</tr>
@endforeach
</tbody>
</table>
@extends('layouts.dashboard')
@section('breadcrumbs')
    <nav aria-label="breadcrumbs">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item breadcrumbs__url font-weight-bold"><a href="/root/home">Dashboard</a></li>
            <li class="breadcrumbs__item text-dark-em" aria-current="page">Exhibitions</li>
        </ul>
    </nav>
@endsection
@section('content')
<div class="col-sm-12">
    <div class="form-group">
        <button class="btn btn--md btn--dark" data-toggle="modal" data-target="#exhibitionModal"><span> + New Exhibition</span></button>
    </div>
</div>
<div class="col-sm-12">
    @include('shared.error_message')
    @include('shared.success_message')
</div>
<div class="col-sm-12">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-head text-capitalize">
                <th>#</th>
                <th>Title</th>
                <th>Year</th>
                <th>Location</th>
                <th>Images</th>
                <th></th>
            </thead>
            <tbody>
                @forelse($exhibitions as $exhibition)
                <tr>
                    <td>{{ $exhibition->id }}</td>
                    <td>{{ $exhibition->title }}</td>
                    <td>{{ $exhibition->year }}</td>
                    <td>{{ $exhibition->location }}</td>
                    <td>{{ $exhibition->exhibition_items }}</td>
                    <td>
                        <a href="/root/exhibition/{{ $exhibition->id }}" class="btn btn-secondary">
                            Detail
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" > No record found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if (method_exists($exhibitions,'hasPages') && !empty($exhibitions->total()))
    <div>
        <div style="padding: 12px;">Showing
            <span>{{ $exhibitions->currentPage() == 1 ? '1' : ($exhibitions->perPage() * ($exhibitions->currentPage() - 1)) + 1 }}</span> -
            @if (($exhibitions->perPage() * $exhibitions->currentPage()) > $exhibitions->total())
                <span>{{ $exhibitions->total() }}</span> of
            @else
                <span>{{ $exhibitions->currentPage() == 1 ? $exhibitions->perPage() : ($exhibitions->perPage() * ($exhibitions->currentPage() - 1)) + count($exhibitions) }}</span> of
            @endif
            <span>{{ $exhibitions->total() }}</span>
        </div>
        {{ $exhibitions->withQueryString()->links() }}
    </div>
    @endif
</div>
@include('root.exhibition.add-exhibition-modal')
@endsection
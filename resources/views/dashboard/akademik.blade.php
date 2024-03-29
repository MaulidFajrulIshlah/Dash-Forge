@extends('dashboard.layouts.main')
@section ('title', 'PANDAY | Akademik')
@section('content')
    <!-- Route -->
    <h5 class="fw-bold" style="margin-top: 40px; font-weight: 400;">Akademik</h5>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Akademikasas</li>
    </ol>
    
    <div class="row g-3 mt-2 mb-4">
        <div class="col mx-2 bg-white rounded card content" id="wrapper-content">
            <h5 class="m-3 mt-4 mb-0 fw-bold text">Fakultas dan Prodi Universitas YARSI</h5>
            <hr>
            <div class="row g-0 mb-2">
                <div class="row">
                    <ul class="semester mb-2" id="fakultas">
                        @foreach ($prodi as $prodis)
                            @can('dekanat-tendik', $prodis->id_fakultas)
                                <li class="link">
                                    <a href="{{ route('akademik', ['unitID' => $prodis->id]) }}" class="text fs-5 text-center"><i class="fas fa-caret-right m-3"></i>{{ $prodis->fakultas->nama }} / {{ $prodis->nama }}</a>
                                </li>
                                    
                                @elsecan('admin')
                                    @if($prodis->id == 7)
                                        <li class="link">
                                            <a href="{{ route('akademik', ['categoryid' => 46]) }}" class="text fs-5 text-center"><i class="fas fa-caret-right m-3"></i>{{ $prodis->fakultas->nama }} / {{ $prodis->nama }}</a>
                                        </li>
                                        @continue
                                    @elseif($prodis->id == 9)
                                        <li class="link">
                                            <a href="{{ route('akademik', ['categoryid' => 74]) }}" class="text fs-5 text-center"><i class="fas fa-caret-right m-3"></i>{{ $prodis->fakultas->nama }} / {{ $prodis->nama }}</a>
                                        </li>
                                        @continue
                                    @endif
                                    <li class="link">
                                        <a href="{{ route('akademik', ['unitID' => $prodis->id]) }}" class="text fs-5 text-center"><i class="fas fa-caret-right m-3"></i>{{ $prodis->fakultas->nama }} / {{ $prodis->nama }}</a>
                                    </li>

                                @elsecan('prodi', $prodis->id)
                                    <li class="link">
                                        <a href="{{ route('akademik', ['unitID' => $prodis->id]) }}" class="text fs-5 text-center"><i class="fas fa-caret-right m-3"></i>{{ $prodis->fakultas->nama }} / {{ $prodis->nama }}</a>
                                    </li>
                            @endcan
                        @endforeach
                    </ul>
                </div>
            </div>
        </div><!-- /col bg-white -->
    </div>
@endsection
@extends('layouts.main')

@section('main')
    <main class="main">
        <!-- INTRO SECTION -->
        <div class="intro" id="index" >
            <div class="wrapper">
                <!-- title -->
                <h1 class="intro__title">Перечень юридических услуг</h1>
                <!-- sub title -->
                <p class="intro__subtitle" style="font-size: 18px; max-width: 950px;"> Перечень содержит список услуг, стоимость которых определяется по соглашению сторон в зависимости от объема работы, сроков выполнения, сложности работы, исходя из иных критериев оценки и указывается в договоре.</p>
				{{-- services --}}
                    @foreach ($categories as $category)
                        <h3 style="font-weight: bold; padding: 10px 0 10px 0;">{{$category->title}}</h3>
                        <ul>
                        @foreach ($services as $service)
                            @if ($service->category_id == $category->id)
                                    <li style="padding-right: 10px; width: 320px; list-style-type: square">{{$service->title}}</li>
                            @endif
                        @endforeach
                    @endforeach
				{{-- /services --}}
            </div>
        </div>
        <!-- /INTRO SECTION-->
    </main>
@endsection

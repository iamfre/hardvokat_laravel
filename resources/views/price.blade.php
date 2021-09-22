@extends('layouts.main')

@section('main')
    <main class="main">
        <!-- INTRO SECTION -->
        <div class="intro" id="index" >
            <div class="wrapper">
                <!-- title -->
                <h1 class="intro__title" style="font-size: 40px; line-height: 40px; max-width: 415px">Прайс лист юридических услуг</h1>
                <!-- sub title -->
                <p class="intro__subtitle" style="font-size: 18px"> Прайс-лист содержит примерную стоимость услуг в рублях. Окончательная стоимость может быть уменьшена или увеличена по соглашению сторон в зависимости от объема работы, сроков выполнения, сложности работы, исходя из иных критериев оценки и указывается в договоре.</p>
				{{-- TABLE --}}
                    @foreach ($categories as $category)
                        <p style="font-weight: bold; padding: 10px 0 10px 0">{{$category->title}}</p>
                        <table style="font-size: 18px">
                        @foreach ($services as $service)
                            @if ($service->category_id == $category->id)
                                <tr>
                                    <td style="padding-right: 10px; width: 320px">{{$service->title}}</td>
                                    <td style="text-align: right; padding-right: 10px; ">{{$service->price}}</td>
                                    {{-- <td style="padding-right: 10px;">рублей</td> --}}
                                </tr>
                            @endif
                        @endforeach
                        </table>
                    @endforeach
				{{-- /TABLE --}}
            </div>
        </div>
        <!-- /INTRO SECTION-->
    </main>
@endsection

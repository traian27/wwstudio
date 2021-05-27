@extends('layouts.layout')

@section('title', 'DVKS')


@section('content')

    @include('sections.header', ['menu' => $menu, 'logo' => $logo])

    <section class="header-section wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">

        <div class="container">
            <div class="row align-items-end">
                <div class="col-12">
                    <div class="section-container">
                        <div class="article">
                            <h1 class="title">
                               {{$displays['display_one']->title}}
                            </h1>
                            <span class="sub-title">{{$displays['display_one']->description}}</span>
                        </div>
                        <a href="{{$displays['display_one']->link_url}}" class="link">{{$displays['display_one']->link_title}} <i class="icon-right-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    @if(isset($displays['display_second']))
        <section class="index-section2" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img-wrapper">
                            <img src="public/storage/{{$displays['display_second']->image }}" alt="" class="wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-content">
                            <h2 class="section-title">{{ $displays['display_second']->title }}</h2>
                            {!! $displays['display_second']->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if(isset($displays['display_three']) && !empty($displays['display_three']))
        <section class="index-section5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="section-title center">3 Schritte zu Ihrem vertrieblichen Bildungsabschluss:</h2>
                    </div>
                    @foreach($displays['display_three'] as $d_t)
                    <div class="col-md-4">
                        <div class="item-wrap wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">
                            <div class="icon">
                                <span class="{{$d_t->icon}}"></span>
                            </div>
                            <p class="text">{{$d_t->title}}</p>
                            <a href="{{$d_t->link_url}}" class="btn active">{{$d_t->link_title}}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-wrapper  wow zoomIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="contact-info">
                            <img src="img/contact.jpg" alt="">
                            <div class="contact-block">
                                <p class="text">
                                    Klaus Schwarz freut sich auf Ihren Anruf unter Telefon:
                                </p>
                                <a href="tel:4961044099846"><strong>+49 6104 4099846</strong></a>
                            </div>
                        </div>
                        <form class="contact-form" onsubmit="send">
                            <h3 class="section-title">Nutzen Sie Ihre Chance!</h3>
                            <p class="text">
                                Wir helfen Ihnen gerne bei der Auswahl der für Sie passenden Weiterbildung.
                            </p>
                            <div class="form_field"><input type="text" id="name" name="name" placeholder="Ihr Name"></div>
                            <div class="form_field"><input type="email" id="email" name="email" placeholder="Ihre E-Mail"></div>
                            <div class="form_field"><input type="text" id="phone" name="phone" placeholder="Ihre Telefonnummer"></div>
                            <div class="form_field">
                                <textarea name="message" id="message" placeholder="Ihre Nachricht"></textarea>
                            </div>
                            <button class="btn active" id="send">Nachricht senden</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="index-section9">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title center wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">Für Sie interessante Veranstaltungen</h2>
                    <p class="text center subtitle wow slideInUp" data-wow-duration="1s" data-wow-delay="0s">
                        Trainings & Seminare
                    </p>

                        <div class="events_slider wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                            @foreach($displays['display_five'] as $d_f)
                            <div class="event_item">
                                <div class="event_item-wrapper">
                                    <strong class="event_item-category">{{$d_f->title}}</strong>
                                    <p class="event_item-title">{{$d_f->sub_title}}</p>
                                    <p class="event_item-description">
                                        {{$d_f->description}}
                                    </p>

                                    <div class="event_item-event-data">
                                        <div class="icon-wrap">
                                            <span class="icon-calendar"></span>
                                        </div>
                                        <span class="text">{{ date_format($d_f->created_at,"m.d.y") }}</span>
                                    </div>

                                </div>
                                <a href="{{$d_f->link_url}}" class="btn active">{{ $d_f->link_title }}</a>
                            </div>
                            @endforeach
                        </div>

                </div>
            </div>
        </div>
    </section>



    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-6 col-12 mob-col">
                    <p class="text">
                        Die starke Kooperation in der Ausbildung
                        von Verkaufs- und Vertriebsleitern
                    </p>
                    <div class="logos-wrap">
                        <a href=""><img src="public/storage/{{$logo['logo_f1'] ? $logo['logo_f1']->logo : ''}}" alt=""></a>
                        <a href=""><img src="public/storage/{{$logo['logo_f2'] ? $logo['logo_f2']->logo : ''}}" alt=""></a>
                    </div>
                    <strong class="strong-text">NUTZEN SIE IHRE CHANCE!</strong>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                    <div class="text label">Info</div>
                    <ul>
                        <li><a href="" class="text">Kontakt </a></li>
                        <li><a href="" class="text">Impressum</a></li>
                        <li><a href="" class="text">Datenschutz</a></li>
                        <li><a href="" class="text">AGB</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                    <div class="text label">WEITERBILDUNGSPROGRAMME</div>
                    <ul>
                        <li><a href="" class="text">Vertriebsleiterausbildung (IHK) </a></li>
                        <li><a href="" class="text">Geprüfter Vertriebsleiter (CEA)</a></li>
                        <li><a href="" class="text">Trainer für betriebliche Weiterbildung (IHK)</a></li>
                        <li><a href="" class="text">Management- und Führungstrainer (IHK)</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="text label">KONTAKT</div>
                    <ul>
                        @foreach($contact['contact'] as $c)
                            <li><a href="{{$c->url}}" class="text">{{$c->text}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12">
                    <div class="rights">
                        <div class="text">© DVKS 2019. Alle Rechte vorbehalten.</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<script>
    $( "#send" ).click(function(event) {
        event.preventDefault()
        let name = $('#name').val();
        let email = $('#email').val();
        let phone = $('#phone').val();
        let message = $('#message').val();
        $.ajax({
            url: '/send-form',
            method: 'post',
            data: {
                "_token": "{{ csrf_token() }}",
                name,
                email,
                phone,
                message
            },
            success: function(data){
                if(!data.error){
                    alert('Форма отправлена')
                }
            }
        });
    });
</script>
@stop

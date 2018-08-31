@extends('layouts.app')
@section('content')



        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="calendar">
                        <div class="common-top clearfix">
                            <div class="company-logo fl"><img src="{{ asset('public/images/chevron.jpg')}}" alt=""></div>
                            <h3 class="fl">Chevron</h3>
                            <a href="" class="add-link grey-color fr"><i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                        <div class="event-details">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>March 2018</h2>
                                    <div class="event-info brd-btm active">
                                        <div class="event-box">
                                            <h4>Customer Training Session <span class="event-date">March 2</span>
                                            </h4>
                                            <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i>Frankfurt</span>
                                        </div>
                                    </div>
                                    <div class="event-info brd-btm">
                                        <div class="event-box">
                                            <h4>Instatech <span class="event-date">March 12</span> </h4>
                                            <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i>NYC</span>
                                        </div>
                                    </div>
                                    <div class="event-info brd-btm">
                                        <div class="event-box">
                                            <h4>H&D Block <span class="event-date">March 13</span> </h4>
                                            <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i>Bentonville</span>
                                        </div>
                                    </div>
                                    <div class="event-info">
                                        <div class="event-box">
                                            <h4>All-hands QBR <span class="event-date">March 17</span> </h4>
                                            <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i>Virtual</span>
                                        </div>
                                    </div>
                                    <div class="event-info brd-btm">
                                        <div class="event-box no-brdr">
                                            <h4>Business Review </h4>
                                            <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i>Virtual</span>
                                        </div>
                                    </div>
                                    <div class="event-info brd-btm">
                                        <div class="event-box">
                                            <h4>Product Roadmap Session<span class="event-date">March 21</span>
                                            </h4>
                                            <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i>Miami</span>
                                        </div>
                                    </div>
                                    <div class="event-info brd-btm">
                                        <div class="event-box">
                                            <h4>Joint Demo for Halliburton<span class="event-date">March 28</span>
                                            </h4>
                                            <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i>Virtual</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2>April 2018</h2>
                                    <div class="event-info brd-btm">
                                        <div class="event-box">
                                            <h4>Customer Training Session <span class="event-date">March 2</span>
                                            </h4>
                                            <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i>Frankfurt</span>
                                        </div>
                                    </div>
                                    <div class="event-info brd-btm">
                                        <div class="event-box">
                                            <h4>Instatech <span class="event-date">March 12</span> </h4>
                                            <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i>NYC</span>
                                        </div>
                                    </div>
                                    <div class="event-info brd-btm">
                                        <div class="event-box">
                                            <h4>H&D Block <span class="event-date">March 13</span> </h4>
                                            <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i>Bentonville</span>
                                        </div>
                                    </div>
                                    <div class="event-info">
                                        <div class="event-box">
                                            <h4>All-hands QBR <span class="event-date">March 17</span> </h4>
                                            <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i>Virtual</span>
                                        </div>
                                    </div>
                                    <div class="event-info brd-btm">
                                        <div class="event-box no-brdr">
                                            <h4>Business Review </h4>
                                            <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i>Virtual</span>
                                        </div>
                                    </div>
                                    <div class="event-info brd-btm">
                                        <div class="event-box">
                                            <h4>Product Roadmap Session<span class="event-date">March 21</span>
                                            </h4>
                                            <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i>Miami</span>
                                        </div>
                                    </div>
                                    <div class="event-info brd-btm">
                                        <div class="event-box">
                                            <h4>Joint Demo for Halliburton<span class="event-date">March 28</span>
                                            </h4>
                                            <span class="event-place"><i class="fa fa-map-marker" aria-hidden="true"></i>Virtual</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="event-details">
                            <div class="row">

                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('javascript')
<script>
    $(document).ready(function () {
        var trigger = $('.hamburger'),
            overlay = $('.overlay'),
            isClosed = false;

        function buttonSwitch() {

            if (isClosed === true) {
                overlay.hide();
                trigger.removeClass('is-open');
                trigger.addClass('is-closed');
                isClosed = false;
            } else {
                overlay.show();
                trigger.removeClass('is-closed');
                trigger.addClass('is-open');
                isClosed = true;
            }
        }

        trigger.click(function () {
            buttonSwitch();
        });

        $('[data-toggle="offcanvas"]').click(function () {
            $('#wrapper').toggleClass('toggled');
        });
    });
</script>
@endsection

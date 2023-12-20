<section id="wsus__banner" style="background: url({{ asset(@$hero->background) }});background-size: cover;
    background-repeat: no-repeat;
    background-position: center;">
    <div class="wsus__banner_overlay">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-7">
                    <div class="wsus__banner_text">
                        <h1>{!! @$hero->title !!}</h1>
                        <p>{!! @$hero->sub_title !!}</p>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-5">
                    <form action="" method="GET">
                        <h3>Find the Best Place Title</h3>
                        <div class="wsus__search_area">
                            <input type="text" placeholder="What we are looking for?" name="search">
                        </div>
                        <div class="wsus__search_area">
                            <select class="select_2" name="category">
                                <option value="">categories</option>

                                    <option value="">teste</option>
                            </select>
                        </div>
                        <div class="wsus__search_area">
                            <select class="select_2" name="location" >
                                <option value="">location</option>

                                    <option value="">Joaçaba</option>
                            </select>
                        </div>
                        <div class="wsus__search_area m-0">
                            <button type="submit" class="read_btn">search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

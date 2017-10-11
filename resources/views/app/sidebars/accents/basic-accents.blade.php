@if( Request::is( 'art-project/*' ) )
    <script type="text/javascript" src="{{ asset( 'js/sidebars/artist-palette.js' ) }}"></script>
    <link href="{{ asset('css/sidebars/artist-palette.css') }}" rel="stylesheet">
    <div id="palette">
        <div class="">
            <p>Artist Palette</p>
            <label for="utensil_color">Utensil Color<br>
                <div>
                    <div id="utensil_color_red" class="color_red color_palette"></div>
                    <div id="utensil_color_orange" class="color_orange color_palette"></div>
                    <div id="utensil_color_yellow" class="color_yellow color_palette"></div>
                    <div id="utensil_color_green" class="color_green color_palette"></div>
                    <div id="utensil_color_blue" class="color_blue color_palette"></div>
                    <div id="utensil_color_purple" class="color_purple color_palette"></div>
                    <div id="utensil_color_white" class="color_white color_palette"></div>
                    <div id="utensil_color_black" class="color_black color_palette"></div>
                </div>
                <div>
                    <div id="utensil_color_red2" class="color_red2 color_palette"></div>
                    <div id="utensil_color_orange2" class="color_orange2 color_palette"></div>
                    <div id="utensil_color_yellow2" class="color_yellow2 color_palette"></div>
                    <div id="utensil_color_green2" class="color_green2 color_palette"></div>
                    <div id="utensil_color_blue2" class="color_blue2 color_palette"></div>
                    <div id="utensil_color_purple2" class="color_purple2 color_palette"></div>
                    <div id="utensil_color_white2" class="color_white2 color_palette"></div>
                    <div id="utensil_color_black2" class="color_black2 color_palette"></div>
                </div>
            </label>
        </div>

        <div>
            <label for="background_palette">Background Color<br>
                <div>
                        <div id="background_color_red" class="color_red change_background"></div>
                        <div id="background_color_orange" class="color_orange change_background"></div>
                        <div id="background_color_yellow" class="color_yellow change_background"></div>
                        <div id="background_color_green" class="color_green change_background"></div>
                        <div id="background_color_blue" class="color_blue change_background"></div>
                        <div id="background_color_purple" class="color_purple change_background"></div>
                        <div id="background_color_white" class="color_white change_background"></div>
                        <div id="background_color_black" class="color_black change_background"></div>
                    </div>
            </label>
        </div>

        <div>
            <label for="utensil_width">Utensil Broadness
                <input type="range" id="utensil_width" min="1" max="10" value="1">
                <div id="utensil_width_value"></div>
            </label>
        </div>

        <div>
            <div>
                <label for="utensil_action">
                    <div id="action_line" data-action="drawing_line" class="utensil_action">line</div>
                    <div id="action_square" data-action="drawing_rectangle" class="utensil_action">square</div>
                </label>
            </div>
        </div>

    </div>
    <div>
        <input id="current_utensil_action" type="hidden" value="drawing_line" >
        <input id="current_utensil_color" type="hidden" value="" >
        <input id="current_utensil_width" type="hidden" value="" >
    </div>
@endif

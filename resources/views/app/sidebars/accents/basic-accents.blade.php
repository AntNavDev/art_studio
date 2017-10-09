@if( Request::is( 'art-project/create' ) )
    <script type="text/javascript" src="{{ asset( 'js/sidebars/artist-palette.js' ) }}"></script>
    <div>
        <p>Artist Palette</p>
        <label for="color_palette">Utensil Color<br>
            <button type="button" id="utensil_color_blue" class="btn btn-primary">Blue</button><br>
            <button type="button" id="utensil_color_red" class="btn btn-danger">Red</button><br>
            <button type="button" id="utensil_color_green" class="btn btn-success">Green</button><br>
            <button type="button" id="utensil_color_black" class="btn">Black</button><br>
        </label>

        <br><br>
        
        <label for="utensil_width">Utensil Broadness
            <input type="range" id="utensil_width" min="1" max="10" value="1">
            <div id="utensil_width_value"></div>
        </label>

    </div>
    <div>
        <input id="current_utensil_color" type="hidden" value="" >
        <input id="current_utensil_width" type="hidden" value="" >
    </div>
@endif

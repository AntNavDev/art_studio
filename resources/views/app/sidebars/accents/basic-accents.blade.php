@if( Request::is( 'art-project/create' ) )
    <script type="text/javascript" src="{{ asset( 'js/sidebars/artist-palette.js' ) }}"></script>
    <div>
        <p>Artist Palette</p>
        <button type="button" id="utensil_color_blue" class="btn btn-primary">Blue</button><br>
        <button type="button" id="utensil_color_red" class="btn btn-danger">Red</button><br>
        <button type="button" id="utensil_color_green" class="btn btn-success">Green</button><br>
        <button type="button" id="utensil_color_black" class="btn">Black</button><br>

        <br><br>
        <button type="button" id="utensil_width_increase" class="btn">Increase Width</button><br>
        <button type="button" id="utensil_width_decrease" class="btn">Decrease Width</button><br>
    </div>
    <div>
        <input id="current_utensil_color" type="hidden" value="" >
        <input id="current_utensil_width" type="hidden" value="" >
    </div>
@endif

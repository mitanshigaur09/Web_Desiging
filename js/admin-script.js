jQuery(document).ready(function($) {
    var socialIndex = $('#social-repeater .repeater-item').length;

    $('#add-repeater-item').on('click', function() {
        var newItem = `<div class="repeater-item">
            <select name="my_theme_social_settings[social_links][${socialIndex}][icon]" class="fontawesome-picker">
                <option value="fa-facebook">Facebook</option>
                <option value="fa-twitter">Twitter</option>
                <option value="fa-instagram">Instagram</option>
                <!-- Add more FontAwesome icons as needed -->
            </select>
            <input type="text" name="my_theme_social_settings[social_links][${socialIndex}][url]" placeholder="URL">
            <button type="button" class="button remove-repeater-item">Remove</button>
        </div>`;
        
        $('#social-repeater').append(newItem);
        socialIndex++;
    });

    $('#social-repeater').on('click', '.remove-repeater-item', function() {
        $(this).closest('.repeater-item').remove();
    });
});

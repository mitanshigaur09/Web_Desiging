jQuery(document).ready(function($) {
    // Media Uploader
    var file_frame;
    $('#upload_footer_logo_button').on('click', function(event) {
        event.preventDefault();

        if (file_frame) {
            file_frame.open();
            return;
        }

        file_frame = wp.media.frames.file_frame = wp.media({
            title: 'Select or Upload Footer Logo',
            button: {
                text: 'Use this logo',
            },
            multiple: false
        });

        file_frame.on('select', function() {
            var attachment = file_frame.state().get('selection').first().toJSON();
            $('#footer_logo').val(attachment.url);
            $('#footer_logo_preview').attr('src', attachment.url).show();
        });

        file_frame.open();
    });

    $('#upload_header_logo_button').on('click', function(event) {
        event.preventDefault();

        if (file_frame) {
            file_frame.open();
            return;
        }

        file_frame = wp.media.frames.file_frame = wp.media({
            title: 'Select or Upload Header Logo',
            button: {
                text: 'Use this logo',
            },
            multiple: false
        });

        file_frame.on('select', function() {
            var attachment = file_frame.state().get('selection').first().toJSON();
            $('#header_logo').val(attachment.url);
            $('#header_logo_preview').attr('src', attachment.url).show();
        });

        file_frame.open();
    });

    // Color Picker
    $('.my-color-field').wpColorPicker();

    // Repeater functionality
    $('#repeater-add').click(function() {
        var count = $('.repeater-item').length;
        var html = '<div class="repeater-item">' +
                   '<input type="text" name="my_theme_header_settings[repeater_items][' + count + '][button_text]" placeholder="Button Text">' +
                   '<input type="text" name="my_theme_header_settings[repeater_items][' + count + '][button_link]" placeholder="Button Link">' +
                   '<button class="repeater-remove">Remove</button>' +
                   '</div>';
        $('.repeater-wrapper').append(html);
    });

    $(document).on('click', '.remove-repeater-item', function() {
    $(this).parent('.repeater-item').remove();
});



});



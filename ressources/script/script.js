$(document).ready(function () {
    $('#search').keyup(function () {
        let input = $('#search').val();
        if (input.length > 0) {
            $.ajax({
                url: 'first.php',
                method: 'POST',
                data: {
                    search: 1,
                    input: input
                },
                success: function (data) {
                    $('#response').html(data)
                },
                dataType: 'text'
            });
        }
    });
    $('#search').keyup(function () {
        let input = $('#search').val();
        if (input.length > 0) {
            $.ajax({
                url: 'recherche.php',
                method: 'POST',
                data: {
                    search: 1,
                    input: input
                },
                success: function (data) {
                    $('#response').html(data)
                },
                dataType: 'text'
            });
        }
    });
    $('#search').keyup(function () {
        let input = $('#search').val();
        if (input.length > 0) {
            $.ajax({
                url: 'element.php',
                method: 'POST',
                data: {
                    search: 1,
                    input: input
                },
                success: function (data) {
                    $('#response').html(data)
                },
                dataType: 'text'
            });
        }
    });
    $(document).on('click', 'li', function () {
        let restaurant = $(this).text();
        $('#search').val(restaurant);
        $('#response').html("");
    })
})
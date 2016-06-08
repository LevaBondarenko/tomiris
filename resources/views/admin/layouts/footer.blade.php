<script>
    $('.link').on('click', function() {
        $.get('admin/news/update/15', function(data) {
            console.log(data);
        });
    });

    $('#getRequest').click(function(){
        $.get('getRequest', function(data){
            console.log(data);
            $('#getRequestData').append(data)

        })


    })

    $('.dropdown_pres').click(function () {
        var id = $(this).attr('id');
        var new_id = id + '_ul';
        $('#' + new_id).toggle('fast');
    });
</script>
</body>
</html>
$(document).ready(function(){

    $('.modal-content').attr('style', 'background: #ffffff;');

    var forms=[
        $('#contForm'),
        $('#mailForm')
    ];

    //form validation
    for (var i in forms){

        forms[i].on('submit',function(){

            var form = $(this),
                url = form.attr("action"),
                type = form.attr("method"),
                data = {};

            var serializedData = form.serialize();

            $.ajax({
                dataType: "json",
                url:url,
                type:type,
                data:serializedData,
                success: function(response){
                    result(response.success,form);
                    return false;
                }
            });

            return false;

        });
        function result(response,form){
            console.log(response);

            $('#contactUs').modal('hide');

            $('#thanks').modal('show', 2500);

            function thanks() {
                $('#thanks').modal('hide');
            }

            setTimeout(thanks, 4000);

            form.find("span.success").remove();
            //form.prepend( "<span class='success'>"+text+"</span>" );

            $(':input','form')
                .not(':button, :submit, :reset, :hidden')
                .val('')
                .removeAttr('checked')
                .removeAttr('selected');
        }
    }
});
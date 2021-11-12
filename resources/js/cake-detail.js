$(document).ready(function() {
    //Button Cancel
    $(document).on('click', '.btn-cancel',function(){
        $('#form-add-area').addClass("hidden");
        $('#form-edit-area').addClass("hidden");
    });
    //Button Add new cake
    $(document).on('click', '.btn-add',function(){
        $('#form-add-area').removeClass("hidden");
    });
    //Button edit
    $(document).on('click', '.btn-edit',function(){
        //$("input[name='radio-check']:checked").val();
        var data = [];
        $(".radio-check").each(function(){
            var id = $(this).attr("id");
            if($('#'+id).is(":checked")){
                var parent = $('#'+id).closest('.parent');
                console.log(parent);
                data = {
                    id : parent.children('.info_id').val(),
                    name : parent.children('.info_name').text(),
                    flavor: parent.children('.info_flavor').text(),
                    price : parent.children('.info_price').text(),
                    quantity : parent.children('.info_quantity').text(),
                    desc : parent.children('.info_desc').text()
                };
            }
        });
        //console.log(data.id);
        $('#input-id').val(data.id);
        $('#input-name').val(data.name);
        $('#input-flavor').val(data.flavor);
        $('#input-price').val(data.price);
        $('#input-quantity').val(data.quantity);
        $('#input-desc').val(data.desc);
        $('#id-delete').val(data.id);
        $('#form-edit-area').removeClass("hidden");
    });

    
});


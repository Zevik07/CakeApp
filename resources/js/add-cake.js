$(document).ready(function() {
    //Button Cancel
    $(document).on('click', '.btn-cancel',function(){
        $('#form-area').addClass("hidden");
    });
    //Button Add new cake
    $(document).on('click', '.btn-add',function(){
        $('#form-area').removeClass("hidden");
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
                    name : parent.children('.info_name').text(),
                    flavor: parent.children('.info_flavor').text(),
                    price : parent.children('.info_price').text(),
                    quantity : parent.children('.info_quantity').text(),
                    desc : parent.children('.info_desc').text()
                };
            }
        });
        console.log(data.name);
        $('#input-name').val(data.name);
        $('#input-flavor').val(data.flavor);
        $('#input-price').val(data.price);
        $('#input-quantity').val(data.quantity);
        $('#input-desc').val(data.desc);
        $('#form-area').removeClass("hidden");
    });
});


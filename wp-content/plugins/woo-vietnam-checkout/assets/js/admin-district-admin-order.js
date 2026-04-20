(function($){
    $(document).ready(function(){
        var $defaultSetting = {
            formatNoMatches: woocommerce_district_admin.formatNoMatches,
        };
        var loading_billing = loading_shipping = false;
        //billing
        $('#_billing_state').select2($defaultSetting);
        $('#_billing_city').select2($defaultSetting);

        $('body').on('select2:select select2-selecting', '#_billing_state',function(e){
            $( "#_billing_city option" ).val('');
            var matp = e.val;
            if(!matp) matp = $( "#_billing_state option:selected" ).val();
            if(matp && !loading_billing){
                loading_billing = true;
                $.ajax({
                    type : "post",
                    dataType : "json",
                    url : woocommerce_district_admin.ajaxurl,
                    data : {action: "load_diagioihanhchinh", matp : matp},
                    context: this,
                    beforeSend: function(){
                        $("#_billing_city").html('').select2();
                        var newState = new Option('Loading...', '');
                        $("#_billing_city").append(newState);
                    },
                    success: function(response) {
                        loading_billing = false;
                        $("#_billing_city").html('').select2();
                        var newState = new Option('Chọn xã/phường/thị trấn', '');
                        if(response.success) {
                            var listQH = response.data;
                            newState = new Option('Chọn quận/huyện', '');
                            $("#_billing_city").append(newState);
                            $.each(listQH,function(index,value){
                                newState = new Option(value.name, value.maqh);
                                $("#_billing_city").append(newState);
                            });
                        }
                    }
                });
            }
        });
        //shipping
        $('#_shipping_state').select2($defaultSetting);
        $('#_shipping_city').select2($defaultSetting);

        $('body').on('select2:select select2-selecting', '#_shipping_state', function(e){
            $( "#_shipping_city option" ).val('');
            var matp = e.val;
            if(!matp) matp = $( "#_shipping_state option:selected" ).val();
            if(matp && !loading_shipping){
                loading_shipping = true;
                $.ajax({
                    type : "post",
                    dataType : "json",
                    url : woocommerce_district_admin.ajaxurl,
                    data : {action: "load_diagioihanhchinh", matp : matp},
                    context: this,
                    beforeSend: function(){
                        $("#_shipping_city").html('').select2();
                        var newState = new Option('Loading...', '');
                        $("#_shipping_city").append(newState);
                    },
                    success: function(response) {
                        loading_shipping = false;
                        $("#_shipping_city").html('').select2();
                        var newState = new Option('Chọn xã/phường/thị trấn', '');
                        if(response.success) {
                            var listQH = response.data;
                            var newState = new Option('Chọn quận/huyện', '');
                            $("#_shipping_city").append(newState);
                            $.each(listQH,function(index,value){
                                var newState = new Option(value.name, value.maqh);
                                $("#_shipping_city").append(newState);
                            });
                        }
                    }
                });
            }
        });
    });
})(jQuery);
$(document).ready(function() {

//    jQuery.validator.addMethod("tel", function(value, element) {
//        result = $("tel").val().charAt(0) !== '(' || $("#tel").val().charAt(1) !== '+' || $("#tel").val().charAt(4) !== (')');
//        if (result) {
//            element.value = "";
//            var validator = this;
//            setTimeout(function() {
//                validator.blockFocusCleanup = true;
//                element.focus();
//                validator.blockFocusCleanup = false;
//            }, 1);
//        }
//        return result;
//    }, "Your password must be at least 6 characters long and contain at least one number and one character.");

//    jQuery.validator.classRuleSettings.tel = { tel: true };

    jQuery.validator.addMethod("checkSpecial", function(value, element) {
        return this.optional(element) || /^[A-Za-z0-9ก-๙., ()-/_]{0,1024}$/.test(value);
    }, "No Special Character");
    
    
    






    //            function function3() {
//                type = $("#form-type").val();
//                tel = $("#tel").val();
//                tel1 = tel + "";
//                cpn_fax = $("#cpn_fax").val();
//
//                if (tel.length < 14) {
//                    alert("Telephone Number must be more than 8 character");
//                    $("#tel").focus().freeze();
//                }
//                if (tel1.charAt(0) !== '(' || tel1.charAt(1) !== '+' || tel1.charAt(4) !== ')') {
//                    alert("Invalid Telephone Number");
//                    $("#tel").focus().freeze();
//                }
//
//                if ($("#cpn_tel").val().length < 14) {
//                    alert($("#cpn_tel").length);
//                    $("#cpn_tel").focus().freeze();
//                }
//                if ($("#cpn_tel").val().charAt(0) !== '(' || $("#cpn_tel").val().charAt(1) !== '+' || $("#cpn_tel").val().charAt(4) !== (')')) {
//                    alert("Invalid Company Telephone Number");
//                    $("#cpn_tel").focus().freeze();
//                }
//
//                if (cpn_fax.length < 14) {
//                    alert(" Fax Number must be more than 8 character");
//                    $("cpn_fax").focus().freeze();
//                }
//                if (cpn_fax.charAt(0) !== '(' || cpn_fax.charAt(1) !== '+' || cpn_fax.charAt(4) !== (')')) {
//                    alert("Invalid Fax Number");
//                    $("cpn_fax").focus().freeze();
//                }
//
//                if ($("#cpn_regis").val() !== "") {
//                    if ($("#cpn_regis").val().length !== 13) {
//                        alert("Invalid Company Registeration Number");
//                        $("#cpn_regis").focus().freeze();
//                    }
//                }
//
//                if ($("#cpn_elec_regis").val() !== "") {
//                    if ($("#cpn_elec_regis").val().length !== 13) {
//                        alert("Invalid Company Electronic Registration Number");
//                        $("#cpn_elec_regis").focus().freeze();
//                    }
//                }
//
//                if ($("#cpn_tax_number").val() !== "") {
//                    if ($("#cpn_tax_number").val().length !== 13) {
//                        alert("Invalid Personal Tax Number");
//                        $("#cpn_tax_number").focus().freeze();
//                    }
//                }
//
//                if (type === "default") {
//                    alert("กรุณาเลือกประเภทผู้สมัคร");
//                    $("#form-type").focus().freeze();
//                }
//
//            }

});
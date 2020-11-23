$(function () {
    var num1="",optt="",result1="";
    $(".click").click(function () {
        num1 += $(this).val();
        $("#dis").val(num1);
    });
    $(".oprt").click(function () {
        var b = $(this).val();
        document.getElementById("dis").value="";
        $.ajax({
            url: "calci.php",
            type: "POST",
            data: {number:num1,opt:optt,result:result1},
            success: function (result) {
                result1=result;
                optt=b;
                num1="";
                $("#dis").val(result1);
            },
            error: function () {
                alert("error");
            }
        });
    })
    $(".clear").click(function(){
        $("#dis").val("");
        location.reload();
    })
});
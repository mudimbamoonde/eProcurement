$(document).ready(function () {
//Submit  Transaction
    $("#submitTransaction").click(function(event) {
        event.preventDefault();
        $.ajax({
            url:"AddData/process.php",
            method:"POST",
            data:$("form").serialize(),
            success: function(data){
                $("#message").html(data);
            }
        })
    });
//Admin Add
    $("#adminCreate").click(function(event) {
        event.preventDefault();
        $.ajax({
            url:"AddData/admincreate.php",
            method:"POST",
            data:$("form").serialize(),
            success: function(data){
                $("#Admin_msg").html(data);
            }
        })
    });

    //Edit Transaction
    $("#EditTran").click(function(event) {
        event.preventDefault();
        var paye_name = $("#paye_name").val();
        var cheqNum = $("#cheqNum").val();
        var details = $("#details").val();
        var amount = $("#amount").val();
        var accountCode = $("#accountCode").val();
        var tranID  = $(this).attr("tranID");
        //  alert(tranID);
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{EditTran:1,paye_name:paye_name,cheqNum:cheqNum,details:details,amount:amount,accountCode:accountCode,tranID:tranID},
            success: function(data){
                $("#message").html(data);
            }
        })
    });



//Passed Transaction
    $("#PassedTransaction").click(function(event) {
        event.preventDefault();
        //alert("You Pressed Me");
        $.ajax({
            url:"AddData/passedTran.php",
            method:"POST",
            data:$("form").serialize(),
            success: function(data){
                $("#message").html(data);
                Window.reload(true);
            }
        });
    });


    Transaction();
    function Transaction() {
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{SelectTransaction:1},
            success:function (data) {
                $("#selectedTran").html(data);
            }
        });

    }
    userView();
    function userView(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{viewUser:1},
            success:function (data){
                $("#ViewUsers").html(data);
            }
        });
    }

    Rejected();
    function Rejected() {
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{SelectRejTransaction:1},
            success:function (data) {
                $("#selectedRTran").html(data);
            }
        });

    }
    UnproccedTransaction();

    function UnproccedTransaction() {
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{unproceed:1},
            success:function(data) {
                $("#UnproceedTran").html(data);
            }
        });

    }

    Processed();
    function Processed() {
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{processed:1},
            success:function(data) {
                $("#processed").html(data);
            }
        });

    }
    // ProceeingTransaction();
    // function ProceeingTransaction() {
    //     var id = $(this).attr("referenceIA");
    //     $.ajax({
    //         url:"action.php",
    //         method:"POST",
    //         data:{processing:1,AccCode:id},
    //         success:function(data) {
    //             $("#processing").html(data);
    //         }
    //     });
    //
    // }

    //change status of user
    $("body").delegate("#deleteTran","click",function(){
        var id = $(this).attr("deleteItem");
        //alert("You have clicked on " +id);
        $.ajax({
            url : "action.php",
            method : "POST",
            data:{Delete:1,ItemID:id},
            success:function (data) {
                //alert(data);
                $("#notifica").html(data);
                //alert(data);
                Rejected();
                Transaction();
            }
        });
    });
    // id='transferIA' referenceIA='$accountCode'
//change
    $("body").delegate("#transferIA","click",function(){
        var id = $(this).attr("referenceIA");
        //alert("You have clicked on " +id);
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{referenceTrans:1,referID:id},
            success:function (data) {
                //alert(data);
                $("#notifica").html(data);
                //alert(data);
                //Transaction();
                setTimeout(200,window.location.href = "AccountTransaction.php");
            }
        });
    });

    $("body").delegate("#ProcessTransaction","click",function(){
        var accontCod = $(this).attr("accontCod");
        // alert("You have clicked on " +accontCod);
        window.location.href = "process.php?AccCode="+accontCod ;
    });

    $("body").delegate("#rejectTrans","click",function(){
        var reID = $(this).attr("reject");
        // alert("Transaction Rejected " +reID);
        //alert("Transaction Rejected");
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{RejectTransaction:1,refID:reID},
            success:function (data) {
                //alert(data);
                $("#message").html(data);
                //alert(data);
                setTimeout(1,10000, window.location.href = "AccountTransaction.php");

            }
        });

    });
    $("body").delegate("#moreD","click",function(){
        var detailsID = $(this).attr("detailsID");
        // $("#displayInformation").html(detailsID);
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{DetailedTransaction:1,FileID:detailsID},
            success:function (data) {
                //alert(data);
                $("#displayInformation").html(data);

            }
        });

    });



});
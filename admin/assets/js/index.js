// alert("Heesh");
$(document).on("click","#viewMenuBtn", function () {
    // alert("hello");
    
    // return false;
    var menuId = $(this).val();
    
    $.ajax({
        
        type: "GET",
        url: "backEnd/viewMenu.php?menuid=" + menuId,
        contentType: false,
        processData: false,
        success: function (response) {
            // alert("some");
            
            var res = $.parseJSON(response);
            if(res.status == 200){
                // alert("good");
                $(".menuId").val(res.data.id);
                $(".menuName").text(res.data.menuName);
                $(".menuDescription").val(res.data.description);
                $('#viewMenuModal').modal('show');
            }
            
        }
    });
});



$(document).on("click","#editMenuBtn", function () {
    
    
    // return false;
    let menuId = $(this).val();
    $.ajax({
        
        type: "GET",
        url: "backEnd/viewMenu.php?menuid=" + menuId,
        contentType: false,
        processData: false,
        success: function (response) {
            // alert("some");
            let res = $.parseJSON(response);
            if(res.status == 200){
                
                $(".menuid").val(res.data.id);
                $(".menuname").val(res.data.menuName);
                $(".menudescription").val(res.data.description);
                $('#editMenuModal').modal('show');
                // alert("good");
            }
            
        }
    });
});















// ********************* Programme Pae ***************************!SECTION
$(document).on("click", "#viewProgrammeBtn", function () {
    
    let ProgrammeId = $(this).val();
    $.ajax({
        type: "GET",
        url: "backEnd/programme.php?programmeId=" + ProgrammeId,
        processData: false,
        contentType:false,
        success: function (response) {
            let res = $.parseJSON(response);
     
            if(res.status == 200){
                $(".programmeId").val(res.data.id);
                $(".programmeName").val(res.data.programmeName);
                // $(".file").text(window.location=res.data.fileName);
                // $(".file").html("<?php include('mphilprogramme.html') ?>");
                $(".file").html(res.fileCont);

                // alert();
                $('#viewProgrammeModal').modal('show');
            }
        }
    });
    
});













// ********************* Programme Pae ***************************!SECTION
$(document).on("click", "#editProgrammeBtn", function () {
    
    let ProgrammeId = $(this).val();
    // alert("")
    $.ajax({
        type: "GET",
        url: "backEnd/programme.php?programmeId=" + ProgrammeId,
        processData: false,
        contentType:false,
        success: function (response) {
            let res = $.parseJSON(response);
            
            // $('#editProgrammeModal').modal('show');
            if(res.status == 200){
                $(".programmeId").val(res.data.id);
                $(".programmeName").val(res.data.programmeName);
                // $(".file").text(window.location=res.data.fileName);
                // $(".file").html("<?php include('mphilprogramme.html') ?>");
                // $(".file2").html(res.fileCont);
                $('.file2').summernote('code',res.fileCont);
                // alert();
                $('#editProgrammeModal').modal('show');
            }
        }
    });
    
});










$(document).on("click", ".viewPersonBtn", function () {
    
    $("#viewPersonModal").modal("show");
});
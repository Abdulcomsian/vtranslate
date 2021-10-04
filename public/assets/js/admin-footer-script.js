
/**************** top right drop donw menu open close function */

$(document).ready(function(){
    $('#freelancerTable').DataTable();
    $('#agencyTable').DataTable();
    $("#dashboard-header .dashboard-header-right .profileDiv").click(function(){
        if($("#dashboard-header .dashboard-header-right .profileDiv .dropDown").css("display")=="block"){
            $("#dashboard-header .dashboard-header-right .profileDiv .dropDown").removeClass("show")
        } else{
            $("#dashboard-header .dashboard-header-right .profileDiv .dropDown").addClass("show")
        }
    })
    $("#mainSideBar .menuButton span").click(function(){
      
        if($(".mobileMenu").css("display")=="block"){
            $(".mobileMenu").removeClass("show")
        } else{
            $(".mobileMenu").addClass("show")
        }
    })
    $(".mobileMenu .openbtn").click(function(){
            $(".mobileMenu").removeClass("show")
    })

    var pageUrl = location.pathname.split("/")[1];
       $('#mainSideBar ul li a').removeClass('active');
       $('#mainSideBar ul li a').each(function () {
            link = $(this);
            console.log(link)
            value=link.attr("href").split("/") 
            console.log(value)
            if (value[3] == pageUrl) {
               link.addClass("active");
            }
       });
})
